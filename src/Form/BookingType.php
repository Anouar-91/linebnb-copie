<?php

namespace App\Form;

use App\Entity\Booking;
use App\Form\ApplicationType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Exception\TransformationFailedException;


class BookingType extends ApplicationType
{
    // pour faire appel à notre transformateur on va faire de l'injection de dépendance, en créeant une fonction construct pour faire passer notre transformer

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder 
            ->add('startDate',TextType::class, $this->getconfiguration("Date d'arrivée", "La date à laquelle vous comptez arriver"))
            ->add('endDate', TextType::class, $this->getconfiguration("Date de départ", "La date à laquelle vous quittez les lieux"))
            ->add('comment', TextareaType::class,$this->getconfiguration(false, "Si vous avez un commentaire, n'hésitez pas à en faire part !", ["required" => false] ));
     
            $builder->get('startDate')
            ->addModelTransformer(new CallbackTransformer(
                function ($date) {
                    if($date === null){
                        return '';
                    }
                    return $date->format('d/m/Y');
                    
                },
                function ($frenchDate) 
                    {
                        if($frenchDate === null){
                            //Exception
                            throw new TransformationFailedException("Vous devez fournir une date !");
                        }
                        //créer une varible date, et on demande à la class DateTime via sa fonction createFromFormat de créer une date à partir de la variable $frenchDate
                        $date = \DateTime::createFromFormat('d/m/Y', $frenchDate);
                         
                        if($date === false){
                            //Exception
                            throw new TransformationFailedException("Le format de la date n'est pas le bon!");
                        }
                        return $date;
                    }
                ));
            $builder->get('endDate')
            ->addModelTransformer(new CallbackTransformer(
                function ($date) {
                    if($date === null){
                        return '';
                    }
                    return $date->format('d/m/Y');
                    
                },
                function ($frenchDate) 
                    {
                        if($frenchDate === null){
                            //Exception
                            throw new TransformationFailedException("Vous devez fournir une date !");
                        }
                        //créer une varible date, et on demande à la class DateTime via sa fonction createFromFormat de créer une date à partir de la variable $frenchDate
                        $date = \DateTime::createFromFormat('d/m/Y', $frenchDate);
                         
                        if($date === false){
                            //Exception
                            throw new TransformationFailedException("Le format de la date n'est pas le bon!");
                        }
                        return $date;
                    }
                ));
                }
    

    

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}
