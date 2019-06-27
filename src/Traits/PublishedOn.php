<?php
declare(strict_types=1);
/**
 * This class contains the published on trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents when the notice was published
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait PublishedOn
{
    /** @var DateTime When the notice was published */
    private $publishedOn;
    
    /**
     * Get when the notice was published
     *
     * @return \DateTime when the notice was published
     */
    public function getPublishedOn(): \DateTime
    {
        return $this->publishedOn;
    }
    
    /**
     * Set when the notice was published
     *
     * @param \DateTime $publishedOn When the notice was published
     * @return object The instance of this object
     */
    public function setPublishedOn(\DateTime $publishedOn)
    {
        $this->publishedOn = $publishedOn;
        return $this;
    }
}
