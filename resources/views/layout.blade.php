<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="d-flex flex-column min-vh-100">

    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link active">Home</a></li>
                <li class="nav-item"><a href="{{route('category.index')}}" class="nav-link">Categorias</a></li>
                <li class="nav-item"><a href="{{route('reward.index')}}" class="nav-link">Recompensas</a></li>
                <li class="nav-item"><a href="{{route('action.index')}}" class="nav-link">Ações</a></li>
                <li class="nav-item"><a href="{{route('useraction.index')}}" class="nav-link">Ações do usuário</a></li>
            </ul>
        </header>
    </div>

    <div class="container flex-fill">
        @yield('content')
    </div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-body-secondary">© 2025 Company, Inc</span>
            </div>
            <!-- <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="#">Instagram</a></li>
                <li class="ms-3"><a class="text-body-secondary" href="#">Facebook</a></li>
            </ul> -->
        </footer>
    </div>

</body>

</html>
