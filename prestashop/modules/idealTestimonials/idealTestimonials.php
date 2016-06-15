<?php
if (!defined('_PS_VERSION_'))
  exit;

class idealTestimonials extends Module
{
  public function __construct()
  {
    $this->name = 'idealTestimonials';
    $this->tab = 'other';
    $this->version = '0.0.1';
    $this->author = 'verget';
    $this->need_instance = 0;
    $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    $this->bootstrap = true;

    parent::__construct();

    $this->displayName = $this->l('idealTestimonials');
    $this->description = $this->l('Recipe slider.');

    $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');

    if (!Configuration::get('IDEALTESTIMONIALS_NAME'))
      $this->warning = $this->l('No name provided');
  }
  public function install()
  {
    if (Shop::isFeatureActive())
      Shop::setContext(Shop::CONTEXT_ALL);

    if (!parent::install() ||
        !$this->registerHook('home') ||
        !Configuration::updateValue('IDEALTESTIMONIALS_NAME', 'my friend')
    )
      return false;

    return true;
  }
  public function uninstall()
  {
    if (!parent::uninstall() ||
        !Configuration::deleteByName('IDEALTESTIMONIALS_NAME')
    )
      return false;

    return true;
  }



  public function hookHome()
  {

    $this->context->controller->addCSS(($this->_path).'idealTestimonials_style.css', 'all');
    $this->context->controller->addJS(($this->_path).'idealTestimonials_script.js');
    return $this->display(__FILE__, 'idealTestimonials.tpl');
  }

}
