<?php
namespace SkogstadMedia\Bundle\AheadCmsBundle\Services;

use SkogstadMedia\Bundle\AheadCmsBundle\Entity\ContentRelation;

class ContentTreeService 
{
    protected $repository;
    
    public function __construct()
    {
        // @TODO 
        // add service stuff
    }
    
    public function getChildren($id, $tree = array())
    {   
        $children = $this->repository->findByParentContentId($id);
        
        foreach($children as $child)
        {
            $tree[$child->childContentId] = $child;
            $this->getChildren($child->childContentId, &$tree[$child->childContentId]);
        }
        
        return $tree;
    }
    
    public function getParents($id, $tree = array())
    {
        $parents = $this->repository->findByChildrenContentId($id);
        
        foreach($parents as $parent)
        {
            $tree[$parent->parentContentId] = $parent;
            $this->getPath($child->childContentId, &$tree[$parent->parentContentId]);
        }
    }
}