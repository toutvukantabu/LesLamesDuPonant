<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('roles',
            ChoiceType::class,
            [
                'choices' => [
                    'Super Administrateur' => User::ROLE_SUPER_ADMIN,
                    'Administrateur' => User::ROLE_ADMIN,
                    'Utilisateur' => User::ROLE_USER,
                ],
                'multiple' => true,
                'expanded' => false,
                'required' => true,
            ],
            TextType::class,
            ['label' => 'Rôle'])
            ->add('password')
            ->add('isVerified')
            ->add('firstNameUser')
            ->add('lastNameUser')
            ->add('pseudoUser')
        ->add('photoAvatarUser', FileType::class, [
            'label' => 'Photo',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new File([
                    'maxSize' => '6000k',
                    'mimeTypes' => [
                        'image/*',
                    ],
                    'mimeTypesMessage' => 'Veuillez entrer un format de document valide',
                ])
            ],
        ])
            ->add('birthdayDateUser', DateType::class,[
                'widget' => 'single_text',
                'html5' => false,
                'format'=> 'dd-mm-yyyy',
                'attr' => [
                    'class'=> 'datepicker',
                ]
            ])
            ->add('postalCodeUser')
            ->add('adressUser')
            ->add('cityUser')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
