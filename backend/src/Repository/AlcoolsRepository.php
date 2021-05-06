<?php

namespace App\Repository;

use App\Entity\Alcools;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Alcools|null find($id, $lockMode = null, $lockVersion = null)
 * @method Alcools|null findOneBy(array $criteria, array $orderBy = null)
 * @method Alcools[]    findAll()
 * @method Alcools[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlcoolsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Alcools::class);
    }

    // /**
    //  * @return Alcools[] Returns an array of Alcools objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Alcools
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
