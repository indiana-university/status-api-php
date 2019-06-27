<?php
declare(strict_types=1);

/**
 * This file contains the tests for the ServiceGroup class
 * @copyright 2019 The Truestees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Tests;

use PHPUnit\Framework\TestCase;
use Edu\Iu\Uits\Status\ServiceGroup;

/**
 * This is the test case for the ServiceGroup class
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class ServiceGroupTest extends TestCase
{
    
    public function testSetIdReturnsClass()
    {
        $serviceGroup = new ServiceGroup();
        $this->assertInstanceOf(
            'Edu\Iu\Uits\Status\ServiceGroup',
            $serviceGroup->setId(1)
        );
    }
    
    public function testIdSetterAndGetter()
    {
        $serviceGroup = new ServiceGroup();
        $serviceGroup->setId(1);
        $this->assertEquals(1, $serviceGroup->getId());
    }
    
    /**
     * @expectedException TypeError
     * @dataProvider badIntDataProvider
     */
    public function testSetIdWithBadData($data)
    {
        $serviceGroup = new ServiceGroup();
        $serviceGroup->setId($data);
    }
    
    public function testSetNameReturnsClass()
    {
        $serviceGroup = new ServiceGroup();
        $this->assertInstanceOf(
            'Edu\Iu\Uits\Status\ServiceGroup',
            $serviceGroup->setName('test')
        );
    }
    
    public function testNameSetterAndGetter()
    {
        $serviceGroup = new ServiceGroup();
        $serviceGroup->setName('test');
        $this->assertEquals('test', $serviceGroup->getName());
    }
    
    /**
     * @expectedException TypeError
     * @dataProvider badStringDataProvider
     */
    public function testSetNameWithBadData($data)
    {
        $serviceGroup = new ServiceGroup();
        $serviceGroup->setName($data);
    }
    
    /**
     * @expectedException RuntimeException
     * @expectedExceptionCode 413
     */
    public function testSetNameDataTooLong()
    {
        $serviceGroup = new ServiceGroup();
        $random = new \Rych\Random\Random();
        $serviceGroup->setName($random->getRandomString(300));
    }
    
    public function testSetDescriptionReturnsClass()
    {
        $serviceGroup = new ServiceGroup();
        $this->assertInstanceOf(
            'Edu\Iu\Uits\Status\ServiceGroup',
            $serviceGroup->setDescription('test')
        );
    }
    
    public function testDescriptionSetterAndGetter()
    {
        $serviceGroup = new ServiceGroup();
        $serviceGroup->setDescription('test');
        $this->assertEquals('test', $serviceGroup->getDescription());
    }
    
    /**
     * @expectedException TypeError
     * @dataProvider badStringDataProvider
     */
    public function testSetDescriptionWithBadData($data)
    {
        $serviceGroup = new ServiceGroup();
        $serviceGroup->setDescription($data);
    }
    
    /**
     * @expectedException RuntimeException
     * @expectedExceptionCode 413
     */
    public function testSetDescriptionDataTooLong()
    {
        $serviceGroup = new ServiceGroup();
        $random = new \Rych\Random\Random();
        $serviceGroup->setDescription($random->getRandomString(2000));
    }
    
    public function badIntDataProvider()
    {
        return [
            [true],
            ['banana'],
            [3.14159],
            [null],
        ];
    }
    
    public function badStringDataProvider()
    {
        return [
            [1],
            [false],
            [3.14159],
            [null],
        ];
    }
}
