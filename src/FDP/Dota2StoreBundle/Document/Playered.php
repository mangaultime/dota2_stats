<?php

namespace FDP\Dota2StoreBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @MongoDB\EmbeddedDocument
 */
class Playered
{

	/** @MongoDB\Id */
	protected $id;

	/** @MongoDB\Float */
	protected $account_id;

	/** @MongoDB\Int */
	protected $player_slot;

	/** @MongoDB\Int */
	protected $hero_id;

	/**
	 * @MongoDB\ReferenceOne(targetDocument="Item")
	 */
	protected $item_0;

	/**
	 * @MongoDB\ReferenceOne(targetDocument="Item")
	 */
	protected $item_1;

	/**
	 * @MongoDB\ReferenceOne(targetDocument="Item")
	 */
	protected $item_2;

	/**
	 * @MongoDB\ReferenceOne(targetDocument="Item")
	 */
	protected $item_3;

	/**
	 * @MongoDB\ReferenceOne(targetDocument="Item")
	 */
	protected $item_4;

	/**
	 * @MongoDB\ReferenceOne(targetDocument="Item")
	 */
	protected $item_5;

	/** @MongoDB\Int */
	protected $kills;

	/** @MongoDB\Int */
	protected $deaths;

	/** @MongoDB\Int */
	protected $assists;

	/** @MongoDB\Int */
	protected $leaver_status;

	/** @MongoDB\Int */
	protected $gold;

	/** @MongoDB\Int */
	protected $last_hits;

	/** @MongoDB\Int */
	protected $denies;

	/** @MongoDB\Int */
	protected $gold_per_min;

	/** @MongoDB\Int */
	protected $xp_per_min;

	/** * @MongoDB\Int */
	protected $gold_spent;
	/** @MongoDB\Int */

	protected $hero_damage;
	/** @MongoDB\Int */

	protected $tower_damage;
	/** @MongoDB\Int */

	protected $hero_healing;

