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
 * Attraction
 */
class Attraction extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
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
     */
    protected $description = '';
    
    /**
     * address
     *
     * @var string
     * @validate NotEmpty
     */
    protected $address = '';
    
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
     * site
     *
     * @var string
     */
    protected $site = '';
    
    /**
     * email
     *
     * @var string
     */
    protected $email = '';
    
    /**
     * phone
     *
     * @var string
     */
    protected $phone = '';
    
    /**
     * mobile
     *
     * @var string
     */
    protected $mobile = '';
    
    /**
     * fax
     *
     * @var string
     */
    protected $fax = '';
    
    /**
     * facebook
     *
     * @var string
     */
    protected $facebook = '';
    
    /**
     * gplus
     *
     * @var string
     */
    protected $gplus = '';
    
    /**
     * twitter
     *
     * @var string
     */
    protected $twitter = '';
    
    /**
     * type
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dropesoft\Indiatravel\Domain\Model\AttractionType>
     * @cascade remove
     */
    protected $type = null;

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
        $this->type = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * Sets the address
     *
     * @param string $address
     * @return void
     */
    public function setAddress($address)
    {
        $this->address = $address;
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
     * Returns the site
     *
     * @return string $site
     */
    public function getSite()
    {
        return $this->site;
    }
    
    /**
     * Sets the site
     *
     * @param string $site
     * @return void
     */
    public function setSite($site)
    {
        $this->site = $site;
    }
    
    /**
     * Returns the email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * Sets the email
     *
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * Returns the phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /**
     * Sets the phone
     *
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    
    /**
     * Returns the mobile
     *
     * @return string $mobile
     */
    public function getMobile()
    {
        return $this->mobile;
    }
    
    /**
     * Sets the mobile
     *
     * @param string $mobile
     * @return void
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }
    
    /**
     * Returns the fax
     *
     * @return string $fax
     */
    public function getFax()
    {
        return $this->fax;
    }
    
    /**
     * Sets the fax
     *
     * @param string $fax
     * @return void
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }
    
    /**
     * Returns the facebook
     *
     * @return string $facebook
     */
    public function getFacebook()
    {
        return $this->facebook;
    }
    
    /**
     * Sets the facebook
     *
     * @param string $facebook
     * @return void
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }
    
    /**
     * Returns the gplus
     *
     * @return string $gplus
     */
    public function getGplus()
    {
        return $this->gplus;
    }
    
    /**
     * Sets the gplus
     *
     * @param string $gplus
     * @return void
     */
    public function setGplus($gplus)
    {
        $this->gplus = $gplus;
    }
    
    /**
     * Returns the twitter
     *
     * @return string $twitter
     */
    public function getTwitter()
    {
        return $this->twitter;
    }
    
    /**
     * Sets the twitter
     *
     * @param string $twitter
     * @return void
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * Adds a AttractionType
     *
     * @param \Dropesoft\Indiatravel\Domain\Model\AttractionType $type
     * @return void
     */
    public function addType(\Dropesoft\Indiatravel\Domain\Model\AttractionType $type)
    {
        $this->type->attach($type);
    }
    
    /**
     * Removes a AttractionType
     *
     * @param \Dropesoft\Indiatravel\Domain\Model\AttractionType $typeToRemove The AttractionType to be removed
     * @return void
     */
    public function removeType(\Dropesoft\Indiatravel\Domain\Model\AttractionType $typeToRemove)
    {
        $this->type->detach($typeToRemove);
    }
    
    /**
     * Returns the type
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dropesoft\Indiatravel\Domain\Model\AttractionType> $type
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * Sets the type
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Dropesoft\Indiatravel\Domain\Model\AttractionType> $type
     * @return void
     */
    public function setType(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $type)
    {
        $this->type = $type;
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