<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visualise Valencia</title>
    @include('layouts._partials.head')

</head>
<body class="bg-lightgrey">
    <header class="bg-ash">
        <div class="container unpadded overflow">
            <h1 class="h6 text-light lightgrey">Visualise Valencia</h1>
        </div>
    </header>
    <section id="main">
        <div class="container">
            <div class="column-3 padded">
                <div class="bg-white padded shadow">
                    @yield('sidebar', 'Failed to load..')
                </div>
            </div>
            <div class="column-9 padded">
                <div class="bg-white padded shadow">
                    @yield('main', 'Failed to load..')
                </div>
            </div>
        </div>
    </section>
</body>
</html>