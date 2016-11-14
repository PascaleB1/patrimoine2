<?php

namespace Patrimoine2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patrimoine2
 */
class Patrimoine2
{
    //image1

    public $file1;

    protected function getUploadDir()
    {
        return 'uploads';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }

    public function getWebPath1()
    {
        return null === $this->image1 ? null : $this->getUploadDir().'/'.$this->image1;
    }

    public function getAbsolutePath1()
    {
        return null === $this->image1 ? null : $this->getUploadRootDir().'/'.$this->image1;
    }

    public function preUpload1()
    {
        if (null !== $this->file1) {
            // do whatever you want to generate a unique name
            $this->image1 = uniqid().'.'.$this->file1->guessExtension();
        }
    }
    public function upload1()
    {
        if (null === $this->file1) {
            return;
        }
        
    // if there is an error when moving the file, an exception will
    // be automatically thrown by move(). This will properly prevent
    // the entity from being persisted to the database on error
        $this->file1->move($this->getUploadRootDir(),  $this->image1);

        unset($this->file1);
    }

    public function removeUpload1()
    {
        if ($file1 = $this->getAbsolutePath()) {
            unlink($file1);
        }
    }

    //image 2

    public $file2;

    public function getWebPath2()
    {
        return null === $this->image2 ? null : $this->getUploadDir().'/'.$this->image2;
    }

    public function getAbsolutePath2()
    {
        return null === $this->image2 ? null : $this->getUploadRootDir().'/'.$this->image2;
    }

    public function preUpload2()
    {
        if (null !== $this->file2) {
            // do whatever you want to generate a unique name
            $this->image2 = uniqid().'.'.$this->file2->guessExtension();
        }
    }
    public function upload2()
    {
        if (null === $this->file2) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file2->move($this->getUploadRootDir(),  $this->image2);

        unset($this->file2);
    }

    public function removeUpload2()
    {
        if ($file2 = $this->getAbsolutePath()) {
            unlink($file2);
        }
    }

    /*code généré*/
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
    private $article2;

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
     * Set article2
     *
     * @param string $article2
     * @return Patrimoine2
     */
    public function setArticle2($article2)
    {
        $this->article2 = $article2;

        return $this;
    }

    /**
     * Get article2
     *
     * @return string
     */
    public function getArticle2()
    {
        return $this->article2;
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
