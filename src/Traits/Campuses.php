<?php
declare(strict_types=1);
/**
 * This class contains the campuses trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents the campuses affected by the notice
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait Campuses
{
    /** @var array The campuses affected by the notice */
    private $campuses;
    
    /**
     * Get the campuses affected by the notice
     *
     * @return array The campuses affected by the notice
     */
    public function getCampuses(): array
    {
        return $this->campuses;
    }
    
    /**
     * Set the campuses affected by the notice
     *
     * @param array $campuses The campuses affected by the notice
     * @return object The instance of this object
     */
    public function setCampuses(array $campuses)
    {
        $this->campuses = $campuses;
        return $this;
    }
}
