<?php

/**
 * fallback redux class
 */
if (!class_exists('Redux') && !class_exists('ReduxFramework')) {

    $opt_prefix = 'childit_';
    $opt_title_prefix = "Childit";
    $opt_domain = 'childit';

    // This is your option name where all the Redux data is stored.
    $opt_name = $opt_prefix . "options";
    global $opt_name;

    class Redux {

        public static $hasOptions = false;

        public static function setArgs($option, $args) {
            $options = get_option($option, false);
            if (!empty($options)) {
                self::$hasOptions = true;
            }
        }

        public static function setSection($option, $args) {
            if (isset($args['fields']) && !empty($args['fields']) && !self::$hasOptions) {
                foreach ($args['fields'] as $field) {
                    if (isset($field['default']) && isset($field['id'])) {
                        $id = $field['id'];
                        $updateArr = get_option($option, array());
                        if (is_array($field['default'])) {
                            foreach ($field['default'] as $key => $val) {
                                $updateArr[$id][$key] = $val;
                            }
                            update_option($option, $updateArr);
                        } else {
                            $updateArr[$id] = $field['default'];
                            update_option($option, $updateArr);
                        }
                    }
                }
            }
        }
    }
}

class ChilditReduxFallback{

    protected static $instance;

	public function __construct() {
        add_action('init', [ $this,'redux_fallback_init_var' ], 1);
	}

	public static function get_instance() {
		if (null === self::$instance) {
			self::$instance = new self();
		}
		
		return self::$instance;
    }
    
    function redux_fallback_init_var() {
        global $opt_name;
        if (!is_admin() && !isset($opt_name)) {
            $opt_name = get_option($opt_name);
            if(is_array($opt_name)){
            foreach ($opt_name as $yskey => $ysvalue) {
                if ($ysvalue == 'on') {
                    $opt_name[$yskey] = true;
                } elseif ($ysvalue == 'off') {
                    $opt_name[$yskey] = false;
                }
            }
            }
            
        }
    }
    
}
new ChilditReduxFallback();