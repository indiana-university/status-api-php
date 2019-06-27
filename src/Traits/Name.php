<?php
declare(strict_types=1);
/**
 * This class contains the name trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents a notice name
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait Name
{
    /** @var string The unique name of this resource */
    private $name;
    
    /**
     * Get the unique name of this resource
     *
     * @return string The unique name of this resource
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * Set the unique name of this resource
     *
     * @param string $name The unique name of this resource
     * @return object The instance of this object
     * @throws RuntimeException when the length of name exceeds 256 characters
     */
    public function setName(string $name)
    {
        if (strlen($name) > 256) {
            throw new \RuntimeException('Value exceeds field length (256)', 413);
        }
        
        $this->name = $name;
        return $this;
    }
}
