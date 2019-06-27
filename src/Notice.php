<?php
declare(strict_types=1);
/**
 * This file contains the Notice class
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status;

/**
 * This class represents a notice in the status application
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class Notice
{
    use Traits\Id;
    use Traits\Name;
    use Traits\NoticeType;
    use Traits\Content;
    use Traits\VisibleStart;
    use Traits\VisibleEnd;
    use Traits\ChangeStart;
    use Traits\ChangeEnd;
    use Traits\Campuses;
    use Traits\Services;
    use Traits\PublishedOn;
    use Traits\CreatedBy;
    use Traits\CreatedOn;
    use Traits\PublishedBy;
    use Traits\LastModifiedBy;
    use Traits\LastModifiedOn;
    use Traits\Status;
}
