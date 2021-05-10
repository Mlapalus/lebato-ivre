<?php

namespace App\Repository;

use App\Entity\PremiumGin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PremiumGin|null find($id, $lockMode = null, $lockVersion = null)
 * @method PremiumGin|null findOneBy(array $criteria, array $orderBy = null)
 * @method PremiumGin[]    findAll()
 * @method PremiumGin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PremiumGinRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PremiumGin::class);
    }

    // /**
    //  * @return PremiumGin[] Returns an array of PremiumGin objects
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
    public function findOneBySomeField($value): ?PremiumGin
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
