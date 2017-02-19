<?php

namespace AppBundle\Entity;

/**
 * FoodstallCategory
 */
class FoodstallCategory
{
    /**
     * @var integer
     */
    private $foodstallid;

    /**
     * @var integer
     */
    private $categoryid;


    /**
     * Set foodstallid
     *
     * @param integer $foodstallid
     *
     * @return FoodstallCategory
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
     * Set categoryid
     *
     * @param integer $categoryid
     *
     * @return FoodstallCategory
     */
    public function setCategoryid($categoryid)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid
     *
     * @return integer
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }
}

