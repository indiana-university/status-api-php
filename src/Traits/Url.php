<?php
declare(strict_types=1);
/**
 * This class contains the url trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents a url in the status api
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait Url
{
    /** @var string A web page that contains additional information */
    private $url;
    
    /**
     * Get the url of this resource
     *
     * @return string A web page that contains additional information
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    
    /**
     * Set the url of this resource
     *
     * @param string $url A web page that contains additional information
     * @return object The instance of this object
     * @throws RuntimeException when the length of url exceeds 256 characters
     */
    public function setUrl(string $url)
    {
        if (strlen($url) > 256) {
            throw new \RuntimeException('Value exceeds field length (256)', 413);
        }
        
        $this->url = $url;
        return $this;
    }
}
