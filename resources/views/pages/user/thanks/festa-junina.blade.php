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
                            <p class="font-sans text-white font-medium text-xl mb-8 md:text-xl">
                                Verifique seu e-mail para baixa-lo!
                            </p>
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
<aboutme-component></aboutme-component>
<footer-component class="bg-black"></footer-component>
@endsection