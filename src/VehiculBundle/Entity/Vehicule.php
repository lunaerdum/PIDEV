<?php

namespace VehiculBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="vehicule")
 * @ORM\Entity(repositoryClass="VehiculBundle\Repository\VehiculeRepository")
 */
class Vehicule
{
    /**
     * @var int
     *
     * @ORM\Column(name="matricule", type="string" , length=200, nullable=false)
     * @ORM\Id
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=200, nullable=false)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="disponible", type="string", length=200, nullable=false)
     */
    private $disponiblite;

    /**
     * @return int
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param int $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    /**
     * @return string
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param string $marque
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }

    /**
     * @return string
     */
    public function getDisponiblite()
    {
        return $this->disponiblite;
    }

    /**
     * @param string $disponiblite
     */
    public function setDisponiblite($disponiblite)
    {
        $this->disponiblite = $disponiblite;
    }




}

