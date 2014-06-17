<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * VATSIM Interfacing library, for CERT, Auto-Tools and other VS data services.
 *
 * @package    Kohana/Vatsim
 * @author     Anthony Lawrence <freelancer@anthonylawrence.me.uk>
 * @copyright  (c) 2013
 * @license    http://kohanaframework.org/license
 */
class Vatsim {
	// Vatsim default class
	protected static $defaultInterface = "Autotools";

	/**
	 * Singleton pattern
	 *
	 * @return Vatsim
	 */
	public static function factory($interface=null)
	{
                // Figure out what we're after.
                $class = "Vatsim_" . (($interface == null) ? Vatsim::$defaultInterface : ucfirst(strtolower($interface)));
            
                // Load the configuration file
                $config = Kohana::$config->load(strtolower(str_replace("Vatsim_", "", $class)));

                // Create a new instance of whatever we're after
                $vatsim = new $class($config);

		return $vatsim;
	}

	protected $_config;

	/**
	 * Loads Session and configuration options.
	 *
	 * @param   array  $config  Config Options
	 * @return  void
	 */
	public function __construct($config = array())
	{
		// Save the config in the object
		$this->_config = $config;
	}
        
        public function getConfig($key){
            return $this->_config->get($key);
        }

} // End Vatsim
