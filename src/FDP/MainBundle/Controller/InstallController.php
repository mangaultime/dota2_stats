<?php

namespace FDP\MainBundle\Controller;

use FDP\Dota2StoreBundle\Install\Abilities;
use FDP\Dota2StoreBundle\Install\Heroes;
use FDP\Dota2StoreBundle\Install\Items;
use FDP\Dota2StoreBundle\Install\Mods;
use FDP\Dota2StoreBundle\Install\Lobbies;
use FDP\Dota2StoreBundle\Install\Regions;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class InstallController extends Controller
{
    public function installAction()
    {

		Abilities::createDatabase($this->container);
		Heroes::createDatabase($this->container);
		Items::createDatabase($this->container);
		Lobbies::createDatabase($this->container);
		Mods::createDatabase($this->container);
		Regions::createDatabase($this->container);

		return new Response('OK');
    }
}