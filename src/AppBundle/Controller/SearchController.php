<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SearchController extends Controller
{
    /**
     * @Template("AppBundle:Search:search.html.twig")
     * @Route("/search/{page}", requirements={"page" = "\d+"}, defaults={"page" = 1}, name="search")
     */
    public function searchAction(Request $request, $page)
    {
        $repositoryManager = $this->get('fos_elastica.manager.orm');
        $repository = $repositoryManager->getRepository('AppBundle:Foodcourt');
        $searchQuery = $request->get('q');
        $pageNum = intval($page);
        $limit = $request->query->get('l', 10);
        $paginator = $this->get('knp_paginator');


        $foodcourts = $repository->findFoodcourts($searchQuery, $paginator, $pageNum, $limit);
        $categories = $this->getDoctrine()->getRepository('AppBundle:Category')->findAll();
        $dietaries = $this->getDoctrine()->getRepository('AppBundle:Dietary')->findAll();


        return array(
            'foodcourts' => $foodcourts,
            'categories' => $categories,
            'dietaries' => $dietaries,
        );
    }
}
