<?php

namespace App\Repository;

use App\Entity\HomeSectionForum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HomeSectionForum|null find($id, $lockMode = null, $lockVersion = null)
 * @method HomeSectionForum|null findOneBy(array $criteria, array $orderBy = null)
 * @method HomeSectionForum[]    findAll()
 * @method HomeSectionForum[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomeSectionForumRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HomeSectionForum::class);
    }

    // /**
    //  * @return HomeSectionForum[] Returns an array of HomeSectionForum objects
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
    public function findOneBySomeField($value): ?HomeSectionForum
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
