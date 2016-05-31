<a href="index.php">Go back to index</a>
| <a href="<?php echo $_SERVER["REQUEST_URI"];?>">Refresh</a>

<h1>SQLite Databse Check</h1>
<?php
include "./_pdo.php";
$db_file = "./sqlite-database.db";
PDO_Connect("sqlite:$db_file");
//$file_db = new PDO('sqlite:messaging.sqlite3');

//$crete_user_table =  PDO_Execute("CREATE TABLE IF NOT EXISTS users (
  //                  id INTEGER PRIMARY KEY, 
    //                name TEXT, 
      //              email varchar, 
        //            time INTEGER)");
$messages = array(
  array('name' => 'Raihan',
		'email' => 'raihan.reza@pkweb.in',
		'time' => 1327301464),
  array('name' => 'Anis',
		'email' => 'anis.sarkar@pkweb.in',
		'time' => 1339428612),
  array('name' => 'Jana',
		'email' => 'abhijit.jana@pkweb.in',
		'time' => 1327214268)
);	
foreach($messages as $message){
//$insert_values_users = PDO_Execute("INSERT INTO users (name, email, time) VALUES (:name, :email, :time)", array("name"=>$message['name'], "email"=>$message['email'], "time" =>$message['time']));
}

//PDO_FetchAssoc("DELETE  FROM users WHERE email='anis.sarkar@pkweb.in'");
$fruits = PDO_FetchAssoc("SELECT name, email FROM users");

print_r($fruits);
