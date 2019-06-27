<?php
declare(strict_types=1);
/**
 * This class contains the external trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents a external attribute
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait External
{
    /** @var bool Whether this notice note is external. If false, it is internal. */
    private $external;
    
    /**
     * Get the external status
     *
     * @return bool Whether this notice note is external.
     */
    public function getExternal(): bool
    {
        return $this->external;
    }
    
    /**
     * Set the external status
     *
     * @param bool $external Whether this notice note is external.
     * @return object The instance of this object
     */
    public function setExternal(bool $external)
    {
        $this->external = $external;
        return $this;
    }
}
