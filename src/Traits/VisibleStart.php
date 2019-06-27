<?php
declare(strict_types=1);
/**
 * This class contains the visible start trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents the visible start of a notice
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait VisibleStart
{
    /** @var \DateTime When the notice should start being presented to end-users */
    private $visibleStart;
    
    /**
     * Get when the notice should start being presented to end-users
     *
     * @return \DateTime When the notice should start being presented to end-users
     */
    public function getVisibleStart(): \DateTime
    {
        return $this->visibleStart;
    }
    
    /**
     * Set when the notice should start being presented to end-users
     *
     * @param \DateTime $visibleStart When the notice should start being presented to end-users
     * @return object The instance of this object
     */
    public function setVisibleStart(\DateTime $visibleStart)
    {
        $this->visibleStart = $visibleStart;
        return $this;
    }
}
