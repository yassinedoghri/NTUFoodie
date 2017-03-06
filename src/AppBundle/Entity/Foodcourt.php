<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foodcourt
 *
 * @ORM\Table(name="foodcourt", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Foodcourt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255, nullable=true)
     */
    private $place;

    /**
     * @var integer
     *
     * @ORM\Column(name="lat", type="integer", nullable=true)
     */
    private $lat;

    /**
     * @var integer
     *
     * @ORM\Column(name="lng", type="integer", nullable=true)
     */
    private $lng;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="seatingCapacity", type="integer", nullable=true)
     */
    private $seatingcapacity;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Foodstall", mappedBy="foodcourt")
     */
    private $foodstalls;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->foodstalls = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Foodcourt
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
     * Set place
     *
     * @param string $place
     *
     * @return Foodcourt
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set lat
     *
     * @param integer $lat
     *
     * @return Foodcourt
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return integer
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lng
     *
     * @param integer $lng
     *
     * @return Foodcourt
     */
    public function setLng($lng)
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * Get lng
     *
     * @return integer
     */
    public function getLng()
    {
        return $this->lng;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Foodcourt
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Foodcourt
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set seatingcapacity
     *
     * @param integer $seatingcapacity
     *
     * @return Foodcourt
     */
    public function setSeatingcapacity($seatingcapacity)
    {
        $this->seatingcapacity = $seatingcapacity;

        return $this;
    }

    /**
     * Get seatingcapacity
     *
     * @return integer
     */
    public function getSeatingcapacity()
    {
        return $this->seatingcapacity;
    }


    /**
     * Add foodstall
     *
     * @param \AppBundle\Entity\Foodstall $foodstall
     *
     * @return Foodcourt
     */
    public function addFoodstall(\AppBundle\Entity\Foodstall $foodstall)
    {
        $this->foodstalls[] = $foodstall;

        return $this;
    }

    /**
     * Remove foodstall
     *
     * @param \AppBundle\Entity\Foodstall $foodstall
     */
    public function removeFoodstall(\AppBundle\Entity\Foodstall $foodstall)
    {
        $this->foodstalls->removeElement($foodstall);
    }

    /**
     * Get foodstalls
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFoodstalls()
    {
        return $this->foodstalls;
    }
}
