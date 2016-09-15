<?php

namespace Dywee\FaqBundle\Controller;

use Dywee\CoreBundle\Controller\ParentController;
use Dywee\FaqBundle\Entity\FaqCategory;
use Dywee\FaqBundle\Entity\FaqItem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FaqItemController extends ParentController
{
    /**
     * @Route(name="faq_item_add", path="admin/faq/item/add/{id}")
     */
    public function myAddAction($id, Request $request)
    {
        return parent::addFromParentAction($id, $request);
    }

    /**
     * @Route(name="faq_item_table", path="admin/faq/item")
     */
    public function myTableAction()
    {
        return $this->redirectToRoute('faq_dashboard');
    }

    /**
     * @Route(name="faq_item_view", path="admin/faq/item/{id}")
     */
    public function myViewAction($object)
    {
        return parent::viewAction($object);
    }

    /**
     * @Route(name="faq_item_update", path="admin/faq/item/{id}/edit")
     */
    public function myUpdateAction(FaqItem $object, Request $request)
    {
        return parent::updateAction($object, $request);
    }

    /**
     * @Route(name="faq_item_delete", path="admin/faq/item/{id}/delete")
     */
    public function myDeleteAction(FaqItem $object, Request $request)
    {
        return parent::deleteAction($object, $request);
    }
}
