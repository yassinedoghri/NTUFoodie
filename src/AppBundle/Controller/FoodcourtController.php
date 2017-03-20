<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FoodcourtController extends Controller
{
    /**
     * @Template("AppBundle:Foodcourt:index.html.twig")
     * @Route("/foodcourt/{id}", name="foodcourt")
     */
    public function viewAction(Request $request, $id)
    {
        $foodcourt = $this->getDoctrine()->getRepository('AppBundle:Foodcourt')->findOneBy(array('id' => $id));
		$foodstall = $this->getDoctrine()->getRepository('AppBundle:Foodstall')->findBy(array('foodcourt' => $id));
        return array(
            'foodcourt' => $foodcourt,
			'foodstall'=> $foodstall,
        );
    }
}
