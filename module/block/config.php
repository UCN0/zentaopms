<?php
/**
 * The config file of block module of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.zentao.net
 */
$config->block = new stdclass();
$config->block->version = 2;
$config->block->editor  = new stdclass();
$config->block->editor->set = array('id' => 'html', 'tools' => 'simple');

$config->block->longBlock = array();
$config->block->longBlock['']['flowchart']         = 'flowchart';
$config->block->longBlock['']['welcome']           = 'welcome';
$config->block->longBlock['product']['statistic']  = 'statistic';
$config->block->longBlock['project']['statistic']  = 'statistic';
$config->block->longBlock['qa']['statistic']       = 'statistic';
$config->block->longBlock['program']['cmmireport'] = 'cmmireport';
$config->block->longBlock['program']['cmmiissue']  = 'cmmiissue';
$config->block->longBlock['program']['cmmirisk']   = 'cmmirisk';

$config->block->shortBlock = array();
$config->block->shortBlock['product']['overview']     = 'overview';
$config->block->shortBlock['project']['overview']     = 'overview';
$config->block->shortBlock['program']['cmmiestimate'] = 'cmmiestimate';
$config->block->shortBlock['program']['cmmiprogress'] = 'cmmiprogress';
$config->block->shortBlock['']['contribute'] = 'contribute';

$config->block->showAction['overview']     = array('block' => 'qa', 'module' => 'testcase', 'method' => 'create', 'vars' => '');
$config->block->showAction['scrumlist']    = array('block' => 'program', 'module' => 'project', 'method' => 'create', 'vars' => '');
$config->block->showAction['scrumproduct'] = array('block' => 'program', 'module' => 'product', 'method' => 'create', 'vars' => '');

$config->statistic = new stdclass();
$config->statistic->storyStages = array('wait', 'planned', 'developing', 'testing', 'released');
