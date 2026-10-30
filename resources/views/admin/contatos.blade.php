<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contatos recebidos</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen p-6">

    <div class="max-w-5xl mx-auto">

        <h1 class="text-3xl font-bold text-gray-900 mb-2">
            Contatos recebidos
        </h1>

        <p class="text-gray-600 mb-8">
            Mensagens enviadas pelo formulário do site.
        </p>

        <div class="bg-white rounded-xl shadow-sm p-5 mb-6">
            <p class="text-gray-500 text-sm">
                Total de mensagens recebidas
            </p>

            <p class="text-3xl font-bold text-green-600 mt-1">
                {{ $totalContatos }}
            </p>
        </div>
        </p>

        @forelse ($contatos as $contato)

        <div class="bg-white rounded-xl shadow-sm p-6 mb-4">

            <h2 class="text-lg font-bold text-gray-900">
                {{ $contato->nome }}
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                {{ $contato->email }}
            </p>

            <div class="mt-4 text-gray-700 whitespace-pre-line">
                {{ $contato->mensagem }}
            </div>

            <p class="text-xs text-gray-400 mt-4">
                Recebido em:
                {{ $contato->created_at->format('d/m/Y H:i') }}
            </p>

        </div>

        @empty

        <div class="bg-white rounded-xl shadow-sm p-6 text-gray-600">
            Nenhum contato recebido ainda.
        </div>

        @endforelse

    </div>

</body>

</html>