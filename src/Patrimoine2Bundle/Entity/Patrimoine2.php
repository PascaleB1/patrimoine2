<?php

namespace Patrimoine2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patrimoine2
 */
class Patrimoine2
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titre1;

    /**
     * @var string
     */
    private $article1;

    /**
     * @var string
     */
    private $titre2;

    /**
     * @var string
     */
    private $image1;

    /**
     * @var string
     */
    private $image2;


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
     * Set titre1
     *
     * @param string $titre1
     * @return Patrimoine2
     */
    public function setTitre1($titre1)
    {
        $this->titre1 = $titre1;

        return $this;
    }

    /**
     * Get titre1
     *
     * @return string 
     */
    public function getTitre1()
    {
        return $this->titre1;
    }

    /**
     * Set article1
     *
     * @param string $article1
     * @return Patrimoine2
     */
    public function setArticle1($article1)
    {
        $this->article1 = $article1;

        return $this;
    }

    /**
     * Get article1
     *
     * @return string 
     */
    public function getArticle1()
    {
        return $this->article1;
    }

    /**
     * Set titre2
     *
     * @param string $titre2
     * @return Patrimoine2
     */
    public function setTitre2($titre2)
    {
        $this->titre2 = $titre2;

        return $this;
    }

    /**
     * Get titre2
     *
     * @return string 
     */
    public function getTitre2()
    {
        return $this->titre2;
    }

    /**
     * Set image1
     *
     * @param string $image1
     * @return Patrimoine2
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return string 
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * Set image2
     *
     * @param string $image2
     * @return Patrimoine2
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;

        return $this;
    }

    /**
     * Get image2
     *
     * @return string 
     */
    public function getImage2()
    {
        return $this->image2;
    }
}
