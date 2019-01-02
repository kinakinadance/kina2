<?php

/**
 * Created by PhpStorm.
 * User: J103a
 * Date: 24.12.2018
 * Time: 17:39
 */
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Psr\Log\LoggerInterface;
class CategoryController extends AbstractController
{
    /**
     * @route ("/{name}")
     */
public function index($name, LoggerInterface $logger)
{
    $logger->info("Saying hello to $name!");
    //return new Response("Hallo $name");
    return $this->render('category/index.html.twig', [
                   'name' => $name,
              ]);
}

    /**
     * @return Response
     * @route ("/simply")
     */
    public function simple()
    {
        return new Response('Supergeil!');
    }

    /**
     * @Route("/api/hello/{name}")
     */
    public function apiExample($name)
    {
        return $this->json([
            'name' => $name,
            'symfony' => 'rocks',
        ]);
    }


}
