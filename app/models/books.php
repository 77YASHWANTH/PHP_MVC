<?php  

require_once('../../vendor/autoload.php');

use Illuminate\Database\Capsule\Manager as Capsule;


Capsule::schema()->create('books', function($table)
{     
     $table->increments('id');
     $table->string('title', 30);     
    
});
?>