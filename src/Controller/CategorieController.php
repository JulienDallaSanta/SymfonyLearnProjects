<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\AbstractManagerRegistry;

class CategorieController extends AbstractController
{
//    #[Route('/categorie', name: 'app_categorie')]
//    public function index(): Response
//    {
//        return $this->render('categorie/index.html.twig', [
//            'controller_name' => 'CategorieController',
//        ]);
//    }

    private $repository;
    private $categorie;

    public function __construct(CategorieRepository $repository){
        $this->repository = $repository;
    }

    #[Route('/categorie', name: 'catalogueCategoriesPrincipales')]
    public function catalogueCategoriesPrincipales(){
        $entities = $this->repository->listeCategoriesPrincipales();

        return $this->render('categorie/index.html.twig', [
            'entities'=> $entities,
//            'manager' => $manager,
            ] );
    }

}
