<?php
/**
 * The control file of weekly of ChanzhiEPS.
 *
 * @copyright   Copyright 2009-2010 QingDao Nature Easy Soft Network Technology Co,LTD (www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv11.html)
 * @author      Xiying Guan <guanxiying@xirangit.com>
 * @package     weekly
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
class weekly extends control
{
    public function __construct()
    {
        parent::__construct();
        $this->view->users = $this->loadModel('user')->getPairs('noletter');
    }

    public function index($program = 0, $date = '')
    {
        $program = $program ? $program : $this->session->program;
        if(!$date) $date = helper::today();
        $date = date('Y-m-d', strtotime($date));

        $this->view->title = $this->lang->weekly->common;

        $this->view->pv = $this->weekly->getPV($program, $date);
        $this->view->ev = $this->weekly->getEV($program, $date);
        $this->view->ac = $this->weekly->getAC($program, $date);
        $this->view->sv = $this->weekly->getSV($this->view->ev, $this->view->pv);
        $this->view->cv = $this->weekly->getCV($this->view->ev, $this->view->ac);

        $this->view->program   = $this->loadModel('project')->getByID($program);
        $this->view->weekSN    = $this->weekly->getWeekSN($this->view->program->begin, $date);
        $this->view->monday    = $this->weekly->getThisMonday($date);
        $this->view->lastDay   = $this->weekly->getLastDay($date);
        $this->view->staff     = $this->weekly->getStaff($program);
        $this->view->finished  = $this->weekly->getFinished($program);
        $this->view->postponed = $this->weekly->getPostponed($program);
        $this->view->nextWeek  = $this->weekly->getTasksOfNextWeek($program, $date);
        $this->view->workload  = $this->weekly->getWorkloadByType($program, $date);
        $this->weekly->save($program, $this->view, $date);

        $this->lang->modulePageNav = $this->weekly->getPageNav($this->view->program, $date);
        $this->display();
    }
}
