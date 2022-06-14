@extends('layouts.master')

@push('custom-css')
<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
@endpush

@section('content')
<navbar-component class="bg-orange-accent-800 hidden md:block"></navbar-component>
<section
    class="bg-blue-900 bg-[url('/img/content/festa-junina/background-2.svg')] bg-center bg-no-repeat bg-cover bg-local">
    <div class="px-4 py-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl sm:px-24 md:px-24 lg:px-0 lg:py-10">
        <div class="flex flex-col items-center justify-center lg:flex-row">
            <div class="basis-4/12 px-5">
                <picture>
                    <source :srcset="'img/content/festa-junina/strawman_WH_439x700px.webp'" media="(min-width: 1024px)"
                        alt="Porta-Guardanapo de Espantalho">
                    <img src="">
                </picture>
            </div>
            <div class="basis-5/12 lg:px-3 xl:px-6 lg:pt-5">
                <div class="mb-2">
                    <picture>
                        <source :srcset="'/img/content/festa-junina/event-white_WH_248x116px.webp'"
                            media="(min-width: 1024px)">
                        <img class="mb-2 mx-auto w-[9rem] sm:w-[15rem] md:w-[13rem]" alt="Festa Junina"
                            :src="'/img/content/festa-junina/event-white-m_WH_250x164px.webp'" decoding="async">
                    </picture>
                    <h1 class="mb-2 max-w-md lg:max-w-full mx-auto font-barlow-condensed font-bold text-center text-xl text-white 
                    uppercase md:text-2xl lg:text-3xl">
                        Você está pronta(o) para fazer seu porta-guardanapos de
                        <span class="bg-orange-accent-800 px-1">
                            espantalho?
                        </span>
                    </h1>
                    <p class="font-sans font-normal text-center text-sm text-white lg:text-md">
                        Deixe sua mesa ainda mais linda aprendendo a fazer este porta-guardanapos de
                        espantalho. Você vai querer fazer vários!
                    </p>
                </div>
                <section id="form" class="max-w-xl py-2 px-4 drop-shadow-lg mx-auto bg-white border-2
                 border-gray-400 rounded-lg md:px-7 lg:py-4">
                    <div>
                        <h1 class="text-center text-blue-900 font-barlow-condensed font-extrabold uppercase 
                        text-xl">
                            Preencha o formulário para receber o molde
                        </h1>
                        <div id="mauticform_wrapper_moldeespantalho" class="mt-2">
                            <form role="form" method="post"
                                action="https://marketing.ryahpalma.dev/form/submit?formId=4"
                                id="mauticform_moldeespantalho" data-mautic-form="moldeespantalho"
                                enctype="multipart/form-data">
                                <div class="space-y-4" data-mautic-form-page="1">
                                    <div id="mauticform_moldeespantalho_nome" data-validate="nome"
                                        data-validation-type="text">
                                        <label for="mauticform_input_moldeespantalho_nome"
                                            class="block text-sm font-medium text-black">Nome*</label>
                                        <div class="mt-1">
                                            <input id="mauticform_input_moldeespantalho_nome" name="mauticform[nome]"
                                                value="" type="text" autocomplete="name" required
                                                placeholder="Coloque aqui seu nome" class="block w-full px-5 py-1 text-sm md:text-base 
                                          placeholder-gray-500 border border-transparent rounded-lg bg-gray-100 focus:outline-none
                                            focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 
                                            focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div id="mauticform_moldeespantalho_whatsapp" data-validate="whatsapp"
                                        data-validation-type="tel">
                                        <label id="mauticform_input_moldeespantalho_whatsapp"
                                            class="block text-sm font-medium text-black">WhatsApp</label>
                                        <div class="mt-1">
                                            <input id="mauticform_input_moldeespantalho_whatsapp"
                                                name="mauticform[whatsapp]" value="" type="number"
                                                autocomplete="tel-national" placeholder="Coloque aqui seu WhatsApp"
                                                class="block w-full px-5 py-1 text-sm md:text-base placeholder-gray-500 
                                                border border-transparent rounded-lg bg-gray-100 focus:outline-none focus:border-transparent 
                                                focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div id="mauticform_moldeespantalho_email" data-validate="email"
                                        data-validation-type="email">
                                        <label for="mauticform_input_moldeespantalho_email"
                                            class="block text-sm font-medium text-black">E-mail*
                                        </label>
                                        <div class="mt-1">
                                            <input id="mauticform_input_moldeespantalho_email" name="mauticform[email]"
                                                value="" type="email" autocomplete="current-password" required
                                                placeholder="Coloque aqui seu e-mail" class="block w-full px-5 py-1 
                                            text-sm md:text-base text-neutral-600 placeholder-gray-500 border 
                                            border-transparent rounded-lg bg-gray-100 focus:outline-none 
                                            focus:border-transparent focus:ring-2 focus:ring-white 
                                            focus:ring-offset-2 focus:ring-offset-gray-300">
                                        </div>
                                    </div>
                                    <div id="mauticform_moldeespantalho_submit">
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
                                    <input type="hidden" name="mauticform[formId]" id="mauticform_moldeespantalho_id"
                                        value="4">
                                    <input type="hidden" name="mauticform[return]"
                                        id="mauticform_moldeespantalho_return" value="">
                                    <input type="hidden" name="mauticform[formName]"
                                        id="mauticform_moldeespantalho_name" value="moldeespantalho">
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <picture>
                    <source :srcset="'img/content/festa-junina/strawman_WH_439x700px.webp'" media="(max-width: 768px)"
                        alt="Porta-Guardanapo de Espantalho">
                    <img src="" class="w-[14rem] md:w-[16rem] mx-auto m-5">
                </picture>
            </div>
        </div>
    </div>
</section>
<aboutme-component></aboutme-component>
<footer-component class="bg-black"></footer-component>
@endsection