@extends('layouts.master')

@push('custom-css')
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
@endpush

@section('content')
<navbar-component class="bg-orange-accent-800 hidden md:block"></navbar-component>
<section
    class="bg-[#8CEAC8] bg-[url('/img/content/festa-junina/background-1.webp')] bg-center bg-no-repeat bg-cover bg-local">
    <div class="px-4 pt-2 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl sm:px-24 md:px-24 lg:px-0 lg:pt-20">
        <div class="flex flex-col justify-evenly lg:flex-row">
            <div class="basis-4/12 px-5">
                <div class="mb-2 lg:max-w-lg lg:px-5 lg:mb-0">
                    <div class="lg:max-w-xl">
                        <div class="lg:max-w-[20rem]">
                            <picture>
                                <source :srcset="'/img/content/festa-junina/mold-type_WH_600x300px.webp'"
                                    class="mx-auto w-[9rem] sm:w-[15rem] md:w-[20rem] lg:w-[15rem] xl:w-[20rem]"
                                    media="(min-width: 1024px)">
                                <img :src="'/img/content/festa-junina/mold-type-logo_WH_800x510px.webp'"
                                    class="mx-auto w-[9rem] sm:w-[15rem] md:w-[20rem] lg:w-[15rem] xl:w-[20rem]"
                                    alt="Festa Junina" decoding="async">
                            </picture>
                        </div>
                        <div>
                            <picture>
                                <source :srcset="'/img/content/festa-junina/headline-mold_WH_668x173px.webp'"
                                    media="(min-width: 1024px)">
                                <img class="lg:my-7 lg:w-[20rem]" src="" alt="">
                            </picture>
                            <p class="max-w-sm my-7 hidden font-barlow-condensed font-semibold text-md text-gray-900 
                            uppercase md:text-2xl lg:block">
                                <span class="text-green-accent-800 font-extrabold">
                                    Divirta-se e comemore este feriado!
                                </span>
                                <br>
                                Faça seu próprio porta-guardanapos de balão. É fácil e é
                                uma ótima maneira de criar uma peça central única para sua mesa de festa junina.
                                Garanta já seu molde preenchendo o formulário!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid content-end">
                <picture>
                    <source :srcset="'/img/content/sonia/sonia-orange_WH_800x1000px.webp'"
                        class=" w-[9rem] mx-auto lg:mx-0 md:w-[12rem] lg:w-[22rem] xl:w-[22rem]"
                        media="(min-width: 1024px)">
                    <img :src="'/img/content/sonia/sonia-cropped-headline_WH_668x639px.webp'"
                        class="w-[17rem] mx-auto lg:mx-0 md:w-[19rem] lg:w-[22rem] xl:w-[22rem]" alt="Sonia Cervoni"
                        decoding="async">
                </picture>
            </div>
            <div class="basis-4/12 lg:px-3 xl:px-6 lg:pt-5">
                <section id="form" class="max-w-xl py-2 lg:py-6 px-4 drop-shadow-lg mx-auto bg-white border-2
                 border-gray-400 rounded-lg md:px-7">
                    <div>
                        <div class="text-center text-[#1A3D1A]">
                            <h1 class="font-barlow-condensed font-extrabold uppercase text-xl">
                                Preencha o formulário para receber o molde
                            </h1>
                        </div>
                        <div id="mauticform_wrapper_moldebalao" class="mt-2">
                            <form role="form" method="post"
                                action="https://marketing.ryahpalma.dev/form/submit?formId=1"
                                id="mauticform_moldebalao" data-mautic-form="moldebalao"
                                enctype="multipart/form-data">
                                <div class="space-y-4" data-mautic-form-page="1">
                                    <div id="mauticform_moldebalao_nome" data-validate="nome"
                                        data-validation-type="text">
                                        <label for="mauticform_input_moldebalao_nome"
                                            class="block text-sm font-medium text-black">Nome*</label>
                                        <div class="mt-1">
                                            <input id="mauticform_input_moldebalao_nome" name="mauticform[nome]"
                                                value="" type="text" autocomplete="name" required
                                                placeholder="Coloque aqui seu nome" class="block w-full px-5 py-1 text-sm md:text-base 
                                          placeholder-gray-500 border border-transparent rounded-lg bg-gray-100 focus:outline-none
                                            focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 
                                            focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div id="mauticform_moldebalao_whatsapp" data-validate="whatsapp"
                                        data-validation-type="tel">
                                        <label id="mauticform_input_moldebalao_whatsapp"
                                            class="block text-sm font-medium text-black">WhatsApp</label>
                                        <div class="mt-1">
                                            <input id="mauticform_input_moldebalao_whatsapp"
                                                name="mauticform[whatsapp]" value="" type="number"
                                                autocomplete="tel-national" placeholder="Coloque aqui seu WhatsApp"
                                                class="block w-full px-5 py-1 text-sm md:text-base placeholder-gray-500 
                                                border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent 
                                                focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div id="mauticform_moldebalao_email" data-validate="email"
                                        data-validation-type="email">
                                        <label for="mauticform_input_moldebalao_email"
                                            class="block text-sm font-medium text-black">E-mail*
                                        </label>
                                        <div class="mt-1">
                                            <input id="mauticform_input_moldebalao_email"
                                                name="mauticform[email]" value="" type="email"
                                                autocomplete="current-password" required
                                                placeholder="Coloque aqui seu e-mail" class="block w-full px-5 py-1 
                                            text-sm md:text-base text-neutral-600 placeholder-gray-500 border 
                                            border-transparent rounded-lg bg-gray-100 focus:outline-none 
                                            focus:border-transparent focus:ring-2 focus:ring-white 
                                            focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div id="mauticform_moldebalao_submit">
                                        <button type="submit" class="flex items-center justify-center w-full px-3 sm:px-2 lg:px-8 py-3
                                             text-md lg:text-lg font-bold text-center text-white transition
                                             first-line:duration-500 ease-in-out transform bg-orange-accent-800 rounded-full
                                           hover:bg-orange-accent-400 focus:outline-none focus:ring-2 focus:ring-offset-2 
                                           focus:ring-orange-accent-400 uppercase">Quero meu molde</button>
                                    </div>
                                    <div class="block">
                                        <div class="mt-2">
                                            <p class="text-xs text-center">
                                                Ao clicar no botão e informar meus dados, estou ciente das diretrizes
                                                das
                                                <a class="underline text-orange-accent-800 hover:text-black"
                                                    href="/politica-de-privacidade" target="_blank">
                                                    Políticas de Privacidade
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <input type="hidden" name="mauticform[formId]" id="mauticform_moldebalao_id"
                                        value="1">
                                    <input type="hidden" name="mauticform[return]"
                                        id="mauticform_moldebalao_return" value="">
                                    <input type="hidden" name="mauticform[formName]"
                                        id="mauticform_moldebalao_name" value="moldebalao">
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <section id="title">
                    <p class="text-center my-4 block font-barlow font-semibold text-md text-black 
                    uppercase md:text-xl lg:hidden">
                        <span class="text-green-accent-800 font-extrabold">
                            Divirta-se e comemore este feriado!
                        </span>
                        <br>
                        faça seu próprio porta-guardanapos de balão. É fácil de fazer e é
                        uma ótima maneira de criar uma peça central única para sua mesa de festa junina.
                        Garanta já seu molde preenchendo o formulário!
                </section>
            </div>
        </div>
    </div>
</section>
<aboutme-component></aboutme-component>
<footer-component class="bg-black"></footer-component>
@endsection