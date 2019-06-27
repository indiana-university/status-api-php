<?php
declare(strict_types=1);
/**
 * This class contains the Service factory class
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Factory;

use Edu\Iu\Uits\Status\Service as ServiceClass;
use Edu\Iu\Uits\Status\Factory\ServiceGroup as ServiceGroupFactory;

/**
 * This class is the Service class factory for the status api
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class Service
{
    use \Edu\Iu\Uits\Status\Factory\Traits\BuildCampuses;
    use \Edu\Iu\Uits\Status\Factory\Traits\BuildServices;
    
    /**
     * Create function
     * This function takes a given json object and creates a Service object based on it
     *
     * @param \stdClass $input The given json object
     * @return \Edu\Iu\Uits\Status\Service The corresponding Service object
     */
    public static function create(\stdClass $input): ServiceClass
    {
        $service = new ServiceClass();
        $service->setId($input->id)
            ->setName($input->name)
            ->setUrl($input->url)
            ->setDescription($input->description);
        
        if (isset($input->serviceGroup)) {
            $service->setServiceGroup(
                ServiceGroupFactory::create($input->serviceGroup)
            );
        }
        
        if (isset($input->reportStatus)) {
            $service->setReportStatus($input->reportStatus);
        }
        
        if (isset($input->campuses)) {
            $service->setCampuses(self::buildCampuses($input->campuses));
        }
        
        return $service;
    }
}
