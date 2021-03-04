<?php

namespace App\Form;

use App\Entity\User;
use App\Form\ApplicationType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class PasswordUpdateType extends ApplicationType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('oldPassword', PasswordType::class, $this->getconfiguration('Ancien mot de passe', 'Donnez votre mot de passe actuel...'))
            ->add('newPassword', PasswordType::class, $this->getconfiguration('Nouveau mot de passe', 'Entrer votre nouveau mot de passe...'))
            ->add('confirmPassword', PasswordType::class, $this->getconfiguration('Confirmez votre nouveau mot de passe', 'Veuilllez Confirmer votre nouveau mot de passe..'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // configure your form options here
        ]);
    }
}
