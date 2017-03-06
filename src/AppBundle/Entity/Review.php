<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Review
 *
 * @ORM\Table(name="review", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="FK_review_foodCourt", columns={"foodCourtId"}), @ORM\Index(name="FK_review_foodStall", columns={"foodStallId"}), @ORM\Index(name="FK_review_user", columns={"userId"})})
 * @ORM\Entity
 */
class Review
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
     * @var integer
     *
     * @ORM\Column(name="rating", type="integer", nullable=false)
     */
    private $rating;

    /**
     * @var integer
     *
     * @ORM\Column(name="content", type="integer", nullable=true)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="date", nullable=false)
     */
    private $datecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="userId", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="foodStallId", type="integer", nullable=true)
     */
    private $foodstallid;

    /**
     * @var integer
     *
     * @ORM\Column(name="foodCourtId", type="integer", nullable=true)
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
     * Set rating
     *
     * @param integer $rating
     *
     * @return Review
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set content
     *
     * @param integer $content
     *
     * @return Review
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return integer
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set datecreated
     *
     * @param \DateTime $datecreated
     *
     * @return Review
     */
    public function setDatecreated($datecreated)
    {
        $this->datecreated = $datecreated;

        return $this;
    }

    /**
     * Get datecreated
     *
     * @return \DateTime
     */
    public function getDatecreated()
    {
        return $this->datecreated;
    }

    /**
     * Set userid
     *
     * @param integer $userid
     *
     * @return Review
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set foodstallid
     *
     * @param integer $foodstallid
     *
     * @return Review
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
     * Set foodcourtid
     *
     * @param integer $foodcourtid
     *
     * @return Review
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
