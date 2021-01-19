<?php

use ReCaptcha\ReCaptcha;
use Psr\Container\ContainerInterface;
use Slim\Views\Twig;
use App\Env;

return [
    ReCaptcha::class => function(ContainerInterface $c){
        return new ReCaptcha(Env::get('GOOGLE_RECAPTCHA_SECRET'));
    },
    Twig::class => function(ContainerInterface $c){
        return Twig::create(TEMPLATES);
    }
];