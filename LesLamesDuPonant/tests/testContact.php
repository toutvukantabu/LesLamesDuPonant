<?php
namespace App\Tests;
use App\Entity\ContactMessage;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
class testContact extends KernelTestCase{
    public function testTitle(){
        $contactMessage = (new ContactMessage())
        ->setAuthorNameContactMessage('Salut les Amis!')
                ->setAuthorLastNamecContactMessage('gwendal')
                ->setDateContactMessage(new \DateTime())
                ->setEmailContactMessage('gwendal@gmail.com')
                ->setCategoryContactMessage('Category')
                ->setContentContactMessage('Gwendal on test tes fixtures');
        self::bootKernel();
        $error = self::$container->get('validator')->validate($contactMessage);
        $this->assertCount(0, $error);
    }
}