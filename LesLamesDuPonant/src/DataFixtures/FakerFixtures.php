<?php
// src/DataFixtures/FakerFixtures.php
namespace App\DataFixtures;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\CategoryForum;
use App\Entity\ContactMessage;
use App\Entity\MessageForum;
use App\Entity\User;
use App\Entity\HomeSectionForum;
use App\Entity\SubjectForum;
use Doctrine\Bundle\FixturesBundle\Fixture;

use Faker;

class FakerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        // On configure dans quelles langues nous voulons nos données
        $faker = Faker\Factory::create('fr_FR');
          for ($i = 0; $i <=20; $i++) {
            $user = new user();
            $user->setFirstNameUser($faker->name);
            $user->setLastNameUser($faker->lastName);
            $user->setAdressUser($faker->streetAddress);
            $user->setCityUser($faker->city);
            $user->setPassword($faker->password);
            $user->setPostalCodeUser($faker->postcode);
            $user->setEmail($faker->email);
            $user->setPhotoAvatarUser($faker->imageURL());
            $user->setPseudoUser($faker->name);
            $manager->persist($user);
        }

        for ($n = 0; $n <= 8; $n++) {
            $homeSectionForum = new HomeSectionForum();
         
            $homeSectionForum->setSectionTitleForum($faker->sentence());
            $homeSectionForum->setSectionDateForum($faker->dateTimeBetween('- 6 months'));
            $homeSectionForum->setUser($user);
            $manager->persist($homeSectionForum);
        }

        
        for ($k = 0; $k <= mt_rand(10,20); $k++) {
            $categoryForum = new CategoryForum();
            $days = (new \Datetime())->diff($homeSectionForum->getSectionDateForum())->days;
            $categoryForum->setTitleCategory($faker->sentence());
            $categoryForum->setDateCategoryForum($faker->dateTimeBetween('-' . $days . 'days'));
            $categoryForum->setUser($user);
            $categoryForum->setSectionCategoryForum($homeSectionForum);
            $manager->persist($categoryForum);
        }

        for ($l = 0; $l <= mt_rand(10,50); $l++) {
            $subjectForum = new SubjectForum();
          
            $days = (new \Datetime())-> diff ($categoryForum->getDateCategoryForum())->days;
        
            $content = '<p>'. join($faker->paragraphs(1), '</p><p>').'</p>';
            $subjectForum->setTitleSubjectForum($faker->sentence());
            $subjectForum->setContentSubjectForum($content);
            $subjectForum->setDateSubjectForum($faker->dateTimeBetween( '-' . $days . 'days'));
            $subjectForum->setUser($user);
            $subjectForum->setCategorySubjectForum($categoryForum);

            $manager->persist($subjectForum);
            
        }
        for ($m = 0; $m <= mt_rand(150, 800); $m++) {
            $messageForum = new MessageForum();

            $now =new \DateTime();
            $interval= $now->diff($subjectForum->getDateSubjectForum());
            $days=$interval->days;
            $minimum='-'. $days . 'days';

            $content = '<p>' . join($faker->paragraphs(6), '</p><p>') . '</p>';

            $messageForum->setDatePublicationMessageForum($faker->dateTimeBetween($minimum));
            $messageForum->setContentMessageForum($content);
            $messageForum->SetSubjectMessageForum($subjectForum);
            $messageForum->setPhotoMessageForum($faker->imageURL());
            $messageForum->setUser($user);

            $manager->persist($messageForum);
        }
      

        $manager->flush();
    }
}
