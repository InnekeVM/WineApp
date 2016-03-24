<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Entity\PlaceRepository")
 * ORM\Table(name="place")
 */
class Place{
     
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="integer")     
     */
    private $rack;
    
    /**
     * @ORM\Column(type="integer")     
     */
    private $row;
    
    /**
     * @ORM\Column(type="integer")     
     */
    private $spot;
    
    /**
     * @ORM\ManyToOne(targetEntity="Wine", inversedBy="place")     
     * @ORM\JoinColumn(name="wineId", referencedColumnName="id")
     */
    private $wine;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rack
     *
     * @param integer $rack
     *
     * @return Place
     */
    public function setRack($rack)
    {
        $this->rack = $rack;

        return $this;
    }

    /**
     * Get rack
     *
     * @return integer
     */
    public function getRack()
    {
        return $this->rack;
    }

    /**
     * Set row
     *
     * @param integer $row
     *
     * @return Place
     */
    public function setRow($row)
    {
        $this->row = $row;

        return $this;
    }

    /**
     * Get row
     *
     * @return integer
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Set spot
     *
     * @param integer $spot
     *
     * @return Place
     */
    public function setSpot($spot)
    {
        $this->spot = $spot;

        return $this;
    }

    /**
     * Get spot
     *
     * @return integer
     */
    public function getSpot()
    {
        return $this->spot;
    }

    /**
     * Set wine
     *
     * @param \AppBundle\Entity\Wine $wine
     *
     * @return Place
     */
    public function setWine(\AppBundle\Entity\Wine $wine = null)
    {
        $this->wine = $wine;

        return $this;
    }

    /**
     * Get wine
     *
     * @return \AppBundle\Entity\Wine
     */
    public function getWine()
    {
        return $this->wine;
    }
}
