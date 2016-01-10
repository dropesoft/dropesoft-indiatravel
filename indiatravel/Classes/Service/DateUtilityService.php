<?php
/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015
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

namespace Dropesoft\Indiatravel\Service;


class DateUtilityService
{

    const SHORT_DATE_FORMAT = "SHORT_DATE_FORMAT";
    const DAY_DIGIT_MONTH_FORMAT = "DAY_DIGIT_MONTH_FORMAT";
    const CUSTOM = "CUSTOM";
    const FORMAT = "FORMAT";
    const DATEPIKER_FORMAT = "datepikerFormat";
    const DEFAULT_FORMAT = "DEFAULT_FORMAT";


    /**
     * The map is useful also to have the right convertion method.
     * For CLDR format help see
     * @var array Map to simplify format check
     */
    protected $formatMap = [

        self::SHORT_DATE_FORMAT => [
            'it' => [
                self::CUSTOM => true,
                self::FORMAT => 'dd-LL-y',
                self::DATEPIKER_FORMAT => 'dd-mm-yy',
                self::DEFAULT_FORMAT => 'd-m-Y'

            ],
            'fr' => [
                self::CUSTOM => true,
                self::FORMAT => 'dd-LL-y',
                self::DATEPIKER_FORMAT => 'dd-mm-yy',
                self::DEFAULT_FORMAT => 'd-m-Y'

            ],
            'de' => [
                self::CUSTOM => false,
                self::FORMAT => 'default',
                self::DATEPIKER_FORMAT => 'dd.mm.yy',
                self::DEFAULT_FORMAT => 'd.m.Y'
            ],
            'ru' => [
                self::CUSTOM => false,
                self::FORMAT => 'default',
                self::DATEPIKER_FORMAT => 'dd.mm.yy',
                self::DEFAULT_FORMAT => 'd.m.Y'
            ],
            'en' => [
                self::CUSTOM => false,
                self::FORMAT => 'default',
                self::DATEPIKER_FORMAT => 'yy-mm-dd',
                self::DEFAULT_FORMAT => 'Y-m-d'
            ],
        ],
        self::DAY_DIGIT_MONTH_FORMAT => [
            'it' => [
                self::CUSTOM => true,
                self::FORMAT => 'E dd MMM',
                self::DATEPIKER_FORMAT => 'undef',
                self::DEFAULT_FORMAT => 'undef'
            ],
            'de' => [
                self::CUSTOM => true,
                self::FORMAT => 'E dd MMM',
                self::DATEPIKER_FORMAT => 'undef',
                self::DEFAULT_FORMAT => 'undef'
            ],
            'en' => [
                self::CUSTOM => true,
                self::FORMAT => 'E dd MMM',
                self::DATEPIKER_FORMAT => 'undef',
                self::DEFAULT_FORMAT => 'undef'
            ],
        ],
    ];

    /**
     * @param $format
     * @param $currentUserLang
     * @param $dateFormat
     * @return mixed
     */
    public function getFormatByLanguage($format, $currentUserLang, $dateFormat)
    {
        return $this->formatMap[$format][$currentUserLang][$dateFormat];
    }
    public function buildDateKipperFormat($format,$currentUserLang)
    {
        return $this->formatMap[$format][$currentUserLang]['datepikerFormat'];
    }
    /**
     * Formatta le properties dell'oggetto passato alla Action come arguments
     * @param $argument Argument passato alla Action
     * @param $arrPropertyToFormat Array nomi delle property
     * @param $format Foramto della data
     */
    public static function formatDateControllerArguments($argument, $arrPropertyToFormat, $format)
    {
        foreach ($arrPropertyToFormat as $propery) {
            $argument->getPropertyMappingConfiguration()
                ->forProperty($propery)
                ->setTypeConverterOption('TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter', \TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::CONFIGURATION_DATE_FORMAT, $format);
        }
    }

    /**
     * Formatta le properties dell'oggetto passato alla Action come arguments
     * @param $argument Argument passato alla Action
     * @param $format Foramto della data
     */
    public static function formatDateControllerArgument($argument, $format)
    {

        $argument->getPropertyMappingConfiguration()
            ->setTypeConverterOption('TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter', \TYPO3\CMS\Extbase\Property\TypeConverter\DateTimeConverter::CONFIGURATION_DATE_FORMAT, $format);
    }
}