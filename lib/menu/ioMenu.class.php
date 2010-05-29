<?php

/**
 * The main, top-level menu which holds ioMenuItem instances
 * 
 * @package     ioMenuPlugin
 * @subpackage  menu
 * @author      Ryan Weaver <ryan@thatsquality.com>
 */
class ioMenu extends ioMenuItem
{

  /**
   * @var string
   */
  protected $_childClass;

  /**
   * Class constructor
   * 
   * @see ioMenuItem
   * @param array   $options
   * @param string  $childClass The class to use if instantiating children menu items
   */
  public function __construct($options = array(), $childClass = 'ioMenuItem')
  {
    $this->_childClass = $childClass;
     
    parent::__construct(null, null, $options);
  }

  /**
   * Overridden to specify what the child class should be
   */
  protected function _createChild($name, $route = null, $options)
  {
    $class = $this->_childClass;

    return new $class($child, $route, $options);
  }
}