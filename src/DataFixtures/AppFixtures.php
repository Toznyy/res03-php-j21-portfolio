<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactoryInterface;

class AppFixtures extends Fixture
{
    private $passwordHasherFactory;

    public function __construct(PasswordHasherFactoryInterface $encoderFactory) {

        $this->passwordHasherFactory = $encoderFactory;
    }
    public function load(ObjectManager $manager): void {

        $project1 = new Project();
        $project1->setName("Projet 1");
        $project1->setPrincipalTech("PHP");
        $project1->setSecondTech("Symfony");
        $project1->setDescription("C'est super cool");
        $manager->persist($project1);

        $manager->flush();
    }
}
