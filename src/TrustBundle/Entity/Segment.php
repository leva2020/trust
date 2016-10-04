<?php

namespace TrustBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="TrustBundle\Entity\SegmentRepository")
 * @ORM\Table(name="tags")
 */
class Segment
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $segment;
        
    /**
     * @ORM\ManyToMany(targetEntity="Question", mappedBy="tags")
     **/
    private $question;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->question = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set segment
     *
     * @param string $segment
     *
     * @return Segment
     */
    public function setSegment($segment)
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * Get segment
     *
     * @return string
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Add question
     *
     * @param \TrustBundle\Entity\Question $question
     *
     * @return Segment
     */
    public function addQuestion(\TrustBundle\Entity\Question $question)
    {
        $this->question[] = $question;

        return $this;
    }

    /**
     * Remove question
     *
     * @param \TrustBundle\Entity\Question $question
     */
    public function removeQuestion(\TrustBundle\Entity\Question $question)
    {
        $this->question->removeElement($question);
    }

    /**
     * Get question
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getQuestion()
    {
        return $this->question;
    }
}
