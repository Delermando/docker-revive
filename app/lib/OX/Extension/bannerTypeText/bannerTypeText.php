<?php

/*
+---------------------------------------------------------------------------+
| Revive Adserver                                                           |
| http://www.revive-adserver.com                                            |
|                                                                           |
| Copyright: See the COPYRIGHT.txt file.                                    |
| License: GPLv2 or later, see the LICENSE.txt file.                        |
+---------------------------------------------------------------------------+
*/

require_once LIB_PATH . '/Plugin/Component.php';

/**
 *
 * @package    OpenXPlugin
 * @subpackage Plugins_BannerTypes
 * @abstract
 */
class Plugins_BannerTypeText extends OX_Component
{
    /**
     * Return the media (content) type
     *
     */
    function getContentType()
    {
        return 'text';
    }

    /**
     * return the storage type
     *
     */
    function getStorageType()
    {
        return 'txt';
    }

    /**
     * Return type of plugin
     *
     * @return string A string describing the type of plugin.
     */
    function getOptionDescription()
    {
        return 'Generic Text Banner';
    }

    /**
     * Append type-specific form elements to the base form
     *
     * @param object form
     */
    function buildForm(&$form, &$row)
    {
        $header = $form->createElement('header', 'header_txt', $GLOBALS['strTextBanner']." -  banner text");
        $header->setAttribute('icon', 'icon-banner-text.gif');
        $form->addElement($header);

        $textG['textarea'] =  $form->createElement('textarea', 'bannertext', null,
            array(
                'class' =>'code', 'cols'=>'45', 'rows'=>'10', 'wrap'=>'off',
                'dir' => 'ltr', 'style'=>'width:550px;'
            ));
        $form->addGroup($textG, 'text_banner_g', null, array("<br>", ""), false);

        $form->addElement('header', 'header_b_links', "Banner link");
        $form->addElement('text', 'url', $GLOBALS['strURL']);
        $form->addElement('text', 'target', $GLOBALS['strTarget']);

        $form->addElement('header', 'header_b_display', 'Banner display');
        $form->addElement('text', 'statustext', $GLOBALS['strStatusText']);

        $form->addElement('hidden', 'ext_bannertype', $this->getComponentIdentifier());

    }

    function preprocessForm($insert, $bannerid, &$aFields, &$aVariables)
    {
        $aFields['iframe_friendly'] = false;
        
        return true;
    }

    function processForm($insert, $bannerid, &$aFields, &$aVariables)
    {
        return true;
    }

    function validateForm(&$form)
    {
        return true;
    }

    /**
     * Modify the generated banner cache.
     *
     * @param string $buffer the banner cache.
     * @param array $noScript
     * @param array $banner
     * @return string
     */
    function getBannerCache($buffer, &$noScript, $banner)
    {
        return $buffer;
    }

}

?>
