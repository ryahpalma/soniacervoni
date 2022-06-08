<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOTools;

class MainController extends Controller
{
    public function MesaPostaParaTodos()
    {
        SEOTools::setTitle('Mesa Posta Para Todos');
        SEOTools::setDescription('Em desenvolvimento');
        SEOTools::opengraph()->setUrl('https://wwww.soniacervoni.com/mesa-posta-para-todos');
        SEOTools::setCanonical('https://wwww.soniacervoni.com/mesa-posta-para-todos');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://wwww.soniacervoni.com/img/engine/soniacervoni-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://wwww.soniacervoni.com/img/engine/soniacervoni-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://wwww.soniacervoni.com/img/engine/soniacervoni-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.user.mesa-posta');
    }

    public function MoldesFestaJunina()
    {
        SEOTools::setTitle('Molde Porta Guardanapo de Balão');
        SEOTools::setDescription('Está em dúvida de como fazer lembrancinhas de festa junina? Faça hoje mesmo seu próprio porta-guardanapos de balão para a sua festa de arraiá!');
        SEOTools::opengraph()->setUrl('https://wwww.soniacervoni.com/moldes-festa-junina');
        SEOTools::setCanonical('https://wwww.soniacervoni.com/moldes-festa-junina');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://wwww.soniacervoni.com/img/engine/soniacervoni-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://wwww.soniacervoni.com/img/engine/soniacervoni-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://wwww.soniacervoni.com/img/engine/soniacervoni-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.user.festa-junina');
    }

    public function MoldesFestaJuninaObrigado()
    {
        SEOTools::setTitle('Moldes para Festa Junina');
        SEOTools::setDescription('Parabéns, seu molde chegará em alguns instantes no seu e-mail, fique ligada(o) na sua caixa de entrada');
        SEOTools::opengraph()->setUrl('https://wwww.soniacervoni.com/moldes-festa-junina-obrigado');
        SEOTools::setCanonical('https://wwww.soniacervoni.com/moldes-festa-junina-obrigado');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://wwww.soniacervoni.com/img/engine/soniacervoni-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://wwww.soniacervoni.com/img/engine/soniacervoni-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://wwww.soniacervoni.com/img/engine/soniacervoni-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.user.thanks.festa-junina');
    }

    public function PrivacyPolicy()
    {
        SEOTools::setTitle('Política de Privacidade');
        SEOTools::setDescription('Entenda nossas políticas e termos de privacidade');
        SEOTools::opengraph()->setUrl('https://wwww.soniacervoni.com/politica-de-privacidade');
        SEOTools::setCanonical('https://wwww.soniacervoni.com/politica-de-privacidade');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::jsonLd()->addImage('https://wwww.soniacervoni.com/img/engine/soniacervoni-opengraph-desktop.jpg');
        SEOTools::opengraph()->addImage('https://wwww.soniacervoni.com/img/engine/soniacervoni-opengraph-mobile.jpg', ['height' => 1200, 'width' => 1200]);
        SEOTools::opengraph()->addImage('https://wwww.soniacervoni.com/img/engine/soniacervoni-opengraph-desktop.jpg', ['height' => 620, 'width' => 1200]);

        return view('pages.user.privacy-policy');
    }
}
