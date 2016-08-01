<?php
/**
 * File Containing the Configuration Class
 *
 * @category Mongologue
 * @package  Core
 * @author   @biswojit19 <biswojit.m@wattabyte.com>
 * @license  none http://github.com/biswojit19/monologue
 * @version  0.1.1
 * @link     http://github.com/biswojit19/mongologue
 */
namespace Mongologue;

/**
 * Class Having the Configuration Constants
 *
 * @category Mongologue
 * @package  Core
 * @author   @biswojit19 <biswojit.m@wattabyte.com>
 * @license  none http://github.com/biswojit19/monologue
 * @version  0.1.1
 * @link     http://github.com/biswojit19/mongologue
 */
class Config
{
    const DB_NAME                 = "twitterMongo";
    const USER_COLLECTION         = "users";
    const POST_COLLECTION         = "posts";
    const GROUP_COLLECTION        = "groups";
    const COMMENTS_COLLECTION     = "comments";
    const CATEGORY_COLLECTION     = "category";
    const INBOX_COLLECTION        = "inbox";
    const PREMADEPOST_COLLECTION  = "premadepost";
    const NOTIFICATION_COLLECTION = "notification";
}
