<?php
/**
 * test1.php, test2.php and test3.php are examples of PHP files to be parsed.
 */

/**
 * A test class to play with package PHP_UML
 * 
 * @package Orion
 * @author Baptiste Autin
 *
 */
class TestClass1 {
   var $fooPHP;
   public $fooPublic;
   private $_fooPrivate;
   protected $fooProtected = array();
   public $fooDefault = 'Some value';
   const NAME = 'my class';
   
   /**
    * @param string $str Accessor for fooPrivate
    */
   function setFoo($str = 'Some characters')
   {
       $this->_fooPrivate = $str;
   }
   /**
   * @return string Value of fooPrivate
   */
   function getFoo()
   {
   	   return $this->_fooPrivate;
   }   
}

?>
