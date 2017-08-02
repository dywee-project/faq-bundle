<?php

namespace Dywee\FaqBundle\Listener;

use Dywee\FaqBundle\Service\AdminSidebarHandler;
use Dywee\CoreBundle\DyweeCoreEvent;
use Dywee\CoreBundle\Event\SidebarBuilderEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class AdminSidebarBuilderListener implements EventSubscriberInterface{
    private $adminSidebarHandler;

    public function __construct(AdminSidebarHandler $adminSidebarHandler)
    {
        $this->adminSidebarHandler = $adminSidebarHandler;
    }

    public static function getSubscribedEvents()
    {
        // return the subscribed events, their methods and priorities
        return array(
            DyweeCoreEvent::BUILD_ADMIN_SIDEBAR => array('addElementToSidebar', -100)
        );
    }

    public function addElementToSidebar(SidebarBuilderEvent $adminSidebarBuilderEvent)
    {
        $adminSidebarBuilderEvent->addElement($this->adminSidebarHandler->getSideBarMenuElement());
    }

}