<?php

namespace SkogstadMedia\Bundle\AheadCmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contentrelation")
 */
class ContentRelation
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    protected $parentContentId;
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    protected $childContentId;

    /**
     * Set parentContentId
     *
     * @param integer $parentContentId
     * @return ContentRelation
     */
    public function setParentContentId($parentContentId)
    {
        $this->parentContentId = $parentContentId;

        return $this;
    }

    /**
     * Get parentContentId
     *
     * @return integer 
     */
    public function getParentContentId()
    {
        return $this->parentContentId;
    }

    /**
     * Set childContentId
     *
     * @param integer $childContentId
     * @return ContentRelation
     */
    public function setChildContentId($childContentId)
    {
        $this->childContentId = $childContentId;

        return $this;
    }

    /**
     * Get childContentId
     *
     * @return integer 
     */
    public function getChildContentId()
    {
        return $this->childContentId;
    }
}
