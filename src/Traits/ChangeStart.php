<?php
declare(strict_types=1);
/**
 * This class contains the change start trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents the start of a maintenance event of a notice
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait ChangeStart
{
    /** @var DateTime For 'Maintenance' notices only; when the maintenance event started */
    private $changeStart;
    
    /**
     * Get when the maintenance event starts
     *
     * @return \DateTime When the maintenance event starts
     */
    public function getChangeStart(): ?\DateTime
    {
        return $this->changeStart;
    }
    
    /**
     * Set when the maintenance event starts
     *
     * @param \DateTime $changeStart When the maintenance event starts
     * @return object The instance of this object
     */
    public function setChangeStart(\DateTime $changeStart)
    {
        $this->changeStart = $changeStart;
        return $this;
    }
}
