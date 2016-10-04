<?php

namespace TrustBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="TrustBundle\Entity\QuestionRepository")
 * @ORM\Table(name="question")
 */
class Question {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(type="string")
     */
    protected $question;
    
    /**
     * @ORM\ManyToMany(targetEntity="Segment", inversedBy="question", cascade={"persist"})
     * @ORM\JoinTable(name="question_segment")
     **/
    private $segment;    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->segment = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set question
     *
     * @param string $question
     *
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Add segment
     *
     * @param \TrustBundle\Entity\Segment $segment
     *
     * @return Question
     */
    public function addSegment(\TrustBundle\Entity\Segment $segment)
    {
        $this->segment[] = $segment;

        return $this;
    }

    /**
     * Remove segment
     *
     * @param \TrustBundle\Entity\Segment $segment
     */
    public function removeSegment(\TrustBundle\Entity\Segment $segment)
    {
        $this->segment->removeElement($segment);
    }

    /**
     * Get segment
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSegment()
    {
        return $this->segment;
    }
}
