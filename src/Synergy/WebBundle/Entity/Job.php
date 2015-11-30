<?php

namespace Synergy\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Job
 *
 * @ORM\Table(name="job")
 * @ORM\Entity(repositoryClass="Synergy\WebBundle\Repository\WebRepository")
 */
class Job
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
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valid_until", type="date", nullable=true)
     */
    private $validUntil;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=64, nullable=false)
     */
    private $country;



    
    /**
     * @ORM\OneToMany(targetEntity="JobReference", mappedBy="job")
     */
    private $jobReference;

     public function __construct() {
        $this->jobReference = new ArrayCollection();
    }
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="is_publish", type="boolean", nullable=false)
     */
    private $isPublish;

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
     * Set title
     *
     * @param string $title
     *
     * @return Job
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set validUntil
     *
     * @param \DateTime $validUntil
     *
     * @return Job
     */
    public function setValidUntil(\DateTime $validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * Get validUntil
     *
     * @return \DateTime
     */
    public function getValidUntil()
    {
        if($this->validUntil instanceof \DateTime){
            return $this->validUntil->format('d-m-Y');
        }else{
            return $this->validUntil;
        }
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Job
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set isPublish
     *
     * @param boolean $isPublish
     *
     * @return Job
     */
    public function setIsPublish($isPublish)
    {
        $this->isPublish = $isPublish;

        return $this;
    }

    /**
     * Get isPublish
     *
     * @return boolean
     */
    public function getIsPublish()
    {
        return $this->isPublish;
    }
}
