<!-- <?php  
    
    require_once('../vendor/autoload.php'); 
   
    use Illuminate\Database\Capsule\Manager as Capsule;

    class database{ 


        public function __construct($db=""){  
            
            $capsule = new Capsule();

            $capsule->addConnection([
                'driver' => 'mysql',
                'host' => '127.0.0.1',
                'database' => $db, 
                'username' => 'root',
                'password' => 'root', 
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'   => '',
    
                
            ]);   

            $capsule -> setAsGlobal();
        
            $capsule -> bootEloquent(); 
        
                
        } 

        public function __destruct(){
        
        }
           



    }

    
    
?>  -->









