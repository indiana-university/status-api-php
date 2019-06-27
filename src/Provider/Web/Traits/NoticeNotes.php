<?php
declare(strict_types=1);
/**
 * This file contains the NoticeNotes trait for the web data provider
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Provider\Web\Traits;

/**
 * This trait contains the getNoticeNotes function
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait NoticeNotes
{
    /**
     * Get a specified notice notes from the status web api
     *
     * @param int $id The notice id to fetch notes for
     * @return \stdClass A decoded json response from the web api
     */
    public function getNoticeNotes(int $id)
    {
        $response = $this->client->request('GET', '/Notices/' . $id . '/Notes');
        return json_decode((string)$response->getBody());
    }
}
