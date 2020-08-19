<?php

namespace App\Form;

use App\Entity\HomeDiscipline;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HomeDisciplineType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nameDiscipline')
            ->add('imageHomeDiscipline')
            ->add('descriptionDiscipline')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => HomeDiscipline::class,
        ]);
    }
}
