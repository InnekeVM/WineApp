<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

class PlaceRepository extends EntityRepository {

    public function findAllRacks() {
        $query = $this->getEntityManager()
                ->createQuery(
                        'SELECT DISTINCT p.place FROM Appbundle:Place p'
        );
        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }

    public function findALLRows($rack) {
        $query = $this->getEntityManager()
                ->createQuery(
                        'SELECT DISTINCT p.row from AppBundle:Place p'
                        . 'WHERE p.rack = :rack'                        
        )->setParamater('rack', $rack);

        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
    
    public function findSpots($rack, $row){
         $query = $this->getEntityManager()
                ->createQuery(
                        'SELECT p.spot, p.id from AppBundle:Place p'
                        . 'WHERE p.rack = :rack AND p.row= :row'                        
        )->setParamaters(array(
                'rack' => $rack,
                 'row' => $row,
            ));

        try {
            return $query->getResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
    
   

}
