<?php
declare(strict_types=1);
/**
 * This class contains the Campus factory class
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Factory;

use Edu\Iu\Uits\Status\Campus as CampusClass;

/**
 * This class is the campus factory for the status api
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class Campus
{
    /**
     * Create class
     * Create a Campus object based on the given json object
     *
     * @param \stdClass $input The input json object
     * @return \Edu\Iu\Uits\Status\Campus An instance of Campus based off of input
     */
    public static function create(\stdClass $input): CampusClass
    {
        $campus = new CampusClass();
        
        if (isset($input->id)) {
            $campus->setId($input->id);
        }
        
        if (isset($input->name)) {
            $campus->setName($input->name);
        }
        
        if (isset($input->abbreviation)) {
            $campus->setAbbreviation($input->abbreviation);
        }
        
        return $campus;
    }
}
