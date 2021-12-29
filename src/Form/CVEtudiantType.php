<?php

namespace App\Form;

use App\Entity\CvEtudiant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CVEtudiantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('CIN')
            ->add('Nom')
            ->add('Prenom')
            ->add('Adresse')
            ->add('Tel')
            ->add('Mail')
            ->add('DateNaissance')
            ->add('Ville')
            ->add('IdCV')
            ->add('DescE')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CvEtudiant::class,
        ]);
    }
}
