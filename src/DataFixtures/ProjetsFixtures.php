<?php

namespace App\DataFixtures;

use App\Entity\Projet;
use App\Entity\Categorie;
use DateTime;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProjetsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $cat = new Categorie();
        $cat->setNom('Voyage');
        $manager->persist($cat);

        for($i = 1 ; $i<=10 ; $i++){
            $projet = new Projet();
            $projet->setTitre('Ville' . $i)
                   ->setContenu('Quis voluptate anim enim nulla aute reprehenderit cillum magna mollit officia sunt.')
                   ->setImageSrc('http//placehold.it/1000x300')
                   ->setDate(new DateTime())
                   ->setStatut(true)
                   ->setCategorie($cat);
            
            $manager->persist($projet);
        }
        $manager->flush();
    }
}
