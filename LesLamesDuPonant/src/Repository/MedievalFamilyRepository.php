<?php

namespace App\Repository;

use App\Entity\MedievalFamily;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MedievalFamily|null find($id, $lockMode = null, $lockVersion = null)
 * @method MedievalFamily|null findOneBy(array $criteria, array $orderBy = null)
 * @method MedievalFamily[]    findAll()
 * @method MedievalFamily[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MedievalFamilyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MedievalFamily::class);
    }

    // /**
    //  * @return MedievalFamily[] Returns an array of MedievalFamily objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MedievalFamily
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
