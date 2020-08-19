<?php

namespace App\Repository;

use App\Entity\HomeDiscipline;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HomeDiscipline|null find($id, $lockMode = null, $lockVersion = null)
 * @method HomeDiscipline|null findOneBy(array $criteria, array $orderBy = null)
 * @method HomeDiscipline[]    findAll()
 * @method HomeDiscipline[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomeDisciplineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HomeDiscipline::class);
    }

    // /**
    //  * @return HomeDiscipline[] Returns an array of HomeDiscipline objects
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
    public function findOneBySomeField($value): ?HomeDiscipline
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
