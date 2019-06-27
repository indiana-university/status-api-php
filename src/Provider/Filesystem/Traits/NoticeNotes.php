<?php
declare(strict_types=1);
/**
 * This file contains the NoticeNotes trait for the filesystem data provider
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Provider\Filesystem\Traits;

/**
 * This trait returns a predefined noticenotes object
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait NoticeNotes
{
    /**
     * Get notes for specified notice (always the same regardless of input)
     *
     * @param int $id This param is here to match the interface, but does nothing
     * @return \stdClass A decoded json object
     */
    public function getNoticeNotes(int $id)
    {
        return json_decode(
            file_get_contents("{$this->basePath}/NoticeNotes-Get.json")
        );
    }
}
