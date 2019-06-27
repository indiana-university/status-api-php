<?php
declare(strict_types=1);

/**
 * This file contains the tests for the NoticeStatus class
 * @copyright 2019 The Truestees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Tests;

use PHPUnit\Framework\TestCase;
use Edu\Iu\Uits\Status\NoticeStatus;

/**
 * This is the test case for the NoticeStatus class
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class NoticeStatusTest extends TestCase
{
    public function testNoticeStatusValues()
    {
        $this->assertEquals(1, NoticeStatus::PUBLISHED);
        $this->assertEquals(2, NoticeStatus::DRAFT);
    }
}
