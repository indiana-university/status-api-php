<?php
declare(strict_types=1);
/**
 * This class contains the ServiceGroup factory class
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Factory;

use Edu\Iu\Uits\Status\ServiceGroup as ServiceGroupClass;

/**
 * This class is the service group factory class for the status api
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class ServiceGroup
{
    /**
     * Create function
     * This function creates a service group class based on the given json object input
     *
     * @param \stdClass $input The json object
     * @return \Edu\Iu\Uits\Status\ServiceGroup The corresponding service group class
     */
    public static function create(\stdClass $input): ServiceGroupClass
    {
        $serviceGroup = new ServiceGroupClass();
        $serviceGroup->setId($input->id)
            ->setName($input->name)
            ->setDescription($input->description);
            
        return $serviceGroup;
    }
}
