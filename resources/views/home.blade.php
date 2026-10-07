@extends('layouts.app')

@section('title', 'Personal Trainer')

@section('content')

<!-- inicio -->
<section class="min-h-[80vh] grid grid-cols-2 gap-12 items-center px-6">

    <div>

        <h1 class="text-5xl font-bold text-gray-900">
            Treine com propósito.
        </h1>

        <h2 class="text-5xl font-bold text-green-500">
            Evolua de verdade.
        </h2>

        <p class="mt-6 max-w-xl text-lg text-gray-600">
            Transforme seu treino, alcance seus objetivos
            e evolua com acompanhamento personalizado.
        </p>

        <a href="#contato"
            class="self-start inline-block mt-8 bg-green-500 text-black px-6 py-3 rounded-lg font-semibold hover:bg-green-400 transition hover:scale-105">
            Começar agora
        </a>

    </div>

    <div>
        <img src="{{ asset('images/personal.jpg') }}" alt="Personal Trainer"
            class="w-full h-96 object-contain rounded-2xl">
    </div>

</section>

<!-- Sobre o Personal -->
<section id="sobre" class="px-6 py-16">
    <div class="max-w-7xl mx-auto grid grid-cols-2 gap-12 items-center">

        <div>
            <h2 class="text-4xl font-bold text-gray-900">
                Sobre o Personal
            </h2>

            <p class="mt-6 text-lg text-gray-600 leading-relaxed">
                Treinamento personalizado para quem busca evolução,
                saúde e resultados de verdade.
            </p>

            <p class="mt-4 text-gray-600 leading-relaxed">
                Cada treino é pensado de acordo com seus objetivos,
                seu nível e sua evolução. O foco é acompanhar você
                de perto para transformar esforço em resultado.
            </p>
        </div>

        <div class="grid gap-4">

            <div class="p-6 bg-gray-50 border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900">
                    Treino personalizado
                </h3>

                <p class="mt-2 text-gray-600">
                    Exercícios planejados de acordo com seus objetivos.
                </p>
            </div>

            <div class="p-6 bg-gray-50 border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900">
                    Acompanhamento
                </h3>

                <p class="mt-2 text-gray-600">
                    Evolução acompanhada de perto durante sua jornada.
                </p>
            </div>

            <div class="p-6 bg-gray-50 border border-gray-200 rounded-xl shadow-sm hover:shadow-md transition">
                <h3 class="text-xl font-bold text-gray-900">
                    Foco em resultados
                </h3>

                <p class="mt-2 text-gray-600">
                    Estratégias para ajudar você a alcançar seus objetivos.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Serviços -->
<section id="servicos" class="px-6 py-20 bg-gray-50">

    <div class="max-w-7xl mx-auto">

        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900">
                Serviços
            </h2>

            <p class="mt-4 text-lg text-gray-600">
                Treinamento pensado para ajudar você a alcançar seus objetivos.
            </p>
        </div>

        <div class="grid grid-cols-3 gap-6">

            <div class="p-6 bg-white rounded-xl shadow-sm">
                <h3 class="text-xl font-bold text-gray-900">
                    Personal Individual
                </h3>

                <p class="mt-3 text-gray-600">
                    Treinamento personalizado de acordo com seu objetivo,
                    nível e evolução.
                </p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow-sm">
                <h3 class="text-xl font-bold text-gray-900">
                    Consultoria Online
                </h3>

                <p class="mt-3 text-gray-600">
                    Acompanhamento à distância com planejamento e orientação
                    durante seus treinos.
                </p>
            </div>

            <div class="p-6 bg-white rounded-xl shadow-sm">
                <h3 class="text-xl font-bold text-gray-900">
                    Avaliação Física
                </h3>

                <p class="mt-3 text-gray-600">
                    Análise dos seus objetivos e evolução para melhorar
                    seus resultados.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- Botão voltar ao topo -->
