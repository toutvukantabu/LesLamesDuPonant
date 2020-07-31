<?php

namespace App\Repository;

use App\Entity\MessageForum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MessageForum|null find($id, $lockMode = null, $lockVersion = null)
 * @method MessageForum|null findOneBy(array $criteria, array $orderBy = null)
 * @method MessageForum[]    findAll()
 * @method MessageForum[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MessageForumRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MessageForum::class);
    }

    // /**
    //  * @return MessageForum[] Returns an array of MessageForum objects
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
    public function findOneBySomeField($value): ?MessageForum
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
