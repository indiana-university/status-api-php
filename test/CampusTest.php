<?php
declare(strict_types=1);

/**
 * This file contains the tests for the Campus class
 * @copyright 2019 The Truestees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Tests;

use PHPUnit\Framework\TestCase;
use Edu\Iu\Uits\Status\Campus;

/**
 * This is the test case for the Campus class
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class CampusTest extends TestCase
{
    public function testSetIdReturnsInstance()
    {
        $campus = new Campus();
        $this->assertInstanceOf(
            'Edu\Iu\Uits\Status\Campus',
            $campus->setId(1)
        );
    }
    
    public function testSetIdSetsCorrectlyAndGetIdGetsCorrectly()
    {
        $campus = new Campus();
        $campus->setId(1);
        $this->assertEquals(1, $campus->getId());
    }
    
    public function badIdDataProvider()
    {
        return [
            [true],
            ['banana'],
            [3.14159],
            [null],
        ];
    }
    
    /**
     * @expectedException TypeError
     * @dataProvider badIdDataProvider
     */
    public function testSetIdWithBadData($data)
    {
        $campus = new Campus();
        $campus->setId($data);
    }
    
    public function testSetNameReturnsInstance()
    {
        $campus = new Campus();
        $this->assertInstanceOf(
            'Edu\Iu\Uits\Status\Campus',
            $campus->setName('test')
        );
    }
    
    public function testSetNameSetsCorrectlyAndGetNameGetsCorrectly()
    {
        $campus = new Campus();
        $campus->setName('test');
        $this->assertEquals('test', $campus->getName());
    }
    
    public function badNameDataProvider()
    {
        return [
            [1],
            [false],
            [3.14159],
            [null],
        ];
    }
    
    /**
     * @expectedException TypeError
     * @dataProvider badNameDataProvider
     */
    public function testSetNameWithBadData($data)
    {
        $campus = new Campus();
        $campus->setName($data);
    }
    
    /**
     * @expectedException RuntimeException
     * @expectedExceptionCode 413
     */
    public function testSetNameWithTooLongString()
    {
        $campus = new Campus();
        $random = new \Rych\Random\Random();
        $campus->setName($random->getRandomString(300));
    }
    
    public function testSetAbbreviationReturnsInstance()
    {
        $campus = new Campus();
        $this->assertInstanceOf(
            'Edu\Iu\Uits\Status\Campus',
            $campus->setName('test')
        );
    }
    
    public function testSetAbbreviationSetsCorrectlyAndGetAbbreviationGetsCorrectly()
    {
        $campus = new Campus();
        $campus->setAbbreviation('test');
        $this->assertEquals('test', $campus->getAbbreviation());
    }
    
    /**
     * @expectedException TypeError
     * @dataProvider badNameDataProvider
     */
    public function testSetAbbreviationWithBadData($data)
    {
        $campus = new Campus();
        $campus->setAbbreviation($data);
    }
    
    /**
     * @expectedException RuntimeException
     * @expectedExceptionCode 413
     */
    public function testSetAbbreviationWithTooLongString()
    {
        $campus = new Campus();
        $random = new \Rych\Random\Random();
        $campus->setAbbreviation($random->getRandomString(300));
    }
}
