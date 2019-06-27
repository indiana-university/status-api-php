<?php
declare(strict_types=1);
/**
 * This file contains the campus class
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status;

/**
 * This class represents a campus in the Status application
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class Campus
{
    use Traits\Id;
    use Traits\Name;
    use Traits\Abbreviation;
}
