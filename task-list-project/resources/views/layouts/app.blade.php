<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 10 Task List App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="//unpkg.com/alpinejs" defer></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<body class="container-fluid p-0 mb-5 d-flex flex-column"
      style="background: url(https://media.istockphoto.com/id/1285308242/photo/to-do-list-text-on-notepad.webp?s=2048x2048&w=is&k=20&c=d8P7XIm8o3NGPui4qExcCUF1GwbhzTGfD8jEjiezj_M=)">

    <nav class="" style="color: antiquewhite">
        <ul class="mb-3 py-3 d-flex flex-row gap-5" style="background-color: rgba(165, 42, 40, 0.8);">
            <li class="list-unstyled ">
                <a href="/" class="btn text-decoration-none fs-3 " aria-current="page">Home</a>
            </li>
            <li class="list-unstyled">
                <a href="{{ route('tasks.create') }}" class="btn text-decoration-none fs-3" aria-current="page">Add Task</a>
            </li>
        </ul>
    </nav>
    <h1 class="fs-1 text-center mb-4 text-uppercase" style="color: #090000;">@yield('title')</h1>
    <div class="animate__animated animate__fadeIn" x-data="{ flash: true}">
        @if(session()->has('success'))
            <div class="row" x-show="flash">
                <div class="col d-flex justify-content-center">
                    <div class="position-relative text-center fs-6 fst-italic text-success my-4 rounded-3 border border-success py-3 bg-success-subtle w-25" role="alert">
                        <strong>Success!!</strong>
                        <div class="text-center fs-6 fst-italic my-2 bg-success-subtle">{{ session('success') }}</div>
                        <button @click="flash = false" type="button" class="btn-close position-absolute top-0 end-0 px-3 py-2" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif
        <div class="d-flex justify-content-center">
            @yield('content')
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
