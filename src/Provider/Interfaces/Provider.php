<?php
declare(strict_types=1);
/**
 * This file contains the Provider interface
 * @copyright 2019 The Trustees of Indiana University
 * @license BSD-3-Clause
 */
namespace Edu\Iu\Uits\Status\Provider\Interfaces;

/**
 * This is the provider interface
 *
 * @author Anthony Vitacco <avitacco@iu.edu>
 */
interface Provider
{
    public function getNotices();
    public function getNotice(int $id);
    public function getNoticeNotes(int $id);
}
