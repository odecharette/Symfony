<?php

namespace OC\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * AdvertRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdvertRepository extends \Doctrine\ORM\EntityRepository
{
	public function getAdvertWithCategories(array $categoryNames){
		// récupérer toutes les annonces qui correspondent à une liste de catégories.

		
		$qb = $this->createQueryBuilder('a')	// fait automatiquement un 'SELECT a FROM Advert'
		->innerJoin('a.categories', 'cat')
		->addSelect('cat');

		$qb->where($qb->expr()->in('cat.name'), $categoryNames);

		return $qb->getQuery()->getResult();
	}

}
