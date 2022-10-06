<?php

namespace App\Repository;

use App\Entity\AMHE;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AMHE|null find($id, $lockMode = null, $lockVersion = null)
 * @method AMHE|null findOneBy(array $criteria, array $orderBy = null)
 * @method AMHE[]    findAll()
 * @method AMHE[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AMHERepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AMHE::class);
    }

    // /**
    //  * @return AMHE[] Returns an array of AMHE objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AMHE
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
