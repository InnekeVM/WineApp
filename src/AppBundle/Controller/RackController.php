<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Place;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EntityType;

class RackController extends Controller {

    /**
     * @Route("/rek", name="rek")
     */
    public function showRackAction() {
        $all = $this->getDoctrine()
                        ->getRepository('AppBundle:Place')->findAll();
        $overview = array();
        foreach ($all as $place) {
            $rack = $place->getRack();
            $row = $place->getRow();
            $place = $place->getSpot();
            $wine = $place->getWine()->getName();

            if (!$wine) {
                $overview[$rack][$row][$place] = null;
            } else {
                $overview[$rack][$row][$place] = $wine;
            }
        }
//        $em= $this->getDoctrine()->getManager();
//        $racks = $em->getRepository('AppBundle:Place')->findAllRacks();        
//        foreach ($racks as $rack){
//            $rows = $em->getRepository('AppBundle:Place')->findAllRows($rack);
//            foreach($rows as $row){
//                $spot = $em->getRepository('AppBundle:Place')->findAllSpots($rack, $row);
//                $id = 
//            }
//        }       
        return $this->render('rek.html.twig', array('overview' => $overview));
    }

    /**
     * @Route("/rek{place}", name="rek")
     */
    public function editAction( $place) {
        $wines = $this->getDoctrine()
                        ->getRepository('AppBundle:Wine')->findAll();
        $builder->add('wineFromDatabase', EntityType::class,array(
            'class'=> 'AppBundle:Wine', 
            } 
            ));
    }

}
