<?php

namespace FDP\MainBundle\Controller;

use FDP\Dota2StoreBundle\Document\Match;
use FDP\Dota2StoreBundle\Document\Playered;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FDPMainBundle:Default:index.html.twig', array('name' => $name));
    }

    public function listMatchAction(){

		Playered::defineContainer($this->container);

		$matches = $this->get('doctrine_mongodb')
			->getRepository('FDPDota2StoreBundle:Match')
			->findAll();

        return $this->render('FDPMainBundle:Default:listMatch.html.twig', array('matches' => $matches));
    }

    public function gameMatchDetailsAction()
    {

        /*$url = "https://api.steampowered.com/IDOTA2Match_570/GetMatchHistory/v001/";
        $this->_params['key'] = "F65F26F83D68B634B28045124C1B12DF";
        $this->_params['account_id'] = "32822666";
        //$this->_params['language'] = LANGUAGE;
        $d = '';
        foreach ($this->_params as $key=>$value) {
            $d .= $key.'='.$value.'&';
        }*/


        $url = "https://api.steampowered.com/IDOTA2Match_570/GetMatchDetails/V001/";
        $this->_params['key'] = "F65F26F83D68B634B28045124C1B12DF";
        $this->_params['match_id'] = "933954853";
        //$this->_params['language'] = LANGUAGE;
        $d = '';
        foreach ($this->_params as $key=>$value) {
            $d .= $key.'='.$value.'&';
        }


        $d = rtrim($d, '&');
        $url .= '?'.$d;
        //echo $url;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_ENCODING , "gzip");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // Ignore SSL warnings and questions
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $r = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($r, true);
        $data = is_array($data) ? $data : array();

        $result = $data['result'];

        //test si le match est déjà dans la db
        $match = $this->get('doctrine_mongodb')
            ->getRepository('FDPDota2StoreBundle:Match')
            ->findOneBy(array('match_id' => $result['match_id']));

        if ($match === null) {
            $match = new Match();
            $match->setDuration($result['duration']);
            $match->setCluster($result['cluster']);
            $match->setFirstBloodTime($result['first_blood_time']);
            $match->setRadiantWin($result['radiant_win']);
            $match->setStartTime($result['start_time']);
            $match->setMatchId($result['match_id']);
            $match->setMatchSeqNum($result['match_seq_num']);
            $match->setTowerStatusRadiant($result['tower_status_radiant']);
            $match->setTowerStatusDire($result['tower_status_dire']);
            $match->setBarracksStatusRadiant($result['barracks_status_radiant']);
            $match->setBarracksStatusDire($result['barracks_status_dire']);
            $match->setLobbyType($result['lobby_type']);
            $match->setHumanPlayers($result['human_players']);
            $match->setLobbyType($result['lobby_type']);
            $match->setLeagueid($result['leagueid']);
            $match->setPositiveVotes($result['positive_votes']);
            $match->setNegativeVotes($result['negative_votes']);
            $match->setGameMode($result['game_mode']);

            foreach ($result['players'] as $v) {
                $playered = new Playered($this->container);
                $playered->setAccountId($v['account_id']);
                $playered->setPlayerSlot($v['player_slot']);
                $playered->setHeroId($v['hero_id']);
                $playered->setItem0($v['item_0']);
                $playered->setItem1($v['item_1']);
                $playered->setItem2($v['item_2']);
                $playered->setItem3($v['item_3']);
                $playered->setItem4($v['item_4']);
                $playered->setItem5($v['item_5']);
                $playered->setKills($v['kills']);
                $playered->setDeaths($v['deaths']);
                $playered->setAssists($v['assists']);
                $playered->setLeaverStatus($v['leaver_status']);
                $playered->setLastHits($v['last_hits']);
                $playered->setDenies($v['denies']);
                $playered->setGoldPerMin($v['gold_per_min']);
                $playered->setXpPerMin($v['xp_per_min']);
                $playered->setGoldSpent($v['gold_spent']);
                $playered->setHeroDamage($v['hero_damage']);
                $playered->setTowerDamage($v['tower_damage']);
                $playered->setHeroHealing($v['hero_healing']);
                $playered->setLevel($v['level']);

                $match->addPlayer($playered);
                $playered = null;
            }

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($match);
            $dm->flush();
        }

        /*$match1 = $this->get('doctrine_mongodb')
            ->getRepository('FDPDota2StoreBundle:Match')
            ->findAll();

        if (!$match1) {
            throw $this->createNotFoundException('No product found for id ');
        }

        foreach($match1 as $oneMatch) {
            echo $oneMatch->getDuration();
        }*/

        return $this->render('FDPMainBundle:Default:gameMatchDetails.html.twig', array('data' => $data));
    }
}
