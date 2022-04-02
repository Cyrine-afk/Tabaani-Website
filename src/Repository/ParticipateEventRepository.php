<?php

namespace App\Repository;

use App\Entity\ParticipateEvent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ParticipateEvent|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParticipateEvent|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParticipateEvent[]    findAll()
 * @method ParticipateEvent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParticipateEventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ParticipateEvent::class);
    }

    // /**
    //  * @return ParticipateEvent[] Returns an array of ParticipateEvent objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ParticipateEvent
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
