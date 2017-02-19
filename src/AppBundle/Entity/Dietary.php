<?php

namespace AppBundle\Entity;

/**
 * Dietary
 */
class Dietary
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $wording;


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
}

