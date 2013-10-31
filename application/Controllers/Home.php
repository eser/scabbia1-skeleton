<?php

namespace App\Controllers;

use Scabbia\Extensions\Mvc\Controller;
use Scabbia\Extensions\Fb\Fb;

/**
 * @ignore
 */
class Home extends Controller
{
    /**
     * @ignore
     */
    public function index()
    {
        $this->load('App\\Models\\HomeModel');

        $tWelcomeText = $this->homeModel->getWelcomeText();
        $this->set('welcomeText', $tWelcomeText);

        $this->view();
    }

    /**
     * @ignore
     */
    public function getajax_index()
    {
        $this->load('App\\Models\\HomeModel');

        $tWelcomeText = $this->homeModel->getWelcomeText();
        $this->set('welcomeText', $tWelcomeText);

        $this->json();
    }

    /**
     * @ignore
     */
    public function facebookLogin()
    {
        Fb::loadApi(true);
        Fb::$appRedirectUri = Http::url('home/facebookLogin', true);
        Fb::login();

        $tUserData = Fb::getUser();

        echo 'Welcome ', $tUserData->object['username'], '!';
    }
}
