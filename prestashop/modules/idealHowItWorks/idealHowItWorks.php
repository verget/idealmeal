<?php
if (!defined('_PS_VERSION_'))
  exit;

class idealHowItWorks extends Module
{
  public function __construct()
  {
    $this->name = 'idealHowItWorks';
    $this->tab = 'other';
    $this->version = '0.0.1';
    $this->author = 'verget';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    $this->bootstrap = true;

    parent::__construct();

    $this->displayName = $this->l('IdealHowItWorks');
    $this->description = $this->l('How it works banner.');

    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

    if (!Configuration::get('IDEALHOWITWORKS_NAME'))
      $this->warning = $this->l('No name provided');
  }
  public function install()
  {
    if (Shop::isFeatureActive())
      Shop::setContext(Shop::CONTEXT_ALL);

    if (!parent::install() ||
        !$this->registerHook('home') ||
        !Configuration::updateValue('IDEALHOWITWORKS_NAME', 'my friend')
    )
      return false;

    return true;
  }
  public function uninstall()
  {
    if (!parent::uninstall() ||
        !Configuration::deleteByName('IDEALHOWITWORKS_NAME')
    )
      return false;

    return true;
  }



  public function hookHome()
  {

    $this->context->controller->addCSS(($this->_path).'idealHow_style.css', 'all');
    return $this->display(__FILE__, 'idealHow.tpl');
  }

}
