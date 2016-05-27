<?php

namespace OC\PlatformBundle\Purger;

use OC\PlatformBundle\Entity\Advert;

// Ce service va récupérer et supprimer toutes les annonces dont la date de modification est plus vieille que $days jours

class AdvertPurger
{
	private $days;

	public function __construct($days)
  	{
	    $this->days    = $days;
  	}

	public function purge($em, $days)
	{
		$adverts = $em->getRepository('OCPlatformBundle:Advert')->getAdvertsToPurge($days);

		foreach ($adverts as $advert) {
			$em->remove($advert);
		}
		
		$em->flush();
	}
}
