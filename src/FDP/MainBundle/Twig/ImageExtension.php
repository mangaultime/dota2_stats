<?php
/**
 * Created by PhpStorm.
 * User: Kioo
 * Date: 03/10/14
 * Time: 15:15
 */

namespace FDP\MainBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerInterface;

class ImageExtension extends \Twig_Extension
{
	/**
	 * @var \Symfony\Component\DependencyInjection\ContainerInterface
	 */
	private $container;

	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
	}

	public function getFilters()
	{
		return array(
			new \Twig_SimpleFilter('srcImgItem', array($this, 'srcImgItemFunction')),
			new \Twig_SimpleFilter('srcImgHero', array($this, 'srcImgHeroFunction')),
		);
	}

	/**
	 * @param mixed $number
	 * @return string
	 */
	public function srcImgItemFunction($number)
	{

	}

	public function srcImgHeroFunction($number) {


	}

	public function getName()
	{
		return 'dota2.stats.twig.imageExtension';
	}
}