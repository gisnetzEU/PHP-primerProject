<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController{
    
    /**
     * Método index
     * @Route("/") 
     * @return \Symfony\Component\HttpFoundation\Response
     */
    
    public function index(Request $request): Response{
        
        $paraDepurar = new \stdClass();
        $paraDepurar->nombre = 'Pepe';
        $paraDepurar->edad = 35;
        
        dump($request);
        //dump($paraDepurar);        
        
        return $this->render('portada.html.twig');
    }
    
    /**
     * Método saludar
     * @Route("/saludar")
     * @Route("/saludar/{nombre}")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function saludar(String $nombre='Foo'): Response{      
        return $this->render("saludar.html.twig", ['nombre'=>$nombre]);
    }
}
