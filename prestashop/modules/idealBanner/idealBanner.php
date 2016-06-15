<?php
if (!defined('_PS_VERSION_'))
  exit;

class idealBanner extends Module
{
  public function __construct()
  {
    $this->name = 'idealBanner';
    $this->tab = 'other';
    $this->version = '0.0.1';
    $this->author = 'verget';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    $this->bootstrap = true;

    parent::__construct();

    $this->displayName = $this->l('IdealBanner');
    $this->description = $this->l('Top banner for ideal meal.');

    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

    if (!Configuration::get('IDEALHEADER_NAME'))
      $this->warning = $this->l('No name provided');
  }
  public function install()
  {
    if (Shop::isFeatureActive())
      Shop::setContext(Shop::CONTEXT_ALL);

    if (!parent::install() ||
        !$this->registerHook('displayTop') ||
        !Configuration::updateValue('IDEALHEADER_NAME', 'my friend')
    )
      return false;

    return true;
  }
  public function uninstall()
  {
    if (!parent::uninstall() ||
        !Configuration::deleteByName('IDEALHEADER_NAME')
    )
      return false;

    return true;
  }



  public function hookDisplayTop()
  {

    $this->context->controller->addCSS(($this->_path).'idealBanner_style.css', 'all');
    return $this->display(__FILE__, 'idealBanner.tpl');
  }

}
