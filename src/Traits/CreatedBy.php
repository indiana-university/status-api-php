<?php
declare(strict_types=1);
/**
 * This class contains the created by trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents the user that created the notice
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait CreatedBy
{
    /** @var string The user that created the notice */
    private $createdBy;
    
    /**
     * Get the user that created the notice
     *
     * @return string The user that created the notice
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
    
    /**
     * Set the user that created the notice
     *
     * @param string $createdBy The user that created the notice
     * @return object The instance of this object
     */
    public function setCreatedBy(string $createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }
}
