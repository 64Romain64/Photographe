<?php

namespace App\DataFixtures;

use App\Entity\Projet;
use App\Entity\Categorie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        // $product = new Product();
        // $manager->persist($product);
    }
}
