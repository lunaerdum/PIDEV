<?php

namespace CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Commade
 *
 * @ORM\Table(name="commade")
 * @ORM\Entity(repositoryClass="CommandeBundle\Repository\CommadeRepository")
 */
class Commade
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
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;


    /**
     * @var string
     *
     * @ORM\Column(name="marque", type="string", length=200, nullable=false)
     * @Assert\Length(
     *      min = 2,
     *      max = 7,
     *      minMessage = "Your first name must be at least {{ limit }} characters long",
     *      maxMessage = "Your first name cannot be longer than {{ limit }} characters"
     * )
     */

    private $marque;


    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=200, nullable=false)
     */
    private $etat;

    /**
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param string $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }



    /**
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_four", referencedColumnName="id",onDelete="CASCADE")
     * })
     */
    private $id_for;

    /**
     *
         * @ORM\ManyToOne(targetEntity="CommandeBundle\Entity\Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_prod", referencedColumnName="id",onDelete="CASCADE")
     * })
     */
    private $id_prod ;

    /**
     * @return int
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param int $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
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
     * @return mixed
     */
    public function getIdFor()
    {
        return $this->id_for;
    }

    /**
     * @param mixed $id_for
     */
    public function setIdFor($id_for)
    {
        $this->id_for = $id_for;
    }

    /**
     * @return mixed
     */
    public function getIdProd()
    {
        return $this->id_prod;
    }

    /**
     * @param mixed $id_prod
     */
    public function setIdProd($id_prod)
    {
        $this->id_prod = $id_prod;
    }




}

