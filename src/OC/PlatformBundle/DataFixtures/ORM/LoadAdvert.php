<?php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Image;
use OC\PlatformBundle\Entity\AdvertSkill;
use OC\PlatformBundle\Entity\Skill;
use OC\PlatformBundle\Entity\Category;
use OC\PlatformBundle\Entity\Application;

class LoadAdvert implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    /******************** Advert 1 avec application ************************/
    $advert = new Advert();
    $advert->setTitle('Recherche développeur Symfony');
    $advert->setAuthor('Alexandre');
    $advert->setContent("Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…");
    $advert->setUpdatedAt(new \DateTime('2016-03-12 12:00:00'));
    // On la persiste
    $manager->persist($advert);

    $image = new Image();
    $image->setUrl('https://symfony.com/images/v5/opengraph/symfony_logo.png?v=4');
    $image->setAlt('Job de rêve');
    $advert->setImage($image);

    $category = new category('Développement web');
    $advert->addCategory($category);

    $application1 = new Application();
    $application1->setAuthor('Sophie');
    $application1->setContent("J'adore Symfony !");
    $application1->setAdvert($advert);
    $manager->persist($application1);

    /************************* Advert 2 ***********************************/

    $advert = new Advert();
    $advert->setTitle('Recherche développeur PHP');
    $advert->setAuthor('Sophie');
    $advert->setContent("Nous recherchons un développeur PHP expert sur Paris.");
    $advert->setUpdatedAt(new \DateTime('2016-02-12 12:00:00'));
    // On la persiste
    $manager->persist($advert);

    $image = new Image();
    $image->setUrl('http://d3155zmgnpm2ae.cloudfront.net/wp-content/uploads/2014/12/mysql-php-logos.png');
    $image->setAlt('Job de rêve');
    $advert->setImage($image);

    $category = new category('Développement web');
    $advert->addCategory($category);

    /************************* Advert 3 ***********************************/
    
    $advert = new Advert();
    $advert->setTitle('Recherche développeur C++');
    $advert->setAuthor('Sophie');
    $advert->setContent("Nous recherchons un développeur C++ expert sur Marseille.");
    $advert->setUpdatedAt(new \DateTime('2016-02-18 12:00:00'));
    // On la persiste
    $manager->persist($advert);

    $image = new Image();
    $image->setUrl('http://buzness.com/wp-content/uploads/2013/11/c++.png');
    $image->setAlt('Job de rêve');
    $advert->setImage($image);

    $category = new category('Développement web');
    $advert->addCategory($category);

    /************************* Advert 4 ***********************************/

    $advert = new Advert();
    $advert->setTitle('Recherche développeur Java');
    $advert->setAuthor('Marc');
    $advert->setContent("Nous recherchons un développeur Java expert sur Marseille.");
    $advert->setUpdatedAt(new \DateTime('2016-01-18 12:00:00'));
    // On la persiste
    $manager->persist($advert);

    $image = new Image();
    $image->setUrl('http://blog.d2-si.fr/wp-content/uploads/2015/05/d2si_blog_image__java.jpg');
    $image->setAlt('Job de rêve');
    $advert->setImage($image);

    $category = new category('Développement web');
    $advert->addCategory($category);

    /************************* Advert 5 ***********************************/

    $advert = new Advert();
    $advert->setTitle('Recherche développeur HTML & CSS');
    $advert->setAuthor('Marc');
    $advert->setContent("Nous recherchons un développeur HTML expert sur Marseille.");
    $advert->setUpdatedAt(new \DateTime('2016-01-15 12:00:00'));
    // On la persiste
    $manager->persist($advert);

    $image = new Image();
    $image->setUrl('http://nolimitmaroc.com/wp-content/uploads/2014/03/html-css.jpg');
    $image->setAlt('Job de rêve');
    $advert->setImage($image);

    $category = new category('Développement web');
    $advert->addCategory($category);

    /************************* Advert 6 ***********************************/

    $advert = new Advert();
    $advert->setTitle('Recherche un graphiste');
    $advert->setAuthor('Marc');
    $advert->setContent("Nous recherchons un graphiste débutant sur Paris.");
    $advert->setUpdatedAt(new \DateTime('2016-01-19 12:00:00'));
    // On la persiste
    $manager->persist($advert);

    $image = new Image();
    $image->setUrl('http://pitus.fr/images/dessin-graphiste.png');
    $image->setAlt('Job de rêve');
    $advert->setImage($image);

    $category = new category('Graphisme');
    $advert->addCategory($category);

    /************************* Advert 7 ***********************************/

    $advert = new Advert();
    $advert->setTitle('Recherche un graphiste');
    $advert->setAuthor('Marc');
    $advert->setContent("Nous recherchons un graphiste débutant sur Paris.");
    $advert->setUpdatedAt(new \DateTime('2016-01-10 12:00:00'));
    // On la persiste
    $manager->persist($advert);

    $image = new Image();
    $image->setUrl('http://pitus.fr/images/dessin-graphiste.png');
    $image->setAlt('Job de rêve');
    $advert->setImage($image);

    $category = new category('Graphisme');
    $advert->addCategory($category);

    /************************* Advert 8 ***********************************/

    $advert = new Advert();
    $advert->setTitle('Recherche un graphiste');
    $advert->setAuthor('Marc');
    $advert->setContent("Nous recherchons un graphiste débutant sur Paris.");
    $advert->setUpdatedAt(new \DateTime('2016-01-11 12:00:00'));
    // On la persiste
    $manager->persist($advert);

    $image = new Image();
    $image->setUrl('http://pitus.fr/images/dessin-graphiste.png');
    $image->setAlt('Job de rêve');
    $advert->setImage($image);

    $category = new category('Graphisme');
    $advert->addCategory($category);

    /************************* Advert 9 ***********************************/

    $advert = new Advert();
    $advert->setTitle('Recherche un graphiste');
    $advert->setAuthor('Marc');
    $advert->setContent("Nous recherchons un graphiste débutant sur Paris.");
    $advert->setUpdatedAt(new \DateTime('2016-01-12 12:00:00'));
    // On la persiste
    $manager->persist($advert);

    $image = new Image();
    $image->setUrl('http://pitus.fr/images/dessin-graphiste.png');
    $image->setAlt('Job de rêve');
    $advert->setImage($image);

    $category = new category('Graphisme');
    $advert->addCategory($category);

    /************************* Advert 10 ***********************************/

    $advert = new Advert();
    $advert->setTitle('Recherche un graphiste');
    $advert->setAuthor('Marc');
    $advert->setContent("Nous recherchons un graphiste débutant sur Paris.");
    $advert->setUpdatedAt(new \DateTime('2016-01-13 12:00:00'));
    // On la persiste
    $manager->persist($advert);

    $image = new Image();
    $image->setUrl('http://pitus.fr/images/dessin-graphiste.png');
    $image->setAlt('Job de rêve');
    $advert->setImage($image);

    $category = new category('Graphisme');
    $advert->addCategory($category);

    /************************* Advert 11 ***********************************/

    $advert = new Advert();
    $advert->setTitle('Recherche un graphiste');
    $advert->setAuthor('Marc');
    $advert->setContent("Nous recherchons un graphiste débutant sur Paris.");
    $advert->setUpdatedAt(new \DateTime('2016-01-14 12:00:00'));
    // On la persiste
    $manager->persist($advert);

    $image = new Image();
    $image->setUrl('http://pitus.fr/images/dessin-graphiste.png');
    $image->setAlt('Job de rêve');
    $advert->setImage($image);

    $category = new category('Graphisme');
    $advert->addCategory($category);

    // On flush tout ce qu'on vient de créer
    $manager->flush();
  }
}