<?php

namespace Dywee\FaqBundle\Service;

use Symfony\Component\Routing\Router;

class AdminSidebarHandler
{

    private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function getSideBarMenuElement()
    {
        $menu = array(
            'key' => 'faq',
            'icon' => 'fa fa-newspaper-o',
            'label' => 'faq.sidebar.label',
            'children' => array(
                array(
                    'icon' => 'fa fa-list-alt',
                    'label' => 'faq.sidebar.dashboard',
                    'route' => $this->router->generate('faq_dashboard')
                ),
            )
        );

        return $menu;
    }
}