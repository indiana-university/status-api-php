<?php
declare(strict_types=1);
/**
 * This file contains the NoticeType class
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status;

/**
 * This class represents all possible values of the type of a notice
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class NoticeType
{
    const INFORMATION = 1;
    const MAINTENANCE = 2;
    const ONGOING = 4;
    const ALERT = 8;
}
