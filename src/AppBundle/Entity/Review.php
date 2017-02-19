<?php

namespace AppBundle\Entity;

/**
 * Review
 */
class Review
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $rating;

    /**
     * @var integer
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $datecreated;

    /**
     * @var integer
     */
    private $userid;

    /**
     * @var integer
     */
    private $foodstallid;

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

