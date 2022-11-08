<?php

namespace AppBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAll()
    {
        $qb = $this->createQueryBuilder('u');
        $qb->where('u.username != :admin')
            ->setParameter('admin', 'admin');

        return $qb->getQuery()
            ->getResult();
    }

    public function findAllQB()
    {
        $qb = $this->createQueryBuilder('u');
        $qb->where('u.username != :admin')
            ->setParameter('admin', 'admin');

        return $qb;
    }
}