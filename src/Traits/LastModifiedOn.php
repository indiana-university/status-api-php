<?php
declare(strict_types=1);
/**
 * This class contains the last modified on trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents when the notice was last modified
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait LastModifiedOn
{
    /** @var DateTime When the notice was last modified */
    private $lastModifiedOn;
    
    /**
     * Get when the notice was last modified
     *
     * @return \DateTime When the notice was last modified
     */
    public function getLastModifiedOn(): \DateTime
    {
        return $this->lastModifiedOn;
    }
    
    /**
     * Set when the notice was last modified
     *
     * @param \DateTime $lastModifiedOn When the notice was last modified
     * @return object The instance of this object
     */
    public function setLastModifiedOn(\DateTime $lastModifiedOn)
    {
        $this->lastModifiedOn = $lastModifiedOn;
        return $this;
    }
}
