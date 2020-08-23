<?php

namespace App\Form;

use App\Entity\MedievalFamily;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedievalFamilyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleMedievalFamily', TextType::class,['label' => 'Titre famille médiéval'])
            ->add('descriptionMedievalFamily', TextType::class,['label' => 'Déscription famille médiéval'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MedievalFamily::class,
        ]);
    }
}
