<?php

namespace App\Form;

use App\Entity\Discipline;
use App\Entity\HomeDiscipline;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DisciplineType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('relationHomeDiscipline', EntityType::class,[
            'class'=> HomeDiscipline::class,
            'label'=>'Section de la discipline affiliée',
            'choice_label'=> 'nameDiscipline',
            'required'=>true,
        ])
        ->add('orderDiscipline',ChoiceType::class,
        [
            'choices' => [
               '1'=>1,
               '2'=>2,
               '3'=>3,
               '4'=>4,
               '5'=>5,
               '6'=>6,
               '7'=>7,
               '8'=>8,
               '9'=>9,
            ],
            'multiple' => false,
            'expanded' => false,
            'required' => true,
           	            
        ])


            ->add('disciplinetitle',TextType::class,[
                'label'=>'Nom de la discipline',
                'required'=>true
                ])
            ->add('disciplineDescription',CKEditorType::class,[
                'label'=>' ',
                'required'=>true,
                ])
            ->add('nameInstructor',TextType::class,[
            'label'=>'Nom et prénom de l\'instructeur',
            'required'=>true,
            ])
            ->add('photoInstructor',FileType::class, [
                'label' => ' ',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/*',
                        ],
                        'mimeTypesMessage' => 'Veuillez entrer un format de document valide',
                    ])
                ],
            ])
            
          ->add('imageOneDiscipline',FileType::class, [
            'label' => ' ',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new File([
                    'maxSize' => '1024k',
                    'mimeTypes' => [
                        'image/*',
                    ],
                    'mimeTypesMessage' => 'Veuillez entrer un format de document valide',
                ])
            ],
        ])
        
        ->add('imageTwoDiscipline',FileType::class, [
            'label' => ' ',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new File([
                    'maxSize' => '1024k',
                    'mimeTypes' => [
                        'image/*',
                    ],
                    'mimeTypesMessage' => 'Veuillez entrer un format de document valide',
                ])
            ],
        ])
        
        ->add('imageThreeDiscipline',FileType::class, [
            'label' => ' ',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new File([
                    'maxSize' => '1024k',
                    'mimeTypes' => [
                        'image/*',
                    ],
                    'mimeTypesMessage' => 'Veuillez entrer un format de document valide',
                ])
            ],
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Discipline::class,
        ]);
    }
}
