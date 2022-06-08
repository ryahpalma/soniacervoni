@extends('layouts.master')

@push('custom-css')
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
<link href="{{asset('img/content/sonia/sonia-thanks-mesa-posta_WH_854x840px.webp')}}" rel="preload" as="image">
@endpush

@section('content')
<navbar-component class="bg-orange-accent-800"></navbar-component>
<section class="bg-cyan-900">
    <div class="px-4 pt-2 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl sm:px-24 md:px-24 lg:px-0 lg:pt-20">
        <div class="flex flex-col justify-evenly lg:flex-row">
            <div class="basis-4/12 px-5 self-center">
                <div class="mb-15 lg:max-w-lg lg:px-5 lg:mb-0">
                    <div class="">
                        <div class="text-center lg:mx-0 mb-5">
                            <h1
                                class="font-barlow-condensed text-white font-extrabold mb-1 uppercase text-4xl md:mt-4 lg:text-6xl">
                                Parabéns!
                            </h1>
                            <h2
                                class="font-barlow-condensed text-yellow-600 font-extrabold mb-4 uppercase text-2xl lg:text-4xl">
                                Seu molde já<br>está a caminho.
                            </h2>
                            <p class="font-sans text-white font-medium text-md mb-8 md:text-lg">
                                Ele já deve ter chegado em seu email. Imprima e acompanhe meu Instagram para saber como
                                recortar e montar.
                            </p>
                            <a href="https://www.instagram.com/soniacervoni/" class="inline-flex items-center 
                            justify-center h-12 px-4 py-2 text-md font-bold text-center text-white 
                            bg-orange-accent-800 rounded-full hover:bg-orange-accent-40 uppercase lg:px-2 lg:text-lg">
                                Quero preparar agora!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid content-end">
                <img class="hidden lg:block w-[9rem] 'mx-auto lg:mx-0 md:w-[12rem] lg:w-[22rem] xl:w-[30rem]"
                    :src="'/img/content/sonia/sonia-thanks-mesa-posta_WH_854x840px.webp'" alt="Sonia Cervoni">
                <img class="block lg:hidden w-[15rem] mx-auto"
                    :src="'/img/content/sonia/sonia-thanks-mesa-posta_WH_472x465px.webp'" alt="Sonia Cervoni">
            </div>
            <div class="md:basis-4/12 self-center mb-10 lg:px-3 xl:px-4">
                <coursethanks-component></coursethanks-component>
            </div>
        </div>
    </div>
</section>
<section class="bg-[#8CEAC8]">
    <div class="px-4 py-10 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-10 lg:px-8 lg:py-10">
        <div
            class="flex flex-col items-stretch justify-center gap-9 md:flex-row space-x-5 md:justify-between lg:justify-center">
            <div class="basis-4/12 order-last lg:order-none">
                <figure class="w-[14rem] sm:w-[15rem] md:w-[18rem] lg:w-full mx-auto">
                    <img :src="'/img/content/sonia/sonia-orange-circle_WH_550x660px.webp'" alt="Autora do Mesa Posta">
                </figure>
            </div>
            <div class="basis-4/12 self-center font-barlow-condensed text-center md:text-left md:basis-6/12 lg:basis-4/12">
                <h1 class="font-semibold uppercase mb-1 text-black text-4xl lg:mb-2 lg:text-6xl">Sonia
                    Cervoni</h1>
                <h3 class="font-semibold uppercase text-[#2A956E] mb-5 text-md md:text-md xl:text-lg">
                    Especialista em Mesa Posta, Porta-guardanapos & Decoração de Natal</h3>
                <p class="font-medium text-gray-900 text-lg xl:text-xl md:max-w-xs lg:md:max-w-md">
                    Formada em magistério e pedagogia, desde a juventude demonstrei paixão por decorações e artesanatos,
                    enquanto estava na 8ª série já tinha participação nas decorações. E no meu curso de magistério não
                    foi diferente, cuidava das decorações e até mesmo das roupas das formandas. E durante estes anos me
                    aprimorei e me desenvolvi profissionalmente com Decorações, Porta-Guardanapos e Mesa Posta. Hoje o meu
                    objetivo é ensinar a todos, em poucas semanas, todas as técnicas que aprendi nesses 30 anos.
                </p>
            </div>
        </div>
    </div>
</section>
<footer-component class="bg-black"></footer-component>
@endsection