<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * ORM\Table(name="priceRange")
 */
class PriceRange {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
      
    /**
     * @ORM\Column(type="string", length=20)
     */
    private $range;

    /**
     * @ORM\OneToMany(targetEntity="Wine", mappedBy="priceRange")
     */
    private $wines;
    
    public function __construct() {
        $this->wines = new ArrayCollection();        
    }



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
     * Set range
     *
     * @param string $range
     *
     * @return PriceRange
     */
    public function setRange($range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * Get range
     *
     * @return string
     */
    public function getRange()
    {
        return $this->range;
    }

    /**
     * Add wine
     *
     * @param \AppBundle\Entity\Wine $wine
     *
     * @return PriceRange
     */
    public function addWine(\AppBundle\Entity\Wine $wine)
    {
        $this->wines[] = $wine;

        return $this;
    }

    /**
     * Remove wine
     *
     * @param \AppBundle\Entity\Wine $wine
     */
    public function removeWine(\AppBundle\Entity\Wine $wine)
    {
        $this->wines->removeElement($wine);
    }

    /**
     * Get wines
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWines()
    {
        return $this->wines;
    }
}
