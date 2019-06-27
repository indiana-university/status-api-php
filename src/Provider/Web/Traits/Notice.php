<?php
declare(strict_types=1);
/**
 * This file contains the Notice trait for the web data provider
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Provider\Web\Traits;

/**
 * This trait contains the getNotice function
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
trait Notice
{
    /**
     * Get a specified notice from the status web api
     *
     * @param int $id The notice id to fetch
     * @return \stdClass A decoded json response from the web api
     */
    public function getNotice(int $id)
    {
        $response = $this->client->request('GET', '/Notices/' . $id);
        return json_decode((string)$response->getBody());
    }
}
