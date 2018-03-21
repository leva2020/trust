<?php

namespace TrustBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="measuare")
 */
class Measure
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /** @ORM\Column(name="neck", type="string", length=255, nullable=true) */
    protected $neck;

    /** @ORM\Column(name="shoulders", type="string", length=255, nullable=true) */
    protected $shoulders;

    /** @ORM\Column(name="arm", type="string", length=255, nullable=true) */
    protected $arm;

    /** @ORM\Column(name="long_sleeved", type="string", length=255, nullable=true) */
    protected $long_sleeved;

    /** @ORM\Column(name="doll", type="string", length=255, nullable=true) */
    protected $doll;

    /** @ORM\Column(name="long_tor", type="string", length=255, nullable=true) */
    protected $long_tor;

    /** @ORM\Column(name="chest", type="string", length=255, nullable=true) */
    protected $chest;

    /** @ORM\Column(name="waist", type="string", length=255, nullable=true) */
    protected $waist;

    /**
     * @ORM\OneToOne(targetEntity="User", inversedBy="measure")
     * @ORM\JoinColumn(name="user_measure", referencedColumnName="id", nullable=TRUE)
     */
    private $user_measure;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNeck()
    {
        return $this->neck;
    }

    /**
     * @param mixed $neck
     */
    public function setNeck($neck)
    {
        $this->neck = $neck;
    }

    /**
     * @return mixed
     */
    public function getShoulders()
    {
        return $this->shoulders;
    }

    /**
     * @param mixed $shoulders
     */
    public function setShoulders($shoulders)
    {
        $this->shoulders = $shoulders;
    }

    /**
     * @return mixed
     */
    public function getArm()
    {
        return $this->arm;
    }

    /**
     * @param mixed $arm
     */
    public function setArm($arm)
    {
        $this->arm = $arm;
    }

    /**
     * @return mixed
     */
    public function getLongSleeved()
    {
        return $this->long_sleeved;
    }

    /**
     * @param mixed $long_sleeved
     */
    public function setLongSleeved($long_sleeved)
    {
        $this->long_sleeved = $long_sleeved;
    }

    /**
     * @return mixed
     */
    public function getDoll()
    {
        return $this->doll;
    }

    /**
     * @param mixed $doll
     */
    public function setDoll($doll)
    {
        $this->doll = $doll;
    }

    /**
     * @return mixed
     */
    public function getLongTor()
    {
        return $this->long_tor;
    }

    /**
     * @param mixed $long_tor
     */
    public function setLongTor($long_tor)
    {
        $this->long_tor = $long_tor;
    }

    /**
     * @return mixed
     */
    public function getChest()
    {
        return $this->chest;
    }

    /**
     * @param mixed $chest
     */
    public function setChest($chest)
    {
        $this->chest = $chest;
    }

    /**
     * @return mixed
     */
    public function getWaist()
    {
        return $this->waist;
    }

    /**
     * @param mixed $waist
     */
    public function setWaist($waist)
    {
        $this->waist = $waist;
    }

    /**
     * @return mixed
     */
    public function getUserMeasure()
    {
        return $this->user_measure;
    }

    /**
     * @param mixed $user_measure
     */
    public function setUserMeasure($user_measure)
    {
        $this->user_measure = $user_measure;
    }

}