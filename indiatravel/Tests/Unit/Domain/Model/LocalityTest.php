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
 * Test case for class \Dropesoft\Indiatravel\Domain\Model\Locality.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class LocalityTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Dropesoft\Indiatravel\Domain\Model\Locality
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Dropesoft\Indiatravel\Domain\Model\Locality();
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
	public function getTopDestinationReturnsInitialValueForBool()
	{
		$this->assertSame(
			FALSE,
			$this->subject->getTopDestination()
		);
	}

	/**
	 * @test
	 */
	public function setTopDestinationForBoolSetsTopDestination()
	{
		$this->subject->setTopDestination(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'topDestination',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSeotitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSeotitle()
		);
	}

	/**
	 * @test
	 */
	public function setSeotitleForStringSetsSeotitle()
	{
		$this->subject->setSeotitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'seotitle',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSeodescriptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSeodescription()
		);
	}

	/**
	 * @test
	 */
	public function setSeodescriptionForStringSetsSeodescription()
	{
		$this->subject->setSeodescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'seodescription',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSeokeysReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSeokeys()
		);
	}

	/**
	 * @test
	 */
	public function setSeokeysForStringSetsSeokeys()
	{
		$this->subject->setSeokeys('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'seokeys',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getInformationsReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getInformations()
		);
	}

	/**
	 * @test
	 */
	public function setInformationsForStringSetsInformations()
	{
		$this->subject->setInformations('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'informations',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCatogoriesReturnsInitialValueForCategory()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCatogories()
		);
	}

	/**
	 * @test
	 */
	public function setCatogoriesForObjectStorageContainingCategorySetsCatogories()
	{
		$catogory = new \Dropesoft\Indiatravel\Domain\Model\Category();
		$objectStorageHoldingExactlyOneCatogories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCatogories->attach($catogory);
		$this->subject->setCatogories($objectStorageHoldingExactlyOneCatogories);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCatogories,
			'catogories',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addCatogoryToObjectStorageHoldingCatogories()
	{
		$catogory = new \Dropesoft\Indiatravel\Domain\Model\Category();
		$catogoriesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$catogoriesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($catogory));
		$this->inject($this->subject, 'catogories', $catogoriesObjectStorageMock);

		$this->subject->addCatogory($catogory);
	}

	/**
	 * @test
	 */
	public function removeCatogoryFromObjectStorageHoldingCatogories()
	{
		$catogory = new \Dropesoft\Indiatravel\Domain\Model\Category();
		$catogoriesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$catogoriesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($catogory));
		$this->inject($this->subject, 'catogories', $catogoriesObjectStorageMock);

		$this->subject->removeCatogory($catogory);

	}

	/**
	 * @test
	 */
	public function getArticlesReturnsInitialValueForArticle()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getArticles()
		);
	}

	/**
	 * @test
	 */
	public function setArticlesForObjectStorageContainingArticleSetsArticles()
	{
		$article = new \Dropesoft\Indiatravel\Domain\Model\Article();
		$objectStorageHoldingExactlyOneArticles = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneArticles->attach($article);
		$this->subject->setArticles($objectStorageHoldingExactlyOneArticles);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneArticles,
			'articles',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addArticleToObjectStorageHoldingArticles()
	{
		$article = new \Dropesoft\Indiatravel\Domain\Model\Article();
		$articlesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$articlesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($article));
		$this->inject($this->subject, 'articles', $articlesObjectStorageMock);

		$this->subject->addArticle($article);
	}

	/**
	 * @test
	 */
	public function removeArticleFromObjectStorageHoldingArticles()
	{
		$article = new \Dropesoft\Indiatravel\Domain\Model\Article();
		$articlesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$articlesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($article));
		$this->inject($this->subject, 'articles', $articlesObjectStorageMock);

		$this->subject->removeArticle($article);

	}

	/**
	 * @test
	 */
	public function getAttractionsReturnsInitialValueForAttraction()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getAttractions()
		);
	}

	/**
	 * @test
	 */
	public function setAttractionsForObjectStorageContainingAttractionSetsAttractions()
	{
		$attraction = new \Dropesoft\Indiatravel\Domain\Model\Attraction();
		$objectStorageHoldingExactlyOneAttractions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneAttractions->attach($attraction);
		$this->subject->setAttractions($objectStorageHoldingExactlyOneAttractions);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneAttractions,
			'attractions',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addAttractionToObjectStorageHoldingAttractions()
	{
		$attraction = new \Dropesoft\Indiatravel\Domain\Model\Attraction();
		$attractionsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$attractionsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($attraction));
		$this->inject($this->subject, 'attractions', $attractionsObjectStorageMock);

		$this->subject->addAttraction($attraction);
	}

	/**
	 * @test
	 */
	public function removeAttractionFromObjectStorageHoldingAttractions()
	{
		$attraction = new \Dropesoft\Indiatravel\Domain\Model\Attraction();
		$attractionsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$attractionsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($attraction));
		$this->inject($this->subject, 'attractions', $attractionsObjectStorageMock);

		$this->subject->removeAttraction($attraction);

	}
}
