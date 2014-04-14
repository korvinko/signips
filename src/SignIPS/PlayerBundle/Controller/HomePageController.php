<?php

namespace SignIPS\PlayerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomePageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template()
     */
    public function indexAction()
    {
        $settingsFolder = $this->container->getParameter('settings_folder');
        $mediaFolder = $this->container->getParameter('settings_folder');

        $settings = $this->get('setting_parser')->parse($settingsFolder);
        $media = $this->get('media_parser')->parse($mediaFolder);

        return array();
    }
}
