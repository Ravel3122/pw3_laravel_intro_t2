<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Sistema de Eventos')
    </title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 min-h-screen">

    <header class="bg-slate-900 text-white">
        <div class="max-w-6xl mx-auto px-6 py-4">
            <h1 class="text-xl font-bold">
                Sistema de Eventos
            </h1>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-6 py-8">

        @yield('content')

    </main>

</body>
</html>
