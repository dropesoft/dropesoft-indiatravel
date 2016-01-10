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

/*
 * INIZIALIZZAZIONE PER TUTTE LE PAGINE
 * */
jQuery(document).ready(function ($) {
    // Inizializza la lingua corrente per il datepicker
    $.datepicker.setDefaults( $.datepicker.regional[JS_CURRENT_LANGUAGE] );
});
/*
* Controlla la validità di un indirizzo mail
* */
function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}
/*
* Scrolla ad un'ancora defininta dell 'identifier passato
* */
function gotoAnchor($identifier)
{
    var objOffset = $('#' + $identifier).offset();
    if (objOffset != null)
    {
        $(window).scrollTop(objOffset.top);
    }

    return false;
}