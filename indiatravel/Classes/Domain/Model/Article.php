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
 * Article
 */
class Article extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     * @validate NotEmpty
     */
    protected $shortDescription = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * timestamp
     *
     * @var \DateTime
     */
    protected $timestamp = null;
    
    /**
     * tags
     *
     * @var string
     */
    protected $tags = '';
    
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
     * Returns the timestamp
     *
     * @return \DateTime $timestamp
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    
    /**
     * Sets the timestamp
     *
     * @param \DateTime $timestamp
     * @return void
     */
    public function setTimestamp(\DateTime $timestamp)
    {
        $this->timestamp = $timestamp;
    }
    
    /**
     * Returns the tags
     *
     * @return string $tags
     */
    public function getTags()
    {
        return $this->tags;
    }
    
    /**
     * Sets the tags
     *
     * @param string $tags
     * @return void
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
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

}