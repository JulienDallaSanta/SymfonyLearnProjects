<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Categorie;
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

    #[Route('/categorie', name: 'catalogueCategoriesPrincipales')]
    public function catalogueCategoriesPrincipales(ManagerRegistry $doctrine){
        $em = $doctrine->getManager('Categorie');
        $entities = $em->getRepository('Categorie', 'Categorie')->listCategoriesPrincipales();

        return $this->render('categorie/index.html.twig', ['entities'=> $entities,] );
    }

}
