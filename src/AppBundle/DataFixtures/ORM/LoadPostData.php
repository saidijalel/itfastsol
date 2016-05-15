<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Post;


class LoadPostData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $p1 = new Post();
        $p1->setTitle("title1");
        $p1->setBody("body1");
        $p1->setCreatedAt(new \DateTime());

        $manager->persist($p1);

        $p2 = new Post();
        $p2->setTitle("title2");
        $p2->setBody("body1");
        $p2->setCreatedAt(new \DateTime());


        $manager->persist($p2);


        $manager->flush();
    }
}