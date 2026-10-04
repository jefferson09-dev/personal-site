<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="bg-gray-950 text-white flex items-center justify-between px-6 py-4">
        <div>
            <a href="/">JP PERSONAL</a>
        </div>

        <div class="flex gap-6 ">
            <a href="/">Início</a>
            <a href="#sobre">Sobre</a>
            <a href="#servicos">Serviços</a>
            <a href="#resultados">Resultados</a>
            <a href="#contato">Contato</a>
        </div>

        <div>
            <a href="#contato"
                class="bg-green-500 text-black px-5 py-2 rounded-lg font-semibold hover:bg-green-400 transition houver">
                Agendar agora
            </a>
        </div>
    </nav>

    @yield('content')

</body>

</html>