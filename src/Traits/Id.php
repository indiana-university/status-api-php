<?php
declare(strict_types=1);
/**
 * This class contains the id trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents a notice id
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait Id
{
    /** @var int The unqiue identifier of this resource */
    private $id;
    
    /**
     * Get the unique identifier of this resource
     *
     * @return int The unique identifier of this resource
     */
    public function getId(): int
    {
        return $this->id;
    }
    
    /**
     * Set the unique identifier of this resource
     *
     * @param int $id The unique identifier of this resource
     * @return object The instance of this object
     */
    public function setId(int $id)
    {
        $this->id = $id;
        return $this;
    }
}
