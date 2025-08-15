<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $products = [
            ['Camisa Militar', 120.50, 'Roupas'],
            ['Bota Tática', 350.00, 'Calçados'],
            ['Mochila Camuflada', 200.00, 'Acessórios'],
        ];

        foreach ($products as [$name, $price, $category]) {
            $product = new Product();
            $product->setName($name);
            $product->setPrice($price);
            $product->setCategory($category);
            $manager->persist($product);
        }

        $manager->flush();
    }
}
