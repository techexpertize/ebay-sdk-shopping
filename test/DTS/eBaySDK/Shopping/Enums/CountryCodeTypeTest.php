<?php

use DTS\eBaySDK\Shopping\Enums\CountryCodeType;

class CountryCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new CountryCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Shopping\Enums\CountryCodeType', $this->obj);
    }
}
