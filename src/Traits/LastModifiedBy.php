<?php
declare(strict_types=1);
/**
 * This class contains the last modified by trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents the user that last modified the notice
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait LastModifiedBy
{
    /** @var string The user that last modified the notice */
    private $lastModifiedBy;
    
    /**
     * Get the user that last modified the notice
     *
     * @return string The user that last modified the notice
     */
    public function getLastModifiedBy(): string
    {
        return $this->lastModifiedBy;
    }
    
    /**
     * Set the user that last modified the notice
     *
     * @param string $lastModifiedBy The user that last modified the notice
     * @return object The instance of this object
     */
    public function setLastModifiedBy(string $lastModifiedBy)
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }
}
