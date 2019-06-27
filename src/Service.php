<?php
declare(strict_types=1);
/**
 * This file contains the Service class for the Status api
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status;

/**
 * This class represents a service in the status application
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class Service
{
    use Traits\Id;
    use Traits\Name;
    use Traits\Url;
    use Traits\ServiceGroup;
    use Traits\Description;
    use Traits\ReportStatus;
    use Traits\Campuses;
}
