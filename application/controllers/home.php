<?php

    use Scabbia\Extensions\Mvc\Controller;

    /**
     * @ignore
     */
    class home extends Controller
    {
        /**
         * @ignore
         */
        public function index()
        {
            $this->load('homeModel');

            $tWelcomeText = $this->homeModel->getWelcomeText();
            $this->set('welcomeText', $tWelcomeText);

            $this->view();
        }

        /**
         * @ignore
         */
        public function getajax_index()
        {
            $this->load('homeModel');

            $tWelcomeText = $this->homeModel->getWelcomeText();
            $this->set('welcomeText', $tWelcomeText);

            $this->json();
        }
    }
