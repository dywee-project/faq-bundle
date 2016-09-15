<?php

namespace Dywee\FaqBundle\Controller;

use Dywee\CoreBundle\Controller\ParentController;
use Dywee\FaqBundle\Entity\FaqCategory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FaqCategoryController extends ParentController
{
    /**
     * @Route(name="faq_category_add", path="admin/faq/category/add")
     */
    public function myAddAction(Request $request)
    {
        return parent::addAction($request);
    }

    /**
     * @Route(name="faq_category_table", path="admin/faq/category")
     */
    public function myTableAction($parameters = null)
    {
        return $this->redirectToRoute('faq_dashboard');
    }

    /**
     * @Route(name="faq_category_view", path="admin/faq/category/{id}")
     */
    public function myViewAction(FaqCategory $object)
    {
        return parent::viewAction($object);
    }

    /**
     * @Route(name="faq_category_update", path="admin/faq/category/{id}/edit")
     */
    public function myUpdateAction(FaqCategory $object, Request $request)
    {
        return parent::updateAction($object, $request);
    }

    /**
     * @Route(name="faq_category_delete", path="admin/faq/category/{id}/delete")
     */
    public function myDeleteAction(FaqCategory $object, Request $request)
    {
        return parent::deleteAction($object, $request);
    }
}
