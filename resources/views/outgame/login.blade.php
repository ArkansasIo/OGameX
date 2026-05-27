@extends('outgame.layouts.main')

@section('content')

<style>
    .uceaw-hero {
        background: linear-gradient(135deg, #0a0e27 0%, #1a1a3e 50%, #0f0f24 100%);
        position: relative;
        overflow: hidden;
        padding: 80px 20px;
        text-align: center;
        border-bottom: 3px solid #00d4ff;
    }
    
    .uceaw-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: 
            radial-gradient(circle at 20% 50%, rgba(0, 212, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(255, 0, 128, 0.1) 0%, transparent 50%);
        pointer-events: none;
    }
    
    .uceaw-hero-content {
        position: relative;
        z-index: 1;
        max-width: 900px;
        margin: 0 auto;
    }
    
    .uceaw-hero h1 {
        font-size: 48px;
        color: #00d4ff;
        text-shadow: 0 0 20px rgba(0, 212, 255, 0.5);
        margin: 0 0 20px 0;
        font-weight: bold;
        letter-spacing: 2px;
    }
    
    .uceaw-tagline {
        font-size: 20px;
        color: #a0a0ff;
        margin: 20px 0 40px 0;
        text-shadow: 0 0 10px rgba(160, 160, 255, 0.3);
    }
    
    .uceaw-features {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin: 40px 0;
    }
    
    .uceaw-feature {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid #00d4ff;
        border-radius: 8px;
        padding: 20px;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }
    
    .uceaw-feature:hover {
        background: rgba(0, 212, 255, 0.1);
        box-shadow: 0 0 20px rgba(0, 212, 255, 0.3);
        transform: translateY(-5px);
    }
    
    .uceaw-feature-title {
        font-size: 18px;
        color: #00d4ff;
        margin: 0 0 10px 0;
        font-weight: bold;
    }
    
    .uceaw-feature-desc {
        color: #b0b0b0;
        font-size: 14px;
    }
    
    .uceaw-cta-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        margin-top: 40px;
        flex-wrap: wrap;
    }
    
    .uceaw-btn {
        padding: 15px 40px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: bold;
        text-decoration: none;
        display: inline-block;
    }
    
    .uceaw-btn-primary {
        background: linear-gradient(135deg, #00d4ff 0%, #0099cc 100%);
        color: #000;
        box-shadow: 0 0 20px rgba(0, 212, 255, 0.4);
    }
    
    .uceaw-btn-primary:hover {
        box-shadow: 0 0 40px rgba(0, 212, 255, 0.8);
        transform: scale(1.05);
    }
    
    .uceaw-btn-secondary {
        background: transparent;
        color: #00d4ff;
        border: 2px solid #00d4ff;
    }
    
    .uceaw-btn-secondary:hover {
        background: rgba(0, 212, 255, 0.1);
        box-shadow: 0 0 20px rgba(0, 212, 255, 0.5);
    }
    
    .uceaw-content-section {
        background: #0f0f0f;
        padding: 60px 20px;
    }
    
    .uceaw-section {
        max-width: 1000px;
        margin: 0 auto 60px;
    }
    
    .uceaw-section h2 {
        color: #00d4ff;
        font-size: 32px;
        margin-bottom: 30px;
        text-align: center;
        text-shadow: 0 0 10px rgba(0, 212, 255, 0.3);
    }
    
    .uceaw-section p {
        color: #c0c0c0;
        line-height: 1.8;
        font-size: 16px;
        margin-bottom: 20px;
    }
    
    .uceaw-video-container {
        position: relative;
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        background: #000;
        border-radius: 10px;
        overflow: hidden;
        border: 2px solid #00d4ff;
    }
    
    .uceaw-video-container iframe {
        width: 100%;
        height: 400px;
        border: none;
    }

    #menu {
        background: transparent !important;
    }
    
    #tabContentContainer {
        background: transparent !important;
        padding: 0 !important;
    }
</style>

