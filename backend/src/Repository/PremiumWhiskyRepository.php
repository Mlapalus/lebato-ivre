<?php

namespace App\Repository;

use App\Entity\PremiumWhisky;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PremiumWhisky|null find($id, $lockMode = null, $lockVersion = null)
 * @method PremiumWhisky|null findOneBy(array $criteria, array $orderBy = null)
 * @method PremiumWhisky[]    findAll()
 * @method PremiumWhisky[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PremiumWhiskyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PremiumWhisky::class);
    }

    // /**
    //  * @return PremiumWhisky[] Returns an array of PremiumWhisky objects
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
    public function findOneBySomeField($value): ?PremiumWhisky
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
