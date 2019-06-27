<?php
declare(strict_types=1);

/**
 * This file contains the tests for the filesystem notice trait
 * @copyright 2019 The Truestees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Tests\Provider\Filesystem\Traits;

use PHPUnit\Framework\TestCase;

/**
 * This is the test case for the Filesystem notice trait
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class NoticeTest extends TestCase
{
    use \Edu\Iu\Uits\Status\Provider\Filesystem\Traits\Notice;
    
    private $basePath = __dir__ . '/../../../data';
    
    public function testGetNotice()
    {
        $this->assertInstanceOf('stdClass', $this->getNotice(1));
    }
}
