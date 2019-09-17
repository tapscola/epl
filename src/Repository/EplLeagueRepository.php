<?php

namespace App\Repository;

use App\Entity\EplLeague;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EplLeague|null find($id, $lockMode = null, $lockVersion = null)
 * @method EplLeague|null findOneBy(array $criteria, array $orderBy = null)
 * @method EplLeague[]    findAll()
 * @method EplLeague[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EplLeagueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EplLeague::class);
    }

    // /**
    //  * @return EplLeague[] Returns an array of EplLeague objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EplLeague
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
