<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Wine;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class InputController extends Controller{
    public function newAction(Request $request) {
        //create new wine
        $wine = new Wine();
        $wine->setDateIn(new \DateTime)
        
        
        $form = $this->createFormBuilder($wine)
                   ->add('dateIn')
                ->add('name', TextType::class)
                ->add('year')
                ->add('country')
                ->add('bestConsumationYear')           
                              ->add('variety')
                ->add('priceRang')
                ->Add('grapes')
                ->add('food')
                ->add('place')
                ->add('giftComment')
    }
}
