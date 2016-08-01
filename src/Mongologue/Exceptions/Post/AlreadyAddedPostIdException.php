<?php
/**
 * File Containing Exception for Posts duplicate
 *
 * @category Mongologue
 * @package  Exceptions
 * @author   @biswojit19 <biswojit.m@wattabyte.com>
 * author   @biswojit19 <biswojit.m@wattabyte.com>
 * @license  none http://github.com/biswojit19/monologue
 * @link     http://github.com/biswojit19/mongologue
 */
namespace Mongologue\Exceptions\Post;

/**
 * Exception for Posts duplicate
 *
 * @category Mongologue
 * @package  Exceptions
 * @author   @biswojit19 <biswojit.m@wattabyte.com>
 * author   @biswojit19 <biswojit.m@wattabyte.com>
 * @license  none http://github.com/biswojit19/monologue
 * @link     http://github.com/biswojit19/mongologue
 */
class AlreadyAddedPostIdException extends \Exception
{
	/**
     * Constructor for custom Exception
     * 
     * @param string    $message  Message for the Exception
     * @param integer   $code     Exception Code
     * @param Exception $previous Prevoious exception if any
     */
    public function __construct($message, $code=317, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
?>