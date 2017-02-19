<?php

namespace AppBundle\Entity;

/**
 * Comment
 */
class Comment
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
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
     * @var integer
     */
    private $replyid;


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
     * Set content
     *
     * @param string $content
     *
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
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
     * @return Comment
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
     * @return Comment
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
     * @return Comment
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
     * @return Comment
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

    /**
     * Set replyid
     *
     * @param integer $replyid
     *
     * @return Comment
     */
    public function setReplyid($replyid)
    {
        $this->replyid = $replyid;

        return $this;
    }

    /**
     * Get replyid
     *
     * @return integer
     */
    public function getReplyid()
    {
        return $this->replyid;
    }
}

