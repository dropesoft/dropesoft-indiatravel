<?php
namespace Dropesoft\Indiatravel\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Locality
 */
class Locality extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';
    
    /**
     * shortDescription
     *
     * @var string
     */
    protected $shortDescription = '';
    
    /**
     * description
     *
     * @var string
     * @validate NotEmpty
     */
    protected $description = '';
    
    /**
     * lat
     *
     * @var string
     */
    protected $lat = '';
    
    /**
     * lng
     *
     * @var string
     */
    protected $lng = '';
    
    /**
     * topDestination
     *
     * @var bool
     */
    protected $topDestination = false;
    
    /**
     * seotitle
     *
     * @var string
     */
    protected $seotitle = '';
    
    /**
     * seodescription
     *
     * @var string
     */
    protected $seodescription = '';
    
    /**
     * seokeys
     *
     * @var string
     */
    protected $seokeys = '';
    
    /**
     * informations
     *
     * @var string
     */
    protected $informations = '';
    
    /**
     * catogories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dropesoft\Indiatravel\Domain\Model\Category>
     */
    protected $catogories = null;
    
    /**
     * articles
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dropesoft\Indiatravel\Domain\Model\Article>
     */
    protected $articles = null;
    
    /**
     * attractions
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dropesoft\Indiatravel\Domain\Model\Attraction>
     */
    protected $attractions = null;
    /**
     * Fal related files
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dropesoft\Indiatravel\Domain\Model\FileReference>
     * @lazy
     */
    protected $falRelatedFiles;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->catogories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->articles = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->attractions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->falRelatedFiles = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Returns the shortDescription
     *
     * @return string $shortDescription
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }
    
    /**
     * Sets the shortDescription
     *
     * @param string $shortDescription
     * @return void
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the lat
     *
     * @return string $lat
     */
    public function getLat()
    {
        return $this->lat;
    }
    
    /**
     * Sets the lat
     *
     * @param string $lat
     * @return void
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }
    
    /**
     * Returns the lng
     *
     * @return string $lng
     */
    public function getLng()
    {
        return $this->lng;
    }
    
    /**
     * Sets the lng
     *
     * @param string $lng
     * @return void
     */
    public function setLng($lng)
    {
        $this->lng = $lng;
    }
    
    /**
     * Returns the topDestination
     *
     * @return bool $topDestination
     */
    public function getTopDestination()
    {
        return $this->topDestination;
    }
    
    /**
     * Sets the topDestination
     *
     * @param bool $topDestination
     * @return void
     */
    public function setTopDestination($topDestination)
    {
        $this->topDestination = $topDestination;
    }
    
    /**
     * Returns the boolean state of topDestination
     *
     * @return bool
     */
    public function isTopDestination()
    {
        return $this->topDestination;
    }
    
    /**
     * Returns the seotitle
     *
     * @return string $seotitle
     */
    public function getSeotitle()
    {
        return $this->seotitle;
    }
    
    /**
     * Sets the seotitle
     *
     * @param string $seotitle
     * @return void
     */
    public function setSeotitle($seotitle)
    {
        $this->seotitle = $seotitle;
    }
    
    /**
     * Returns the seodescription
     *
     * @return string $seodescription
     */
    public function getSeodescription()
    {
        return $this->seodescription;
    }
    
    /**
     * Sets the seodescription
     *
     * @param string $seodescription
     * @return void
     */
    public function setSeodescription($seodescription)
    {
        $this->seodescription = $seodescription;
    }
    
    /**
     * Returns the seokeys
     *
     * @return string $seokeys
     */
    public function getSeokeys()
    {
        return $this->seokeys;
    }
    
    /**
     * Sets the seokeys
     *
     * @param string $seokeys
     * @return void
     */
    public function setSeokeys($seokeys)
    {
        $this->seokeys = $seokeys;
    }
    
    /**
     * Adds a Category
     *
     * @param \Dropesoft\Indiatravel\Domain\Model\Category $catogory
     * @return void
     */
    public function addCatogory(\Dropesoft\Indiatravel\Domain\Model\Category $catogory)
    {
        $this->catogories->attach($catogory);
    }
    
    /**
     * Removes a Category
     *
     * @param \Dropesoft\Indiatravel\Domain\Model\Category $catogoryToRemove The Category to be removed
     * @return void
     */
    public function removeCatogory(\Dropesoft\Indiatravel\Domain\Model\Category $catogoryToRemove)
    {
        $this->catogories->detach($catogoryToRemove);
    }
    
    /**
     * Returns the catogories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dropesoft\Indiatravel\Domain\Model\Category> $catogories
     */
    public function getCatogories()
    {
        return $this->catogories;
    }
    
    /**
     * Sets the catogories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dropesoft\Indiatravel\Domain\Model\Category> $catogories
     * @return void
     */
    public function setCatogories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $catogories)
    {
        $this->catogories = $catogories;
    }
    
    /**
     * Returns the informations
     *
     * @return string $informations
     */
    public function getInformations()
    {
        return $this->informations;
    }
    
    /**
     * Sets the informations
     *
     * @param string $informations
     * @return void
     */
    public function setInformations($informations)
    {
        $this->informations = $informations;
    }
    
    /**
     * Adds a Article
     *
     * @param \Dropesoft\Indiatravel\Domain\Model\Article $article
     * @return void
     */
    public function addArticle(\Dropesoft\Indiatravel\Domain\Model\Article $article)
    {
        $this->articles->attach($article);
    }
    
    /**
     * Removes a Article
     *
     * @param \Dropesoft\Indiatravel\Domain\Model\Article $articleToRemove The Article to be removed
     * @return void
     */
    public function removeArticle(\Dropesoft\Indiatravel\Domain\Model\Article $articleToRemove)
    {
        $this->articles->detach($articleToRemove);
    }
    
    /**
     * Returns the articles
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dropesoft\Indiatravel\Domain\Model\Article> $articles
     */
    public function getArticles()
    {
        return $this->articles;
    }
    
    /**
     * Sets the articles
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dropesoft\Indiatravel\Domain\Model\Article> $articles
     * @return void
     */
    public function setArticles(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $articles)
    {
        $this->articles = $articles;
    }
    
    /**
     * Adds a Attraction
     *
     * @param \Dropesoft\Indiatravel\Domain\Model\Attraction $attraction
     * @return void
     */
    public function addAttraction(\Dropesoft\Indiatravel\Domain\Model\Attraction $attraction)
    {
        $this->attractions->attach($attraction);
    }
    
    /**
     * Removes a Attraction
     *
     * @param \Dropesoft\Indiatravel\Domain\Model\Attraction $attractionToRemove The Attraction to be removed
     * @return void
     */
    public function removeAttraction(\Dropesoft\Indiatravel\Domain\Model\Attraction $attractionToRemove)
    {
        $this->attractions->detach($attractionToRemove);
    }
    
    /**
     * Returns the attractions
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dropesoft\Indiatravel\Domain\Model\Attraction> $attractions
     */
    public function getAttractions()
    {
        return $this->attractions;
    }
    
    /**
     * Sets the attractions
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dropesoft\Indiatravel\Domain\Model\Attraction> $attractions
     * @return void
     */
    public function setAttractions(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $attractions)
    {
        $this->attractions = $attractions;
    }

    /**
     * Get FAL related files
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Posit\Dolomiticlass\Domain\Model\FileReference>
     */
    public function getFalRelatedFiles()
    {
        return $this->falRelatedFiles;
    }

    /**
     * Set FAL related files
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage $falRelatedFiles FAL related files
     * @return void
     */
    public function setFalRelatedFiles($falRelatedFiles)
    {
        $this->falRelatedFiles = $falRelatedFiles;
    }

    /**
     * Adds a file to this files.
     *
     * @param FileReference $file
     * @return void
     */
    public function addFalRelatedFile(FileReference $file)
    {
        if ($this->getFalRelatedFiles() === null) {
            $this->falRelatedFiles = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        }
        $this->getFalRelatedFiles()->attach($file);
    }
}