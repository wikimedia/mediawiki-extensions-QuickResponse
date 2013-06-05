<?php
/*
QuickResponse Extension for MediaWiki.

@license MIT License
@version 0.2
*/

$wgExtensionCredits[ 'other' ][] = array(
    'path' => __FILE__,
    'name' => 'QuickResponse',
    'version' => '0.2',
    'url' => '',
    'author' => 'Konarak Ratnakar',
    'descriptionmsg' => 'quickresponse-desc'
);

$wgExtensionMessagesFiles[ 'QuickResponse' ] = __DIR__ . '/QuickResponse.i18n.php';

$wgResourceModules[ 'QuickResponse' ] = array(
    'scripts' => array('resources/qrcode.js', 
                       'resources/jquery.qrcode.js',
                       'resources/quickresponse.js'
                       ),
    'dependencies' =>  'jquery.ui.dialog',
    'messages' => array('quickresponse-desc',
                        'quickresponse-text',
                        'quickresponse-title',
                        'quickresponse-tooltip'
                        ),
    'localBasePath' => __DIR__,
    'remoteExtPath' => 'QuickResponse',
);

$wgHooks[ 'BeforePageDisplay' ][] = function ( $out ) {
    $out->addModules( 'QuickResponse' );
    return true;
};
