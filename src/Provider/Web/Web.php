<?php
declare(strict_types=1);
/**
 * This file contains the Web provider
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Provider\Web;

use Edu\Iu\Uits\Status\Provider\Interfaces\Provider as ProviderInterface;
use GuzzleHttp\Client;

/**
 * This class fetches responses from the web and returns the decoded responses
 * to the calling class
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class Web implements ProviderInterface
{
    use Traits\Notice;
    use Traits\Notices;
    use Traits\NoticeNotes;
    
    /** @var Client The guzzle http web client */
    private $client;
    
    /**
     * Magic construct function
     *
     * @param string $grantType Grant type, anonymous or password; default: anonymous
     */
    public function __construct()
    {
        $this->client = new Client(
            [
                'base_uri' => 'https://api.status.iu.edu/'
            ]
        );
    }
}
