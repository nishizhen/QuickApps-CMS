<?php
/**
 * Help Controller
 *
 * PHP version 5
 *
 * @package  QuickApps.Plugin.System.Controller
 * @version  1.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://cms.quickapps.es
 */
class HelpController extends SystemAppController {
    public $name = 'Help';
    public $uses = array();

    public function admin_index() {

    }

    public function admin_module($name) {
        $this->setCrumb('/admin/system/help/');
        $modules = Configure::read('Modules');

        if (!isset($modules[$name])) {
            $this->redirect('/admin/system/help/');
        }

        $this->setCrumb( array($modules[$name]['yaml']['name'], ''));
        $this->title(__t('Help') . ' ' . $modules[$name]['yaml']['name']);
        $this->set('module', $modules[$name]);
        $this->set('name', $name);
    }
}