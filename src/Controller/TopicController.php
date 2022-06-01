<?php

namespace App\Controller;

use App\Repository\TopicRepository;
use App\Entity\Topic;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\AbstractManagerRegistry;

class TopicController extends AbstractController
{
//    #[Route('/categorie', name: 'app_categorie')]
//    public function index(): Response
//    {
//        return $this->render('categorie/index.html.twig', [
//            'controller_name' => 'CategorieController',
//        ]);
//    }

    private $repository;
    private $topic;

    public function __construct(TopicRepository $repository){
        $this->repository = $repository;
    }

    #[Route('/topic/{id}', name: 'showTopic')]
    public function showTopic($id):Response{
        $topic = $this->repository->find($id);
        if(!$topic){
            throw new NotFoundHttpException(); //erreur 404
        }else{
            if($id){
                $messages = $topic->getMessages();
                return $this->render('topic/topic.html.twig', [
                    'topic'=> $topic,
                    'messages'=> $messages,
                ]);
            }
        }
    }

}
