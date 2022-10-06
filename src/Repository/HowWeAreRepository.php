<?php

namespace App\Repository;

use App\Entity\HowWeAre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HowWeAre|null find($id, $lockMode = null, $lockVersion = null)
 * @method HowWeAre|null findOneBy(array $criteria, array $orderBy = null)
 * @method HowWeAre[]    findAll()
 * @method HowWeAre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HowWeAreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HowWeAre::class);
    }

    // /**
    //  * @return HowWeAre[] Returns an array of HowWeAre objects
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
    public function findOneBySomeField($value): ?HowWeAre
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
