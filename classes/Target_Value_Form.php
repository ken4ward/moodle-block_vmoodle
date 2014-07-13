<?php

require_once($CFG->libdir.'/formslib.php');

namespace block_vmoodle;

/**
 * Define forms to get platforms by original value.
 * 
 * @package block-vmoodle
 * @category blocks
 * @author Bruce Bujon (bruce.bujon@gmail.com)
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL
 */
// TODO Comming.
class Target_Value_Form extends moodleform {

    /**
     * Constructor.
     */
    function __construct() {
        parent::__construct('view.php?view=sadmin&what=gettargetbyvalue');
    }
    
    /**
     * Describes form.
     */
    public function definition() {
        // Setting variables
        $mform = &$this->_form;
        
        
    }
    
}