<?php
declare(strict_types=1);
/**
 * This class contains the content trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents the description of the event covered by the notice
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait Content
{
    /** @var string A description of the event covered by the notice */
    private $content;
    
    /**
     * Get the description of the event covered by the notice
     *
     * @return string The description of the event covered by the notice
     */
    public function getContent(): string
    {
        return $this->content;
    }
    
    /**
     * Set the description of the event covered by the notice
     *
     * @param string $content The description of the event covered by the notice
     * @return object The instance of this object
     */
    public function setContent(string $content)
    {
        $this->content = $content;
        return $this;
    }
}
