<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * ORM\Table(name="variety")
 */
class Variety {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     *@ORM\Column(type="string", length=50)     
     */
    private $name;
    
    /**
     *@ORM\OneToMany(targetEntity="Wine", mappedBy="variety")     
     */
    private $wine;
    
    function __construct() {
        $this->wine = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Variety
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add wine
     *
     * @param \AppBundle\Entity\Wine $wine
     *
     * @return Variety
     */
    public function addWine(\AppBundle\Entity\Wine $wine)
    {
        $this->wine[] = $wine;

        return $this;
    }

    /**
     * Remove wine
     *
     * @param \AppBundle\Entity\Wine $wine
     */
    public function removeWine(\AppBundle\Entity\Wine $wine)
    {
        $this->wine->removeElement($wine);
    }

    /**
     * Get wine
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWine()
    {
        return $this->wine;
    }
}
