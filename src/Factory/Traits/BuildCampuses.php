<?php
declare(strict_types=1);
/**
 * This class contains the build campuses trait
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Factory\Traits;

use Edu\Iu\Uits\Status\Factory\Campus as CampusFactory;

/**
 * This trait contains a function to build an array of campus objects
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait BuildCampuses
{
    /**
     * Iterate over a collection of campuses to build an array of campus objects
     *
     * @param array $input A collection of campuses from the status rest api
     * @return array An array of campus objects
     */
    private static function buildCampuses(array $input): array
    {
        $campuses = [];
        
        foreach ($input as $campus) {
            $campuses[] = CampusFactory::create($campus);
        }
        
        return $campuses;
    }
}
