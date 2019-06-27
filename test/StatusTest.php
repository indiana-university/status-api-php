<?php
declare(strict_types=1);

/**
 * This file contains the tests for the main Status class
 * @copyright 2019 The Truestees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Tests;

use PHPUnit\Framework\TestCase;
use Edu\Iu\Uits\Status\Status;
use Edu\Iu\Uits\Status\Provider\Filesystem\Filesystem;

/**
 * This is the test case for the Status class
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class StatusTest extends TestCase
{

    public function testGetNotice()
    {
        $provider = new Filesystem(__dir__ . '/data/');
        $status = new Status($provider);
        $notice = $status->getNotice(1);
        $this->assertEquals(1, $notice->getId());
        $this->assertEquals(
            'Difficulties downloading content from IUware',
            $notice->getName()
        );
        $this->assertEquals(
            'Some users are having trouble downloading content from IUware. Administrators are investigating',
            $notice->getContent()
        );
        $this->assertEquals(
            new \DateTime('2015-05-20 00:00:00.00000'),
            $notice->getVisibleStart()
        );
        $this->assertEquals(
            new \DateTime('2015-05-21 00:00:00.000000'),
            $notice->getVisibleEnd()
        );
        $this->assertNull($notice->getChangeStart());
        $this->assertNull($notice->getChangeEnd());
        $this->assertEquals(2, count($notice->getCampuses()));
        $this->assertEquals(1, count($notice->getServices()));
        $this->assertEquals(
            new \DateTime('2015-05-20 00:00:00.000000'),
            $notice->getPublishedOn()
        );
        $this->assertEquals('jhoerr', $notice->getCreatedBy());
        $this->assertEquals(
            new \DateTime('2015-05-20 00:00:00.000000'),
            $notice->getCreatedOn()
        );
        $this->assertEquals('jhoerr', $notice->getPublishedBy());
        $this->assertEquals('jhoerr', $notice->getLastModifiedBy());
        $this->assertEquals(
            new \DateTime('2015-05-21 00:00:00.000000'),
            $notice->getLastModifiedOn()
        );
        $this->assertEquals(1, $notice->getStatus());
    }
    
    public function testGetNotices()
    {
        $provider = new Filesystem(__dir__ . '/data/');
        $status = new Status($provider);
        $notices = $status->getNotices();
        $this->assertEquals(2, count($notices));
    }
}
