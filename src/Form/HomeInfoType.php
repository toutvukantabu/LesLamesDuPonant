<?php

namespace App\Form;

use App\Entity\HomeInfo;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class HomeInfoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titleInfo',TextType::class,['label'=>'Titre Info'
            ])
            ->add('descriptionInfo',CKEditorType::class,['label'=>' '])
            ->add('titleCost',TextType::class,['label'=>'Titre Adhésion'])
            ->add('descriptionCost',CKEditorType::class,['label'=>' '])
            ->add('titleFaqInfo',TextType::class,['label'=>'Titre FAQ'])
            ->add('descriptionFaqInfo',CKEditorType::class,['label'=>' '])
            ->add('imageOneInfo',FileType::class, [
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
            ->add('imageTwoInfo',FileType::class, [
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
            ->add('imageThreeInfo',FileType::class, [
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
            'data_class' => HomeInfo::class,
        ]);
    }
}
