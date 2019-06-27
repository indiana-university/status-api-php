<?php
declare(strict_types=1);
/**
 * This class contains the description trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents an abbreviation
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait Abbreviation
{
    /** @var The abbreviation of this item */
    private $abbreviation;
    
    /**
     * Get the abbreviation of this campus
     *
     * @return string The abbreviation of this item
     */
    public function getAbbreviation(): string
    {
        return $this->abbreviation;
    }
    
    /**
     * Set the abbreviation of this campus
     *
     * @param string $abbreviation The abbreviation of this campus
     * @return object The instance of this object
     * @throws RuntimeException when the length of the input exceeds 256 characters
     */
    public function setAbbreviation(string $abbreviation)
    {
        if (strlen($abbreviation) > 256) {
            throw new \RuntimeException('Value exceeds field length (256)', 413);
        }
        
        $this->abbreviation = $abbreviation;
        return $this;
    }
}
