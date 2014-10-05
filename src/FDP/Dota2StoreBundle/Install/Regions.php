<?php
/**
 * Created by PhpStorm.
 * User => Kioo
 * Date => 03/10/14
 * Time => 16:49
 */

 namespace FDP\Dota2StoreBundle\Install;

 use Symfony\Component\DependencyInjection\ContainerInterface as Container;

/**
 * Class Regions
 * @package FDP\Dota2StoreBundle\Install
 */
class Regions {

	public static function createDatabase(Container $container) {
		$dm = $container->get('doctrine_mongodb')->getManager();

		// delete collection region
		$collection = $dm->getDocumentCollection('\FDP\Dota2StoreBundle\Document\Region');
		$collection->remove(array());

		foreach (Regions::$listRegions as $v) {
			$region = new \FDP\Dota2StoreBundle\Document\Region();
			$region->setId($v["id"]);
			$region->setLocalizedName($v["localizedName"]);
			$dm->persist($region);
			$region = null;
		}
		$dm->flush();
	}

	public static $listRegions= array(
		array("id" => 111, "localizedName" => "US West"),
		array("id" => 112, "localizedName" => "US West"),
		array("id" => 114, "localizedName" => "US West"),
		array("id" => 121, "localizedName" => "US East"),
		array("id" => 122, "localizedName" => "US East"),
		array("id" => 123, "localizedName" => "US East"),
		array("id" => 124, "localizedName" => "US East"),
		array("id" => 131, "localizedName" => "Europe West"),
		array("id" => 132, "localizedName" => "Europe West"),
		array("id" => 133, "localizedName" => "Europe West"),
		array("id" => 134, "localizedName" => "Europe West"),
		array("id" => 135, "localizedName" => "Europe West"),
		array("id" => 136, "localizedName" => "Europe West"),
		array("id" => 142, "localizedName" => "South Korea"),
		array("id" => 143, "localizedName" => "South Korea"),
		array("id" => 151, "localizedName" => "Southeast Asia"),
		array("id" => 152, "localizedName" => "Southeast Asia"),
		array("id" => 153, "localizedName" => "Southeast Asia"),
		array("id" => 161, "localizedName" => "China"),
		array("id" => 163, "localizedName" => "China"),
		array("id" => 171, "localizedName" => "Australia"),
		array("id" => 181, "localizedName" => "Russia"),
		array("id" => 182, "localizedName" => "Russia"),
		array("id" => 183, "localizedName" => "Russia"),
		array("id" => 184, "localizedName" => "Russia"),
		array("id" => 191, "localizedName" => "Europe East"),
		array("id" => 200, "localizedName" => "South America"),
		array("id" => 204, "localizedName" => "South America"),
		array("id" => 211, "localizedName" => "South America"),
		array("id" => 212, "localizedName" => "South America"),
		array("id" => 213, "localizedName" => "South America"),
		array("id" => 221, "localizedName" => "China"),
		array("id" => 222, "localizedName" => "China"),
		array("id" => 223, "localizedName" => "China"),
		array("id" => 231, "localizedName" => "China"),
	);

}