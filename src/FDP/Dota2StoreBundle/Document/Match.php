<?php
/**
 * Created by PhpStorm.
 * User: Kioo
 * Date: 02/10/14
 * Time: 19:23
 */

namespace FDP\Dota2StoreBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Class Match
 * @package FDP\Dota2StoreBundle\Document
 * @MongoDB\Document
 */
class Match {

    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Boolean
     */
    protected $radiant_win;

    /**
     * durée en secondes
     * @MongoDB\Int
     */
    protected $duration;

    /**
     * timestamp
     * @MongoDB\Int
     */
    protected $start_time;

    /**
     * identifiant du match
     * @MongoDB\Int
     * @MongoDB\Index(unique=true, order="desc")
     */
    protected $match_id;

    /**
     * @MongoDB\Int
     */
    protected $match_seq_num;

    /**
     * Masque de bits
     * @MongoDB\Int
     */
    protected $tower_status_radiant;

    /**
     * Masque de bits
     * @MongoDB\Int
     */
    protected $tower_status_dire;

    /**
     * Masque de bits
     * @MongoDB\Int
     */
    protected $barracks_status_radiant;

    /**
     * Masque de bits
     * @MongoDB\Int
     */
    protected $barracks_status_dire;

    /**
     * @MongoDB\Int
     */
    protected $cluster;

    /**
     * @MongoDB\Int
     */
    protected $first_blood_time;

    /**
     * @MongoDB\Int
     */
    protected $lobby_type;

    /**
     * @MongoDB\Int
     */
    protected $human_players;

    /**
     * @MongoDB\Int
     */
    protected $leagueid;

    /**
     * @MongoDB\Int
     */
    protected $positive_votes;

    /**
     * @MongoDB\Int
     */
    protected $negative_votes;

    /**
     * @MongoDB\Int
     */
    protected $game_mode;

    /**
     * @MongoDB\EmbedMany(targetDocument="Playered")
     */
    protected $players = array();

