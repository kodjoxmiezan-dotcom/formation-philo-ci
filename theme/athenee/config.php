<?php
defined('MOODLE_INTERNAL') || die();
$THEME->name='athenee';
$THEME->parents=['boost'];
$THEME->sheets=[];
$THEME->scss=function($theme){return theme_athenee_get_main_scss_content($theme);};
$THEME->editor_sheets=[];
$THEME->enable_dock=false;
$THEME->yuicssmodules=[];
$THEME->rendererfactory='theme_overridden_renderer_factory';
$THEME->requiredblocks='';
$THEME->addblockposition=BLOCK_ADDBLOCK_POSITION_FLATNAV;
$THEME->layouts=[
 'frontpage'=>['file'=>'frontpage.php','regions'=>['side-pre'],'defaultregion'=>'side-pre','options'=>['nonavbar'=>true]],
];
