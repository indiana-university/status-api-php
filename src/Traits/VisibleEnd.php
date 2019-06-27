<?php
declare(strict_types=1);
/**
 * This class contains the visible end trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents the visible end of a notice
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait VisibleEnd
{
    /** @var \DateTime When the notice should stop being presented to end-users */
    private $visibleEnd;
    
    /**
     * Get when the notice should stop being presented to end-users
     *
     * @return \DateTime When the notice should stop being presented to end-users
     */
    public function getVisibleEnd(): \DateTime
    {
        return $this->visibleEnd;
    }
    
    /**
     * Set when the notice should stop being presented to end-users
     *
     * @param \DateTime $visibleEnd When the notice should stop being presented to end-users
     * @return object The instance of this object
     */
    public function setVisibleEnd(\DateTime $visibleEnd)
    {
        $this->visibleEnd = $visibleEnd;
        return $this;
    }
}
