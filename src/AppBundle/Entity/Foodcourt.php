<?php

namespace AppBundle\Entity;

/**
 * Foodcourt
 */
class Foodcourt
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $place;

    /**
     * @var integer
     */
    private $lat;

    /**
     * @var integer
     */
    private $lng;

    /**
     * @var string
     */
    private $img;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $seatingcapacity;


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
}

