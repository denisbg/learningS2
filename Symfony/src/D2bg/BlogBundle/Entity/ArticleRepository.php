<?php

namespace D2bg\BlogBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;


/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends EntityRepository
{
	public function getArticles($nbpp, $p) {
		if ($p <1 ) {
			throw new \InvalidArgumentException('L\' argument $p ne peut pas etre inf�rieur � 1 : valeur :'.$p);
		}
		$query = $this->createQueryBuilder('a')
		    ->leftJoin('a.image','i')
		    ->addSelect('i')
//		    ->leftJoin('a.categories','c')
//		    ->addSelect('c')
		    ->orderby('a.date','DESC')
		    ->getQuery();
		$query->setFirstResult(($p - 1)* $nbpp)
		    ->setMaxResults($nbpp);
		
		return new Paginator($query);
		
	}
}
