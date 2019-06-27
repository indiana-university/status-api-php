<?php
declare(strict_types=1);
/**
 * This class contains the published by trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents the user that published the notice
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait PublishedBy
{
    /** @var string The user that published the notice */
    private $publishedBy;
    
    /**
     * Get the user that published the notice
     *
     * @return string The user that published the notice
     */
    public function getPublishedBy(): string
    {
        return $this->publishedBy;
    }
    
    /**
     * Set the user that published the notice
     *
     * @param string $publishedBy The user that published the notice
     * @return object The instance of this object
     */
    public function setPublishedBy(string $publishedBy)
    {
        $this->publishedBy = $publishedBy;
        return $this;
    }
}
