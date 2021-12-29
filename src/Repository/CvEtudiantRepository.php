<?php

namespace App\Repository;

use App\Entity\CvEtudiant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CvEtudiant|null find($id, $lockMode = null, $lockVersion = null)
 * @method CvEtudiant|null findOneBy(array $criteria, array $orderBy = null)
 * @method CvEtudiant[]    findAll()
 * @method CvEtudiant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CvEtudiantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CvEtudiant::class);
    }

    // /**
    //  * @return CvEtudiant[] Returns an array of CvEtudiant objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CvEtudiant
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
