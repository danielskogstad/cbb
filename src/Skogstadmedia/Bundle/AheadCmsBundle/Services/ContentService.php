<?php

namespace SkogstadMedia\Bundle\AheadCmsBundle\Services;

use SkogstadMedia\Bundle\AheadCmsBundle\Entity\Content;
use SkogstadMedia\Bundle\AheadCmsBundle\Entity\ContentField;
use SkogstadMedia\Bundle\AheadCmsBundle\Entity\ContentFieldType;
use SkogstadMedia\Bundle\AheadCmsBundle\Entity\ContentSection;
use SkogstadMedia\Bundle\AheadCmsBundle\Entity\ContentType;
use SkogstadMedia\Bundle\AheadCmsBundle\Entity\ContentVersion;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ContentService
{
    protected $repository;
    protected $versionService;
    protected $accessService;

    public function __construct()
    {
        // @TODO 
        // services will be added to constructor
    }
    
    public function get($id)
    {   
        $content = $this->repository->find($id);
        
        if(!$accessService->hasAccess($content->id, $content->sectionId)) {
            throw new AccessDeniedException('The current user does not have read access to this content');
        }
        
        return $this->getData($content);
    }
    
    public function getByIdentifier($identifier)
    {   
        $content = $this->repository->findOneByIdentifier($identifier);
        
        if(!$accessService->hasAccess($content->id, $content->sectionId)) {
            throw new AccessDeniedException('The current user does not have read access to this content');
        }

        return $this->getData($content);
    }
    
    public function getCurrentVersion($id)
    {
        return $this->versionService->getCurrent($id);
    }
    
    public function getCurrentVersionByIdentifier($identifier)
    {
        $content = $this->repository->findOneByIdentifier($identifier);
        
        return $this->getCurrentVersion($content->id);
    }
    
    public function getSubTree($id, $data = false)
    {
        
    }
    
    public function getSubTreeByIdentifier($identifier)
    {
        $content = $this->repository->findOneByIdentifier($identifier);
        
        return $this->getSubTree($content->id);
    }
    
    public function getFields($id)
    {
        
    }
    
    public function getFieldsByIdentifier()
    {
        $content = $this->repository->findOneByIdentifier($identifier);
        
        return $this->getFields($content->id);
    }
    
    protected function getData(Content $content) 
    {
        $fields = $this->getFields($content->id);
        $version = $this->getCurrentVersion($content->id);
        
        return array(
            'contentInfo' => $content,
            'version' => $version,
            'fields' => $fields
        );
    }
}