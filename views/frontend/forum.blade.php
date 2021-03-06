{!! array_get($forum, 'headerHtml') !!}

<div id="app" class="App">

    <div id="app-navigation" class="App-navigation">
        <div class="top-reader">
            <div class="col-md-6">Agile Project Management Tool for growing businesses </div>
            <div class="col-md-6">Trusted by more than 40k+ professionals in over 150 countries</div>
        </div>        
    </div>

    <div id="drawer" class="App-drawer">

        <header id="header" class="App-header">
            <div id="header-navigation" class="Header-navigation"></div>
            <div class="container">
                <h1 class="Header-title">
                    <a href="{{ array_get($forum, 'baseUrl') }}" id="home-link">
                        @if ($logo = array_get($forum, 'logoUrl'))
                            <img src="{{ $logo }}" alt="{{ array_get($forum, 'title') }}" class="Header-logo">
                        @else
                            {{ array_get($forum, 'title') }}
                        @endif
                    </a>
                </h1>
                <div id="header-primary" class="Header-primary"></div>
                <div id="header-secondary" class="Header-secondary"></div>
            </div>
        </header>

    </div>

    <main class="App-content">
        <div id="content"></div>

        {!! $content !!}

        <div class="App-composer">
            <div class="container">
                <div id="composer"></div>
            </div>
        </div>
    </main>

</div>

{!! array_get($forum, 'footerHtml') !!}
