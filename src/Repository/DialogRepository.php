<?php

namespace App\Repository;

use App\Entity\Dialog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Dialog|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dialog|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dialog[]    findAll()
 * @method Dialog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DialogRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Dialog::class);
    }

//    /**
//     * @return Dialog[] Returns an array of Dialog objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dialog
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
