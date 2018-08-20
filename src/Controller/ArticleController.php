<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController{
    /**
     * @Route("/")
    */
    public function index() {
        //return new Response ('<html><body>Hello</body></html>');

        return $this->render('articles/index.html.twig');
    }

    /** 
     * @Route("/article/{slug}")
    */
    public function show($slug) {
        return new Response ("<html><body>Hello $slug</body></html>");

        //return $this->render('articles/index.html.twig');
    }
}
