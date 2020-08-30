<?php

namespace App\Form;

use App\Entity\Discipline;
use App\Entity\HomeDiscipline;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class HomeDisciplineType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('relationDiscipline', EntityType::class, [
                'class' => Discipline::class,
                'label' => 'Section de la discipline affiliée',
                'choice_label' => 'disciplinetitle',
            ])
            ->add('nameDiscipline', TextType::class, ['label' => 'Titre de la discipline'])
            ->add('descriptionDiscipline', CKEditorType::class, ['label' => ' '])

            ->add('imageHomeDiscipline', FileType::class, [
                'label'=>' ',
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
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => HomeDiscipline::class,
        ]);
    }
}
