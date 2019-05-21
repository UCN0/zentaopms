<?php
/**
 * The release module English file of ZenTaoPMS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     release
 * @version     $Id: en.php 4129 2013-01-18 01:58:14Z wwccss $
 * @link        http://www.zentao.net
 */
$lang->release->common           = 'Release';
$lang->release->create           = "Create Release";
$lang->release->edit             = "Edit Release";
$lang->release->linkStory        = "Link Story";
$lang->release->linkBug          = "Link Bug";
$lang->release->delete           = "Delete Release";
$lang->release->deleted          = 'Deleted';
$lang->release->view             = "Overview";
$lang->release->browse           = "Release";
$lang->release->changeStatus     = "Change Status";
$lang->release->batchUnlink      = "Batch Unlink";
$lang->release->batchUnlinkStory = "Batch Unlink Story";
$lang->release->batchUnlinkBug   = "Batch Unlink Bug";

$lang->release->confirmDelete      = "Do you want to delete this Release?";
$lang->release->confirmUnlinkStory = "Do you want to remove this Story?";
$lang->release->confirmUnlinkBug   = "Do you want to remove this Bug?";
$lang->release->existBuild         = '『Build』『%s』existed. You could change『name』or choose a『build』.';
$lang->release->noRelease          = 'No releases yet.';

$lang->release->basicInfo = 'Basic Info';

$lang->release->id            = 'ID';
$lang->release->product       = $lang->productCommon;
$lang->release->branch        = 'Platform/Branch';
$lang->release->build         = 'Build';
$lang->release->name          = 'Name';
$lang->release->marker        = 'Milestone';
$lang->release->date          = 'Date';
$lang->release->desc          = 'Description';
$lang->release->status        = 'Status';
$lang->release->last          = 'Last Release';
$lang->release->unlinkStory   = 'Unlink Story';
$lang->release->unlinkBug     = 'Unlink Bug';
$lang->release->stories       = 'Finished Story';
$lang->release->bugs          = 'Solved Bug';
$lang->release->leftBugs      = 'Unsolved Bug';
$lang->release->generatedBugs = 'Unsolved Bug';
$lang->release->finishStories = 'Finished %s Story';
$lang->release->resolvedBugs  = 'Solved %s Bug';
$lang->release->createdBugs   = 'Unsolved %s Bug';
$lang->release->export        = 'Export as HTML';
$lang->release->yesterday     = 'Released Yesterday';

$lang->release->filePath = 'Download : ';
$lang->release->scmPath  = 'SCM Path : ';

$lang->release->exportTypeList['all']     = 'All';
$lang->release->exportTypeList['story']   = 'Story';
$lang->release->exportTypeList['bug']     = 'Bug';
$lang->release->exportTypeList['leftbug'] = 'Unsolved Bug';

$lang->release->statusList['']          = '';
$lang->release->statusList['normal']    = 'Normal';
$lang->release->statusList['terminate'] = 'Terminated';

$lang->release->changeStatusList['normal']    = 'Active';
$lang->release->changeStatusList['terminate'] = 'Terminated';

$lang->release->action = new stdclass();
$lang->release->action->changestatus = array('main' => '$date,  $extra by  <strong>$actor</strong>', 'extra' => 'changeStatusList');
