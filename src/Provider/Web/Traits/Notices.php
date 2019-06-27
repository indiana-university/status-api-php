<?php
declare(strict_types=1);
/**
 * This file contains the Notices trait for the web data provider
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Provider\Web\Traits;

/**
 * This trait contains the getNotices function
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait Notices
{
    /**
     * Get all currently active alerts from the status web api
     *
     * @return array An array of notices
     */
    public function getNotices()
    {
        $response = $this->client->request('GET', '/Notices/');
        return json_decode((string)$response->getBody());
    }
}
