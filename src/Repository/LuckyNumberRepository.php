<?php

namespace App\Repository;

use App\Entity\LuckyNumber;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LuckyNumber>
 */
class LuckyNumberRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LuckyNumber::class);
    }

    public function saveLuckyNumber(int $number): void
    {
        $luckyNumber = new LuckyNumber();
        $luckyNumber->setValue($number);

        $em = $this->getEntityManager();
        $em->persist($luckyNumber);
        $em->flush();
    }

    //    /**
    //     * @return LuckyNumber[] Returns an array of LuckyNumber objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?LuckyNumber
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
