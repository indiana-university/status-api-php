<?php
declare(strict_types=1);
/**
 * This file contains the NoticeNotes factory class
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Factory;

use Edu\Iu\Uits\Status\NoticeNote as NoteClass;

/**
 * This class is the notice notes factory class for the status api
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
class NoticeNotes
{
    /**
     * Create function
     * This class instantiates a NoticeNote class based on input json
     *
     * @param \stdClass $input A json object input
     * @return \Edu\Iu\Uits\Status\NoticeNote A notice note
     */
    public static function create(\stdClass $input): NoteClass
    {
        $note = new NoteClass();
        $note->setId($input->id);
        $note->setCreatedBy($input->createdBy);
        $note->setCreatedOn(self::toDate($input->createdOn));
        $note->setContent($input->content);
        $note->setExternal($input->external);
        
        return $note;
    }
    
    /**
     * To Date function
     * This function is a slightly shorter way to turn a date string into an object
     *
     * @param string $input The date/time string
     * @return \DateTime A corresponding DateTime object
     */
    private static function toDate(string $input): \DateTime
    {
        return new \DateTime($input);
    }
}
