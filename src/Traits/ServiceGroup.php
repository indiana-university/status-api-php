<?php
declare(strict_types=1);
/**
 * This class contains the ServiceGroup trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Traits;

use Edu\Iu\Uits\Status\ServiceGroup as ServiceGroupClass;

/**
 * This trait represents a service group
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait ServiceGroup
{
    /** @var ServiceGroupClass The Service Group to which this Service belongs */
    private $serviceGroup;
    
    /**
     * Get the Service Group to which this Service belongs
     *
     * @return ServiceGroupClass The Service Group to which this Service belongs
     */
    public function getServiceGroup(): ServiceGroupClass
    {
        return $this->serviceGroup;
    }
    
    /**
     * Set the Service Group to which this Service belongs
     *
     * @param ServiceGroupClass $serviceGroup The Service Group to which this Service belongs
     * @return object The instance of this object
     */
    public function setServiceGroup(ServiceGroupClass $serviceGroup)
    {
        $this->serviceGroup = $serviceGroup;
        return $this;
    }
}
