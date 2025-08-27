@include('Chatify::layouts.headLinks')
<style>
    /* Green top bar for both headers */
.m-header,
.m-header-messaging {
    background-color: #2C5F2C !important; /* Bootstrap green or customize */
    color: white;
    border-bottom: none;
}

.m-header nav a,
.m-header-messaging nav a,
.user-name {
    color: white !important;
}

/* Optional: remove box-shadow or adjust */
.m-header,
.m-header-messaging {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
    /* Wrap and center the chat */
.messenger-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: url('{{ asset("assets/images/inner-bg.jpg") }}') no-repeat center center;
    background-size: cover;
    padding: 30px;
}

/* Central glassy chat container */
.glassy-container {
    display: flex;
    width: 95%;
    max-width: 1200px;
    height: 90vh;
    background: rgba(0, 0, 0, 0.4);
    border-radius: 20px;
    backdrop-filter: blur(10px);
    box-shadow: 0 0 20px rgba(0,0,0,0.3);
    overflow: hidden;
}
    /* Background image for chat area */
.chat-bg {
    background: url('{{ asset("assets/images/inner-bg.jpg") }}') no-repeat center center;
    background-size: cover;
    position: relative;
    color: white;
}

/* Receiver name overlay */
.chat-recipient-name {
    position: absolute;
    top: 15px;
    left: 20px;
    z-index: 10;
    display: flex;
    align-items: center;
    background: rgba(0, 0, 0, 0.5);
    padding: 8px 12px;
    border-radius: 10px;
    backdrop-filter: blur(10px);
}

.chat-recipient-avatar {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background-size: cover;
    margin-right: 10px;
}

.chat-recipient-text {
    font-size: 16px;
    font-weight: 500;
}

/* Optional: blur overlay for messages if you want a frosted glass effect */
.messages {
    backdrop-filter: blur(3px);
    background-color: rgba(0, 0, 0, 0.3);
    padding: 20px;
    border-radius: 10px;
}

</style>
<div class="messenger-wrapper">
<div class="messenger glassy-container">
    {{-- ----------------------Users/Groups lists side---------------------- --}}
    <div class="messenger-listView {{ !!$id ? 'conversation-active' : '' }}">
        {{-- Header and search bar --}}
        <div class="m-header">
            <nav>
                <a href="#"><i class="fas fa-inbox"></i> <span class="messenger-headTitle">MESSAGES</span> </a>
                {{-- header buttons --}}
                <nav class="m-header-right">
                    {{-- <a href="#"><i class="fas fa-cog settings-btn"></i></a> --}}
                    <a href="#" class="listView-x"><i class="fas fa-times"></i></a>
                </nav>
            </nav>
            {{-- Search input --}}
            <input type="text" class="messenger-search" placeholder="Search" />
            {{-- Tabs --}}
            {{-- <div class="messenger-listView-tabs">
                <a href="#" class="active-tab" data-view="users">
                    <span class="far fa-user"></span> Contacts</a>
            </div> --}}
        </div>
        {{-- tabs and lists --}}
        <div class="m-body contacts-container">
            {{-- Lists [Users/Group] --}}
            {{-- ---------------- [ User Tab ] ---------------- --}}
            <div class="show messenger-tab users-tab app-scroll" data-view="users">
                {{-- Favorites --}}
                <div class="favorites-section">
                    <p class="messenger-title"><span>Favorites</span></p>
                    <div class="messenger-favorites app-scroll-hidden"></div>
                </div>
                {{-- Saved Messages --}}
                {{-- <p class="messenger-title"><span>Your Space</span></p>
                {!! view('Chatify::layouts.listItem', ['get' => 'saved']) !!} --}}
                {{-- Contact --}}
                <p class="messenger-title"><span>All Messages</span></p>
                <div class="listOfContacts" style="width: 100%;height: calc(100% - 272px);position: relative;"></div>
            </div>
            {{-- ---------------- [ Search Tab ] ---------------- --}}
            <div class="messenger-tab search-tab app-scroll" data-view="search">
                {{-- items --}}
                <p class="messenger-title"><span>Search</span></p>
                <div class="search-records">
                    <p class="message-hint center-el"><span>Type to search..</span></p>
                </div>
            </div>
        </div>
    </div>

    {{-- ----------------------Messaging side---------------------- --}}
    <div class="messenger-messagingView">
        {{-- header title [conversation name] amd buttons --}}
        <div class="m-header m-header-messaging">
            <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                {{-- header back button, avatar and user name --}}
                <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                    <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                    <div class="avatar av-s header-avatar"
                        style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                    </div>
                    <a href="#" class="user-name">{{ config('chatify.name') }}</a>
                </div>
            </nav>
            {{-- Internet connection --}}
            <div class="internet-connection">
                <span class="ic-connected">Connected</span>
                <span class="ic-connecting">Connecting...</span>
                <span class="ic-noInternet">No internet access</span>
            </div>
        </div>

        {{-- Messaging area with background and receiver name --}}
        <div class="m-body messages-container app-scroll chat-bg">
            {{-- Receiver name overlay --}}
            @if ($id)
                <div class="chat-recipient-name">
                    <span class="chat-recipient-text">{{ $getUser->name ?? '' }}</span>
                </div>
            @endif

            <div class="messages">
                <p class="message-hint center-el"><span>Please select a chat to start messaging</span></p>
            </div>

            {{-- Typing indicator --}}
            <div class="typing-indicator">
                <div class="message-card typing">
                    <div class="message">
                        <span class="typing-dots">
                            <span class="dot dot-1"></span>
                            <span class="dot dot-2"></span>
                            <span class="dot dot-3"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Send Message Form --}}
        @include('Chatify::layouts.sendForm')
    </div>
</div>
</div>


@include('Chatify::layouts.modals')
@include('Chatify::layouts.footerLinks')
