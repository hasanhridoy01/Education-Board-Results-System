## Education Board Results System Project

This is a learning purpose project for Students results calculation. we use some progamming language here.

#### Language list

- HTML 5
- CSS 3
- javaScript
- jQuery
- PHP
- MYSQL
- AJAX
- BootStrap
- OOP
- PDO

####Database class Design

```php
require_once "../../config.php";

namespace Edu\Board\Support;
use PDO;

/**
* Database Managements System
*/
abstract class Database
{
	
/**
* Server Information Property
*/
  private $host = HOST;
  private $user = USER;
  private $pass = PASS;
  private $db = DB;

  private $connection;
  
  /**
   * Database managements Method
   */
  private function connection()
  {
  	
    $this -> connection = new PDO("mysql:host=". $this -> host .";dbname=".$this -> user,$this -> pass,$this -> db);

  }
 
}

```
