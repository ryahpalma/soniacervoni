<template>
    <div>
        <div class="px-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
            <div class="flex flex-col justify-between items-center mb-4 lg:flex-row lg:mb-5">
                <div class="mx-auto md:max-w-md lg:mx-0">
                    <a href="/" aria-label="Início" title="Sonia Cervoni Home" class="inline-flex items-center">
                        <figure class="w-[10rem]">
                            <img :src="'/img/engine/logo-white.webp'" alt="Logotipo" loading="lazy">
                        </figure>
                    </a>
                </div>
                <div class="text-center font-barlow-condensed uppercase font-semibold text-white text-md">
                    <a href="/politica-de-privacidade" class="tracking-wide text-right hover:text-orange-accent-400">
                        Políticas de Privacidade
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-between pt-5 pb-10 border-t text-center items-center 
            sm:flex-row lg:text-left">
                <p class="text-xs text-white md:text-sm">
                    © {{ new Date().getFullYear() }} Sonia Cervoni Home. Todos os direitos reservados -
                    <a class="hover:text-orange-accent-400" href="https://ryahpalma.dev" target="_blank">
                        Desenvolvido por Ryan Palma
                    </a>
                </p>
                <div class="flex items-center mt-4 space-x-4 mx-auto sm:mt-0 lg:mx-0">
                    <a href="https://facebook.com/MesaPostaSoniaCervoni/" target="_blank"
                        class="text-white transition-colors duration-300 hover:text-orange-accent-400">
                        <i class='bx bx-md bxl-facebook'></i>
                    </a>
                    <a href="https://www.instagram.com/soniacervoni/" target="_blank"
                        class="text-white transition-colors duration-300 hover:text-orange-accent-400">
                        <i class='bx bx-md bxl-instagram'></i>
                    </a>
                    <a href="https://www.tiktok.com/@soniacervoni" target="_blank"
                        class="text-white transition-colors duration-300 hover:text-orange-accent-400">
                        <i class='bx bx-md bxl-tiktok'></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCKghN4xT5y_Qp6EraQgettA" target="_blank"
                        class="text-white transition-colors duration-300 hover:text-orange-accent-400">
                        <i class='bx bx-md bxl-youtube'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>