<button
    id="btn-topo"
    onclick="window.scrollTo({ top: 0, behavior: 'smooth' })"
    class="hidden fixed bottom-6 right-6 z-50 bg-green-500 text-black
           w-12 h-12 rounded-full font-bold text-xl
           shadow-lg hover:bg-green-400 hover:scale-110 transition">
    ↑
</button>

<script>
    const btnTopo = document.getElementById('btn-topo');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            btnTopo.classList.remove('hidden');
        } else {
            btnTopo.classList.add('hidden');
        }
    });
</script>

<section id="resultados" class="px-6 py-20">

    <div class="max-w-7xl mx-auto">

        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-900">
                Resultados
            </h2>

            <p class="mt-4 text-lg text-gray-600">
                Evolução que você consegue acompanhar.
            </p>
        </div>

        <div class="mt-12 grid grid-cols-3 gap-8">

            <div class="text-center p-8 bg-gray-50 rounded-xl">
                <div class="text-4xl font-bold text-green-500">
                    +50
                </div>

                <h3 class="mt-3 text-xl font-bold text-gray-900">
                    Alunos acompanhados
                </h3>

                <p class="mt-2 text-gray-600">
                    Pessoas acompanhadas durante sua evolução.
                </p>
            </div>

            <div class="text-center p-8 bg-gray-50 rounded-xl">
                <div class="text-4xl font-bold text-green-500">
                    +120
                </div>

                <h3 class="mt-3 text-xl font-bold text-gray-900">
                    Treinos realizados
                </h3>

                <p class="mt-2 text-gray-600">
                    Treinos planejados e acompanhados.
                </p>
            </div>

            <div class="text-center p-8 bg-gray-50 rounded-xl">
                <div class="text-4xl font-bold text-green-500">
                    95%
                </div>

                <h3 class="mt-3 text-xl font-bold text-gray-900">
                    Satisfação
                </h3>

                <p class="mt-2 text-gray-600">
                    Foco em experiência e resultados.
                </p>
            </div>

        </div>

        <p class="mt-12 text-center text-xl font-semibold text-gray-900">
            Seu resultado começa com um plano.
            Sua evolução continua com acompanhamento.
        </p>

    </div>

</section>

<section id="contato" class="px-6 py-24 bg-gray-50">

    <div class="max-w-7xl mx-auto">

        <div class="text-center">
            <h2 class="text-4xl font-bold text-gray-900">
                Entre em contato
            </h2>

            <p class="mt-4 text-lg text-gray-600">
                Vamos conversar sobre seus objetivos e começar sua evolução.
            </p>
        </div>

        <!-- <div class="mt-12 max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-sm"> -->
        <div class="mt-12 max-w-xl mx-auto bg-white p-6 rounded-2xl shadow-sm">

            <form action="/contato" method="POST">
                @csrf

                <div>
                    <label class="block text-sm font-semibold text-gray-900">
                        Nome
                    </label>

                    <input
                        type="text"
                        name="nome"
                        placeholder="Seu nome"
                        class="mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div class="mt-5">
                    <label class="block text-sm font-semibold text-gray-900">
                        E-mail
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="seu@email.com"
                        class="mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <div class="mt-5">
                    <label class="block text-sm font-semibold text-gray-900">
                        Mensagem
                    </label>

                    <textarea
                        name="mensagem"
                        rows="4"
                        placeholder="Conte um pouco sobre seu objetivo..."
                        class="mt-2 w-full px-4 py-3 border border-gray-300 rounded-lg
                               focus:outline-none focus:ring-2 focus:ring-green-500"></textarea>
                </div>

                <button
                    type="submit"
                    class="mt-6 w-full bg-green-500 text-black py-3 rounded-lg
                           font-semibold hover:bg-green-400 hover:scale-[1.02]
                           transition">
                    Enviar mensagem
                </button>

            </form>

        </div>

    </div>

</section>

@endsection