<?php
declare(strict_types=1);
/**
 * This class contains the Notice factory class
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Factory;

use Edu\Iu\Uits\Status\Notice as NoticeClass;
use Edu\Iu\Uits\Status\NoticeType;

/**
 * This class is the notice factory for the status api
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class Notice
{
    use \Edu\Iu\Uits\Status\Factory\Traits\BuildCampuses;
    use \Edu\Iu\Uits\Status\Factory\Traits\BuildServices;
    
    /**
     * Create function
     * Create an instance of a Notice for a given json input object
     *
     * @param \stdClass $input A json object
     * @return Edu\Iu\Uits\Status\Notice An instance of the Notice class based on the input
     */
    public static function create(\stdClass $input): NoticeClass
    {
        $notice = new NoticeClass();
        $notice
            ->setId($input->id)
            ->setName($input->name)
            ->setNoticeType(self::translateNoticeType($input->noticeType))
            ->setContent($input->content)
            ->setVisibleStart(self::toDate($input->visibleStart))
            ->setCreatedBy($input->createdBy)
            ->setCreatedOn(self::toDate($input->createdOn))
            ->setLastModifiedBy($input->lastModifiedBy)
            ->setLastModifiedOn(self::toDate($input->lastModifiedOn));
        
        if (isset($input->visibleEnd)) {
            $notice->setVisibleEnd(self::toDate($input->visibleEnd));
        }
        
        if (isset($input->changeStart)) {
            $notice->setChangeStart(self::toDate($input->changeStart));
        }
        
        if (isset($input->changeEnd)) {
            $notice->setChangeEnd(self::toDate($input->changeEnd));
        }
        
        if (isset($input->campuses)) {
            $notice->setCampuses(self::buildCampuses($input->campuses));
        }
        
        if (isset($input->services)) {
            $notice->setServices(self::buildServices($input->services));
        }
        
        if (isset($input->publishedOn)) {
            $notice->setPublishedOn(self::toDate($input->publishedOn));
        }
        
        if (isset($input->publishedBy)) {
            $notice->setPublishedBy($input->publishedBy);
        }

        if (isset($input->status)) {
            $notice->setStatus(self::translateNoticeStatus($input->status));
        }
        
        return $notice;
    }
    
    /**
     * Translate notice type
     * This function makes it easier to translate a notice type string to its integer
     *
     * @param string $noticeType The input notice type
     * @return int The matching integer
     */
    private static function translateNoticeType(string $noticeType): int
    {
        $noticeType = strtoupper($noticeType);
        return constant("Edu\Iu\Uits\Status\NoticeType::{$noticeType}");
    }
    
    /**
     * Translate notice status
     * This function makes it easier to translate a notice status string to its integer
     *
     * @param string $noticeStatus The input notice status
     * @return int The matching integer
     */
    private static function translateNoticeStatus(string $noticeStatus): int
    {
        $noticeStatus = strtoupper($noticeStatus);
        return constant("Edu\Iu\Uits\Status\NoticeStatus::{$noticeStatus}");
    }
    
    /**
     * To Date function
     * This function is a slightly shorter way to turn a date string into an object
     *
     * @param string $input The date/time string
     * @return \DateTime A corresponding DateTime object
     */
    private static function toDate(string $input): \DateTime
    {
        return new \DateTime($input);
    }
}
