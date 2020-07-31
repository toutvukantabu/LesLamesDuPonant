<?php

namespace App\Repository;

use App\Entity\SubjectForum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SubjectForum|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubjectForum|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubjectForum[]    findAll()
 * @method SubjectForum[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubjectForumRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubjectForum::class);
    }

    // /**
    //  * @return SubjectForum[] Returns an array of SubjectForum objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SubjectForum
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
