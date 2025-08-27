@extends('layouts.main_app')
@section('content')
    <form id="surveyForm" method="POST" action="{{ route('ideas.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" id="cover_image_input" name="cover_image" accept="image/*" style="display: none;" />

        <div class="card">
            <div id="dynamicTitle"></div>
            <div id="progressBar">
                <div id="progressFill"></div>
                <span id="progressText">0%</span>
            </div>
            <h2 id="questionTitle"></h2>
            <div id="fieldHolder"></div>
            <div class="controls" id="controls"></div>
            <div class="controls" id="refineContainer"></div>
            <div id="aiResult"></div>
        </div>
    </form>
@endsection

@push('scripts')
    <script>
        const placeholderMap = {
            ideaName: "Name it something creative!",
            oneLine: "What's the elevator pitch?",
            story: "Go wild here! Share all the details..."
        };
        const genericPlaceholder = "Enter Text Here…";

        const steps = [{
                id: "ideaName",
                name: "idea_name",
                label: "What is the name of this idea or vision?",
                required: true
            },
            {
                id: "oneLine",
                name: "idea_sentence",
                label: "Describe your idea in a sentence.",
                required: true
            },
            {
                id: "story",
                name: "full_story",
                label: "What is the full story behind this idea?",
                required: true
            },
            {
                id: "challenge",
                name: "challenge",
                label: "What challenge or opportunity does this idea tackle?"
            },
            {
                id: "impact",
                name: "impact",
                label: "How could this idea make life better, brighter, or more interesting for others?"
            },
            {
                id: "spark",
                name: "spark",
                label: "What sparked this idea?"
            },
            {
                id: "unique",
                name: "unique",
                label: "What makes this idea stand out from the crowd?"
            },
            {
                id: "resources",
                name: "resource",
                label: "What resources, tools, or skills would someone need?"
            },
            {
                id: "challenges",
                name: "challenges",
                label: "What challenges might pop up?"
            },
            {
                id: "collaboration",
                name: "collaboration",
                label: "How could others help?"
            },
            {
                id: "firstStep",
                name: "first_step",
                label: "What is the first step?"
            },
            {
                id: "coverImage",
                name: "cover_image",
                label: "Got any visuals?",
                type: "file",
                required: false
            }
        ];

        let current = 0,
            totalSteps = 3,
            answers = {};

        const pf = document.getElementById("progressFill"),
            pt = document.getElementById("progressText"),
            qt = document.getElementById("questionTitle"),
            fh = document.getElementById("fieldHolder"),
            ctrl = document.getElementById("controls"),
            refineContainer = document.getElementById("refineContainer"),
            aiResult = document.getElementById("aiResult"),
            dynamicTitle = document.getElementById("dynamicTitle");

        function autoResizeTextarea(el) {
            el.style.height = 'auto';
            el.style.height = el.scrollHeight + 'px';
        }

        function updateProgressTextPosition(pct) {
            pt.classList.toggle('centered', pct >= 33);
        }

        function renderStep() {
            dynamicTitle.innerHTML = current < 3 ? `<div class="sectionTitle">Core Details</div>` : (current < steps
                .length ? `<div class="sectionTitle">Supplemental Details</div>` : "");
            let pct = current <= totalSteps ? Math.floor(current / totalSteps * 100) : 100;
            if (current === totalSteps) pct = 100;
            pf.style.width = pct + "%";
            pt.textContent = pct + "%";
            updateProgressTextPosition(pct);

            fh.innerHTML = "";
            ctrl.innerHTML = "";
            refineContainer.innerHTML = "";
            aiResult.style.display = "none";
            aiResult.innerHTML = "";

            if (current < steps.length) {
                const s = steps[current];
                qt.textContent = s.label;

                if (s.type === "file") {
                    const fileInput = document.getElementById("cover_image_input");
                    fileInput.required = !!s.required;
                    fileInput.style.display = "block"; // Show it now
                } else {
                    const ta = document.createElement("textarea");
                    ta.id = s.id;
                    ta.name = s.name || s.id;
                    ta.required = !!s.required;
                    ta.placeholder = placeholderMap[s.id] || genericPlaceholder;
                    ta.addEventListener('input', () => autoResizeTextarea(ta));
                    if (answers[s.id]) {
                        ta.value = answers[s.id];
                        setTimeout(() => autoResizeTextarea(ta), 0);
                    }
                    fh.appendChild(ta);
                }

                if (current > 0) {
                    const back = document.createElement("button");
                    back.type = "button";
                    back.textContent = "BACK";
                    back.onclick = prevStep;
                    ctrl.append(back);
                }

                const btn = document.createElement("button");
                btn.type = "button";
                btn.textContent = (current === 2) ? "SUBMIT" : ((current === steps.length - 1) ? "REVIEW" : "NEXT");
                btn.onclick = () => {
                    if (!saveAnswer(s)) return;
                    if (current === 2) {
                        totalSteps = steps.length;
                        current = steps.length;
                        renderStep();
                    } else {
                        nextStep();
                    }
                };
                ctrl.append(btn);
            } else {
                qt.textContent = answers.ideaName || "";
                fh.innerHTML = `<h3>${answers.oneLine || ""}</h3><p class='story'>${answers.story || ""}</p>`;
                const dl = document.createElement("dl");
                steps.slice(3).forEach(s => {
                    if (s.type === "file") return;
                    const v = answers[s.id];
                    if (v) {
                        dl.innerHTML += `<dt>${s.label}</dt><dd>${v.replace(/\n/g, "<br>")}</dd>`;
                    }
                });
                fh.appendChild(dl);

                const allFilled = Object.keys(answers).length >= steps.length;
                const btnBox = document.createElement("div");
                btnBox.className = "result-buttons";

                if (!allFilled) {
                    const btn1 = document.createElement("button");
                    btn1.type = "button";
                    btn1.textContent = "Add Supplemental Details";
                    btn1.className = "result-btn-orange";
                    btn1.onclick = () => {
                        totalSteps = steps.length;
                        current = 3;
                        renderStep();
                    };
                    btnBox.append(btn1);
                }

                const btn2 = document.createElement("button");
                btn2.type = "button";
                btn2.textContent = "Refine With AI";
                btn2.className = "result-btn-blue";
                btn2.onclick = refineWithAI;

                const btn3 = document.createElement("button");
                btn3.type = "button";
                btn3.textContent = "Submit As Is";
                btn3.className = "result-btn-green";
                btn3.onclick = () => finalSubmit(false, true);

                btnBox.append(btn2, btn3);
                refineContainer.append(btnBox);
            }
        }

        function saveAnswer(s) {
            if (s.type === "file") {
                const f = document.getElementById("cover_image_input").files;
                if (s.required && f.length === 0) {
                    alert("Please choose an image.");
                    return false;
                }
                answers[s.id] = f;
            } else {
                const ta = fh.querySelector("textarea");
                const v = ta.value.trim();
                if (s.required && !v) {
                    alert("This field is required.");
                    return false;
                }
                answers[s.id] = v;
            }
            return true;
        }

        function nextStep() {
            current++;
            renderStep();
        }

        function prevStep() {
            if (current > 0) current--;
            renderStep();
        }

        function refineWithAI() {
            const payload = {};
            steps.forEach(s => {
                if (s.type === 'file') return;
                const val = answers[s.id];
                if (val) payload[s.name || s.id] = val;
            });

            aiResult.innerHTML = `<div style="color:white;text-align:center;">Refining with AI...</div>`;
            aiResult.style.display = "block";

            fetch("{{ route('ideas.refine') }}", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                    },
                    body: JSON.stringify(payload)
                })
                .then(res => res.json())
                .then(json => {
                    if (json.success) {
                        const data = json.data;
                        const rd = data.refined_data;
                        window.lastAIRefinedData = rd;
                        window.lastAIImageUrl = data.image_url;
                        aiResult.innerHTML = `
                <div class="ai-enhanced-container">
                    <h3 class="ai-enhanced-title">${rd.refined_idea || ''}</h3>
                    <img class="ai-plant-image" src="${data.image_url}" alt="AI Illustration">
                    <h4 class="ai-enhanced-subtitle">${rd.refined_problem || ''}</h4>
                    <p class="ai-enhanced-description">${rd.refined_summary || ''}</p>
                    <div class="ai-enhanced-paragraphs">
                        <h5>Implementation</h5>
                        <p>${rd.refined_implementation || ''}</p>
                    </div>
                    <div class="ai-buttons">
                        <button onclick="finalSubmit(true)">Save Enhanced Version</button>
                        <button onclick="finalSubmit(false)">Keep Original</button>
                    </div>
                </div>`;
                    } else {
                        aiResult.innerHTML = `<div style='color:red;'>Failed to refine with AI.</div>`;
                    }
                })
                .catch(err => {
                    console.error(err);
                    aiResult.innerHTML = `<div style='color:red;'>Error occurred during refinement.</div>`;
                });
        }

        function finalSubmit(useAI, isSubmitAsIs = false) {
            const form = document.getElementById("surveyForm");

            // ✅ Remove any previously injected inputs
            document.querySelectorAll("#surveyForm input[data-dynamic='true']").forEach(el => el.remove());

            // ✅ Add user-provided answers
            Object.entries(answers).forEach(([key, val]) => {
                if (val instanceof FileList) return; // File already added via <input type="file">
                const input = document.createElement("input");
                input.type = "hidden";
                input.name = steps.find(s => s.id === key)?.name || key;
                input.value = val;
                input.setAttribute("data-dynamic", "true");
                form.appendChild(input);
            });

            if (isSubmitAsIs) {
                const skipAiInput = document.createElement("input");
                skipAiInput.type = "hidden";
                skipAiInput.name = "skip_ai";
                skipAiInput.value = "1";
                skipAiInput.setAttribute("data-dynamic", "true");
                form.appendChild(skipAiInput);
                return form.submit();
            }

            // ✅ For both Save Enhanced and Keep Original → include AI fields
            const rd = window.lastAIRefinedData || {};
            const aiFields = {
                ai_idea_name: rd.refined_idea || '',
                ai_idea_sentence: rd.refined_problem || '',
                ai_full_story: rd.refined_implementation || '',
                ai_challenge: rd.ai_challenge,
                ai_impact: rd.ai_impact,
                ai_spark: rd.ai_spark,
                ai_unique: rd.ai_unique,
                ai_resources: rd.ai_resources,
                ai_challenges: rd.ai_challenges,
                ai_collaboration: rd.ai_collaboration,
                ai_first_step: rd.ai_first_step,
                ai_cover_image: window.lastAIImageUrl || '',
            };
            for (const [key, value] of Object.entries(aiFields)) {
                const isRequired =
                    key === 'ai_idea_name' ||
                    key === 'ai_idea_sentence' ||
                    key === 'ai_full_story';

                if (isRequired || (value !== undefined && value !== null && value !== '')) {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = key;
                    input.value = value;
                    input.setAttribute('data-dynamic', 'true');
                    form.appendChild(input);
                }
            }

            // ✅ Set is_ai_refined based on which button was clicked
            const refineFlag = document.createElement("input");
            refineFlag.type = "hidden";
            refineFlag.name = "is_ai_refined";
            refineFlag.value = useAI ? "1" : "0";
            refineFlag.setAttribute("data-dynamic", "true");
            form.appendChild(refineFlag);

            form.submit();
        }



        renderStep();
    </script>
@endpush
