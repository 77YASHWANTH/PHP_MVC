<?php 

    class login extends controller {

        public function index($name=''){
            

            $this->view('login/login',['name' => "YUVAN","no"=>"10"]);
        }


    
        
    }

?>
