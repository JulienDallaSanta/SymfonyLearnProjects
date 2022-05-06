<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Categorie;
use App\Entity\Topic;
use App\Entity\Message;

class AppFixtures extends Fixture
{
//    public function load(ObjectManager $manager): void
//    {
//        // $product = new Product();
//        // $manager->persist($product);
//
//        $manager->flush();
//    }

    public function load(ObjectManager $manager): void {
        /** @var array<Categorie> $categories */
        $categories = [];

        for ($x = 1; $x <= 3; $x++) {
            $categories[] = (new Categorie())
                ->setTitre("Catégorie $x")
                ->setDescription("Topics relatifs à la catégorie $x");
        }

        $categories[] = $sousCategorie1 = (new Categorie())
            ->setTitre('Sous-catégorie 1-1')
            ->setDescription('Topics relatifs à la catégorie 1-1');
        $categories[] = $sousCategorie2 = (new Categorie())
            ->setTitre('Sous-catégorie 1-2')
            ->setDescription('Topics relatifs à la catégorie 1-2');
        $categories[] = $sousCategorie3 = (new Categorie())
            ->setTitre('Sous-catégorie 3-1')
            ->setDescription('Topics relatifs à la catégorie 3-1');

        $categories[0]
            ->addCategoriesFille($sousCategorie1)
            ->addCategoriesFille($sousCategorie2);
        $categories[2]
            ->addCategoriesFille($sousCategorie3);

        foreach ($categories as $categorie) {
            $manager->persist($categorie);

            for ($i = 0; $i < 5; $i++) {
                $topic = (new Topic())
                    ->setCategorie($categorie)
                    ->setTitre("Topic n°$i de la {$categorie->getTitre()}");
                $categorie->addTopic($topic);
                $manager->persist($topic);

                for ($j = 1; $j <= 10; $j++) {
                    $message = (new Message())
                        ->setTopic($topic)
                        ->setContenu("Message n°$j du {$topic->getTitre()}");
                    $topic->addMessage($message);
                    $manager->persist($message);
                }
            }
        }
        $manager->flush();
    }
}
