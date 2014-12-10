<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Valencia OpenData</title>
    <link rel="icon" type="image/png" href="/favicon.png">
    @include('layouts._partials.head')

</head>
<body class="bg-lightgrey">
    <header class="bg-ash">
        <div class="container unpadded overflow">
            <h1 id="name" class="h6 text-light lightgrey">{!! html_entity_decode(HTML::linkRoute('home', '<span>VLC</span> OpenData')) !!}</h1>
        </div>
    </header>
    <section id="main">
        <div class="container">
            <div class="column-3 padded">
                <div id="sidebar" class="bg-white padded shadow">
                    @yield('sidebar', 'Failed to load..')
                </div>
            </div>
            <div class="column-9 padded">
                <div id="content" class="bg-white padded shadow">
                    @yield('main', 'Failed to load..')
                </div>
            </div>
        </div>
    </section>
    @include('layouts._partials.bodyend')
    @yield('bodyend')
</body>
</html>