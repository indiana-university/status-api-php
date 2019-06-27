# Status API
This project aims to provide a simple to use and maintain PHP interface to the
IU status application.

## Requirements
* PHP 7+
* Composer
* Guzzlehttp
  
## Usage
Note: Currently this library is very basic and does NOT support actions which require
authentication. As such the usage _will_ change in the future.

```php
<?php
use Edu\Iu\Uits\Status\Status;
use Edu\Iu\Uits\Status\Provider\Web\Web;

$provider = new Web();
$status = new Status($provider);

/**
 * Get a specific notice
 */
$notice = $status->getNotice(10);

/**
 * Get all active notices
 */
$notices = $status->getNotices();
```
