<?php

namespace Dywee\FaqBundle\Controller;

use Dywee\CoreBundle\Controller\ParentController;
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
        return parent::tableAction($parameters);
    }

    /**
     * @Route(name="faq_category_view", path="admin/faq/category/{id}")
     */
    public function myViewAction($object)
    {
        return parent::viewAction($object);
    }

    /**
     * @Route(name="faq_category_update", path="admin/faq/category/{id}/edit")
     */
    public function myUpdateAction($object, Request $request)
    {
        return parent::updateAction($object, $request);
    }

    /**
     * @Route(name="faq_category_delete", path="admin/faq/category/{id}/delete")
     */
    public function myDeleteAction($object, Request $request)
    {
        return parent::deleteAction($object, $request);
    }
}
