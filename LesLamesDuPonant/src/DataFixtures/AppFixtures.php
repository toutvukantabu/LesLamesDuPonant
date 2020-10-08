<?php
namespace App\DataFixtures;

use App\Entity\Faq;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
            $faq = new Faq();
            $faq->setTitleFaq("coucou")
            ->setFaqDescription("SIMPLEPIE_LOCATOR_REMOTE_BODY");

        $manager->flush();
    }
}
}
