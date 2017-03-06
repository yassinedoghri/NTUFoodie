<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FoodstallCategory
 *
 * @ORM\Table(name="foodstall_category", indexes={@ORM\Index(name="FK_foodStall_foodStall", columns={"foodStallId"}), @ORM\Index(name="FK_foodStall_category", columns={"categoryId"})})
 * @ORM\Entity
 */
class FoodstallCategory
{
    /**
     * @var \AppBundle\Entity\Foodstall
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Foodstall", inversedBy="categories", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="foodstallid", referencedColumnName="id")
     * })
     */
    private $foodstall;

    /**
     * @var \AppBundle\Entity\Category
     *
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Category", inversedBy="foodstalls", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoryid", referencedColumnName="id")
     * })
     */
    private $category;


    /**
     * Set foodstall
     *
     * @param \AppBundle\Entity\Foodstall $foodstall
     *
     * @return FoodstallCategory
     */
    public function setFoodstall(\AppBundle\Entity\Foodstall $foodstall = null)
    {
        $this->foodstall = $foodstall;

        return $this;
    }

    /**
     * Get foodstall
     *
     * @return \AppBundle\Entity\Foodstall
     */
    public function getFoodstall()
    {
        return $this->foodstall;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\Category $category
     *
     * @return FoodstallCategory
     */
    public function setCategory(\AppBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}
