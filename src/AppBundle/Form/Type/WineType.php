<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Tests\Extension\Core\Type\SubmitTypeTest;
use AppBundle\Form\Type\GrapeType;
use AppBundle\Form\Type\PlaceType;

class WineType extends AbstractType{
   
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                 ->add('dateIn')
                ->add('name', TextType::class)
                ->add('year')
                ->add('country')
                ->add('bestConsumationYear')           
                              ->add('variety')
                ->add('priceRange')
                ->Add('grapes', GrapeType::class)
                ->add('food')
                ->add('place')
                ->add('giftComment');
    }
    
    
}


