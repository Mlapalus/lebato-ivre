<?php

namespace App\Repository;

use App\Entity\WhiteWine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WhiteWine|null find($id, $lockMode = null, $lockVersion = null)
 * @method WhiteWine|null findOneBy(array $criteria, array $orderBy = null)
 * @method WhiteWine[]    findAll()
 * @method WhiteWine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WhiteWineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WhiteWine::class);
    }

    // /**
    //  * @return WhiteWine[] Returns an array of WhiteWine objects
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
    public function findOneBySomeField($value): ?WhiteWine
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
