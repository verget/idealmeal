<?php
if (!defined('_PS_VERSION_'))
  exit;

class idealArticles extends Module
{
  public function __construct()
  {
    $this->name = 'idealArticles';
    $this->tab = 'other';
    $this->version = '0.0.1';
    $this->author = 'verget';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    $this->bootstrap = true;

    parent::__construct();

    $this->displayName = $this->l('idealArticles');
    $this->description = $this->l('Articles block.');

    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

    if (!Configuration::get('IDEALARTICLES_NAME'))
      $this->warning = $this->l('No name provided');
  }
  public function install()
  {
    if (Shop::isFeatureActive())
      Shop::setContext(Shop::CONTEXT_ALL);

    if (!parent::install() ||
        !$this->registerHook('home') ||
        !Configuration::updateValue('IDEALARTICLES_NAME', 'my friend')
    )
      return false;

    return true;
  }
  public function uninstall()
  {
    if (!parent::uninstall() ||
        !Configuration::deleteByName('IDEALARTICLES_NAME')
    )
      return false;

    return true;
  }



  public function hookHome()
  {

    $this->context->controller->addCSS(($this->_path).'idealArticles_style.css', 'all');
    $this->context->controller->addJS(($this->_path).'idealArticles_script.js');
    return $this->display(__FILE__, 'idealArticles.tpl');
  }

}
