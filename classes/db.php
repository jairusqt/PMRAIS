<?php   
 class db{  
      public $con;  
      public function __construct()  
      {  
           $this->con = mysqli_connect("localhost", "root", "", "metal_tool");  
           if(!$this->con)  
           {  
                echo 'Database Connection Error ' . mysqli_connect_error($this->con);  
           }  
      }  
      public function insert($table_name, $data)  
      {  
           $string = "INSERT INTO ".$table_name." (";            
           $string .= implode(",", array_keys($data)) . ') VALUES (';            
           $string .= "'" . implode("','", array_values($data)) . "')";  
           if(mysqli_query($this->con, $string))  
           {  
                return true;  
           }  
           else  
           {  
                echo mysqli_error($this->con);  
           }  
      }  
      public function select($table_name)  
      {  
           $array = array();  
           $query = "SELECT * FROM ".$table_name."";  
           $result = mysqli_query($this->con, $query);  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
      }
      public function selectId($table_name, $column_name, $id){
          $array = array();
          $query = "SELECT * FROM ".$table_name." where ".$column_name." = ".$id." ";
          $result = mysqli_query($this->con,$query);
          while($row = mysqli_fetch_Assoc($result)){
               $array[] = $row;
          }
          return $array;
      }
       
 }  
 ?>  