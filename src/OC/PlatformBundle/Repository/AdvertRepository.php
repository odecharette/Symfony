<?php

namespace OC\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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

	public function getAdverts($page, $nbPerPage)
  	{
    	$query = $this->createQueryBuilder('a')
      	 // Jointure sur l'attribut image
	      ->leftJoin('a.image', 'i')
	      ->addSelect('i')
	      // Jointure sur l'attribut categories
	      ->leftJoin('a.categories', 'c')
	      ->addSelect('c')
	      ->orderBy('a.date', 'DESC')
	      ->getQuery();

	      // permet l'utilisation d'un paginator
	    
	    $premierResultat = ($page - 1) * $nbPerPage;
        $query->setFirstResult($premierResultat)->setMaxResults($nbPerPage);

	    $paginator = new Paginator($query, true);

	    if ( ($paginator->count() <= $premierResultat) && $page != 1) {
            throw new NotFoundHttpException('La page demandée n\'existe pas.'); // page 404, sauf pour la première page
        }

        return $paginator;
    }

}
