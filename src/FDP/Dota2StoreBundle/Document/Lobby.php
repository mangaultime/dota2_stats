<?php
/**
 * Created by PhpStorm.
 * User => Kioo
 * Date => 03/10/14
 * Time => 16:49
 */

namespace FDP\Dota2StoreBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * Class Lobby
 * @package FDP\Dota2StoreBundle\Document
 * @MongoDB\Document
 */
class Lobby {

	/**
	 * @MongoDB\Id(strategy="NONE", type="int")
	 */
	protected $id;

	/**
	 * @MongoDB\String
	 */
	protected $localizedName;

    /**
     * Set id
     *
     * @param custom_id $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get id
     *
     * @return custom_id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set localizedName
     *
     * @param string $localizedName
     * @return self
     */
    public function setLocalizedName($localizedName)
    {
        $this->localizedName = $localizedName;
        return $this;
    }

    /**
     * Get localizedName
     *
     * @return string $localizedName
     */
    public function getLocalizedName()
    {
        return $this->localizedName;
    }
}
