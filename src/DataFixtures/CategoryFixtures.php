<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $category = new Category();
        $category->setName('Fauteuils et canapés');
        $manager->persist($category);

        $category1 = new Category();
        $category1->setName('Tables basses');
        $manager->persist($category1);

        $manager->flush();
    }
}
