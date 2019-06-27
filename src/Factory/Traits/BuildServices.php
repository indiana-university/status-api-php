<?php
declare(strict_types=1);
/**
 * This class contains the build services trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Factory\Traits;

use Edu\Iu\Uits\Status\Factory\Service as ServiceFactory;

/**
 * This trait contains a function to build an array of service objects
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait BuildServices
{
    /**
     * Iterate over a collection of services to build an array of service
     * objects
     *
     * @param array $input A collection of services from the status rest api
     * @return array An array of service objects
     */
    private static function buildServices(array $input): array
    {
        $services = [];
        
        foreach ($input as $service) {
            $services[] = ServiceFactory::create($service);
        }
        
        return $services;
    }
}
