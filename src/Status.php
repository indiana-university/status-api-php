<?php
declare(strict_types=1);
/**
 * This file contains the Status class
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status;

use Edu\Iu\Uits\Status\Notice;
use Edu\Iu\Uits\Status\Provider\Interfaces\Provider;
use Edu\Iu\Uits\Status\Factory\Notice as NoticeFactory;
use Edu\Iu\Uits\Status\Factory\NoticeNotes as NoticeNotesFactory;

/**
 * This is the main status api class
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class Status
{
    /** @var Provider The provider to use for data */
    private $provider;
    
    /**
     * Magic construct function
     *
     * @param Provider $provider The data provider to use to fetch data
     */
    public function __construct(Provider $provider)
    {
        $this->provider = $provider;
    }
    
    /**
     * Get notices function
     * This gets all notices available from the given provider
     *
     * @return array An array of notices
     */
    public function getNotices(): array
    {
        $return = [];
        foreach ($this->provider->getNotices() as $notice) {
            $return[] = NoticeFactory::create($notice);
        }
        
        return $return;
    }
    
    /**
     * Get notice function
     * Get a specified notice from the given provider
     *
     * @param int $id Id of the notice to get
     * @return Notice An instance of Notice which represents the specified notice
     */
    public function getNotice(int $id): Notice
    {
        $noticeJSON = $this->provider->getNotice($id);
        return(NoticeFactory::create($noticeJSON));
    }
    
    /**
     * Get notice notes function
     * Get any notes for a notice from the given provider
     *
     * @param int $id Id of the notice to get
     * @return array An array of notice notes
     */
    public function getNoticeNotes(int $id): array
    {
        $return = [];
        foreach ($this->provider->getNoticeNotes($id) as $note) {
            $return[] = NoticeNotesFactory::create($note);
        }
        
        return $return;
    }
}
