<?php

namespace App\Form;

use App\Entity\CategoryForum;
use App\Repository\HomeSectionForumRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryForumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleCategory')
            ->add('sectionCategoryForum', EntityType::class,[
                'class'=> HomeSectionForum::class,
                'choice_label'=> 'sectionTitleForum',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CategoryForum::class,
        ]);
    }
}
