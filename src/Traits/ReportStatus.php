<?php
declare(strict_types=1);
/**
 * This class contains the report status trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents a report status
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait ReportStatus
{
    /** @var bool Whether this service should be included in status reporting. */
    private $reportStatus;
    
    /**
     * Get the report status
     *
     * @return bool Whether this service should be included in status reporting.
     */
    public function getReportStatus(): bool
    {
        return $this->reportStatus;
    }
    
    /**
     * Set the report status
     *
     * @param bool $reportStatus Whether this service should be included in status reporting.
     * @return object The instance of this object
     */
    public function setReportStatus(bool $reportStatus)
    {
        $this->reportStatus = $reportStatus;
        return $this;
    }
}
