<?php

namespace Dywee\FaqBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class FaqController extends Controller
{
    /**
     * @Route(name="faq_dashboard", path="admin/faq")
     */
    public function DashboardAction()
    {
        $fcs = $this->getDoctrine()->getRepository('DyweeFaqBundle:FaqCategory')->findBy(array(), array('position' => 'asc'));

        return $this->render('DyweeFaqBundle:Faq:dashboard.html.twig',
            array(
                'faqCategories' => $fcs
            )
        );
    }

    /**
     * @Route(name="faq_page", path="faq")
     */
    public function pageAction()
    {
        $fcs = $this->getDoctrine()->getRepository('DyweeFaqBundle:FaqCategory')->findBy(array(), array('position' => 'asc'));
        return $this->render('DyweeFaqBundle:Faq:page.html.twig', array('faqCategoryList' => $fcs));
    }
}
