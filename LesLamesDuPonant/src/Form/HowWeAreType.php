<?php

namespace App\Form;

use App\Entity\HowWeAre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HowWeAreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleHowWeAre')
            ->add('descriptionHowWeAre')
            ->add('PhotoHowWeAre')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => HowWeAre::class,
        ]);
    }
}
