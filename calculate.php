<?php 
#check if data has been submitted#
if(!isset($_POST['submit'])){
    
#logic to calculate age in days

 $ageInDays = ($_POST['currentDate'] - $_POST['birthYear'])*365;
 #**************



}else{
    echo "error in data submission";
}?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Days Calculator with Php</title>
</head>
<style>
    body{
        background-color:lightblue;

    }

    .form-group {
        margin-right: 95px;
        margin-left:25px;
    }
</style>
<body>
    <br>
    <br>
    <div class="container">
<form action="calculate.php"   method="POST" >
    <div class="form-group ">
    <label for="exampleInputEmail1">Enter Name</label>
    <input type="text" class="form-control" 
     aria-describedby="emailHelp" placeholder="Enter Name" name="userName">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Input Year Of Birth</label>
    <input type="text" class="form-control" 
    aria-describedby="emailHelp" placeholder="Enter Year Of Birth" name= "birthYear" >
    </div>
 
  <div class="form-group">
    <label for="exampleInputPassword1">Enter Current Year</label>
    <input type="text"    class="form-control"  
    placeholder="Enter current year" name= "currentDate"   >
    <br>
    <br>
        <button type="submit" class="btn btn-primary" style=border-radius:12px;
        value="submit">Calculate</button>

</form>
    <br>
    <br>
    
<div class="card" style="width:100%;  border-color: blue; "    >
  <div class="card-body">
    <h2 class="card-title"> <?php echo $_POST['userName']  .  "  has been alive for "   .   $ageInDays  .  "  days"; ?></h2>
    </div>
</div>

</div>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>