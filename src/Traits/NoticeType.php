<?php
declare(strict_types=1);
/**
 * This class contains the notice type trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents a notice type
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait NoticeType
{
    /** @var NoticeType The nature of the notice */
    private $noticeType;
    
    /**
     * Get the nature of the notice
     *
     * @return int The nature of the notice
     */
    public function getNoticeType(): int
    {
        return $this->noticeType;
    }
    
    /**
     * Set the nature of the notice
     *
     * @param int $noticeType The nature of the notice
     * @return object The instance of this object
     */
    public function setNoticeType(int $noticeType)
    {
        $this->noticeType = $noticeType;
        return $this;
    }
}
