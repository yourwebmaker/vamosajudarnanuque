<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ProblemaRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProblemaRepository extends EntityRepository
{

    function findUltimosProblemas($quantidade = 10)
    {

    }

    function findProblemasMaisAcessados($quantidade = 10)
    {

    }
}