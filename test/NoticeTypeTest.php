<?php
declare(strict_types=1);

/**
 * This file contains the tests for the NoticeType class
 * @copyright 2019 The Truestees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Tests;

use PHPUnit\Framework\TestCase;
use Edu\Iu\Uits\Status\NoticeType;

/**
 * This is the test case for the NoticeType class
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class NoticeTypeTest extends TestCase
{
    public function testNoticeTypeValues()
    {
        $this->assertEquals(1, NoticeType::INFORMATION);
        $this->assertEquals(2, NoticeType::MAINTENANCE);
        $this->assertEquals(4, NoticeType::ONGOING);
        $this->assertEquals(8, NoticeType::ALERT);
    }
}
