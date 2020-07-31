<?php

namespace App\Repository;

use App\Entity\CategoryForum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategoryForum|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryForum|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryForum[]    findAll()
 * @method CategoryForum[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryForumRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoryForum::class);
    }

    // /**
    //  * @return CategoryForum[] Returns an array of CategoryForum objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategoryForum
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
