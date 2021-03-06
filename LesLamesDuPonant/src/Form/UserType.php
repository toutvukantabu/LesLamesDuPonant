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
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', emailType::class, [
                'label' => 'E-mail',
                'required' => false,
                ])
            ->add('firstNameUser', TextType::class,['label' => 'Nom','required' => false,])
            ->add('lastNameUser', TextType::class,['label' => 'Prénom','required' => false,])
            ->add('pseudoUser', TextType::class,['label' => 'Pseudo','required' => false,])
        ->add('photoAvatarUser', FileType::class, [
            'label'=>' ',
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
                'label' => 'Date d\'anniverssaire',
                'widget' => 'single_text',
                'html5' => false,
                'required' => false,
                'format'=> 'dd-mm-yyyy',
                'attr' => [
                    'class'=> 'datepicker',
                ]
            ])
            ->add('postalCodeUser', TextType::class,['label' => 'Code postal','required' => false,])
            ->add('adressUser', TextType::class,['label' => 'Adresse','required' => false,])
            ->add('cityUser', TextType::class,['label' => 'Ville','required' => false,])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
