<?php
// src/AppBundle/Entity/User.php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="Tel", type="integer", nullable=true)
     */
    private $Tel;

    /**
     * @return int
     */
    public function getTel()
    {
        return $this->Tel;
    }

    /**
     * @param int $Tel
     */
    public function setTel($Tel)
    {
        $this->Tel = $Tel;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="adresse", type="string", nullable=true)
     */
    private $adresse;

    /**
     * @return int
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param int $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }



}