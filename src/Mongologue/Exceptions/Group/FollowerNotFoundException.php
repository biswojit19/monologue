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
namespace Mongologue\Exceptions\Group;

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
class FollowerNotFoundException extends \Exception
{
	/**
     * Constructor for custom Exception
     * 
     * @param string    $message  Message for the Exception
     * @param integer   $code     Exception Code
     * @param Exception $previous Prevoious exception if any
     */
    public function __construct($message, $code=315, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
?>