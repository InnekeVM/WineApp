<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * ORM\Table(name="wine")
 */
class Wine {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     */
    /**
     * @ORM\Column(type="string", length=100) 
     */
    private $name;

    /**
     * @ORM\Column(type="integer")     
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $country;

    /**
     * @ORM\Column(type="integer")     
     */
    private $bestConsumationYear;

    /**
     * @Assert\Type("\DateTime")
     */
    /**
     * @ORM\Column(type="date") 
     */
    private $dateIn;

    /**
     * @ORM\Column(type="string")
     */
    private $giftComment;

    /**
     * @Assert\NotBlank()
     */
    /**
     * @ORM\ManyToOne(targetEntity="Variety", inversedBy="wine")  
     * @ORM\JoinColumn(name="varietyId", referencedColumnName="id") 
     */
    private $variety;

    /**
     * @ORM\ManyToOne(targetEntity="Pricerange", inversedBy="wine")     
     * @ORM\JoinColumn(name="priceRangeId", referencedColumnName="id")
     */
    private $priceRange;

    /**
     * @ORM\ManyToMany(targetEntity="Grape", inversedBy="wines")
     * @ORM\JoinTable(name="wineGrape")
     */
    private $grapes;

    /**
     * @Assert\NotBlank()
     */
    /**
     * @ORM\OneToMany(targetEntity="Place", mappedBy="wine")     
     */
    private $place;

    /**
     * @ORM\ManyToMany(targetEntity="Food", inversedBy="wines")
     * @ORM\JoinTable(name="foodParing")
     */
    private $foods;

    public function __construct() {
        $this->place = new ArrayCollection();
        $this->grapes = new ArrayCollection();
        $this->foods = new ArrayCollection();
    }


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Wine
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
     * Set year
     *
     * @param integer $year
     *
     * @return Wine
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Wine
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set bestConsumationYear
     *
     * @param integer $bestConsumationYear
     *
     * @return Wine
     */
    public function setBestConsumationYear($bestConsumationYear)
    {
        $this->bestConsumationYear = $bestConsumationYear;

        return $this;
    }

    /**
     * Get bestConsumationYear
     *
     * @return integer
     */
    public function getBestConsumationYear()
    {
        return $this->bestConsumationYear;
    }

    /**
     * Set dateIn
     *
     * @param \DateTime $dateIn
     *
     * @return Wine
     */
    public function setDateIn($dateIn)
    {
        $this->dateIn = $dateIn;

        return $this;
    }

    /**
     * Get dateIn
     *
     * @return \DateTime
     */
    public function getDateIn()
    {
        return $this->dateIn;
    }

    /**
     * Set giftComment
     *
     * @param string $giftComment
     *
     * @return Wine
     */
    public function setGiftComment($giftComment)
    {
        $this->giftComment = $giftComment;

        return $this;
    }

    /**
     * Get giftComment
     *
     * @return string
     */
    public function getGiftComment()
    {
        return $this->giftComment;
    }

    /**
     * Set variety
     *
     * @param \AppBundle\Entity\Variety $variety
     *
     * @return Wine
     */
    public function setVariety(\AppBundle\Entity\Variety $variety = null)
    {
        $this->variety = $variety;

        return $this;
    }

    /**
     * Get variety
     *
     * @return \AppBundle\Entity\Variety
     */
    public function getVariety()
    {
        return $this->variety;
    }

    /**
     * Set priceRange
     *
     * @param \AppBundle\Entity\Pricerange $priceRange
     *
     * @return Wine
     */
    public function setPriceRange(\AppBundle\Entity\Pricerange $priceRange = null)
    {
        $this->priceRange = $priceRange;

        return $this;
    }

    /**
     * Get priceRange
     *
     * @return \AppBundle\Entity\Pricerange
     */
    public function getPriceRange()
    {
        return $this->priceRange;
    }

    /**
     * Add grape
     *
     * @param \AppBundle\Entity\Grape $grape
     *
     * @return Wine
     */
    public function addGrape(\AppBundle\Entity\Grape $grape)
    {
        $this->grapes[] = $grape;

        return $this;
    }

    /**
     * Remove grape
     *
     * @param \AppBundle\Entity\Grape $grape
     */
    public function removeGrape(\AppBundle\Entity\Grape $grape)
    {
        $this->grapes->removeElement($grape);
    }

    /**
     * Get grapes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGrapes()
    {
        return $this->grapes;
    }

    /**
     * Add place
     *
     * @param \AppBundle\Entity\Place $place
     *
     * @return Wine
     */
    public function addPlace(\AppBundle\Entity\Place $place)
    {
        $this->place[] = $place;

        return $this;
    }

    /**
     * Remove place
     *
     * @param \AppBundle\Entity\Place $place
     */
    public function removePlace(\AppBundle\Entity\Place $place)
    {
        $this->place->removeElement($place);
    }

    /**
     * Get place
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Add food
     *
     * @param \AppBundle\Entity\Food $food
     *
     * @return Wine
     */
    public function addFood(\AppBundle\Entity\Food $food)
    {
        $this->foods[] = $food;

        return $this;
    }

    /**
     * Remove food
     *
     * @param \AppBundle\Entity\Food $food
     */
    public function removeFood(\AppBundle\Entity\Food $food)
    {
        $this->foods->removeElement($food);
    }

    /**
     * Get foods
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFoods()
    {
        return $this->foods;
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
}
