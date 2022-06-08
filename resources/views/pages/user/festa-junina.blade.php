@extends('layouts.master')

@push('custom-css')
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
<link href="{{asset('img/content/sonia/sonia-cropped-headline_WH_668x639px.webp')}}" rel="preload" as="image">
<link href="{{asset('img/content/sonia/sonia-orange_WH_800x1000px.webp')}}" rel="preload" as="image">
@endpush

@section('content')
<navbar-component class="bg-orange-accent-800 hidden md:block"></navbar-component>
<section
    class="bg-[#8CEAC8] bg-[url('/img/content/festa-junina/bg-festa-junina.webp')] bg-center bg-no-repeat bg-cover bg-local">
    <div class="px-4 pt-2 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl sm:px-24 md:px-24 lg:px-0 lg:pt-20">
        <div class="flex flex-col justify-evenly lg:flex-row">
            <div class="basis-4/12 px-5">
                <div class="mb-2 lg:max-w-lg lg:px-5 lg:mb-0">
                    <div class="lg:max-w-xl">
                        <div class="lg:max-w-[20rem]">
                            <figure
                                class="hidden lg:block mx-auto w-[9rem] sm:w-[15rem] md:w-[20rem] lg:w-[15rem] xl:w-[20rem]">
                                <img :src="'/img/content/festa-junina/mold-type_WH_600x300px.webp'"
                                    alt="Molde Festa Junina">
                            </figure>
                            <figure
                                class="block lg:hidden mx-auto w-[9rem] sm:w-[15rem] md:w-[20rem] lg:w-[15rem] xl:w-[20rem]">
                                <img :src="'/img/content/festa-junina/mold-type-logo_WH_800x510px.webp'"
                                    alt="Molde Festa Junina">
                            </figure>
                        </div>
                        <div>
                            <figure class="my-7 hidden lg:block w-[20rem]">
                                <img :src="'/img/content/festa-junina/headline-mold_WH_695x180px.webp'"
                                    alt="Headline Festa Junina">
                            </figure>
                            <p class="max-w-sm my-7 hidden font-barlow-condensed font-semibold text-md text-gray-900 
                            uppercase md:text-2xl lg:block">
                                <span class="text-green-accent-800 font-extrabold">
                                    Divirta-se e comemore este feriado
                                </span>
                                <br>
                                com seu próprio porta-guardanapos de balão. É fácil de fazer e é
                                uma ótima maneira de criar uma peça central única para sua mesa de festa junina.
                                Garanta já seu molde preenchendo o formulário!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid content-end">
                <img class="hidden lg:block w-[9rem] 'mx-auto lg:mx-0 md:w-[12rem] lg:w-[22rem] xl:w-[22rem]"
                    :src="'/img/content/sonia/sonia-orange_WH_800x1000px.webp'" alt="Sonia Cervoni">
                <img class="block lg:hidden w-[17rem] mx-auto lg:mx-0 md:w-[19rem] lg:w-[22rem] xl:w-[22rem]"
                    :src="'/img/content/sonia/sonia-cropped-headline_WH_668x639px.webp'" alt="Sonia Cervoni">
            </div>
            <div class="basis-4/12 lg:px-3 xl:px-6 lg:pt-5">
                <section id="form" class="max-w-xl py-2 lg:py-6 px-4 drop-shadow-lg mx-auto bg-white border-2
                 border-gray-400 rounded-lg md:px-7">
                    <div>
                        <div class="text-center text-[#1A3D1A]">
                            <h1 class="font-barlow-condensed font-extrabold uppercase text-2xl xl:text-2xl">
                                Preencha o formulário <br class="block lg:hidden">para receber o molde
                            </h1>
                        </div>
                        <div id="mauticform_wrapper_moldesfestajunina" class="mt-2">
                            <form role="form" method="post" action="https://mautic.ryahpalma.dev/form/submit?formId=4"
                                id="mauticform_moldesfestajunina" data-mautic-form="moldesfestajunina"
                                enctype="multipart/form-data">
                                <div class="space-y-4" data-mautic-form-page="1">
                                    <div id="mauticform_moldesfestajunina_nome" data-validate="nome"
                                        data-validation-type="text">
                                        <label for="mauticform_input_moldesfestajunina_nome"
                                            class="block text-sm font-medium text-black">Nome*</label>
                                        <div class="mt-1">
                                            <input id="mauticform_input_moldesfestajunina_nome" name="mauticform[nome]"
                                                value="" type="text" autocomplete="name" required
                                                placeholder="Coloque aqui seu nome" class="block w-full px-5 py-1 text-sm md:text-base 
                                          placeholder-gray-500 border border-transparent rounded-lg bg-gray-100 focus:outline-none
                                            focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 
                                            focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div id="mauticform_moldesfestajunina_whatsapp" data-validate="whatsapp"
                                        data-validation-type="tel">
                                        <label id="mauticform_input_moldesfestajunina_whatsapp"
                                            class="block text-sm font-medium text-black">WhatsApp</label>
                                        <div class="mt-1">
                                            <input id="mauticform_input_moldesfestajunina_whatsapp"
                                                name="mauticform[whatsapp]" value="" type="number"
                                                autocomplete="tel-national" required
                                                placeholder="Coloque aqui seu WhatsApp"
                                                class="block w-full px-5 py-1 text-sm md:text-base placeholder-gray-500 
                                                border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent 
                                                focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div id="mauticform_moldesfestajunina_email" data-validate="email"
                                        data-validation-type="email">
                                        <label for="mauticform_input_moldesfestajunina_email"
                                            class="block text-sm font-medium text-black">E-mail*
                                        </label>
                                        <div class="mt-1">
                                            <input id="mauticform_input_moldesfestajunina_email"
                                                name="mauticform[email]" value="" type="email"
                                                autocomplete="current-password" required
                                                placeholder="Coloque aqui seu e-mail" class="block w-full px-5 py-1 
                                            text-sm md:text-base text-neutral-600 placeholder-gray-500 border 
                                            border-transparent rounded-lg bg-gray-100 focus:outline-none 
                                            focus:border-transparent focus:ring-2 focus:ring-white 
                                            focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div id="mauticform_moldesfestajunina_submit">
                                        <button type="submit" class="flex items-center justify-center w-full px-3 sm:px-2 lg:px-8 py-3
                                             text-md lg:text-lg font-bold text-center text-white transition
                                             first-line:duration-500 ease-in-out transform bg-orange-accent-800 rounded-full
                                           hover:bg-orange-accent-400 focus:outline-none focus:ring-2 focus:ring-offset-2 
                                           focus:ring-orange-accent-400 uppercase">Quero meu molde</button>
                                    </div>
                                    <div class="block">
                                        <div class="mt-2">
                                            <p class="text-sm text-center">
                                                Ao clicar no botão e informar meus dados, estou ciente das diretrizes
                                                das<br>
                                                <a class="underline text-orange-accent-800 hover:text-black"
                                                    href="/politica-de-privacidade" target="_blank">
                                                    Políticas de Privacidade
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="text-sm text-center">
                                        Relaxa, não enviamos spam.
                                    </p>
                                    <input type="hidden" name="mauticform[formId]" id="mauticform_moldesfestajunina_id"
                                        value="4">
                                    <input type="hidden" name="mauticform[return]"
                                        id="mauticform_moldesfestajunina_return" value="">
                                    <input type="hidden" name="mauticform[formName]"
                                        id="mauticform_moldesfestajunina_name" value="moldesfestajunina">
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <section id="title">
                    <p class="text-center my-4 block font-barlow font-semibold text-md text-black 
                    uppercase md:text-xl lg:hidden">
                        <span class="text-green-accent-800 font-extrabold">
                            Divirta-se e comemore este feriado
                        </span>
                        <br>
                        com seu próprio porta-guardanapos de balão. É fácil de fazer e é
                        uma ótima maneira de criar uma peça central única para sua mesa de festa junina.
                        Garanta já seu molde preenchendo o formulário!
                    </p>
                </section>
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
            <div
                class="basis-4/12 self-center font-barlow-condensed text-center md:text-left md:basis-6/12 lg:basis-4/12">
                <h3 class="font-semibold uppercase text-[#2A956E] text-md md:text-md xl:text-xl">
                    Especialista em Mesa Posta & Costura</h3>
                <h1 class="font-semibold uppercase mb-4 text-black text-4xl lg:text-6xl">Sonia
                    Cervoni</h1>
                <p class="font-medium text-gray-900 text-lg xl:text-xl md:max-w-xs lg:md:max-w-md">
                    Formada em magistério e pedagogia, desde a juventude demonstrei paixão por decorações e artesanatos,
                    enquanto estava na 8ª série já tinha participação nas decorações. E no meu curso de magistério não
                    foi diferente, cuidava das decorações e até mesmo das roupas das formandas. E durante estes anos me
                    aprimorei e me desenvolvi profissionalmente com Costura e Mesa Posta. Hoje o meu objetivo é ensinar
                    as pessoas em poucas semanas todas as técnicas que aprendi nesses 30 anos.
                </p>
            </div>
        </div>
    </div>
</section>
<footer-component class="bg-black"></footer-component>
@endsection