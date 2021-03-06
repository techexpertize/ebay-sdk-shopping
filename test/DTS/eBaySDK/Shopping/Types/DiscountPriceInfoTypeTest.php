<?php

use DTS\eBaySDK\Shopping\Types\DiscountPriceInfoType;

class DiscountPriceInfoTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new DiscountPriceInfoType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Types\DiscountPriceInfoType', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
