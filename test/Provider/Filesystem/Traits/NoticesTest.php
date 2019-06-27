<?php
declare(strict_types=1);

/**
 * This file contains the tests for the filesystem notices trait
 * @copyright 2019 The Truestees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Tests\Provider\Filesystem\Traits;

use PHPUnit\Framework\TestCase;

/**
 * This is the test case for the filesystem notices trait
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class NoticesTest extends TestCase
{
    use \Edu\Iu\Uits\Status\Provider\Filesystem\Traits\Notices;
    
    private $basePath = __dir__ . '/../../../data';
    
    public function testGetNotices()
    {
        $this->assertTrue(is_array($this->getNotices()));
    }
}
