<?php
declare(strict_types=1);

/**
 * This file contains the NoticeNotes factory class tests
 * @copyright 2019 The Truestees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Tests;

use PHPUnit\Framework\TestCase;
use Edu\Iu\Uits\Status\Status;
use Edu\Iu\Uits\Status\Provider\Filesystem\Filesystem;

/**
 * This is the NoticeNotes factory class test
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class NoticeNotes extends TestCase
{
    public function testGetNotes()
    {
        $provider = new Filesystem(__dir__ . '/data/');
        $status = new Status($provider);
        $noticeNotes = $status->getNoticeNotes(1);
        
        $this->assertEquals(2, count($noticeNotes));
    }
}
