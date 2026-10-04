@extends('layouts.app')

@section('title', 'Personal Trainer')

@section('content')

<!-- <section class="min-h-[70vh] max-w-7xl mx-auto w-full grid grid-cols-2 gap-12 items-center px-6"> -->
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

@endsection