<?php

namespace App\Repository;

use App\Entity\PremiumTequila;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PremiumTequila|null find($id, $lockMode = null, $lockVersion = null)
 * @method PremiumTequila|null findOneBy(array $criteria, array $orderBy = null)
 * @method PremiumTequila[]    findAll()
 * @method PremiumTequila[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PremiumTequilaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PremiumTequila::class);
    }

    // /**
    //  * @return PremiumTequila[] Returns an array of PremiumTequila objects
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
    public function findOneBySomeField($value): ?PremiumTequila
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
