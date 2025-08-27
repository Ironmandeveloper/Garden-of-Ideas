@extends('layouts.main_app')
@section('content')
	<div class="page-content">
				<div data-elementor-type="wp-page" data-elementor-id="4968" class="elementor elementor-4968" data-elementor-post-type="page">
				<div class="elementor-element elementor-element-5c3ecc33 e-con-full e-flex e-con e-parent" data-id="5c3ecc33" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-element elementor-element-56d1d4c1 elementor-widget-tablet__width-initial elementor-widget elementor-widget-heading" data-id="56d1d4c1" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
					<h2 class="elementor-heading-title elementor-size-default">Sow Your Seed</h2>				</div>
				</div>
				<div class="elementor-element elementor-element-5805e241 elementor-widget__width-initial elementor-widget elementor-widget-n-accordion" data-id="5805e241" data-element_type="widget" data-settings="{&quot;default_state&quot;:&quot;all_collapsed&quot;,&quot;max_items_expended&quot;:&quot;one&quot;,&quot;n_accordion_animation_duration&quot;:{&quot;unit&quot;:&quot;ms&quot;,&quot;size&quot;:400,&quot;sizes&quot;:[]}}" data-widget_type="nested-accordion.default">
				<div class="elementor-widget-container">
							<div class="e-n-accordion" aria-label="Accordion. Open links with Enter or Space, close with Escape, and navigate with Arrow Keys">
						<details id="e-n-accordion-item-1470" class="e-n-accordion-item">
				<summary class="e-n-accordion-item-title" data-accordion-index="1" tabindex="0" aria-expanded="false" aria-controls="e-n-accordion-item-1470">
					<span class="e-n-accordion-item-title-header"><div class="e-n-accordion-item-title-text"> Learn more </div></span>
							<span class="e-n-accordion-item-title-icon">
			<span class="e-opened"><i aria-hidden="true" class="icon icon-arrow-point-to-down"></i></span>
			<span class="e-closed"><i aria-hidden="true" class="icon icon-arrow-point-to-down"></i></span>
		</span>

						</summary>
				<div role="region" aria-labelledby="e-n-accordion-item-1470" class="elementor-element elementor-element-62b3525 e-con-full e-flex e-con e-child" data-id="62b3525" data-element_type="container">
		<div role="region" aria-labelledby="e-n-accordion-item-1470" class="elementor-element elementor-element-73ba4f4e e-flex e-con-boxed e-con e-child" data-id="73ba4f4e" data-element_type="container">
					<div class="e-con-inner">
				<div class="elementor-element elementor-element-87e973a elementor-widget__width-initial elementor-widget elementor-widget-text-editor" data-id="87e973a" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
									<p>Plant your idea in the Garden of Great Ideas. Share your vision, invite collaboration, and watch it grow into something real.</p>								</div>
				</div>
					</div>
				</div>
				</div>
					</details>
					</div>
						</div>
				</div>
		<div class="elementor-element elementor-element-2faab533 e-con-full e-flex e-con e-child" data-id="2faab533" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
				<div class="elementor-element elementor-element-54650ccf elementor-widget__width-initial elementor-widget elementor-widget-html" data-id="54650ccf" data-element_type="widget" data-widget_type="html.default">
				<div class="elementor-widget-container">
					<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
  :root {
    --accent-start: #ecb211;
    --accent-end:   #2b5f2d;
    --focus-color:  #2b5f2d;
    --text:         #fff;
    --light-bar:    rgba(236,178,17,0.114);
    --heading-font: 'Afacad', Sans-serif;
    --body-font:    'Poppins', Sans-serif;
    --input-font:   'Inter', Sans-serif;
  }
  .card {
    max-width: 950px;
    margin: 0 auto;
    padding: 2.5rem;
    border-radius: 8px;
    background: transparent;
    color: var(--text);
    font-family: var(--body-font);
  }
  .sectionTitle {
    font-family: var(--heading-font);
    font-size: 4.5rem;
    color: var(--accent-start);
    font-weight: 600;
    text-align: center;
    margin-bottom: 2.5rem;
    margin-top: 0;
    letter-spacing: -1px;
  }
  #progressBar {
    width: 100%; height: 32px;
    background: #fff; border-radius: 16px;
    overflow: hidden; margin-bottom: 1.5rem;
    position: relative;
  }
  #progressFill {
    height: 100%; width: 0%;
    background: linear-gradient(90deg, var(--accent-start), #9fc1dd);
    transition: width .3s ease;
    border-radius: 16px 0 0 16px;
    position: absolute;
    top: 0; left: 0; bottom: 0;
  }
  #progressText {
    position: absolute;
    top: 0; bottom: 0;
    font-size: 1.5rem;
    line-height: 32px;
    color: #000;
    font-family: var(--input-font);
    user-select: none;
    pointer-events: none;
    left: 1rem;
    transition: left 0.2s, right 0.2s, text-align 0.2s;
    width: auto;
    min-width: 48px;
    text-align: left;
    z-index: 2;
  }
  #progressText.centered {
    left: 0; right: 0;
    text-align: center;
    width: 100%;
    min-width: 0;
  }
  h2 {
    font-family: var(--heading-font);
    color: var(--accent-start);
    text-align: center;
    margin: 3rem 0 1rem;
    font-size: 2.5rem;
  }
  h3 {
    font-family: var(--body-font);
    color: #fff;
    font-size: 1.7rem;
    text-align: center;
    margin: 1rem 0;
  }
  p.story {
    font-family: var(--input-font);
    color: #fff;
    font-size: 1.5rem;
    margin: 1rem 0;
    text-align: center;
  }
  textarea, input[type="file"] {
    width: 100%; padding: 1rem; margin: 1.5rem 0;
    border: 2px solid var(--accent-start); border-radius: 10px;
    background: #fff; color: #000;
    font-family: var(--input-font); font-size: 1.4rem;
    min-height: 160px; overflow: hidden; resize: none;
  }
  textarea::placeholder {
    color: #d2cdcd !important;
    font-size: 1.4rem !important;
  }
  .controls {
    margin-top: 2rem;
    display: flex;
    justify-content: center;
    gap: 1rem;
  }
  .controls button {
    min-width: 150px; height: 48px;
    border: none; border-radius: 4px;
    background: var(--accent-start); color: #000;
    font-family: var(--body-font); font-size: 1rem; font-weight: 700;
    cursor: pointer;
    transition: background .2s ease, color .2s ease;
  }
  .controls button:hover,
  .controls button:focus,
  .controls button:active {
    background: var(--focus-color); color: #fff;
    outline: 2px solid var(--focus-color); outline-offset: 2px;
  }
  button[disabled] {
    opacity: .6; cursor: not-allowed;
  }
  /* Result Page Button Colors */
  .result-buttons {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    margin-top: 2.5rem;
  }
  .result-btn-orange {
    background: #ecb211 !important; color: #000 !important;
  }
  .result-btn-blue {
    background: #9fc1dc !important; color: #fff !important;
  }
  .result-btn-green {
    background: #2b5f2d !important; color: #fff !important;
  }
  .result-btn-orange:hover,
  .result-btn-blue:hover,
  .result-btn-green:hover,
  .result-btn-orange:focus,
  .result-btn-blue:focus,
  .result-btn-green:focus,
  .result-btn-orange:active,
  .result-btn-blue:active,
  .result-btn-green:active {
    background: #2b5f2d !important; color: #fff !important;
  }
  dl dt {
    font-family: var(--heading-font);
    margin: 2rem 0 .5rem;
    font-size: 1.7rem;
    color: var(--accent-start);
  }
  dl dd {
    margin: 0 0 1rem; padding-bottom: .5rem;
    border-bottom: 2px solid var(--light-bar);
    font-family: var(--input-font);
    font-size: 1rem;
    color: #fff;
  }
  .ai-enhanced-container {
    margin-top: 2rem; padding: 1.5rem;
    background: rgba(236,178,17,0.1); border-radius: 8px;
    text-align: center;
  }
  .ai-enhanced-title {
    font-family: var(--heading-font);
    font-size: 2.8rem;
    color: var(--accent-start);
    margin-bottom: .5rem;
  }
  .ai-enhanced-subtitle {
    font-family: var(--heading-font);
    font-size: 2rem;
    color: var(--accent-start);
    margin-bottom: 1rem;
  }
  .ai-enhanced-description,
  .ai-enhanced-paragraphs p {
    font-family: var(--input-font);
    font-size: 1rem;
    color: #fff;
    margin-bottom: 1.5rem;
  }
  .ai-enhanced-paragraphs h5 {
    font-family: var(--heading-font);
    font-size: 1.6rem;
    color: var(--accent-start);
    margin-top: 1rem;
  }
  .ai-plant-image {
    display: block; max-width: 200px; margin: 1.5rem auto;
  }
  .ai-buttons {
    margin-top: 1.5rem;
    display: flex; justify-content: center; gap: 2rem;
  }
  .ai-buttons button {
    min-width: 200px; height: 48px;
    border: none; border-radius: 4px;
    background: var(--accent-start); color: #000;
    font-family: var(--body-font); font-size: 1rem; font-weight: 700;
    transition: background .2s ease, color .2s ease;
  }
  .ai-buttons button:hover,
  .ai-buttons button:focus,
  .ai-buttons button:active {
    background: var(--focus-color); color: #fff;
    outline: 2px solid var(--focus-color); outline-offset: 2px;
  }
  #aiResult { display: none; }
  @keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
