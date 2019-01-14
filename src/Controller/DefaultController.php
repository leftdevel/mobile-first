<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Template()
     * @Route({"/"})
     */
    public function index(Request $request)
    {
        return [
            'title' => 'Intro',
        ];
    }

    /**
     * @Template()
     * @Route({"/media-queries"})
     */
    public function mediaQueries(Request $request)
    {
        return [
            'title' => 'Media Queries',
        ];
    }
}
