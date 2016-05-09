<?php

namespace DersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Konu
 *
 * @ORM\Table(name="konular")
 * @ORM\Entity(repositoryClass="DersBundle\Repository\KonuRepository")
 */
class Konu
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
     * @ORM\ManyToOne(targetEntity="Ders", inversedBy="konular")
     * @ORM\JoinColumn(name="ders_id",  referencedColumnName="id", onDelete="CASCADE")
     */
    private $ders;


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
     * @return Konu
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
     * Set ders
     *
     * @param \DersBundle\Entity\Ders $ders
     *
     * @return Konu
     */
    public function setDers(\DersBundle\Entity\Ders $ders = null)
    {
        $this->ders = $ders;

        return $this;
    }

    /**
     * Get ders
     *
     * @return \DersBundle\Entity\Ders
     */
    public function getDers()
    {
        return $this->ders;
    }
}
