<?php
declare(strict_types=1);
/**
 * This class contains the services trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

/**
 * This trait represents the service(s) that are directly responsible for the
 * posting of this notice
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait Services
{
    /** @var array The service(s) that are directly responsible for the posting of this notice */
    private $services;
    
    /**
     * Get the service(s) that are directly responsible for the posting of this notice
     *
     * @return array The service(s) that are directly responsible for the posting of this notice
     */
    public function getServices(): array
    {
        return $this->services;
    }
    
    /**
     * Set the service(s) that are directly responsible for the posting of this notice
     *
     * @param array $services The service(s) that are directly responsible for the posting of this notice
     * @return object The instance of this object
     */
    public function setServices(array $services)
    {
        $this->services = $services;
        return $this;
    }
}
