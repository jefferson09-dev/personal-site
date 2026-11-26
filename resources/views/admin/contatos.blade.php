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


        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mb-8">

            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">
                    Painel administrativo
                </h1>

                <p class="text-gray-600">
                    Gerencie as mensagens recebidas pelo site.
                </p>
            </div>

            <a href="/"
                class="inline-block bg-gray-900 hover:bg-gray-700 text-white px-5 py-3 rounded-lg text-center transition">
                Voltar ao site
            </a>

            <form action="{{ route('logout') }}" method="POST">
                @csrf

                <button type="submit"
                    class="bg-red-500 hover:bg-red-600 text-white px-5 py-3 rounded-lg transition">
                    Sair
                </button>
            </form>

        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-6">

            {{-- TOTAL DE CONTATOS --}}
            <div class="bg-white rounded-xl shadow-sm p-5">
                <p class="text-gray-500 text-sm">
                    Total de mensagens recebidas
                </p>

                <p class="text-3xl font-bold text-green-600 mt-1">
                    {{ $totalContatos }}
                </p>
            </div>

            {{-- MENSAGENS NÃO LIDAS --}}
            <div class="bg-white rounded-xl shadow-sm p-5">
                <p class="text-gray-500 text-sm">
                    Mensagens não lidas
                </p>

                <p class="text-3xl font-bold text-red-500 mt-1">
                    {{ $contatosNaoLidos }}
                </p>
            </div>

        </div>


        {{-- FILTROS DE MENSAGENS --}}
        <div class="bg-white rounded-xl shadow-sm p-4 mb-6">

            <h2 class="text-sm font-semibold text-gray-700 mb-3">
                Filtrar mensagens
            </h2>

            <div class="flex flex-wrap gap-2">

                <a href="{{ route('admin.contatos.index', ['filtro' => 'todos']) }}"
                    class="px-4 py-2 rounded-lg text-sm font-medium
            {{ $filtro === 'todos' ? 'bg-gray-900 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    Todas
                </a>

                <a href="{{ route('admin.contatos.index', ['filtro' => 'nao_lidas']) }}"
                    class="px-4 py-2 rounded-lg text-sm font-medium
            {{ $filtro === 'nao_lidas' ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    Não lidas
                </a>

                <a href="{{ route('admin.contatos.index', ['filtro' => 'lidas']) }}"
                    class="px-4 py-2 rounded-lg text-sm font-medium
            {{ $filtro === 'lidas' ? 'bg-green-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}">
                    Lidas
                </a>

            </div>

        </div>


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

            {{-- MARCAR COMO LIDA --}}
            @if (!$contato->lida)

            <form action="{{ route('admin.contatos.lida', $contato->id) }}"
                method="POST">

                @csrf
                @method('PATCH')

                <button type="submit"
                    class="mt-4 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                    Marcar como lida
                </button>
            </form>

            @else

            <span class="mt-4 inline-block text-green-600 font-semibold">
                ✓ Mensagem lida
            </span>

            @endif

            {{-- EXCLUIR CONTATO --}}
            <form action="{{ route('admin.contatos.destroy', $contato->id) }}"
                method="POST"
                onsubmit="return confirm('Tem certeza que deseja excluir este contato?')">

                @csrf
                @method('DELETE')

                <button type="submit"
                    class="mt-4 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg">
                    Excluir contato
                </button>
            </form>

        </div>

        @empty

        <div class="bg-white rounded-xl shadow-sm p-6 text-gray-600">
            Nenhum contato recebido ainda.
        </div>

        @endforelse

    </div>

</body>

</html>