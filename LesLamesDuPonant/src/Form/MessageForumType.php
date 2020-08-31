<?php

namespace App\Form;

use App\Entity\MessageForum;
use App\Entity\SubjectForum;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MessageForumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('SubjectMessageForum' , EntityType::class,[
             'class' =>SubjectForum::class,
             'label'=> 'Sujet Affilié',
             'choice_label'=>'titleSubjectForum',

            ])
            ->add('ContentMessageForum',CKEditorType::class,[
                'label'=> ' ',
                ])
            // ->add('photoMessageForum')
           
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MessageForum::class,
        ]);
    }
}