	/** @MongoDB\Int */
	protected $level;


    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set accountId
     *
     * @param float $accountId
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->account_id = $accountId;
        return $this;
    }

    /**
     * Get accountId
     *
     * @return float $accountId
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Set playerSlot
     *
     * @param int $playerSlot
     * @return self
     */
    public function setPlayerSlot($playerSlot)
    {
        $this->player_slot = $playerSlot;
        return $this;
    }

    /**
     * Get playerSlot
     *
     * @return int $playerSlot
     */
    public function getPlayerSlot()
    {
        return $this->player_slot;
    }

    /**
     * Set heroId
     *
     * @param int $heroId
     * @return self
     */
    public function setHeroId($heroId)
    {
        $this->hero_id = $heroId;
        return $this;
    }

    /**
     * Get heroId
     *
     * @return int $heroId
     */
    public function getHeroId()
    {
        return $this->hero_id;
    }

    /**
     * Set item0
     *
     * @param FDP\Dota2StoreBundle\Document\Item $item0
     * @return self
     */
    public function setItem0(\FDP\Dota2StoreBundle\Document\Item $item0)
    {
        $this->item_0 = $item0;
        return $this;
    }

    /**
     * Get item0
     *
     * @return FDP\Dota2StoreBundle\Document\Item $item0
     */
    public function getItem0()
    {
        return $this->item_0;
    }

    /**
     * Set item1
     *
     * @param FDP\Dota2StoreBundle\Document\Item $item1
     * @return self
     */
    public function setItem1(\FDP\Dota2StoreBundle\Document\Item $item1)
    {
        $this->item_1 = $item1;
        return $this;
    }

    /**
     * Get item1
     *
     * @return FDP\Dota2StoreBundle\Document\Item $item1
     */
    public function getItem1()
    {
        return $this->item_1;
    }

    /**
     * Set item2
     *
     * @param FDP\Dota2StoreBundle\Document\Item $item2
     * @return self
     */
    public function setItem2(\FDP\Dota2StoreBundle\Document\Item $item2)
    {
        $this->item_2 = $item2;
        return $this;
    }

    /**
     * Get item2
     *
     * @return FDP\Dota2StoreBundle\Document\Item $item2
     */
    public function getItem2()
    {
        return $this->item_2;
    }

    /**
     * Set item3
     *
     * @param FDP\Dota2StoreBundle\Document\Item $item3
     * @return self
     */
    public function setItem3(\FDP\Dota2StoreBundle\Document\Item $item3)
    {
        $this->item_3 = $item3;
        return $this;
    }

    /**
     * Get item3
     *
     * @return FDP\Dota2StoreBundle\Document\Item $item3
     */
    public function getItem3()
    {
        return $this->item_3;
    }

    /**
     * Set item4
     *
     * @param FDP\Dota2StoreBundle\Document\Item $item4
     * @return self
     */
    public function setItem4(\FDP\Dota2StoreBundle\Document\Item $item4)
    {
        $this->item_4 = $item4;
        return $this;
    }

    /**
     * Get item4
     *
     * @return FDP\Dota2StoreBundle\Document\Item $item4
     */
    public function getItem4()
    {
        return $this->item_4;
    }

    /**
     * Set item5
     *
     * @param FDP\Dota2StoreBundle\Document\Item $item5
     * @return self
     */
    public function setItem5(\FDP\Dota2StoreBundle\Document\Item $item5)
    {
        $this->item_5 = $item5;
        return $this;
    }

    /**
     * Get item5
     *
     * @return FDP\Dota2StoreBundle\Document\Item $item5
     */
    public function getItem5()
    {
        return $this->item_5;
    }

    /**
     * Set kills
     *
     * @param int $kills
     * @return self
     */
    public function setKills($kills)
    {
        $this->kills = $kills;
        return $this;
    }

    /**
     * Get kills
     *
     * @return int $kills
     */
    public function getKills()
    {
        return $this->kills;
    }

    /**
     * Set deaths
     *
     * @param int $deaths
     * @return self
     */
    public function setDeaths($deaths)
    {
        $this->deaths = $deaths;
        return $this;
    }

    /**
     * Get deaths
     *
     * @return int $deaths
     */
    public function getDeaths()
    {
        return $this->deaths;
    }

    /**
     * Set assists
     *
     * @param int $assists
     * @return self
     */
    public function setAssists($assists)
    {
        $this->assists = $assists;
        return $this;
    }

    /**
     * Get assists
     *
     * @return int $assists
     */
    public function getAssists()
    {
        return $this->assists;
    }

    /**
     * Set leaverStatus
     *
     * @param int $leaverStatus
     * @return self
     */
    public function setLeaverStatus($leaverStatus)
    {
        $this->leaver_status = $leaverStatus;
        return $this;
    }

    /**
     * Get leaverStatus
     *
     * @return int $leaverStatus
     */
    public function getLeaverStatus()
    {
        return $this->leaver_status;
    }

    /**
     * Set gold
     *
     * @param int $gold
     * @return self
     */
    public function setGold($gold)
    {
        $this->gold = $gold;
        return $this;
    }

    /**
     * Get gold
     *
     * @return int $gold
     */
    public function getGold()
    {
        return $this->gold;
    }

    /**
     * Set lastHits
     *
     * @param int $lastHits
     * @return self
     */
    public function setLastHits($lastHits)
    {
        $this->last_hits = $lastHits;
        return $this;
    }

    /**
     * Get lastHits
     *
     * @return int $lastHits
     */
    public function getLastHits()
    {
        return $this->last_hits;
    }

    /**
     * Set denies
     *
     * @param int $denies
     * @return self
     */
    public function setDenies($denies)
    {
        $this->denies = $denies;
        return $this;
    }

    /**
     * Get denies
     *
     * @return int $denies
     */
    public function getDenies()
    {
        return $this->denies;
    }

    /**
     * Set goldPerMin
     *
     * @param int $goldPerMin
     * @return self
     */
    public function setGoldPerMin($goldPerMin)
    {
        $this->gold_per_min = $goldPerMin;
        return $this;
    }

    /**
     * Get goldPerMin
     *
     * @return int $goldPerMin
     */
    public function getGoldPerMin()
    {
        return $this->gold_per_min;
    }

    /**
     * Set xpPerMin
     *
     * @param int $xpPerMin
     * @return self
     */
    public function setXpPerMin($xpPerMin)
    {
        $this->xp_per_min = $xpPerMin;
        return $this;
    }

    /**
     * Get xpPerMin
     *
     * @return int $xpPerMin
     */
    public function getXpPerMin()
    {
        return $this->xp_per_min;
    }

    /**
     * Set goldSpent
     *
     * @param int $goldSpent
     * @return self
     */
    public function setGoldSpent($goldSpent)
    {
        $this->gold_spent = $goldSpent;
        return $this;
    }

    /**
     * Get goldSpent
     *
     * @return int $goldSpent
     */
    public function getGoldSpent()
    {
        return $this->gold_spent;
    }

    /**
     * Set heroDamage
     *
     * @param int $heroDamage
     * @return self
     */
    public function setHeroDamage($heroDamage)
    {
        $this->hero_damage = $heroDamage;
        return $this;
    }

    /**
     * Get heroDamage
     *
     * @return int $heroDamage
     */
    public function getHeroDamage()
    {
        return $this->hero_damage;
    }

    /**
     * Set towerDamage
     *
     * @param int $towerDamage
     * @return self
     */
    public function setTowerDamage($towerDamage)
    {
        $this->tower_damage = $towerDamage;
        return $this;
    }

    /**
     * Get towerDamage
     *
     * @return int $towerDamage
     */
    public function getTowerDamage()
    {
        return $this->tower_damage;
    }

    /**
     * Set heroHealing
     *
     * @param int $heroHealing
     * @return self
     */
    public function setHeroHealing($heroHealing)
    {
        $this->hero_healing = $heroHealing;
        return $this;
    }

    /**
     * Get heroHealing
     *
     * @return int $heroHealing
     */
    public function getHeroHealing()
    {
        return $this->hero_healing;
    }

    /**
     * Set level
     *
     * @param int $level
     * @return self
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * Get level
     *
     * @return int $level
     */
    public function getLevel()
    {
        return $this->level;
    }
}
