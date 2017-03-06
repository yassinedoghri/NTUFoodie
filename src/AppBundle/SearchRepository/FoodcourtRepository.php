<?php

namespace AppBundle\SearchRepository;

use FOS\ElasticaBundle\Repository;

class FoodcourtRepository extends Repository
{

    public function findFoodcourts($searchText, $paginator, $page)
    {
        $search = new \Elastica\Query\QueryString($searchText);
        $search->setFields(array("name", "description", "place"));
        $boolQuery = new \Elastica\Query\BoolQuery();
        $boolQuery->addShould($search);

        $resultSet = $paginator->paginate($this->createPaginatorAdapter($boolQuery), $page, 10);

        return $resultSet;
    }

}
