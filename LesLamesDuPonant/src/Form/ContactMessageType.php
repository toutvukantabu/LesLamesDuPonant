<?php

namespace App\Form;

use App\Entity\ContactMessage;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactMessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('authorNameContactMessage', TextType::class,[
                'label'=> 'Prénom',
                'required'=>true,
            ])
            ->add('authorLastNamecContactMessage', TextType::class,[
                'label'=>'Nom de famille',
                'required'=>true,
            ])
            ->add('emailContactMessage', EmailType::class,[
                'label'=> 'Votre email',
                'required'=>true,
                             ])

            ->add('categoryContactMessage', ChoiceType::class, [
                'label'=>' ',
                'multiple' => false,
                'expanded' => false,
                'required' => true,
                'choices' => [
                    'Sujet de votre message' =>[
                    'Renseignement sur les AMHE' => 1,
                    'Renseignement sur les inscriptions' => 2,
                    'Autres Questions' => 3,
                    'Bug du site' => 4,
                ]  
              
                    ],])
                    ->add('ValiderRgpd', CheckboxType::class, [

                        'label' => 'Accepter La RGPD',
                        'mapped' => false,
                        'constraints' => [
                            new IsTrue([
                                'message' => 'Accepter la RGPD',
                            ]),
                        ],
                    ])
            ->add('contentContactMessage', TextareaType::class,[
                
                    'label'=>'Contenu de votre message',
                    'required'=>true,
                
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
