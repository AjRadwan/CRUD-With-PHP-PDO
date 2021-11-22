<?php include "inc/header.php"; ?>
<section class="mainleft">
<form action="" method="post">
 <table>
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" name="name" required="1"/></td>
    </tr>

    <tr>
      <td>Age: </td>
        <td><input type="text" name="name" required="1"/></td>
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

    <tr>
        <td>01</td>
        <td>Ariful Islam</td>
        <td>CSE</td>
        <td>19</td>
        <td>
        <a href="">Edit</a> ||
        <a href="">Delete</a>
        </td>
    </tr>

    <tr>
        <td>01</td>
        <td>Delowar Jahan</td>
        <td>Physics</td>
        <td>25</td>
        <td>
        <a href="">Edit</a> ||
        <a href="">Delete</a>
        </td>
    </tr>

    <tr>
        <td>01</td>
        <td>Kamrul Hasan</td>
        <td>Physics</td>
        <td>25</td>
        <td>
        <a href="">Edit</a> ||
        <a href="">Delete</a>
        </td>
    </tr>
  </table>
</section>










<?php include "inc/footer.php"; ?>