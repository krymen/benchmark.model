<?php

namespace Wowo\Cities\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * CityRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CityRepository extends EntityRepository
{
    public function findTop10Cities()
    {
        $dql = <<<EOT
            SELECT c, s
            FROM Wowo\Cities\Entity\City c
            JOIN c.state s
EOT;
        $dql = $this->_em->createQuery($dql);
        $dql->setMaxResults(10);
        return $dql->getResult();
    }
}
