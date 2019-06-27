<?php
declare(strict_types=1);
/**
 * This class contains the created on trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents when the notice was created
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait CreatedOn
{
    /** @var DateTime When the notice was created */
    private $createdOn;
    
    /**
     * Get when the notice was created
     *
     * @return \DateTime When the notice was created
     */
    public function getCreatedOn(): \DateTime
    {
        return $this->createdOn;
    }
    
    /**
     * Set when the notice was created
     *
     * @param \DateTime $createdOn When the notice was created
     * @return object The instance of this object
     */
    public function setCreatedOn(\DateTime $createdOn)
    {
        $this->createdOn = $createdOn;
        return $this;
    }
}
