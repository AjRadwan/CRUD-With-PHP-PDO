<?php include "inc/header.php"; 

spl_autoload_register(function($class){
  include "classes/" .$class. ".php";
});
?>

<section class="mainleft">
<?php
//create object from student class
$user = new Student();

if (isset($_POST['submit']) == "POST") {
  $name = $_POST['name'];
  $dep = $_POST['dep'];
  $age = $_POST['age'];

  $user->setName($name);
  $user->setDep($dep);
  $user->setAge($age);

  if ($user->insert()) {
     echo "<strong class='insert'>Data Inserted Successfully!!</strong>";
    }
}

?>
<form action="" method="post">
 <table>
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" name="dep" required="1"/></td>
    </tr>

    <tr>
      <td>Age: </td>
        <td><input type="text" name="age" required="1"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit" name="submit" value="Submit"/>
        <input type="reset" value="Clear"/>
        </td>
    </tr>
  </table>
</form>
</section>

<section class="mainright">
  <table class="tblone">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
<?php 
   $i = 0;
 foreach ($user->readAll() as $key => $value) {
    $i++;
?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $value['name'] ?></td>
        <td><?php echo $value['dep'] ?></td>
        <td><?php echo $value['age'] ?></td>
        <td>
        <a href="">Edit</a> ||
        <a href="">Delete</a>
        </td>
    </tr>
<?php }?>
  
  </table>
</section>

<?php include "inc/footer.php"; ?>