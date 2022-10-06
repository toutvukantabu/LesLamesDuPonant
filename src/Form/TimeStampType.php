<?php

namespace App\Form;

use App\Entity\TimeStamp;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class TimeStampType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleTimeStamp', TextType::class,[
                'label' => 'titre de l\'évenement',
                'required' => false,  
                ])
            ->add('descriptionTimeStamp', TextType::class,[
                'label' => 'déscription de l\'évenement',
                'required' => false,
                ])
            ->add('dateTimeStamp', DateType::class,[
                'label' => 'Date de l\'évenement',
                'widget' => 'single_text',
                'html5' => false,
                'format'=> 'dd-mm-yyyy',
                'required' => false,
                'attr' => [
                    'class'=> 'datepicker',
                ]
            ])
            ->add('hourTimeStamp', timeType::class,[
                'label' => 'Heure de l\'évenement',
                'widget' => 'single_text',
                'html5' => false,
                'required' => false,
                'attr' => [
                    'class'=> 'timepicker',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TimeStamp::class,
        ]);
    }
}