<div id="menu">
    <ul id="tabs">
        <li><a id="tab1" href="#tabContentContainer">{{ __('t_external.nav.home') }}</a></li>
        <li><a id="tab2" href="#">{{ __('t_external.nav.about') }}</a></li>
        <li><a id="tab3" href="#">{{ __('t_external.nav.media') }}</a></li>
    </ul>
    <a id="tab4" href="http://wiki.ogame.org" target="_blank">{{ __('t_external.nav.wiki') }}</a>
    <br class="clearfloat" />
    <div id="tabContentContainer">
        <div class="tabContent">
            <div id="ajaxContent">
                <!-- Hero Section -->
                <div class="uceaw-hero">
                    <div class="uceaw-hero-content">
                        <h1>UNIVERSE CIVILIZATION EMPIRE AT WAR</h1>
                        <p class="uceaw-tagline">Build Your Empire • Command Your Fleets • Conquer the Galaxy</p>
                        
                        <div class="uceaw-features">
                            <div class="uceaw-feature">
                                <div class="uceaw-feature-title">🚀 Epic Space Combat</div>
                                <div class="uceaw-feature-desc">Command massive fleets and engage in strategic space warfare</div>
                            </div>
                            <div class="uceaw-feature">
                                <div class="uceaw-feature-title">👥 Multiplayer Empire</div>
                                <div class="uceaw-feature-desc">Compete with thousands of players in a dynamic universe</div>
                            </div>
                            <div class="uceaw-feature">
                                <div class="uceaw-feature-title">⚡ Real-Time Strategy</div>
                                <div class="uceaw-feature-desc">Make strategic decisions that affect your civilization</div>
                            </div>
                        </div>
                        
                        <div class="uceaw-cta-buttons">
                            @if (session('ban_message'))
                                <span class="help-block" style="color: #e74c3c; display: block; width: 100%; margin-bottom: 20px;">
                                    <strong>{{ session('ban_message') }}</strong>
                                </span>
                            @endif

                            @if ($errors->has('email'))
                                <span class="help-block" style="color: #e74c3c; display: block; width: 100%; margin-bottom: 20px;">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                            @if ($errors->has('password'))
                                <span class="help-block" style="color: #e74c3c; display: block; width: 100%; margin-bottom: 20px;">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            
                            <a href="/register" class="uceaw-btn uceaw-btn-primary">START PLAYING NOW</a>
                            <a href="#login" class="uceaw-btn uceaw-btn-secondary">LOG IN</a>
                        </div>
                    </div>
                </div>

                <!-- Main Content Section -->
                <div class="uceaw-content-section">
                    <!-- About Section -->
                    <div class="uceaw-section">
                        <h2>Welcome to the Universe</h2>
                        <p>{!! __('t_external.home.description_html') ?? 'Embark on an epic journey through the cosmos. Build your civilization from the ground up, expand your territories across star systems, and engage in thrilling battles with other players. Every decision matters, every resource counts, and every conquest brings you closer to galactic dominance.' !!}</p>
                        <p style="text-align: center; margin-top: 30px;">
                            <a href="#" target="_blank" class="uceaw-btn uceaw-btn-secondary">{{ __('t_external.home.board_btn') ?? 'JOIN THE COMMUNITY' }}</a>
                        </p>
                    </div>

                    <!-- Trailer Section -->
                    <div class="uceaw-section">
                        <h2>{{ __('t_external.home.trailer_title') ?? 'Experience the Action' }}</h2>
                        <div class="uceaw-video-container">
                            <iframe src="https://www.youtube.com/embed/Pb6Pgoxajqg?controls=1&autoplay=0" allowfullscreen></iframe>
                        </div>
                        <p style="text-align: center; margin-top: 30px; font-style: italic;">Watch the official trailer and see what awaits you in the universe.</p>
                    </div>

                    <!-- Features Section -->
                    <div class="uceaw-section">
                        <h2>Game Features</h2>
                        <div class="uceaw-features">
                            <div class="uceaw-feature">
                                <div class="uceaw-feature-title">🏗️ Build & Expand</div>
                                <div class="uceaw-feature-desc">Construct facilities, research technologies, and expand your empire across multiple planets</div>
                            </div>
                            <div class="uceaw-feature">
                                <div class="uceaw-feature-title">⚔️ Strategic Warfare</div>
                                <div class="uceaw-feature-desc">Form alliances, plan raids, and execute devastating attacks on your enemies</div>
                            </div>
                            <div class="uceaw-feature">
                                <div class="uceaw-feature-title">💰 Economy Management</div>
                                <div class="uceaw-feature-desc">Mine resources, trade with others, and manage your civilization's economy</div>
                            </div>
                            <div class="uceaw-feature">
                                <div class="uceaw-feature-title">🌙 Moon Base Technology</div>
                                <div class="uceaw-feature-desc">Advanced moonbase capabilities for ultimate defensive and offensive advantage</div>
                            </div>
                            <div class="uceaw-feature">
                                <div class="uceaw-feature-title">🤝 Alliances & Diplomacy</div>
                                <div class="uceaw-feature-desc">Form powerful alliances and negotiate treaties with other players</div>
                            </div>
                            <div class="uceaw-feature">
                                <div class="uceaw-feature-title">📊 Rankings & Achievements</div>
                                <div class="uceaw-feature-desc">Climb the ranks and unlock special achievements and rewards</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contentFooter"></div>
</div>

@endsection
