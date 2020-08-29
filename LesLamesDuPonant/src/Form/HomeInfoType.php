<?php

namespace App\Form;

use App\Entity\HomeInfo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HomeInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleInfo')
            ->add('descriptionInfo')
            ->add('titleCost')
            ->add('descriptionCost')
            ->add('titleFaqInfo')
            ->add('descriptionFaqInfo')
            ->add('imageOneInfo')
            ->add('imageTwoInfo')
            ->add('ImageThreeInfo')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => HomeInfo::class,
        ]);
    }
}
