<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use App\Entity\Admin;

class AdminFixtures extends Fixture
{
	 private $passwordEncoder;
	public function __construct(UserPasswordEncoderInterface $passwordEncoder)
	{
		$this->passwordEncoder = $passwordEncoder;
	}

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $user_admin = new Admin();
        // $admin->setPassword("12345678");
        $user_admin->setPassword($this->passwordEncoder->encodePassword(
        	$user_admin,
        	'12345678'
        ));
        $user_admin->setEmail('dileep@gmail.com');
        $manager->persist($user_admin);

        $manager->flush();
        
    }
}
