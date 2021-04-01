<?php

namespace App\Tests;

use App\Entity\Customer;
use PHPUnit\Framework\TestCase;
use Faker\Factory;

class UnitTest extends TestCase
{
        
    /**
     * TestCustmer
     *
     * @test
     * Adding @test tells phpunit to treat the function as a test, regardless of the name.
     */
    public function TestCustmer()
    {
        $faker = Factory::create('fr_FR');
        $customer = new Customer();
        $customer
            ->setFirstname("fake")
            ->setLastname($faker->lastName())
            ->setEmail($faker->email())
            ->setCompany($faker->company());

        $this->assertTrue(is_string($customer->getLastname()));
    }
  
}
