<?php

namespace App\Repository;

use App\Entity\RedWine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RedWine|null find($id, $lockMode = null, $lockVersion = null)
 * @method RedWine|null findOneBy(array $criteria, array $orderBy = null)
 * @method RedWine[]    findAll()
 * @method RedWine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RedWineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RedWine::class);
    }

    // /**
    //  * @return RedWine[] Returns an array of RedWine objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RedWine
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
