<?php
namespace Dropesoft\Indiatravel\ViewHelpers\Be;

use TYPO3\CMS\Backend\Utility\BackendUtility;

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


class EditLinkViewHelper  extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper
{
    /**
     * @var string
     */
    protected $tagName = 'a';
    /**
     * Initialize arguments
     *
     * @return void
     * @api
     */
    public function initializeArguments() {
        $this->registerUniversalTagAttributes();
        $this->registerTagAttribute('name', 'string', 'Specifies the name of an anchor');
        $this->registerTagAttribute('target', 'string', 'Specifies where to open the linked document');
    }

    /**
     * Crafts a link to edit a database record or create a new one
     *
     * @param string $parametersKey
     * @param string $parametersValue
     * @param string $returnUrl URL to return to
     * @param string $pluginModuleName
     * @return string The <a> tag
     * @see \TYPO3\CMS\Backend\Utility::editOnClick()
     */
    public function render($parametersKey, $parametersValue, $returnUrl = '', $pluginModuleName='') {

        $fullReturnUrl = "";
        $uri = "";

        if(version_compare(TYPO3_version, '7.0.0', '<'))
        {
            $uri = 'alt_doc.php?' . $parametersKey .'='.$parametersValue;
            if (!empty($returnUrl)) {
                $uri .= '&returnUrl=' . rawurlencode(\TYPO3\CMS\Backend\Utility\BackendUtility::getModuleUrl($pluginModuleName) . "&" . $returnUrl);
            }
        }
        else
        {
            $fullReturnUrl = BackendUtility::getModuleUrl($pluginModuleName) . "&" . $returnUrl;
            $parameters = [
                $parametersKey => $parametersValue,
                'returnUrl' => $fullReturnUrl,
            ];
            $uri = BackendUtility::getModuleUrl('record_edit',$parameters);
        }
        $this->tag->addAttribute('href', $uri);
        $this->tag->setContent($this->renderChildren());
        $this->tag->forceClosingTag(TRUE);
        return $this->tag->render();
    }
}