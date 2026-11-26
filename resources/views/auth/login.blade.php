
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login administrativo - JP Personal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white rounded-2xl shadow-sm p-8 w-full max-w-md">

        <div class="text-center mb-8">
            <h1 class="text-2xl font-bold text-gray-900">
                JP PERSONAL
            </h1>

            <p class="text-gray-500 mt-2">
                Acesso administrativo
            </p>
        </div>

        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-5 text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.store') }}" method="POST">

            @csrf

            <div class="mb-5">
                <label class="block text-sm font-medium mb-2">
                    E-mail
                </label>

                <input type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-green-500 outline-none"
                    placeholder="admin@email.com">
            </div>

            <div class="mb-6">
                <label class="block text-sm font-medium mb-2">
                    Senha
                </label>

                <input type="password"
                    name="password"
                    required
                    class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-green-500 outline-none"
                    placeholder="Digite sua senha">
            </div>

            <button type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-3 rounded-lg transition">
                Entrar no painel
            </button>

        </form>

        <div class="text-center mt-6">
            <a href="/" class="text-sm text-gray-500 hover:text-gray-800">
                Voltar ao site
            </a>
        </div>

    </div>

</body>
</html>
