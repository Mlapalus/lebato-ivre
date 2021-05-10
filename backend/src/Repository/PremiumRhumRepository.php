<?php

namespace App\Repository;

use App\Entity\PremiumRhum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PremiumRhum|null find($id, $lockMode = null, $lockVersion = null)
 * @method PremiumRhum|null findOneBy(array $criteria, array $orderBy = null)
 * @method PremiumRhum[]    findAll()
 * @method PremiumRhum[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PremiumRhumRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PremiumRhum::class);
    }

    // /**
    //  * @return PremiumRhum[] Returns an array of PremiumRhum objects
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
    public function findOneBySomeField($value): ?PremiumRhum
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
