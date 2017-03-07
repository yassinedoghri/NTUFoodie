<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dietary
 *
 * @ORM\Table(name="dietary")
 * @ORM\Entity
 */
class Dietary
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
     * @ORM\Column(name="wording", type="string", length=64, nullable=false)
     */
    private $wording;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=128, nullable=false)
     */
    private $img;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Menuitem", mappedBy="dietary")
     */
    private $menuitems;

    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set wording
     *
     * @param string $wording
     *
     * @return Dietary
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
     * Set img
     *
     * @param string $img
     *
     * @return Dietary
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
     * Add menuitem
     *
     * @param \AppBundle\Entity\Menuitem $menuitem
     *
     * @return Dietary
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
