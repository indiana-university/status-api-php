<?php
declare(strict_types=1);
/**
 * This class contains the status trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents whether this notice is 'Published' or in 'Draft'
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait Status
{
    /** @var int Whether this notice is 'Published' or in 'Draft' */
    private $status;
    
    /**
     * Get whether this notice is 'Published' or in 'Draft'
     *
     * @return int Whether this notice is 'Published' or in 'Draft'
     */
    public function getStatus(): int
    {
        return $this->status;
    }
    
    /**
     * Set whether this notice is 'Published' or in 'Draft'
     *
     * @param int $status Whether this notice is 'Published' or in 'Draft'
     * @return object The instance of this object
     */
    public function setStatus(int $status)
    {
        $this->status = $status;
        return $this;
    }
}
