<?php
/**
 * File containing the Category Model Class
 *
 * @category Mongologue
 * @package  Models
 * author   @biswojit19 <biswojit.m@wattabyte.com>
 * @author   @biswojit19 <biswojit.m@wattabyte.com>
 * @license  none http://github.com/biswojit19/monologue
 * @link     http://github.com/biswojit19/mongologue
 */
namespace Mongologue\Models;

use \Mongologue\Interfaces\Model;
use \Mongologue\Exceptions\Category as Exceptions;
use \Mongologue\Exception;

/**
 * File containing the Category Model Class
 *
 * @category Mongologue
 * @package  Models
 * author   @biswojit19 <biswojit.m@wattabyte.com>
 * @author   @biswojit19 <biswojit.m@wattabyte.com>
 * @license  none http://github.com/biswojit19/monologue
 * @link     http://github.com/biswojit19/mongologue
 */
class Category extends Model
{
    protected $id;
    protected $name;

    private $_necessaryAttributes = array("name");

    /**
     * Constructor of the Class
     * 
     * @param array $category Category Data
     */
    public function __construct($category)
    {
        parent::__construct($category);
    }

    /**
     * Set an Id to the Category
     * 
     * @param string $id Id to be set
     *
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the necessary Attributes of Model
     * 
     * @return array necessary attributes
     */
    public function necessaryAttributes()
    {
        return $this->_necessaryAttributes;
    }
}