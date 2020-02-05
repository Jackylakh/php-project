<?php

$conn = new mysqli('localhost','root','','blue');  
if($conn->connect_errno){                         
	echo 'Conection Error';
}


$editid=$_GET['eid'];
$editquery=mysql_query("select * from contact where id='{$editid}'") or die(mysql_error());
$editdata=mysql_fetch_row($editquery);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
         <form method="post">
         
         <table width="1000px;" border="2">
          <tr>
             <td>Name</td>
             <td>Email</td>
             <td>phone number</td>
             <td>call1</td>
             <td>budget</td>
             <td>service</td>
             <td>image</td>
             <td>dob</td>
          </tr>
          <tr>
            <td>
                    <input type="text" name="name1" value="<?php echo editdata[1]?>" >
                      </td>
                      <td>
                        <input type="text" name="name2" required >
                      </td>
                      <td>
                        <input type="number" name="name3" required >
                      </td>
                      <td>
                   morning <input type="radio" name="call1" value="morning" checked>
                   afternoon <input type="radio" name="call1" value="afternoon">
                   evening <input type="radio" name="call1" value="evening">
                      </td>
                      <td>
                         <select type="list" name="budget" style=" background-color: #1c478e;">
                        <option>--Select One--</option>
                        <option value="100-500">$100-$500</option>
                        <option value="100-500">$100-$500</option>
                        <option value="100-500">$100-$500</option>
                        <option value="100-500">$100-$500</option>
                        <option value="100-500">$100-$500</option>
                        <option value="not sure">Not Sure</option>
                    </select>
               
                      </td>
                       <td>
                          <table width="200px" border="2px">
                        <tr>
                            <td><input type="checkbox" name="service[]" value="html">html</td>
                            <td><input type="checkbox" name="service[]" value="php">php</td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" name="service[]" value="asp">asp</td>
                            <td><input type="checkbox" name="service[]" value="java">java</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="service[]" value="design">Design</td>
                            <td><input type="checkbox" name="service[]" value="c">c</td>
                        </tr>
                                  </table>
              </td>  
                            <td><input type="file" name="image"></td>

                      <td>
                        <input type="date" name="dateof birth">
                      </td>
                    </tr>


        </table>
      </form>
    </p>
  </center>
</div>

</body>
</html>