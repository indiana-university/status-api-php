<?php
declare(strict_types=1);
/**
 * This file contains the NoticeNote class
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status;

/**
 * This class represents a note for a notice
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class NoticeNote
{
    use Traits\Id;
    use Traits\CreatedBy;
    use Traits\CreatedOn;
    use Traits\Content;
    use Traits\External;
}
