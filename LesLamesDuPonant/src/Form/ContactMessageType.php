<?php

namespace App\Form;

use App\Entity\ContactMessage;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactMessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('authorNameContactMessage')
            ->add('authorLastNamecContactMessage')
            ->add('contentContactMessage', TextareaType::class,[
                 'data-lenght'=> '500',
                 'class'=>'textAreaContact',

            ])
            ->add('emailContactMessage')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ContactMessage::class,
        ]);
    }
}
