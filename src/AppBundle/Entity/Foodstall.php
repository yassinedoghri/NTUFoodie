<?php

namespace AppBundle\Entity;

/**
 * Foodstall
 */
class Foodstall
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
    private $description;

    /**
     * @var string
     */
    private $img;

    /**
     * @var integer
     */
    private $foodcourtid;


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
     * @return Foodstall
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
     * Set description
     *
     * @param string $description
     *
     * @return Foodstall
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
     * Set img
     *
     * @param string $img
     *
     * @return Foodstall
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
     * Set foodcourtid
     *
     * @param integer $foodcourtid
     *
     * @return Foodstall
     */
    public function setFoodcourtid($foodcourtid)
    {
        $this->foodcourtid = $foodcourtid;

        return $this;
    }

    /**
     * Get foodcourtid
     *
     * @return integer
     */
    public function getFoodcourtid()
    {
        return $this->foodcourtid;
    }
}

