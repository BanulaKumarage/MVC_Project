<?php 

    class Application {

        public function __construct()
        {
            $this->_set_reporting();
            $this->_unregister_globals();
        }

        private function _set_reporting()
        {
            if (DEBUG){
                error_reporting(E_ALL);
                ini_set('display_errors',1);
            }else {
                // die('made it');
                error_reporting(0);
                ini_set('display_errors',0);
                ini_set('log errors',1);
                ini_set('error log',ROOT.DS.'temp'.DS.'logs'.DS.'errors.log'); 
            }

        }

        private function _unregister_globals()
        {
              if (ini_get('register_globals')){
                  $globalAry = ['_SESSION','_COOKIE','_POST','_GET','REQUEST','_SERVER','_ENV','_FILES'];
                  foreach ($globalAry as $g) {
                      foreach($GLOBALS[$g] as $key=>$value){
                          if ($GLOBALS[$key] === $value){
                              unset($GLOBALS[$key]);
                          }
                      }
                  }
              }
        }
    }