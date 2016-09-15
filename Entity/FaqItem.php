<?php

namespace Dywee\FaqBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Timestampable\Traits\TimestampableEntity;

/**
 * FaqItem
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dywee\FaqBundle\Repository\FaqItemRepository")
 */
class FaqItem
{

    use TimestampableEntity;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="question", type="string", length=255)
     */
    private $question;

    /**
     * @var string
     * @Gedmo\Translatable
     * @ORM\Column(name="answer", type="text")
     */
    private $answer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isVisible", type="boolean")
     */
    private $isVisible;

    /**
     * @ORM\ManyToOne(targetEntity="FaqCategory", inversedBy="faqItems")
     */
    private $faqCategory;

    /**
     * @ORM\Column(name="position", type="smallint", nullable=true)
     */
    private $position;

    /**
     * @Gedmo\Locale
     * Used locale to override Translation listener`s locale
     * this is not a mapped field of entity metadata, just a simple property
     */
    private $locale;

    
    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
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
     * @return FaqItem
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
     * Set answer
     *
     * @param string $answer
     *
     * @return FaqItem
     */
    public function setAnswer($answer)
    {
        $this->answer = $answer;

        return $this;
    }

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Set isVisible
     *
     * @param boolean $isVisible
     *
     * @return FaqItem
     */
    public function setIsVisible($isVisible)
    {
        $this->isVisible = $isVisible;

        return $this;
    }

    /**
     * Get isVisible
     *
     * @return boolean
     */
    public function getIsVisible()
    {
        return $this->isVisible;
    }

    /**
     * alias for setFaqCategory
     *
     * @param FaqCategory $category
     * @return FaqItem
     */
    public function setCategory(FaqCategory $category = null)
    {
        return $this->setFaqCategory($category);
    }

    /**
     * alias for getFaqCategory
     */
    public function getCategory()
    {
        return $this->getFaqCategory();
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return FaqItem
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }


    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    public function getParentEntity()
    {
        return $this->getCategory() ?? FaqCategory::class;
    }

    /**
     * Set category
     *
     * @param FaqCategory $faqCategory
     *
     * @return FaqItem
     */
    public function setFaqCategory(FaqCategory $faqCategory = null)
    {
        $this->faqCategory = $faqCategory;

        return $this;
    }

    /**
     * Get FaqCategory
     *
     * @return \Dywee\FaqBundle\Entity\FaqCategory
     */
    public function getFaqCategory()
    {
        return $this->faqCategory;
    }
}
