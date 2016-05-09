<?php

namespace DersBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ders
 *
 * @ORM\Table(name="dersler")
 * @ORM\Entity(repositoryClass="DersBundle\Repository\DersRepository")
 */
class Ders
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
     * @var string
     *
     * @ORM\Column(name="baslik", type="string", length=255)
     */
    private $baslik;


    /**
     * @ORM\OneToMany(targetEntity="Konu" , mappedBy="ders")
     */
private $konular;

    public function __construct()
    {
        $this->konular=new ArrayCollection();

    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set baslik
     *
     * @param string $baslik
     *
     * @return Ders
     */
    public function setBaslik($baslik)
    {
        $this->baslik = $baslik;

        return $this;
    }

    /**
     * Get baslik
     *
     * @return string
     */
    public function getBaslik()
    {
        return $this->baslik;
    }

    /**
     * Add konular
     *
     * @param \DersBundle\Entity\Konu $konular
     *
     * @return Ders
     */
    public function addKonular(\DersBundle\Entity\Konu $konular)
    {
        $this->konular[] = $konular;

        return $this;
    }

    /**
     * Remove konular
     *
     * @param \DersBundle\Entity\Konu $konular
     */
    public function removeKonular(\DersBundle\Entity\Konu $konular)
    {
        $this->konular->removeElement($konular);
    }

    /**
     * Get konular
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getKonular()
    {
        return $this->konular;
    }
}
