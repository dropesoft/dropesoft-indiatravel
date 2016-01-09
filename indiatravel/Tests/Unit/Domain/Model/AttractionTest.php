<?php

namespace Dropesoft\Indiatravel\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \Dropesoft\Indiatravel\Domain\Model\Attraction.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class AttractionTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Dropesoft\Indiatravel\Domain\Model\Attraction
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Dropesoft\Indiatravel\Domain\Model\Attraction();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle()
	{
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getShortDescriptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getShortDescription()
		);
	}

	/**
	 * @test
	 */
	public function setShortDescriptionForStringSetsShortDescription()
	{
		$this->subject->setShortDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'shortDescription',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription()
	{
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAddressReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getAddress()
		);
	}

	/**
	 * @test
	 */
	public function setAddressForStringSetsAddress()
	{
		$this->subject->setAddress('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'address',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLatReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getLat()
		);
	}

	/**
	 * @test
	 */
	public function setLatForStringSetsLat()
	{
		$this->subject->setLat('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'lat',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLngReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getLng()
		);
	}

	/**
	 * @test
	 */
	public function setLngForStringSetsLng()
	{
		$this->subject->setLng('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'lng',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSiteReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSite()
		);
	}

	/**
	 * @test
	 */
	public function setSiteForStringSetsSite()
	{
		$this->subject->setSite('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'site',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getEmail()
		);
	}

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail()
	{
		$this->subject->setEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'email',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhoneReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getPhone()
		);
	}

	/**
	 * @test
	 */
	public function setPhoneForStringSetsPhone()
	{
		$this->subject->setPhone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'phone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMobileReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getMobile()
		);
	}

	/**
	 * @test
	 */
	public function setMobileForStringSetsMobile()
	{
		$this->subject->setMobile('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'mobile',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFaxReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getFax()
		);
	}

	/**
	 * @test
	 */
	public function setFaxForStringSetsFax()
	{
		$this->subject->setFax('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'fax',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFacebookReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getFacebook()
		);
	}

	/**
	 * @test
	 */
	public function setFacebookForStringSetsFacebook()
	{
		$this->subject->setFacebook('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'facebook',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGplusReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getGplus()
		);
	}

	/**
	 * @test
	 */
	public function setGplusForStringSetsGplus()
	{
		$this->subject->setGplus('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'gplus',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTwitterReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTwitter()
		);
	}

	/**
	 * @test
	 */
	public function setTwitterForStringSetsTwitter()
	{
		$this->subject->setTwitter('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'twitter',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTypeReturnsInitialValueForAttractionType()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getType()
		);
	}

	/**
	 * @test
	 */
	public function setTypeForObjectStorageContainingAttractionTypeSetsType()
	{
		$type = new \Dropesoft\Indiatravel\Domain\Model\AttractionType();
		$objectStorageHoldingExactlyOneType = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneType->attach($type);
		$this->subject->setType($objectStorageHoldingExactlyOneType);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneType,
			'type',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addTypeToObjectStorageHoldingType()
	{
		$type = new \Dropesoft\Indiatravel\Domain\Model\AttractionType();
		$typeObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$typeObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($type));
		$this->inject($this->subject, 'type', $typeObjectStorageMock);

		$this->subject->addType($type);
	}

	/**
	 * @test
	 */
	public function removeTypeFromObjectStorageHoldingType()
	{
		$type = new \Dropesoft\Indiatravel\Domain\Model\AttractionType();
		$typeObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$typeObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($type));
		$this->inject($this->subject, 'type', $typeObjectStorageMock);

		$this->subject->removeType($type);

	}
}
