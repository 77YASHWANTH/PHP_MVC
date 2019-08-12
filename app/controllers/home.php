<?php  

   

    class home extends controller { 

        // protected $user; 

        // public function __construct(){
        //     $this->user = $this->model('User');
        // }

        public function index($name=''){
           
        
            // $user->name = $name; 
            
            $this->view('home/index',[]);
        }


        // public function test(){
        //     echo 'php';
        // } 

        public function create($regNo='',$name=''){ 
           
         
            $c = new database('mvc');
         
            User::insert([
                'regNo' => $regNo,
                'name' => $name,
               // 'email' => $email,
            ]); 
        }

        public function find($No=''){ 
            $this->user = $this->model('User');
            $user = $this->user;
            $users = User::table('users')->all(); 
            $this->view('home/index',$users);

        }

        
    }

?> 
