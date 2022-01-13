<?php

namespace Tracking\Providers;

use Plenty\Plugin\Templates\Twig;

class GoogleSiteVerification
{
    public function call(Twig $twig)
    {
        return $twig->render('Tracking::GoogleSiteVerification');
    }
}
