<?php
declare(strict_types=1);
/**
 * This file contains the Notice trait for the filesystem data provider
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Provider\Filesystem\Traits;

/**
 * This trait returns a predefined notice object
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait Notice
{
    /**
     * Get a specified notice (always the same regardless of input)
     *
     * @param int $id This param is here to match the interface, but does nothing
     * @return \stdClass A decoded json object
     */
    public function getNotice(int $id)
    {
        return json_decode(
            file_get_contents("{$this->basePath}/Notice-Get-{$id}.json")
        );
    }
}
