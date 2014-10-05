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
 * Class Mods
 * @package FDP\Dota2StoreBundle\Install
 */
class Mods {

	public static function createDatabase(Container $container) {
		$dm = $container->get('doctrine_mongodb')->getManager();

		// delete collection mod
		$collection = $dm->getDocumentCollection('\FDP\Dota2StoreBundle\Document\Mod');
		$collection->remove(array());

		foreach (Mods::$listMods as $v) {
			$mod = new \FDP\Dota2StoreBundle\Document\Mod();
			$mod->setId($v["id"]);
			$mod->setLocalizedName($v["localizedName"]);
			$dm->persist($mod);
			$mod = null;
		}
		$dm->flush();

	}

	public static $listMods = array(
		array("id" => 0, "localizedName" => "Unknown"),
		array("id" => 1, "localizedName" => "All Pick"),
		array("id" => 2, "localizedName" => "Captains Mode"),
		array("id" => 3, "localizedName" => "Random Draft"),
		array("id" => 4, "localizedName" => "Single Draft"),
		array("id" => 5, "localizedName" => "All Random"),
		array("id" => 6, "localizedName" => "?? INTRO/DEATH ??"),
		array("id" => 7, "localizedName" => "The Diretide"),
		array("id" => 8, "localizedName" => "Reverse Captains Mode"),
		array("id" => 9, "localizedName" => "Greeviling"),
		array("id" => 10, "localizedName" => "Tutorial"),
		array("id" => 11, "localizedName" => "Mid Only"),
		array("id" => 12, "localizedName" => "Least Played"),
		array("id" => 13, "localizedName" => "New Player Pool"),
		array("id" => 14, "localizedName" => "Compendium Matchmaking"),
		array("id" => 15, "localizedName" => "Custom"),
		array("id" => 16, "localizedName" => "Captains Draft"),
		array("id" => 17, "localizedName" => "Balanced Draft"),
		array("id" => 18, "localizedName" => "Ability Draft"),
		array("id" => 19, "localizedName" => "?? Event ??"),
		array("id" => 20, "localizedName" => "All Random Death Match"),
		array("id" => 21, "localizedName" => "1vs1 Solo Mid"),
	);

}