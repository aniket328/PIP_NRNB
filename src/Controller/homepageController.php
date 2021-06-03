<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class homepageController extends AbstractController
{
    /**
     * @Route ("/")
     */
    public function homepage() : Response
    {
        return new Response('Hi there');
    }

    /**
     * @Route ("/base")
     */
    public function base(): Response
    {
       return $this->render('base.html.twig');
    }
}