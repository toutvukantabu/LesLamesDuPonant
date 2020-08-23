<?php

namespace App\Form;

use App\Entity\LesLamesDuPonant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class LesLamesDuPonantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleLLDP', TextType::class,['label' => 'Titre Lames Du Ponant'])
            ->add('desciptionLLDP', TextareaType::class,['label' => 'Déscription de l\'association'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LesLamesDuPonant::class,
        ]);
    }
}
