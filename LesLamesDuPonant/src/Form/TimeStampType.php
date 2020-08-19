<?php

namespace App\Form;

use App\Entity\TimeStamp;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TimeStampType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleTimeStamp')
            ->add('descriptionTimeStamp')
            ->add('dateTimeStamp')
            ->add('hourTimeStamp')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TimeStamp::class,
        ]);
    }
}
