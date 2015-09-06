<?php
/**
 * Created by PhpStorm.
 * User: Kator
 * Date: 06.09.2015
 * Time: 13:01
 */

require_once 'MyClass.php';


class MyClassTest extends \PHPUnit_Framework_TestCase
{
        public function testPower()
        {
            $obj = new MyClass();
            $this->assertEquals(8, $obj->power(2, 3));
        }
}
