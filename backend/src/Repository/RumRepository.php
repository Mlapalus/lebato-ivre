<?php

namespace App\Repository;

use App\Entity\Rum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Rum|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rum|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rum[]    findAll()
 * @method Rum[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RumRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rum::class);
    }

    // /**
    //  * @return Rum[] Returns an array of Rum objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Rum
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
