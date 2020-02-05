<?php
$conn = new mysqli('localhost','root','','blue');  
if($conn->connect_errno){                         
	echo 'Conection Error';
}

?>






<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<style>
  label{
	  display:inline-block;
	  width:150px;
	   }
           
           

</style>
</head>
<body style="margin:0;background:#1c478e;color:#fff">
<h1 style="margin:0;padding:5px;background:#333;color:#fff;text-align:center;" >
  	Blue Developer Directory
 </h1>
  <div>
<center>
     <h3>Display All Record</h3>
   

        <p>
        

       </p>
                
         <p>
         <form method="post">
             <input type='text' value="" name="txtsearch" id="txtsearch" />
             <input type="submit" name="submit1" value="submit"/>
             <table border="1">
          <tr>
             <td>S.no.</td>
             <td>Name</td>
             <td>Email</td>
             <td>Action</td>
          </tr>
          <?php
          if(isset($_POST['submit1'])){
              $srch = $_POST['txtsearch'];
              
          
          if($stmt = $conn->query("SELECT * FROM contact where fname LIKE '%$srch%'")) {
              $ctr = 0;
              while($r = $stmt->fetch_array(MYSQLI_ASSOC)) {  
               $ctr++;
          ?>
         <tr>
             <td><?php echo $ctr; ?></td>
             <td><?php if(isset($r['fname'])) { echo $r['fname']; } ?></td>
             <td><?php if(isset($r['email'])) { echo $r['email']; } ?></td>
             <td>
                 <a href="delete.php?id=<?php echo $r['id']; ?>">Delete</a>
                 <input type="checkbox" name="ch_box[]" value="<?php echo $r['id']; ?>" />
             </td>
          </tr>
          <?php }}} ?>
         </table>
             </form>
         </p>
  
  </center>
  </div>

