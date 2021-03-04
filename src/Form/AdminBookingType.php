<?php

namespace App\Form;

use App\Entity\Ad;
use App\Entity\User;
use App\Entity\Booking;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AdminBookingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('startDate', DateType::class, [
                'format' => 'dd-MM-yyyy',
                'label' => 'Debut du séjour'
            ])
            ->add('endDate', DateType::class, [
                'format' => 'dd-MM-yyyy',
                'label' => 'Fin du séjour'
            ])
            ->add('comment', TextareaType::class, [
                'label' => 'Commentaire'
            ])
            ->add('booker', EntityType::class, [  //Permet de choisir un enregistrement d’une table
                'class' => User::class,
                'choice_label' => function($user){
                    return $user->getFirstName(). " " . strtoupper($user->getLastName());
                },
                'label' => 'Auteur de la réservation'
            ])
            ->add('ad', EntityType::class, [  //Permet de choisir un enregistrement d’une table
                'class' => Ad::class,
                'choice_label' => 'title',
                'label' => 'Annonce concernée'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}
