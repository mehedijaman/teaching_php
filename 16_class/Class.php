<?php 
    class PracticeClass{
        public static $name;
        private $birthday;
        protected $prop3;
        public $class_name;       

        // private function __construct(){}
        // private function __wakeup(){}

        public function __destruct()
        {
            print self::$name;
        }
        

        public static function callName($input){
            self::$name = $input;
        }

        public function setter($input){
            $this->birthday = $input;
        }

        public function getter(){
            return $this->birthday;
        }

        public function getClassName(){
            if(isset($this)){
                $this->class_name = get_class($this); 
            }
        }
    }

    $object = new PracticeClass('Hello World');
    // $object->callName("Hello World");
    // PracticeClass::callName("Hello World");
    // echo PracticeClass::$name;

    // $object->getClassName();

    // echo $object->class_name.PHP_EOL;

    // $object->setter('1995-05-01');

    // echo $object->getter();

?>