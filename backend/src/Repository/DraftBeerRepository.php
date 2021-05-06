<?php

namespace App\Repository;

use App\Entity\DraftBeer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DraftBeer|null find($id, $lockMode = null, $lockVersion = null)
 * @method DraftBeer|null findOneBy(array $criteria, array $orderBy = null)
 * @method DraftBeer[]    findAll()
 * @method DraftBeer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DraftBeerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DraftBeer::class);
    }

    // /**
    //  * @return DraftBeer[] Returns an array of DraftBeer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DraftBeer
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
