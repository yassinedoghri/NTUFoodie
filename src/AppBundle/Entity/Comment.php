<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment", uniqueConstraints={@ORM\UniqueConstraint(name="id", columns={"id"})}, indexes={@ORM\Index(name="FK_comment_user", columns={"userid"}), @ORM\Index(name="FK_comment_foodStall", columns={"foodStallid"}), @ORM\Index(name="FK_comment_foodCourt", columns={"foodCourtid"})})
 * @ORM\Entity
 */
class Comment
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
     * @ORM\Column(name="content", type="blob", length=65535, nullable=false)
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
     * @ORM\Column(name="userid", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var integer
     *
     * @ORM\Column(name="foodStallid", type="integer", nullable=true)
     */
    private $foodstallid;

    /**
     * @var integer
     *
     * @ORM\Column(name="foodCourtid", type="integer", nullable=true)
     */
    private $foodcourtid;

    /**
     * @var integer
     *
     * @ORM\Column(name="replyid", type="integer", nullable=true)
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
