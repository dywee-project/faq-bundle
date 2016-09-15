<?php

namespace Dywee\FaqBundle\Service;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Dywee\FaqBundle\Entity\FaqCategory;

class CategoryPositionHandler{

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if(!$entity instanceof FaqCategory)
            return;

        $lastFaqCategory = $args->getEntityManager()->findOneBy(array(), array('position' => 'desc'));

        if(!$lastFaqCategory)
            $entity->setPosition(1);
        else
            $entity->setPosition($lastFaqCategory->getPosition() + 1);
    }

}