<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;

class ApplicationType extends AbstractType {

    /**
     * Fonction qui permet d'avoir la configuration de base d'un champ 
     *
     * @param string $label
     * @param array $options
     * @return array
     */

    protected function getconfiguration($label, $placeholder, $options =[]){
        return array_merge_recursive([
                'label' => $label,
                'attr' => [
                    'placeholder' => $placeholder,
                ] 
                ], $options);

    }
}


?>