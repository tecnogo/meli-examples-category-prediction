<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tecnogo - Predicción de categorías</title>

    <meta property="og:image" content="https://www.tecnogo.com/wp-content/uploads/2019/03/tecnogo-logo.png"/>

    <link rel="shortcut icon" href="https://www.tecnogo.com/wp-content/uploads/2019/03/favicon-32x32-1.png"
          type="image/x-icon"/>
    <link rel="apple-touch-icon" href="https://www.tecnogo.com/wp-content/uploads/2019/03/apple-icon-57x57-1.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="https://www.tecnogo.com/wp-content/uploads/2019/03/apple-icon-114x114-1.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="bg-light" style="position: relative;">
<div class="container">
    <div class="row">
        <div class="col py-5 text-center">
            <a href="https://www.tecnogo.com/" target="_blank">
                <img class="mb-4" src="https://avatars1.githubusercontent.com/u/49149236" alt=""
                     width="72"
                     height="72"
                     title="Tecnogo"
                />
            </a>

            <h2>Consulta la mejor categoría para tu publicación de Mercadolibre</h2>

            <form method="POST">
                <div class="input-group mt-5">
                    <input class="form-control form-control-lg"
                           type="text"
                           placeholder="Ingresá el producto que deseas categorizar"
                           name="item_title"
                           value="{{ $item_title ?? '' }}"
                           autofocus
                    />

                    <div class="input-group-append">
                        <button class="btn btn-primary">Categorizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if (isset($prediction))
                @include('table')
            @endif
        </div>
    </div>

    <hr />

    <div class="row">
        <div class="col text-center pl-5 mt-5">
            <h4 class="text-left">web.php</h4>

            <pre class="text-left">
                <code>{!! highlight_string(file_get_contents(base_path('routes/web.php')), true) !!}</code>
            </pre>
        </div>
    </div>

    <div class="row">
        <div class="col text-center pl-5">
            <h4 class="text-left">table.blade.php</h4>

            <pre class="text-left">
                <code>{!! highlight_string(file_get_contents(base_path('resources/views/table.blade.php')), true) !!}</code>
            </pre>
        </div>
    </div>
</div>

<footer class="text-muted text-center text-small" style="position: absolute; bottom: 15px; right: 15px;">
    &copy; {{ date('Y') }} Tecnogo
</footer>
</body>
</html>
