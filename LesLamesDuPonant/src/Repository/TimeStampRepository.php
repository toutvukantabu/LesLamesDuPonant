<?php

namespace App\Repository;

use App\Entity\TimeStamp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TimeStamp|null find($id, $lockMode = null, $lockVersion = null)
 * @method TimeStamp|null findOneBy(array $criteria, array $orderBy = null)
 * @method TimeStamp[]    findAll()
 * @method TimeStamp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TimeStampRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TimeStamp::class);
    }

    // /**
    //  * @return TimeStamp[] Returns an array of TimeStamp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TimeStamp
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