    public function __construct()
    {
        $this->players = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set radiantWin
     *
     * @param boolean $radiantWin
     * @return self
     */
    public function setRadiantWin($radiantWin)
    {
        $this->radiant_win = $radiantWin;
        return $this;
    }

    /**
     * Get radiantWin
     *
     * @return boolean $radiantWin
     */
    public function getRadiantWin()
    {
        return $this->radiant_win;
    }

    /**
     * Set duration
     *
     * @param int $duration
     * @return self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Get duration
     *
     * @return int $duration
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set startTime
     *
     * @param int $startTime
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->start_time = $startTime;
        return $this;
    }

    /**
     * Get startTime
     *
     * @return int $startTime
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Set matchId
     *
     * @param int $matchId
     * @return self
     */
    public function setMatchId($matchId)
    {
        $this->match_id = $matchId;
        return $this;
    }

    /**
     * Get matchId
     *
     * @return int $matchId
     */
    public function getMatchId()
    {
        return $this->match_id;
    }

    /**
     * Set matchSeqNum
     *
     * @param int $matchSeqNum
     * @return self
     */
    public function setMatchSeqNum($matchSeqNum)
    {
        $this->match_seq_num = $matchSeqNum;
        return $this;
    }

    /**
     * Get matchSeqNum
     *
     * @return int $matchSeqNum
     */
    public function getMatchSeqNum()
    {
        return $this->match_seq_num;
    }

    /**
     * Set towerStatusRadiant
     *
     * @param int $towerStatusRadiant
     * @return self
     */
    public function setTowerStatusRadiant($towerStatusRadiant)
    {
        $this->tower_status_radiant = $towerStatusRadiant;
        return $this;
    }

    /**
     * Get towerStatusRadiant
     *
     * @return int $towerStatusRadiant
     */
    public function getTowerStatusRadiant()
    {
        return $this->tower_status_radiant;
    }

    /**
     * Set towerStatusDire
     *
     * @param int $towerStatusDire
     * @return self
     */
    public function setTowerStatusDire($towerStatusDire)
    {
        $this->tower_status_dire = $towerStatusDire;
        return $this;
    }

    /**
     * Get towerStatusDire
     *
     * @return int $towerStatusDire
     */
    public function getTowerStatusDire()
    {
        return $this->tower_status_dire;
    }

    /**
     * Set barracksStatusRadiant
     *
     * @param int $barracksStatusRadiant
     * @return self
     */
    public function setBarracksStatusRadiant($barracksStatusRadiant)
    {
        $this->barracks_status_radiant = $barracksStatusRadiant;
        return $this;
    }

    /**
     * Get barracksStatusRadiant
     *
     * @return int $barracksStatusRadiant
     */
    public function getBarracksStatusRadiant()
    {
        return $this->barracks_status_radiant;
    }

    /**
     * Set barracksStatusDire
     *
     * @param int $barracksStatusDire
     * @return self
     */
    public function setBarracksStatusDire($barracksStatusDire)
    {
        $this->barracks_status_dire = $barracksStatusDire;
        return $this;
    }

    /**
     * Get barracksStatusDire
     *
     * @return int $barracksStatusDire
     */
    public function getBarracksStatusDire()
    {
        return $this->barracks_status_dire;
    }

    /**
     * Set cluster
     *
     * @param int $cluster
     * @return self
     */
    public function setCluster($cluster)
    {
        $this->cluster = $cluster;
        return $this;
    }

    /**
     * Get cluster
     *
     * @return int $cluster
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * Set firstBloodTime
     *
     * @param int $firstBloodTime
     * @return self
     */
    public function setFirstBloodTime($firstBloodTime)
    {
        $this->first_blood_time = $firstBloodTime;
        return $this;
    }

    /**
     * Get firstBloodTime
     *
     * @return int $firstBloodTime
     */
    public function getFirstBloodTime()
    {
        return $this->first_blood_time;
    }

    /**
     * Set lobbyType
     *
     * @param int $lobbyType
     * @return self
     */
    public function setLobbyType($lobbyType)
    {
        $this->lobby_type = $lobbyType;
        return $this;
    }

    /**
     * Get lobbyType
     *
     * @return int $lobbyType
     */
    public function getLobbyType()
    {
        return $this->lobby_type;
    }

    /**
     * Set humanPlayers
     *
     * @param int $humanPlayers
     * @return self
     */
    public function setHumanPlayers($humanPlayers)
    {
        $this->human_players = $humanPlayers;
        return $this;
    }

    /**
     * Get humanPlayers
     *
     * @return int $humanPlayers
     */
    public function getHumanPlayers()
    {
        return $this->human_players;
    }

    /**
     * Set leagueid
     *
     * @param int $leagueid
     * @return self
     */
    public function setLeagueid($leagueid)
    {
        $this->leagueid = $leagueid;
        return $this;
    }

    /**
     * Get leagueid
     *
     * @return int $leagueid
     */
    public function getLeagueid()
    {
        return $this->leagueid;
    }

    /**
     * Set positiveVotes
     *
     * @param int $positiveVotes
     * @return self
     */
    public function setPositiveVotes($positiveVotes)
    {
        $this->positive_votes = $positiveVotes;
        return $this;
    }

    /**
     * Get positiveVotes
     *
     * @return int $positiveVotes
     */
    public function getPositiveVotes()
    {
        return $this->positive_votes;
    }

    /**
     * Set negativeVotes
     *
     * @param int $negativeVotes
     * @return self
     */
    public function setNegativeVotes($negativeVotes)
    {
        $this->negative_votes = $negativeVotes;
        return $this;
    }

    /**
     * Get negativeVotes
     *
     * @return int $negativeVotes
     */
    public function getNegativeVotes()
    {
        return $this->negative_votes;
    }

    /**
     * Set gameMode
     *
     * @param int $gameMode
     * @return self
     */
    public function setGameMode($gameMode)
    {
        $this->game_mode = $gameMode;
        return $this;
    }

    /**
     * Get gameMode
     *
     * @return int $gameMode
     */
    public function getGameMode()
    {
        return $this->game_mode;
    }

    /**
     * Add player
     *
     * @param \FDP\Dota2StoreBundle\Document\Playered $player
     */
    public function addPlayer(\FDP\Dota2StoreBundle\Document\Playered $player)
    {
        $this->players[] = $player;
    }

    /**
     * Remove player
     *
     * @param \FDP\Dota2StoreBundle\Document\Playered $player
     */
    public function removePlayer(\FDP\Dota2StoreBundle\Document\Playered $player)
    {
        $this->players->removeElement($player);
    }

    /**
     * Get players
     *
     * @return \Doctrine\Common\Collections\Collection $players
     */
    public function getPlayers()
    {
        return $this->players;
    }
}
