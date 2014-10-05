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
 * Class Lobbies
 * @package FDP\Dota2StoreBundle\Install
 */
class Lobbies {

	public static function createDatabase(Container $container) {
		$dm = $container->get('doctrine_mongodb')->getManager();

		// delete collection lobby
		$collection = $dm->getDocumentCollection('\FDP\Dota2StoreBundle\Document\Lobby');
		$collection->remove(array());

		foreach (Lobbies::$listLobbies as $v) {
			$lobby = new \FDP\Dota2StoreBundle\Document\Lobby();
			$lobby->setId($v["id"]);
			$lobby->setLocalizedName($v["localizedName"]);
			$dm->persist($lobby);
			$lobby = null;
		}
		$dm->flush();
	}

	public static $listLobbies = array(
		array("id" => -1, "localizedName" => "Invalid"),
		array("id" => 0, "localizedName" => "Public matchmaking"),
		array("id" => 1, "localizedName" => "Practice"),
		array("id" => 2, "localizedName" => "Tournament"),
		array("id" => 3, "localizedName" => "Tutorial"),
		array("id" => 4, "localizedName" => "Co-op with bots"),
		array("id" => 5, "localizedName" => "Team match"),
		array("id" => 6, "localizedName" => "Solo Queue"),
		array("id" => 7, "localizedName" => "Ranked"),
		array("id" => 8, "localizedName" => "Solo Mid 1vs1"),
	);

}