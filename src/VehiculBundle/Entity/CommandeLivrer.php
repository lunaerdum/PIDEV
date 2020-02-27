<?php

namespace VehiculBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * CommandeLivrer
 *
 * @ORM\Table(name="commande_livrer")
 * @ORM\Entity(repositoryClass="VehiculBundle\Repository\CommandeLivrerRepository")
 */
class CommandeLivrer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @var \VehiculBundle\Entity\Employer
     *
     * @ORM\ManyToOne(targetEntity="VehiculBundle\Entity\Employer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Empo", referencedColumnName="matricule",onDelete="CASCADE")
     * })
     */
    private $id_Emp;

    /**
     * @var \VehiculBundle\Entity\Vehicule
     *
     * @ORM\ManyToOne(targetEntity="VehiculBundle\Entity\Vehicule")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_veh", referencedColumnName="matricule",onDelete="CASCADE")
     * })
     */
    private $id_veh;

    /**
     * @var \PanierBundle\Entity\Panier
     *
     * @ORM\ManyToOne(targetEntity="PanierBundle\Entity\Panier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pa", referencedColumnName="id",onDelete="CASCADE")
     * })
     */
    private $id_pa;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=200, nullable=false)
     */
    private $adresse;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="dateLivraison", type="date", nullable=false)
     */
    private $date;

    /**
     * @return Employer
     */
    public function getIdEmp()
    {
        return $this->id_Emp;
    }

    /**
     * @param Employer $id_Emp
     */
    public function setIdEmp($id_Emp)
    {
        $this->id_Emp = $id_Emp;
    }

    /**
     * @return Vehicule
     */
    public function getIdVeh()
    {
        return $this->id_veh;
    }

    /**
     * @param Vehicule $id_veh
     */
    public function setIdVeh($id_veh)
    {
        $this->id_veh = $id_veh;
    }

    /**
     * @return \PanierBundle\Entity\Panier
     */
    public function getIdPa()
    {
        return $this->id_pa;
    }

    /**
     * @param \PanierBundle\Entity\Panier $id_pa
     */
    public function setIdPa($id_pa)
    {
        $this->id_pa = $id_pa;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }




}

