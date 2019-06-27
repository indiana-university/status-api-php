<?php
declare(strict_types=1);
/**
 * This file contains the filesystem provider class
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Provider\Filesystem;

use Edu\Iu\Uits\Status\Provider\Interfaces\Provider as ProviderInterface;

/**
 * This class fetches responses from files on disk and returns the decoded
 * response to the calling class
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class Filesystem implements ProviderInterface
{
    use Traits\Notices;
    use Traits\Notice;
    use Traits\NoticeNotes;
    
    /** @var string The base path for the response files */
    private $basePath;
    
    /**
     * Magic construct function
     *
     * @param string $basePath The base of the data files
     */
    public function __construct(string $basePath)
    {
        $this->basePath = $basePath;
    }
}
