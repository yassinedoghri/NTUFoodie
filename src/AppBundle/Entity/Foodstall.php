<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Foodstall
 *
 * @ORM\Table(name="foodstall", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="FK_foodStall_foodCourt", columns={"foodcourt"})})
 * @ORM\Entity
 */
class Foodstall
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
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Foodcourt", inversedBy="foodstalls", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="foodcourtid", referencedColumnName="id")
     * })
     */
    private $foodcourt;


    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\FoodstallCategory", mappedBy="foodstall")
     */
    private $categories;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Menuitem", mappedBy="foodstall")
     */
    private $menuitems;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->menuitems = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set foodcourt
     *
     * @param integer $foodcourt
     *
     * @return Foodstall
     */
    public function setFoodcourt($foodcourt)
    {
        $this->foodcourt = $foodcourt;

        return $this;
    }

    /**
     * Get foodcourt
     *
     * @return integer
     */
    public function getFoodcourt()
    {
        return $this->foodcourt;
    }

    /**
     * Add category
     *
     * @param \AppBundle\Entity\FoodstallCategory $category
     *
     * @return Foodstall
     */
    public function addCategory(\AppBundle\Entity\FoodstallCategory $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \AppBundle\Entity\FoodstallCategory $category
     */
    public function removeCategory(\AppBundle\Entity\FoodstallCategory $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add menuitem
     *
     * @param \AppBundle\Entity\Menuitem $menuitem
     *
     * @return Foodstall
     */
    public function addMenuitem(\AppBundle\Entity\Menuitem $menuitem)
    {
        $this->menuitems[] = $menuitem;

        return $this;
    }

    /**
     * Remove menuitem
     *
     * @param \AppBundle\Entity\Menuitem $menuitem
     */
    public function removeMenuitem(\AppBundle\Entity\Menuitem $menuitem)
    {
        $this->menuitems->removeElement($menuitem);
    }

    /**
     * Get menuitems
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMenuitems()
    {
        return $this->menuitems;
    }
}
