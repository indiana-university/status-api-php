<?php
declare(strict_types=1);
/**
 * This class contains the change end trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents the end of a maintenance event of a notice
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait ChangeEnd
{
    /** @var DateTime For 'Maintenance' notices only; when the maintenance event ended */
    private $changeEnd;
    
    /**
     * Get when the maintenance event ends
     *
     * @return \DateTime When the maintenance event ends
     */
    public function getChangeEnd(): ?\DateTime
    {
        return $this->changeEnd;
    }
    
    /**
     * Set when the maintenance event ends
     *
     * @param \DateTime $changeEnd When the maintenance event ends
     * @return object The instance of this object
     */
    public function setChangeEnd(\DateTime $changeEnd)
    {
        $this->changeEnd = $changeEnd;
        return $this;
    }
}
