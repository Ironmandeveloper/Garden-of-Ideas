@extends('layouts.your_garden_layout')
@section('content')
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .chat-message {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 10px;
            max-width: 80%;
        }

        .ai-message {
            background-color: #e1f0ff;
            align-self: flex-start;
            color: #000;
        }

        .user-message {
            background-color: #d1ffd8;
            align-self: flex-end;
            text-align: right;
            color: #000;
        }

        .chat-window {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
    </style>

    <div class="page-content">
        <div data-elementor-type="wp-page" data-elementor-id="4063" class="elementor elementor-4063"
            data-elementor-post-type="page">
            <div class="elementor-element elementor-element-9a5a2ee elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile e-flex e-con-boxed e-con e-parent"
                data-id="9a5a2ee" data-element_type="container">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-fab1f82 elementor-widget elementor-widget-shortcode"
                        data-id="fab1f82" data-element_type="widget" data-widget_type="shortcode.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-shortcode"><!-- user-profile -->

                                <div class="wp-ulike-pro-section-profile ulp-flex-row ulp-flex-top-xs">


                                    <div
                                        class="wp-ulike-pro-header-section ulp-flex-row ulp-flex-center-xs ulp-flex-col-xl-12 ulp-flex-col-md-12 ulp-flex-col-xs-12">

                                        <!-- profile-header -->
                                        <div
                                            class="wp-ulike-pro-info-section ulp-flex-col-xl-12 ulp-flex-col-md-12 ulp-flex-col-xs-12">
                                            <div
                                                class="ulp-flex-row ulp-flex-middle-xs ulp-flex-center-xs ulp-flex-start-md">
                                                <!-- avatar -->
                                                <div
                                                    class="ulp-flex-col-xl-3 ulp-flex-col-md-3 ulp-flex-col-xs-12 wp-ulike-pro-header-avatar-col">
                                                    <div class="wp-ulike-pro-profile-user-avatar">
                                                        <img alt=""
                                                            src="{{ asset('assets/your_gardens/2a4b2c057674d59968cdc299555bb2428f403a94724659edde9ad39466db8ab6(3).png') }}"
                                                            srcset="https://secure.gravatar.com/avatar/2a4b2c057674d59968cdc299555bb2428f403a94724659edde9ad39466db8ab6?s=200&amp;d=https%3A%2F%2Fthegardenofgreatideas.com%2Fwp-content%2Fuploads%2F2025%2F01%2FTheGardenOfGreatIdeas-14.png&amp;r=g 2x"
                                                            class="avatar avatar-100 photo" height="100" width="100">
                                                    </div>
                                                </div>


                                                <!-- info -->
                                                <div
                                                    class="ulp-flex-col-xl-9 ulp-flex-col-md-9 ulp-flex-col-xs-12 wp-ulike-pro-header-info-col">
                                                    <div class="wp-ulike-pro-profile-user-info">
                                                        <!-- name -->
                                                        <h3 class="wp-ulike-pro-profile-name">{{ auth()->user()->email }}
                                                        </h3>

                                                        <!-- bio -->
                                                        <p class="wp-ulike-pro-profile-desc">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- profile-badges -->
                                        <div
                                            class="wp-ulike-pro-badges-section ulp-flex-col-xl-12 ulp-flex-col-md-12 ulp-flex-col-xs-12">
                                            <div class="ulp-flex-row ulp-flex-middle-xs ulp-flex-start-md">
                                                <div
                                                    class="ulp-flex-col-xl-3 ulp-flex-col-md-4 ulp-flex-col-xs-12 wp-ulike-pro-badge-item-col">
                                                    <div class="ulp-flex-row ulp-flex-middle-xs ulp-flex-start-xs">

                                                        <!-- image -->
                                                        <div class="ulp-flex-col-md-4 wp-ulike-pro-badge-symbol-col">
                                                            <img decoding="async" class="wp-ulike-pro-badge-image"
                                                                src="{{ asset('assets/your_gardens/Kindred-Concierge_Like_Like-1.png') }}"
                                                                alt="Kindred Concierge_Like_Like (1)" width="1042"
                                                                height="1042">
                                                        </div>

                                                        <!-- info -->
                                                        <div class="ulp-flex-col-md-8 wp-ulike-pro-badge-info-col">
                                                            <!-- title -->
                                                            <span class="wp-ulike-pro-badge-title">
                                                                8 Seeds Watered </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-4f67e6c main-banner e-flex e-con-boxed e-con e-parent"
                data-id="4f67e6c" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="e-con-inner">
                    <div class="elementor-element elementor-element-5915cdc elementor-widget-tablet__width-initial elementor-widget elementor-widget-heading"
                        data-id="5915cdc" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h1 class="elementor-heading-title elementor-size-default">Your Garden</h1>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-ba6385d e-con-full e-flex e-con e-child"
                        data-id="ba6385d" data-element_type="container"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-element elementor-element-4ca67df elementor-widget elementor-widget-text-editor"
                            data-id="4ca67df" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                <p><!-- user-profile -->

                                </p>
                                <div class="wp-ulike-pro-section-profile ulp-flex-row ulp-flex-top-xs">


                                    <div
                                        class="wp-ulike-pro-header-section ulp-flex-row ulp-flex-center-xs ulp-flex-col-xl-12 ulp-flex-col-md-12 ulp-flex-col-xs-12">

                                        <!-- profile-header -->
                                        <div
                                            class="wp-ulike-pro-info-section ulp-flex-col-xl-12 ulp-flex-col-md-12 ulp-flex-col-xs-12">
                                            <div
                                                class="ulp-flex-row ulp-flex-middle-xs ulp-flex-center-xs ulp-flex-start-md">
                                                <!-- avatar -->
                                                <div
                                                    class="ulp-flex-col-xl-3 ulp-flex-col-md-3 ulp-flex-col-xs-12 wp-ulike-pro-header-avatar-col">
                                                    <div class="wp-ulike-pro-profile-user-avatar">
                                                        <img alt=""
                                                            src="{{ asset('assets/your_gardens/2a4b2c057674d59968cdc299555bb2428f403a94724659edde9ad39466db8ab6(3).png') }}"
                                                            srcset="https://secure.gravatar.com/avatar/2a4b2c057674d59968cdc299555bb2428f403a94724659edde9ad39466db8ab6?s=200&amp;d=https%3A%2F%2Fthegardenofgreatideas.com%2Fwp-content%2Fuploads%2F2025%2F01%2FTheGardenOfGreatIdeas-14.png&amp;r=g 2x"
                                                            class="avatar avatar-100 photo" height="100" width="100">
                                                    </div>
                                                </div>


                                                <!-- info -->
                                                <div
                                                    class="ulp-flex-col-xl-9 ulp-flex-col-md-9 ulp-flex-col-xs-12 wp-ulike-pro-header-info-col">
                                                    <div class="wp-ulike-pro-profile-user-info">
                                                        <!-- name -->
                                                        <h3 class="wp-ulike-pro-profile-name">{{ auth()->user()->email }}
                                                        </h3>

                                                        <!-- bio -->
                                                        <p class="wp-ulike-pro-profile-desc">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- profile-badges -->
                                        <div
                                            class="wp-ulike-pro-badges-section ulp-flex-col-xl-12 ulp-flex-col-md-12 ulp-flex-col-xs-12">
                                            <div class="ulp-flex-row ulp-flex-middle-xs ulp-flex-start-md">
                                                <div
                                                    class="ulp-flex-col-xl-3 ulp-flex-col-md-4 ulp-flex-col-xs-12 wp-ulike-pro-badge-item-col">
                                                    <div class="ulp-flex-row ulp-flex-middle-xs ulp-flex-start-xs">

                                                        <!-- image -->
                                                        <div class="ulp-flex-col-md-4 wp-ulike-pro-badge-symbol-col">
                                                            <img decoding="async" class="wp-ulike-pro-badge-image"
                                                                src="{{ asset('assets/your_gardens/Kindred-Concierge_Like_Like-1.png') }}"
                                                                alt="Kindred Concierge_Like_Like (1)" width="1042"
                                                                height="1042">
                                                        </div>

                                                        <!-- info -->
                                                        <div class="ulp-flex-col-md-8 wp-ulike-pro-badge-info-col">
                                                            <!-- title -->
                                                            <span class="wp-ulike-pro-badge-title">
                                                                {{ $ideas->count() }} </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <!-- tabs -->
                                    <div
                                        class="wp-ulike-pro-tabs-section ulp-flex-col-xl-12 ulp-flex-col-md-12 ulp-flex-col-xs-12">
                                        <div class="ulp-flex-row ulp-flex-middle-xs ulp-flex-start-md">
                                            <div class="ulp-flex-col-xs-12">
                                                <div class="ulp-tabs top_side">
                                                    <div class="tab_nav">
                                                        <a href="#" class="nav_item nav_internal active">Seeds
                                                            You've
                                                            Sown</a>
                                                        <a href="{{ route('chatify') }}" class="nav_item nav_internal"
                                                            target="_blank">Active Collaborations</a>
                                                        <a href="{{ route('your.garden.watered') }}" target="_blank" class="nav_item nav_internal">Seeds You
                                                            Watered</a>
                                                    </div>
                                                    <div class="content_wrapper">
                                                        <div id="ulp-content-seeds-you've-sown" class="tab_content">
                                                            <div data-elementor-type="section" data-elementor-id="4071"
                                                                class="elementor elementor-4071"
                                                                data-elementor-post-type="elementor_library">
                                                                <div class="elementor-element elementor-element-b7627ac e-con-full e-flex e-con e-child"
                                                                    data-id="b7627ac" data-element_type="container"
                                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                                    <div class="elementor-element elementor-element-0d4dd9c post-divider elementor-grid-2 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-widget elementor-widget-posts"
                                                                        data-id="0d4dd9c" data-element_type="widget"
                                                                        data-settings="{&quot;pagination_type&quot;:&quot;prev_next&quot;,&quot;classic_columns&quot;:&quot;2&quot;,&quot;classic_columns_tablet&quot;:&quot;2&quot;,&quot;classic_columns_mobile&quot;:&quot;1&quot;,&quot;classic_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;classic_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;classic_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                                        data-widget_type="posts.classic">
                                                                        <div class="elementor-widget-container">
                                                                            <div
                                                                                class="elementor-posts-container elementor-posts elementor-posts--skin-classic elementor-grid elementor-has-item-ratio">
                                                                                @forelse($ideas as $idea)
                                                                                 @if ($idea->is_ai_refined)
                                                                                    <article
                                                                                        class="elementor-post elementor-grid-item">
                                                                                        <div
                                                                                            class="elementor-post__thumbnail">
                                                                                            @if ($idea->ai_cover_image)
                                                                                                <img src="{{ asset('storage/' . $idea->ai_cover_image) }}"
                                                                                                    alt="Cover image"
                                                                                                    width="300"
                                                                                                    height="200">

                                                                                            @endif
                                                                                        </div>
                                                                                        <div class="elementor-post__text">
                                                                                            <h3
                                                                                                class="elementor-post__title">
                                                                                                {{ $idea->ai_idea_name }}</h3>
                                                                                            <div
                                                                                                class="elementor-post__excerpt">
                                                                                                <p>{{ Str::limit($idea->ai_idea_sentence, 150) }}
                                                                                                </p>
                                                                                            </div>
                                                                                            <div
                                                                                                class="elementor-post__read-more-wrapper">
                                                                                                <a class="elementor-post__read-more open-chat-modal"
                                                                                                    href="javascript:void(0);"
                                                                                                    data-id="{{ $idea->id }}"
                                                                                                    data-idea-name="{{ $idea->ai_idea_name }}">
                                                                                                    AI Work Shop
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- AI Chat Container (Hidden by default) -->
                                                                                            <div class="ai-chat-box mt-3 p-3 border rounded bg-light d-none"
                                                                                                id="chat-box-{{ $idea->id }}">
                                                                                                <div class="chat-window mb-3"
                                                                                                    style="max-height: 250px; overflow-y: auto;">
                                                                                                    <div
                                                                                                        class="chat-message ai-message">
                                                                                                        <strong>AI:</strong>
                                                                                                        Hello! How can I
                                                                                                        help you explore
                                                                                                        this idea?
                                                                                                    </div>
                                                                                                    {{-- User and AI messages will go here dynamically --}}
                                                                                                </div>
                                                                                                <div class="input-group">
                                                                                                    <input type="text"
                                                                                                        class="form-control chat-input"
                                                                                                        placeholder="Type your message...">
                                                                                                    <button
                                                                                                        class="btn btn-primary send-btn">Send</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </article>

                                                                                    @else
                                                                                    {{-- For Non AI Refined Image --}}

                                                                                                                                                                        <article
                                                                                        class="elementor-post elementor-grid-item">
                                                                                        <div
                                                                                            class="elementor-post__thumbnail">

                                                                                                <img src="{{ asset('storage/' . ($idea->cover_image ? $idea->cover_image : $idea->ai_cover_image)) }}"
                                                                                                    alt="Cover image"
                                                                                                    width="300"
                                                                                                    height="200">


                                                                                        </div>
                                                                                        <div class="elementor-post__text">
                                                                                            <h3
                                                                                                class="elementor-post__title">
                                                                                                {{ $idea->idea_name }}</h3>
                                                                                            <div
                                                                                                class="elementor-post__excerpt">
                                                                                                <p>{{ Str::limit($idea->idea_sentence, 150) }}
                                                                                                </p>
                                                                                            </div>
                                                                                            <div
                                                                                                class="elementor-post__read-more-wrapper">
                                                                                                <a class="elementor-post__read-more open-chat-modal"
                                                                                                    href="javascript:void(0);"
                                                                                                    data-id="{{ $idea->id }}"
                                                                                                    data-idea-name="{{ $idea->idea_name }}">
                                                                                                    AI Work Shop
                                                                                                </a>
                                                                                            </div>
                                                                                            <!-- AI Chat Container (Hidden by default) -->
                                                                                            <div class="ai-chat-box mt-3 p-3 border rounded bg-light d-none"
                                                                                                id="chat-box-{{ $idea->id }}">
                                                                                                <div class="chat-window mb-3"
                                                                                                    style="max-height: 250px; overflow-y: auto;">
                                                                                                    <div
                                                                                                        class="chat-message ai-message">
                                                                                                        <strong>AI:</strong>
                                                                                                        Hello! How can I
                                                                                                        help you explore
                                                                                                        this idea?
                                                                                                    </div>
                                                                                                    {{-- User and AI messages will go here dynamically --}}
                                                                                                </div>
                                                                                                <div class="input-group">
                                                                                                    <input type="text"
                                                                                                        class="form-control chat-input"
                                                                                                        placeholder="Type your message...">
                                                                                                    <button
                                                                                                        class="btn btn-primary send-btn">Send</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </article>
                                                                                    @endif
                                                                                @empty
                                                                                    <p>No ideas found.</p>
                                                                                @endforelse
                                                                            </div>

                                                                            <div class="e-load-more-anchor" data-page="1"
                                                                                data-max-page="2"
                                                                                data-next-page="{{route('your.gardens')}}?e-page-0d4dd9c=2">
                                                                            </div>
                                                                            {{-- <nav class="elementor-pagination"
                                                                                aria-label="Pagination">
                                                                                <span class="page-numbers prev">«
                                                                                    Previous</span>
                                                                                <a class="page-numbers next"
                                                                                    href="{{route('your.gardens')}}?e-page-0d4dd9c=2">Next
                                                                                    »</a>
                                                                            </nav> --}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>

    <!-- AI Workshop Modal -->
    <div class="modal fade" id="aiWorkshopModal" tabindex="-1" aria-labelledby="aiWorkshopModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aiWorkshopModalLabel">AI Workshop</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <h6 id="idea-title" class="text-primary mb-3"></h6>

                    <div class="chat-window mb-3 p-3 border rounded bg-light"
                        style="max-height: 300px; overflow-y: auto;">
                        <div class="chat-message ai-message">
                            <strong>AI:</strong> Hello! How can I help you explore this idea?
                        </div>
                    </div>

                    <div class="input-group">
                        <input type="text" class="form-control chat-input" placeholder="Type your message...">
                        <button class="btn btn-primary send-btn">Send</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = new bootstrap.Modal(document.getElementById('aiWorkshopModal'), {
                backdrop: 'static',
                keyboard: false
            });
            const modalTitle = document.getElementById('idea-title');
            const chatWindow = document.querySelector('#aiWorkshopModal .chat-window');
            const input = document.querySelector('#aiWorkshopModal .chat-input');
            const sendBtn = document.querySelector('#aiWorkshopModal .send-btn');

            // Open modal on click
            document.querySelectorAll('.open-chat-modal').forEach(link => {
                link.addEventListener('click', () => {
                    const ideaId = link.dataset.id;
                    const ideaName = link.dataset.ideaName;

                    modalTitle.textContent = `Idea: ${ideaName}`;
                    modalTitle.dataset.id = ideaId;
                    chatWindow.innerHTML =
                        '<div class="chat-message ai-message"><strong>AI:</strong> Loading conversation...</div>';
                    input.value = '';
                    modal.show();

                    // Fetch previous chat history via AJAX
                    fetch('{{ route('your.garden.history') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                idea_id: ideaId
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            chatWindow.innerHTML = ''; // Clear loading text
                            if (data.length === 0) {
                                chatWindow.innerHTML =
                                    '<div class="chat-message ai-message"><strong>AI:</strong> Hello! How can I help you explore this idea?</div>';
                            } else {
                                data.forEach(msg => {
                                    const msgDiv = document.createElement('div');
                                    msgDiv.className =
                                        `chat-message ${msg.sent ? 'user-message' : 'ai-message'}`;
                                    msgDiv.innerHTML =
                                        `<strong>${msg.sent ? 'You' : 'AI'}:</strong> ${msg.message}`;
                                    chatWindow.appendChild(msgDiv);
                                });
                            }
                            chatWindow.scrollTop = chatWindow.scrollHeight;
                        })
                        .catch(error => {
                            console.error('Error loading history:', error);
                            chatWindow.innerHTML =
                                '<div class="chat-message ai-message text-danger"><strong>Error loading chat history.</strong></div>';
                        });
                });

            });

            // Handle send
            sendBtn.addEventListener('click', function() {
                const message = input.value.trim();
                if (!message) return;

                const ideaId = document.querySelector('.open-chat-modal[data-idea-name="' +
                    modalTitle.textContent.replace("Idea: ", "") + '"]').dataset.id;

                const userMessage = document.createElement('div');
                userMessage.className = 'chat-message user-message';
                userMessage.innerHTML = `<strong>You:</strong> ${message}`;
                chatWindow.appendChild(userMessage);
                chatWindow.scrollTop = chatWindow.scrollHeight;
                input.value = '';

                // Send to backend
                fetch('{{ route('your.garden.send') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            idea_id: ideaId,
                            message: message
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.reply) {
                            const aiMessage = document.createElement('div');
                            aiMessage.className = 'chat-message ai-message';
                            aiMessage.innerHTML = `<strong>AI:</strong> ${data.reply}`;
                            chatWindow.appendChild(aiMessage);
                            chatWindow.scrollTop = chatWindow.scrollHeight;
                        } else {
                            alert("AI failed to respond.");
                        }
                    })
                    .catch(error => {
                        console.error("Error:", error);
                        alert("Something went wrong.");
                    });
            });


        });
    </script>
@endpush
