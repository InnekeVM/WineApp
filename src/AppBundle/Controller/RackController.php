<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Place;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RackController extends Controller {
     /**
     * @Route("/rek", name="rek")
     */
    public function showRackAction(){
        $all= $this->getDoctrine()
                ->getRepository('AppBundle:Place')->findAll();
        foreach($all as  $place){
            $overview[0]= $place->getRow();
            $overview[1]= $place->getSpot();
            $overview[2]= $place->getWine()->getName();
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
        
        
        
        return $this->render('rek.html.twig', array('places'=>$places));
    }
    
    /**
     * @Route("/rek{place}", name="rek")
     */
    public function insertAction($place){
        
    }
}