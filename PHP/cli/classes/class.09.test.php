<?php
 
class MyClass
{
  public $prop1 = "I'm a class property!";
 
  public function __construct()
  {
      echo 'The class "', __CLASS__, '" was initiated!<br />';
  }
 
  // магический метод __destruct() для очистки класса 
  // (например, закрытие соединения с базой данных). 
  
  // волшебная константа __CLASS__ возвращает имя класса, в котором оно вызывается
  public function __destruct()
  {
      // Вывести сообщение, когда объект уничтожен:
      echo 'The class "', __CLASS__, '" was destroyed.<br />';
  }
 
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
 
// Create a new object
$obj = new MyClass;
 
// Get the value of $prop1
echo $obj->getProperty();
 
// Output a message at the end of the file
echo "End of file.<br />";
// Когда достигнут конец файла, PHP автоматически освобождает все ресурсы».

// Чтобы явно вызвать деструктор, вы можете уничтожить объект, используя функцию unset():
// Create a new object
$obj = new MyClass;
 // Get the value of $prop1
echo $obj->getProperty();
 // Destroy the object
unset($obj);
