<?php 
//connecting to your database
$conn = mysqli_connect('localhost', 'username', 'password', 'dbname');
//checking if connection fail
if(mysqli_connect_errno()){
  echo"Failed connect to mysql : ". mysqli_connect_error();
}

//if submit button was clicked 
if(isset($_POST['submit'])){
  //the values will separate with comma using  implode function 
  $fruits = implode(', ', $_POST['fruits']);
  
  //query start here 
  $query = "INSERT INTO yourtabledatabase (fruits) VALUES ('$fruits')";
  $query_run = mysqli_query($conn, $query);
  
  if($query_run){
    echo"<script>alert('success insert into database');</script>";
  } else {
    echo"<script>alert('Oops, failed insert into database');</script>";
  }

}
?>

<!doctype html>
<html>
<head>
  <title>Tutorial How To Input Checkbox Values Into Mysql</title>
  <style>
    .submit {
      padding: 10px;
      border: none;
      background-color: blue;
      color: white;
      box-shadow:5px 5px 5px silver;
    }
  </style>
</head>
<body>
  <form action="index.php" method="POST">
    <label> Choose Your Favourite Fruits are : </label>
    <input type="checkbox" name="fruits[]" value="Banana"> Banana <br>
    <input type="checkbox" name="fruits[]" value="Watermelon"> Watermelon <br>
    <input type="checkbox" name="fruits[]" value="Orange"> Orange <br>
    <button type="submit" name="submit" class="submit"> submit</button>
  </form>
</body>
</html>
