<?php

namespace App\Form;

use App\Entity\AMHE;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AMHEType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleAMHE')
            ->add('DescriptionAMHE')
            ->add('photoOneAMHE')
            ->add('photoTwoAMHE')
            ->add('photoThreeAMHE')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AMHE::class,
        ]);
    }
}
