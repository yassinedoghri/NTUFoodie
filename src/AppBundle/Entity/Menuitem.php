<?php

namespace AppBundle\Entity;

/**
 * Menuitem
 */
class Menuitem
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
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $calories;

    /**
     * @var string
     */
    private $img;

    /**
     * @var integer
     */
    private $foodstallid;

    /**
     * @var integer
     */
    private $dietaryid;


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
     * @return Menuitem
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
     * Set price
     *
     * @param float $price
     *
     * @return Menuitem
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Menuitem
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
     * Set calories
     *
     * @param integer $calories
     *
     * @return Menuitem
     */
    public function setCalories($calories)
    {
        $this->calories = $calories;

        return $this;
    }

    /**
     * Get calories
     *
     * @return integer
     */
    public function getCalories()
    {
        return $this->calories;
    }

    /**
     * Set img
     *
     * @param string $img
     *
     * @return Menuitem
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
     * Set foodstallid
     *
     * @param integer $foodstallid
     *
     * @return Menuitem
     */
    public function setFoodstallid($foodstallid)
    {
        $this->foodstallid = $foodstallid;

        return $this;
    }

    /**
     * Get foodstallid
     *
     * @return integer
     */
    public function getFoodstallid()
    {
        return $this->foodstallid;
    }

    /**
     * Set dietaryid
     *
     * @param integer $dietaryid
     *
     * @return Menuitem
     */
    public function setDietaryid($dietaryid)
    {
        $this->dietaryid = $dietaryid;

        return $this;
    }

    /**
     * Get dietaryid
     *
     * @return integer
     */
    public function getDietaryid()
    {
        return $this->dietaryid;
    }
}