.spinner-border {
  border: 4px solid rgba(255, 255, 255, 0.2);
  border-top: 4px solid #fff;
  border-radius: 50%;
  width: 3rem;
  height: 3rem;
  animation: spin 1s linear infinite;
}
</style>

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

    <div id="loadingOverlay" style="
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background-color: rgba(0,0,0,0.85);
    color: white;
    font-size: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    display: none;
    flex-direction: column;
">
    <div class="spinner-border text-light" role="status" style="margin-bottom: 1rem;"></div>
    <div>🌱 Planting your seed...</div>
</div>

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
                id: "coverImage",
                name: "cover_image",
                label: "Upload a cover image or let AI generate it",
                type: "file",
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
            // {
            //     id: "coverImage",
            //     name: "cover_image",
            //     label: "Got any visuals?",
            //     type: "file",
            //     required: false
            // }
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
                    fileInput.style.display = "none";

                    // Label
                    const label = document.createElement("label");
                    label.style.display = "block";
                    label.style.marginBottom = "10px";
                    fh.appendChild(label);

                    // Custom styled box (like textarea)
                    const fakeTextareaBox = document.createElement("div");
                    fakeTextareaBox.className = "custom-upload-box";
                    fakeTextareaBox.textContent = "Click to upload image";
                    fakeTextareaBox.style.padding = "1rem";
                    fakeTextareaBox.style.border = "2px solid orange";
                    fakeTextareaBox.style.borderRadius = "8px";
                    fakeTextareaBox.style.minHeight = "100px";
                    fakeTextareaBox.style.display = "flex";
                    fakeTextareaBox.style.justifyContent = "center";
                    fakeTextareaBox.style.alignItems = "center";
                    fakeTextareaBox.style.cursor = "pointer";
                    fakeTextareaBox.style.color = "#ccc";
                    fakeTextareaBox.style.textAlign = "center";

                    fakeTextareaBox.onclick = () => fileInput.click();

                    const fileNameDisplay = document.createElement("p");
                    fileNameDisplay.id = "fileNamePreview";
                    fileNameDisplay.style.marginTop = "10px";
                    fileNameDisplay.style.color = "white";
                    fh.appendChild(fakeTextareaBox);
                    fh.appendChild(fileNameDisplay);

                    fileInput.onchange = () => {
                        if (fileInput.files.length > 0) {
                            fileNameDisplay.textContent = fileInput.files[0].name;
                            fakeTextareaBox.textContent = "Image Selected: " + fileInput.files[0].name;
                        }
                    };
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
                btn.textContent = (current === 3) ? "SUBMIT" : ((current === steps.length - 1) ? "REVIEW" : "NEXT");
                btn.onclick = () => {
                    if (!saveAnswer(s)) return;
                    if (current === 3) {
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
                // Show uploaded image (File) preview
                    const uploadedFile = document.getElementById("cover_image_input").files?.[0];
                    if (uploadedFile) {
                        const imagePreview = document.createElement("img");
                        imagePreview.style.maxWidth = "100%";
                        imagePreview.style.margin = "1rem 0";
                        imagePreview.src = URL.createObjectURL(uploadedFile);
                        fh.appendChild(imagePreview);
                    }
                    // Generate AI image if no uploaded file and no previous AI image
if (!uploadedFile && !window.lastAIImageUrl) {
    const imageNotice = document.createElement("div");
    imageNotice.innerHTML = `<p style="color:white;">No image uploaded. Generating AI image...</p>`;
    fh.appendChild(imageNotice);

    const payload = {
        idea_name: answers.ideaName,
        idea_sentence: answers.oneLine,
        full_story: answers.story
    };

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
        if (json.success && json.data?.image_url) {
            window.lastAIImageUrl = json.data.image_url;

            const imagePreview = document.createElement("img");
            imagePreview.style.maxWidth = "100%";
            imagePreview.style.margin = "1rem 0";
            imagePreview.src = window.lastAIImageUrl;
            fh.appendChild(imagePreview);
        } else {
            fh.appendChild(document.createElement("p")).textContent = "Failed to generate AI image.";
        }
    })
    .catch(() => {
        fh.appendChild(document.createElement("p")).textContent = "AI image generation failed.";
    });
}



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
                        current = 4;
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
                        <button onclick="finalSubmit(true)">Submit Enhanced Version</button>
                        <button onclick="finalSubmit(false)">Submit Original</button>
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
                // show preloader on submit as is
                document.getElementById("loadingOverlay").style.display = "flex";
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
            document.getElementById("loadingOverlay").style.display = "flex";
            form.submit();
        }



        renderStep();
    </script>


				</div>
				</div>
				</div>
				</div>
				</div>


			</div>


@endsection

@push('scripts')

@endpush
