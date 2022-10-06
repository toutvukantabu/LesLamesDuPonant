<?php

namespace App\Repository;

use App\Entity\LesLamesDuPonant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LesLamesDuPonant|null find($id, $lockMode = null, $lockVersion = null)
 * @method LesLamesDuPonant|null findOneBy(array $criteria, array $orderBy = null)
 * @method LesLamesDuPonant[]    findAll()
 * @method LesLamesDuPonant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LesLamesDuPonantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LesLamesDuPonant::class);
    }

    // /**
    //  * @return LesLamesDuPonant[] Returns an array of LesLamesDuPonant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LesLamesDuPonant
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
