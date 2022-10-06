<?php

namespace App\Form;

use App\Entity\CategoryForum;
use App\Entity\HomeSectionForum;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryForumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleCategory',TextType::class,['label'=>'Titre de la nouvelle catégorie','required'=>false])
            ->add('sectionCategoryForum', EntityType::class,[
                'class'=> HomeSectionForum::class,
                'label'=>'Section du forum affiliée',
                'choice_label'=> 'sectionTitleForum',
            ])
            ->add ('active', CheckboxType::class,['label'=> 'activer','required'=>false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CategoryForum::class,
        ]);
    }
}
