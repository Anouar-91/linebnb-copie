<?php

namespace App\Form;

use App\Entity\Ad;
use App\Form\ApplicationType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class AdminAdType extends ApplicationType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        // utilisation de la fonction add de la manière normale
            ->add('title', TextType::class, [
                'label' => 'Titre',
                'attr' => [
                    'placeholder' => "Tapez un super titre pour votre annonce"
                ] 
            ])

            // utilisation de la fonction getconfiguration pour faciliter le code
            ->add('slug', TextType::class, $this->getconfiguration("Adresse Web", "Tapez l'adresse Web (automatique)", [
                'required' => false 
            ]))


            ->add('introduction', TextType::class, $this->getconfiguration("Introduction", "Donnez une description globale de l'annonce"))

            ->add('content', TextareaType::class, $this->getconfiguration("Description détaillée", "Tapez une description qui donne vraiment envie de venir chez vous"))

            ->add('rooms', IntegerType::class, $this->getconfiguration("Nombre de chambre", "Le nombre de chambre disponibles "))

            ->add('price',MoneyType::class, $this->getconfiguration("Prix par nuit", "Indiquez le prix que vous souhaitez pour une nuit" ) );
                    
      
        }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ad::class

        ]);
    }
}
