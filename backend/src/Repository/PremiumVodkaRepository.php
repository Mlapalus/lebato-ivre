<?php

namespace App\Repository;

use App\Entity\PremiumVodka;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PremiumVodka|null find($id, $lockMode = null, $lockVersion = null)
 * @method PremiumVodka|null findOneBy(array $criteria, array $orderBy = null)
 * @method PremiumVodka[]    findAll()
 * @method PremiumVodka[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PremiumVodkaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PremiumVodka::class);
    }

    // /**
    //  * @return PremiumVodka[] Returns an array of PremiumVodka objects
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
    public function findOneBySomeField($value): ?PremiumVodka
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
