<?php

namespace App\Repository;

use App\Entity\RoseWine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RoseWine|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoseWine|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoseWine[]    findAll()
 * @method RoseWine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoseWineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RoseWine::class);
    }

    // /**
    //  * @return RoseWine[] Returns an array of RoseWine objects
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
