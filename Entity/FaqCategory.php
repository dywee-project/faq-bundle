<?php

namespace Dywee\FaqBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Dywee\CoreBundle\Traits\NameableEntity;
use Gedmo\Mapping\Annotation as Gedmo;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use Gedmo\Translatable\Translatable;

/**
 * FaqCategory
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dywee\FaqBundle\Repository\FaqCategoryRepository")
 */
class FaqCategory
{

    use NameableEntity;
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
     * @var boolean
     *
     * @ORM\Column(name="isVisible", type="boolean")
     */
    private $isVisible = true;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="smallint")
     */
    private $position = 0;

    /**
     * @ORM\OneToMany(targetEntity="FaqItem", mappedBy="faqCategory")
     */
    private $faqItems;

    /**
     * @Gedmo\Locale
     * Used locale to override Translation listener`s locale
     * this is not a mapped field of entity metadata, just a simple property
     */
    private $locale;


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
     * Set isVisible
     *
     * @param boolean $isVisible
     *
     * @return FaqCategory
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
     * Set position
     *
     * @param integer $position
     *
     * @return FaqCategory
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

    public function setTranslatableLocale($locale)
    {
        $this->locale = $locale;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->faqItems = new ArrayCollection();

        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * Add faqItem
     *
     * @param FaqItem $faqItem
     *
     * @return FaqCategory
     */
    public function addFaqItem(FaqItem $faqItem)
    {
        $this->faqItems[] = $faqItem;
        $faqItem->setFaqCategory($this);

        return $this;
    }

    /**
     * Remove faqItem
     *
     * @param FaqItem $faqItem
     */
    public function removeFaqItem(FaqItem $faqItem)
    {
        $this->faqItems->removeElement($faqItem);
    }

    /**
     * Get faqItems
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFaqItems()
    {
        return $this->faqItems;
    }
}
