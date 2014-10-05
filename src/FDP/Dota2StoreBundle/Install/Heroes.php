<?php
/**
 * Created by PhpStorm.
 * User => Kioo
 * Date => 03/10/14
 * Time => 16 =>49
 */

namespace FDP\Dota2StoreBundle\Install;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

/**
 * Class Heroes
 * @package FDP\Dota2StoreBundle\Install
 */
class Heroes {

	public static function createDatabase(Container $container) {
		$dm = $container->get('doctrine_mongodb')->getManager();

		// delete collection hero
		$collection = $dm->getDocumentCollection('\FDP\Dota2StoreBundle\Document\Hero');
		$collection->remove(array());

		foreach (Heroes::$listHeroes as $v) {
			$hero = new \FDP\Dota2StoreBundle\Document\Hero();
			$hero->setId($v["id"]);
			$hero->setCodeName($v["codeName"]);
			$hero->setLocalizedName($v["localizedName"]);
			$dm->persist($hero);
			$hero = null;
		}
		$dm->flush();
	}

	public static $listHeroes = array(
		array("codeName" => "antimage", "id" => 1, "localizedName" => "Anti-Mage"),
		array("codeName" => "axe", "id" => 2, "localizedName" => "Axe"),
		array("codeName" => "bane", "id" => 3, "localizedName" => "Bane"),
		array("codeName" => "bloodseeker", "id" => 4, "localizedName" => "Bloodseeker"),
		array("codeName" => "crystal_maiden", "id" => 5, "localizedName" => "Crystal Maiden"),
		array("codeName" => "drow_ranger", "id" => 6, "localizedName" => "Drow Ranger"),
		array("codeName" => "earthshaker", "id" => 7, "localizedName" => "Earthshaker"),
		array("codeName" => "juggernaut", "id" => 8, "localizedName" => "Juggernaut"),
		array("codeName" => "mirana", "id" => 9, "localizedName" => "Mirana"),
		array("codeName" => "nevermore", "id" => 11, "localizedName" => "Shadow Fiend"),
		array("codeName" => "morphling", "id" => 10, "localizedName" => "Morphling"),
		array("codeName" => "phantom_lancer", "id" => 12, "localizedName" => "Phantom Lancer"),
		array("codeName" => "puck", "id" => 13, "localizedName" => "Puck"),
		array("codeName" => "pudge", "id" => 14, "localizedName" => "Pudge"),
		array("codeName" => "razor", "id" => 15, "localizedName" => "Razor"),
		array("codeName" => "sand_king", "id" => 16, "localizedName" => "Sand King"),
		array("codeName" => "storm_spirit", "id" => 17, "localizedName" => "Storm Spirit"),
		array("codeName" => "sven", "id" => 18, "localizedName" => "Sven"),
		array("codeName" => "tiny", "id" => 19, "localizedName" => "Tiny"),
		array("codeName" => "vengefulspirit", "id" => 20, "localizedName" => "Vengeful Spirit"),
		array("codeName" => "windrunner", "id" => 21, "localizedName" => "Windranger"),
		array("codeName" => "zuus", "id" => 22, "localizedName" => "Zeus"),
		array("codeName" => "kunkka", "id" => 23, "localizedName" => "Kunkka"),
		array("codeName" => "lina", "id" => 25, "localizedName" => "Lina"),
		array("codeName" => "lich", "id" => 31, "localizedName" => "Lich"),
		array("codeName" => "lion", "id" => 26, "localizedName" => "Lion"),
		array("codeName" => "shadow_shaman", "id" => 27, "localizedName" => "Shadow Shaman"),
		array("codeName" => "slardar", "id" => 28, "localizedName" => "Slardar"),
		array("codeName" => "tidehunter", "id" => 29, "localizedName" => "Tidehunter"),
		array("codeName" => "witch_doctor", "id" => 30, "localizedName" => "Witch Doctor"),
		array("codeName" => "riki", "id" => 32, "localizedName" => "Riki"),
		array("codeName" => "enigma", "id" => 33, "localizedName" => "Enigma"),
		array("codeName" => "tinker", "id" => 34, "localizedName" => "Tinker"),
		array("codeName" => "sniper", "id" => 35, "localizedName" => "Sniper"),
		array("codeName" => "necrolyte", "id" => 36, "localizedName" => "Necrophos"),
		array("codeName" => "warlock", "id" => 37, "localizedName" => "Warlock"),
		array("codeName" => "beastmaster", "id" => 38, "localizedName" => "Beastmaster"),
		array("codeName" => "queenofpain", "id" => 39, "localizedName" => "Queen of Pain"),
		array("codeName" => "venomancer", "id" => 40, "localizedName" => "Venomancer"),
		array("codeName" => "faceless_void", "id" => 41, "localizedName" => "Faceless Void"),
		array("codeName" => "skeleton_king", "id" => 42, "localizedName" => "Skeleton King"),
		array("codeName" => "death_prophet", "id" => 43, "localizedName" => "Death Prophet"),
		array("codeName" => "phantom_assassin", "id" => 44, "localizedName" => "Phantom Assassin"),
		array("codeName" => "pugna", "id" => 45, "localizedName" => "Pugna"),
		array("codeName" => "templar_assassin", "id" => 46, "localizedName" => "Templar Assassin"),
		array("codeName" => "viper", "id" => 47, "localizedName" => "Viper"),
		array("codeName" => "luna", "id" => 48, "localizedName" => "Luna"),
		array("codeName" => "dragon_knight", "id" => 49, "localizedName" => "Dragon Knight"),
		array("codeName" => "dazzle", "id" => 50, "localizedName" => "Dazzle"),
		array("codeName" => "rattletrap", "id" => 51, "localizedName" => "Clockwerk"),
		array("codeName" => "leshrac", "id" => 52, "localizedName" => "Leshrac"),
		array("codeName" => "furion", "id" => 53, "localizedName" => "Nature's Prophet"),
		array("codeName" => "life_stealer", "id" => 54, "localizedName" => "Lifestealer"),
		array("codeName" => "dark_seer", "id" => 55, "localizedName" => "Dark Seer"),
		array("codeName" => "clinkz", "id" => 56, "localizedName" => "Clinkz"),
		array("codeName" => "omniknight", "id" => 57, "localizedName" => "Omniknight"),
		array("codeName" => "enchantress", "id" => 58, "localizedName" => "Enchantress"),
		array("codeName" => "huskar", "id" => 59, "localizedName" => "Huskar"),
		array("codeName" => "night_stalker", "id" => 60, "localizedName" => "Night Stalker"),
		array("codeName" => "broodmother", "id" => 61, "localizedName" => "Broodmother"),
		array("codeName" => "bounty_hunter", "id" => 62, "localizedName" => "Bounty Hunter"),
		array("codeName" => "weaver", "id" => 63, "localizedName" => "Weaver"),
		array("codeName" => "jakiro", "id" => 64, "localizedName" => "Jakiro"),
		array("codeName" => "batrider", "id" => 65, "localizedName" => "Batrider"),
		array("codeName" => "chen", "id" => 66, "localizedName" => "Chen"),
		array("codeName" => "spectre", "id" => 67, "localizedName" => "Spectre"),
		array("codeName" => "doom_bringer", "id" => 69, "localizedName" => "Doom"),
		array("codeName" => "ancient_apparition", "id" => 68, "localizedName" => "Ancient Apparition"),
		array("codeName" => "ursa", "id" => 70, "localizedName" => "Ursa"),
		array("codeName" => "spirit_breaker", "id" => 71, "localizedName" => "Spirit Breaker"),
		array("codeName" => "gyrocopter", "id" => 72, "localizedName" => "Gyrocopter"),
		array("codeName" => "alchemist", "id" => 73, "localizedName" => "Alchemist"),
		array("codeName" => "invoker", "id" => 74, "localizedName" => "Invoker"),
		array("codeName" => "silencer", "id" => 75, "localizedName" => "Silencer"),
		array("codeName" => "obsidian_destroyer", "id" => 76, "localizedName" => "Outworld Devourer"),
		array("codeName" => "lycan", "id" => 77, "localizedName" => "Lycanthrope"),
		array("codeName" => "brewmaster", "id" => 78, "localizedName" => "Brewmaster"),
		array("codeName" => "shadow_demon", "id" => 79, "localizedName" => "Shadow Demon"),
		array("codeName" => "lone_druid", "id" => 80, "localizedName" => "Lone Druid"),
		array("codeName" => "chaos_knight", "id" => 81, "localizedName" => "Chaos Knight"),
		array("codeName" => "meepo", "id" => 82, "localizedName" => "Meepo"),
		array("codeName" => "treant", "id" => 83, "localizedName" => "Treant Protector"),
		array("codeName" => "ogre_magi", "id" => 84, "localizedName" => "Ogre Magi"),
		array("codeName" => "undying", "id" => 85, "localizedName" => "Undying"),
		array("codeName" => "rubick", "id" => 86, "localizedName" => "Rubick"),
		array("codeName" => "disruptor", "id" => 87, "localizedName" => "Disruptor"),
		array("codeName" => "nyx_assassin", "id" => 88, "localizedName" => "Nyx Assassin"),
		array("codeName" => "naga_siren", "id" => 89, "localizedName" => "Naga Siren"),
		array("codeName" => "keeper_of_the_light", "id" => 90, "localizedName" => "Keeper of the Light"),
		array("codeName" => "wisp", "id" => 91, "localizedName" => "Wisp"),
		array("codeName" => "visage", "id" => 92, "localizedName" => "Visage"),
		array("codeName" => "slark", "id" => 93, "localizedName" => "Slark"),
		array("codeName" => "medusa", "id" => 94, "localizedName" => "Medusa"),
		array("codeName" => "troll_warlord", "id" => 95, "localizedName" => "Troll Warlord"),
		array("codeName" => "centaur", "id" => 96, "localizedName" => "Centaur Warrunner"),
		array("codeName" => "magnataur", "id" => 97, "localizedName" => "Magnus"),
		array("codeName" => "shredder", "id" => 98, "localizedName" => "Timbersaw"),
		array("codeName" => "bristleback", "id" => 99, "localizedName" => "Bristleback"),
		array("codeName" => "tusk", "id" => 100, "localizedName" => "Tusk"),
		array("codeName" => "skywrath_mage", "id" => 101, "localizedName" => "Skywrath Mage"),
		array("codeName" => "abaddon", "id" => 102, "localizedName" => "Abaddon"),
		array("codeName" => "elder_titan", "id" => 103, "localizedName" => "Elder Titan"),
		array("codeName" => "legion_commander", "id" => 104, "localizedName" => "Legion Commander"),
		array("codeName" => "ember_spirit", "id" => 106, "localizedName" => "Ember Spirit"),
		array("codeName" => "earth_spirit", "id" => 107, "localizedName" => "Earth Spirit"),
		array("codeName" => "abyssal_underlord", "id" => 108, "localizedName" => "Abyssal Underlord"),
		array("codeName" => "terrorblade", "id" => 109, "localizedName" => "Terrorblade"),
		array("codeName" => "phoenix", "id" => 110, "localizedName" => "Phoenix"),
		array("codeName" => "techies", "id" => 105, "localizedName" => "Techies"),
	);

}