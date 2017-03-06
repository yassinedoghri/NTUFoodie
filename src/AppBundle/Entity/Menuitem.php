<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menuitem
 *
 * @ORM\Table(name="menuitem", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="FK_menuItem_foodStall", columns={"foodStallId"}), @ORM\Index(name="FK_menuItem_dietary", columns={"dietaryId"})})
 * @ORM\Entity
 */
class Menuitem
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
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=true)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="calories", type="integer", nullable=true)
     */
    private $calories;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=128, nullable=true)
     */
    private $img;

    /**
     * @var \AppBundle\Entity\Foodstall
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Foodstall", inversedBy="menuitems", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="foodstallid", referencedColumnName="id")
     * })
     */
    private $foodstall;

    /**
     * @var \AppBundle\Entity\Dietary
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Dietary", inversedBy="menuitems", cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dietaryid", referencedColumnName="id")
     * })
     */
    private $dietary;

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
     * Set foodstall
     *
     * @param \AppBundle\Entity\Foodstall $foodstall
     *
     * @return Menuitem
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
     * Set dietary
     *
     * @param \AppBundle\Entity\Dietary $dietary
     *
     * @return Menuitem
     */
    public function setDietary(\AppBundle\Entity\Dietary $dietary = null)
    {
        $this->dietary = $dietary;

        return $this;
    }

    /**
     * Get dietary
     *
     * @return \AppBundle\Entity\Dietary
     */
    public function getDietary()
    {
        return $this->dietary;
    }
}
