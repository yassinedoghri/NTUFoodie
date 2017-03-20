<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FoodstallController extends Controller
{
    /**
     * @Template("AppBundle::foodstall.html.twig")
     * @Route("/foodstall/{id}", name="foodstall")
     */
    public function viewAction(Request $request, $id)
    {
		$foodstall = $this->getDoctrine()->getRepository('AppBundle:Foodstall')->findOneBy(array('id' => $id));
		$foodstallmenu = $this->getDoctrine()->getRepository('AppBundle:Menuitem')->findBy(array('foodstall' => $id));
        return array(
			'foodstall' => $foodstall,
            'foodstallmenu' => $foodstallmenu,
        );
    }
}
