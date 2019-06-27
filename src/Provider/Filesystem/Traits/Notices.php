<?php
declare(strict_types=1);
/**
 * This file contains the Notices trait for the filesystem data provider
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Provider\Filesystem\Traits;

/**
 * This trait returns a predefined notices array
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait Notices
{
    
    /**
     * Get all currently active notices
     *
     * @return array An array of notices
     */
    public function getNotices(): array
    {
        return json_decode(
            file_get_contents("{$this->basePath}/Notices-Get.json")
        );
    }
}
