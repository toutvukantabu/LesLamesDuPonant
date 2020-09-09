<?php

namespace App\Form;

use App\Entity\SubjectForum;
use App\Entity\CategoryForum;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SubjectForumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('categorySubjectForum', EntityType::class,[
            'class'=> CategoryForum::class,
            'label' => 'Choissisez la catégorie affiliée',
            'choice_label' => 'titleCategory',
            'required' => false,
    ])
            ->add('titleSubjectForum',TextType::class,[
                'label'=>'Titre du nouveau sujet',
                'required'=>false])
            ->add('contentSubjectForum',CKEditorType::class,[
                'label'=>' ',
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'envoyer',
                'attr' => ['class' => 'btn btn-default pull-right'],
            ])

           ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SubjectForum::class,
        ]);
    }
}
