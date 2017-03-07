<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})})
 * @ORM\Entity
 */
class Category
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
     * @ORM\Column(name="wording", type="string", length=32, nullable=false)
     */
    private $wording;


    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\FoodstallCategory", mappedBy="category")
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
     * Set wording
     *
     * @param string $wording
     *
     * @return Category
     */
    public function setWording($wording)
    {
        $this->wording = $wording;

        return $this;
    }

    /**
     * Get wording
     *
     * @return string
     */
    public function getWording()
    {
        return $this->wording;
    }

    /**
     * Add foodstall
     *
     * @param \AppBundle\Entity\FoodstallCategory $foodstall
     *
     * @return Category
     */
    public function addFoodstall(\AppBundle\Entity\FoodstallCategory $foodstall)
    {
        $this->foodstalls[] = $foodstall;

        return $this;
    }

    /**
     * Remove foodstall
     *
     * @param \AppBundle\Entity\FoodstallCategory $foodstall
     */
    public function removeFoodstall(\AppBundle\Entity\FoodstallCategory $foodstall)
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
