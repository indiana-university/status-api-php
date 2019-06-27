<?php
declare(strict_types=1);
/**
 * This class contains the description trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents a description
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait Description
{
    /** @var string A description of the item */
    private $description;
    
    /**
     * Get the description of the item
     *
     * @return string description of the item
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    
    /**
     * Set the description of the item
     *
     * @param string $description The description of the item
     * @return object The instance of this object
     * @throws RuntimeException when the length of description exceeds 1024 characters
     */
    public function setDescription(string $description)
    {
        if (strlen($description) > 1024) {
            throw new \RuntimeException('Value exceeds field length (1024)', 413);
        }
        
        $this->description = $description;
        return $this;
    }
}
