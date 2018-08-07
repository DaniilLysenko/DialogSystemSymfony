<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('Daniil');
        $user->setEmail('drovk199995@gmail.com');
        $user->setPassword(password_hash('12345', PASSWORD_DEFAULT));
        $manager->persist($user);
        $manager->flush();
    }
}