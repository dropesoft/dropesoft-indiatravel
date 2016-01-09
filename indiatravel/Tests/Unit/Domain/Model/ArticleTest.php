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
 * Test case for class \Dropesoft\Indiatravel\Domain\Model\Article.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class ArticleTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Dropesoft\Indiatravel\Domain\Model\Article
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Dropesoft\Indiatravel\Domain\Model\Article();
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
	public function getTimestampReturnsInitialValueForDateTime()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getTimestamp()
		);
	}

	/**
	 * @test
	 */
	public function setTimestampForDateTimeSetsTimestamp()
	{
		$dateTimeFixture = new \DateTime();
		$this->subject->setTimestamp($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'timestamp',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTagsReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTags()
		);
	}

	/**
	 * @test
	 */
	public function setTagsForStringSetsTags()
	{
		$this->subject->setTags('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'tags',
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
}
