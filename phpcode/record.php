<?php
$conn = new mysqli('localhost','root','','blue');  
if($conn->connect_errno){                         
    echo 'Conection Error';
}
if(isset($_POST['submit'])) {
    foreach($_POST['ch_box'] as $i) {
        if($stmt = $conn->query("DELETE FROM contact WHERE id='".$i."'")){
          header("location:record.php");
        }
    }
}
?>






<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<style>
  label{
      display:inline-block;
      width:150px;
       }
           
           

</style>
</head>
<body style="margin:0;background:#1c478e;color:#fff">
  <div>
<center>
     <h3>Display All Record</h3>
   

        <p>
        

       </p>
                
         <p>
         <form method="post">
         
         <table width="1000px;" border="2">
          <tr>
             <td>S.no.</td>
             <td>Name</td>
             <td>Email</td>
             <td>Action</td>
          </tr>
          
          
            
          <?php
          if($stmt = $conn->query("SELECT * FROM contact  ORDER BY id DESC")) {
              $ctr = 0;
                
              while($r = $stmt->fetch_array(MYSQLI_ASSOC)) {  
             $ctr++;
               
               /*  $from = "2015-01-01";
         $to = "2015-02-06";
         if($stmt = $conn->query("SELECT * FROM contact WHERE doj BETWEEN $from AND $to ORDER BY id DESC")) {*/
               
               
               
          ?>
         <tr>
             <td><?php echo $ctr; ?></td>
             <td><?php if(isset($r['fname'])) {echo $r['fname']; } ?></td>
             <td><?php if(isset($r['email'])) { echo $r['email']; } ?></td>
             <td>
                 <a href="delete.php?id=<?php echo $r['id']; ?>">Delete</a>
                 <a href="edit.php?eid=$data[0]">edit</a>
               
              <input type="checkbox" class="p" name="ch_box[]" value="<?php echo $r['id']; ?>" />
          </tr>
 
          <?php }} ?>
          <tr>
             
          <input type="checkbox" id="selecctall"/>
          <input type="submit" name="submit" value="Delete">
          
          </tr>
         </table>
             </form>
         </p>
        
      
  
  </center>
 </div>
    <script>
$(document).ready(function() {
    $('#selecctall').click(function(event) {  //on click
        if(this.checked) { // check select status
            $('.p').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"              
            });
        }else{
            $('.p').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
            });        
        }
    });
       
});
    </script>
