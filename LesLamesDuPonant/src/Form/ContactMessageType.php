<?php

namespace App\Form;

use App\Entity\ContactMessage;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactMessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('authorNameContactMessage', TextType::class,[
                'label'=> 'Prénom',
            ])
            ->add('authorLastNamecContactMessage', TextType::class,[
                'label'=>'Nom de famille',
            ])
            ->add('emailContactMessage', EmailType::class,[
                'label'=> 'Votre email',
                             ])

            ->add('categoryContactMessage', ChoiceType::class, [
        'label'=> 'sujet de votre message',
                'choices' => [
                    'Renseignement sur les AMHE' => 1,
                    'Renseignement sur les inscriptions' => 2,
                    'Autres Questions' => 3,
                    'Bug du site' => 4,
                ],
                'multiple' => false,
                'expanded' => false,
                'required' => true,
            ])
            ->add('contentContactMessage', TextareaType::class,[
                
                    'label'=>'contenu de votre message'
                
            ])
          
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ContactMessage::class,
        ]);
    }
}
