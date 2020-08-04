<?php

namespace App\Form;

use App\Entity\SubjectForum;
use App\Entity\CategoryForum;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SubjectForumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleSubjectForum')
            ->add('contentSubjectForum')
            ->add('categorySubjectForum', EntityType::class,[
                    'class'=> CategoryForum::class,
                    'choice_label' => 'titleCategory'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SubjectForum::class,
        ]);
    }
}
