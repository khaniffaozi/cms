<?php

namespace Synergy\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JobReference
 *
 * @ORM\Table(name="job_reference", indexes={@ORM\Index(name="job_id_fk", columns={"job_id"})})
 * @ORM\Entity
 */
class JobReference
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
     * @ORM\Column(name="type", type="string", length=64, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \Job
     *
     * @ORM\ManyToOne(targetEntity="Job", inversedBy="jobReference")
     * @ORM\JoinColumn(name="job_id", referencedColumnName="id")
     */
    private $job;



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
     * Set type
     *
     * @param string $type
     *
     * @return JobReference
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return JobReference
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
     * Set job
     *
     * @param \Synergy\WebBundle\Entity\Job $job
     *
     * @return JobReference
     */
    public function setJob(\Synergy\WebBundle\Entity\Job $job = null)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return \Synergy\WebBundle\Entity\Job
     */
    public function getJob()
    {
        return $this->job;
    }
}
