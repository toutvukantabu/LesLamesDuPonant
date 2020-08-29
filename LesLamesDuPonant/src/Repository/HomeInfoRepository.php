<?php

namespace App\Repository;

use App\Entity\HomeInfo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HomeInfo|null find($id, $lockMode = null, $lockVersion = null)
 * @method HomeInfo|null findOneBy(array $criteria, array $orderBy = null)
 * @method HomeInfo[]    findAll()
 * @method HomeInfo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomeInfoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HomeInfo::class);
    }

    // /**
    //  * @return HomeInfo[] Returns an array of HomeInfo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HomeInfo
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
