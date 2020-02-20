<?php

namespace EmpoloyerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\Tests\StringableObject;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Employer
 *
 * @ORM\Table(name="employer")
 * @ORM\Entity(repositoryClass="EmpoloyerBundle\Repository\EmployerRepository")
 */
class Employer
{
    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string",length=200)
     * @ORM\Id
     */
    private $matricule;



    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=200, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=200, nullable=false)
     */
    private $prenom;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="dateNai", type="date", length=200, nullable=false)
     */
    private $dateNai;


    /**
     * @var \EmpoloyerBundle\Entity\Type
     *
     * @ORM\ManyToOne(targetEntity="EmpoloyerBundle\Entity\Type")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Type", referencedColumnName="id",onDelete="CASCADE")
     * })
     */
    private $id_Type;



    public function getWebpath(){


        return null === $this->nomfile ? null : $this->getUploadDir.'/'.$this->nomfile;
    }
    protected  function  getUploadRootDir(){

        return __DIR__.'/../../../web/Upload'.$this->getUploadDir();
    }
    protected function getUploadDir(){

        return'';
    }
    public function getUploadFile(){
        if (null === $this->getFile()) {
            $this->nomfile = "3.jpg";
            return;
        }


        $this->getFile()->move(
            $this->getUploadRootDir(),
            $this->getFile()->getClientOriginalName()

        );

        // set the path property to the filename where you've saved the file
        $this->nomfile = $this->getFile()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

    /**
     * @Assert\File(maxSize="500000000k")
     */
    public  $file;


    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $nomfile;

    /**
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * @param string $matricule
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return DateTime
     */
    public function getDateNai()
    {
        return $this->dateNai;
    }

    /**
     * @param DateTime $dateNai
     */
    public function setDateNai($dateNai)
    {
        $this->dateNai = $dateNai;
    }

    /**
     * @return Type
     */
    public function getIdType()
    {
        return $this->id_Type;
    }

    /**
     * @param Type $id_Type
     */
    public function setIdType($id_Type)
    {
        $this->id_Type = $id_Type;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getNomfile()
    {
        return $this->nomfile;
    }

    /**
     * @param string $nomfile
     */
    public function setNomfile($nomfile)
    {
        $this->nomfile = $nomfile;
    }



}

