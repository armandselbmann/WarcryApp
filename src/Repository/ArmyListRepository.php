<?php

namespace App\Repository;

use App\Entity\ArmyList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ArmyList>
 *
 * @method ArmyList|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArmyList|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArmyList[]    findAll()
 * @method ArmyList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArmyListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArmyList::class);
    }

//    /**
//     * @return ArmyList[] Returns an array of ArmyList objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ArmyList
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
