<?php
include "session.php";

   if($login_session == 'admin')
{
   include "style_admin.php";
}
   if($login_session == 'master')
{
   include "style_master.php";
}
 if ($login_session == 'student')
{
    header('Location: logout.php'); 
}

?>

<html>
    
<style>
    h3
        {
        font-family: "Arial",Sans-serif;
        font-weight:lighter;
        }
    h1 
        {
        font-family:Arial;
        }    
    
</style>
    
<head>
    <title>
    Delete Item
    </title>
</head>

<p style="color:grey; font-family:arial; font-size:16">*Note that you will only be able to delete items that have been signed-in.</p>

<div class = "pageheader" > Delete Item </div>
    
    <table> 
        <tr>
	<th>ID</th>
    <th>Name</th>
    <th>Category</th>
	<th>Date Added</th>  
    <th>Delete Item</th>
	
<?php

get_all_records(); //calls get_all_records



function get_all_records(){
    $con = getdb();

    $Sql = "SELECT i.item_id
	,c.cat_name
	, i.date_added
	, i.item_name
FROM items i 
INNER JOIN category c 
  ON i.cat_id = c.cat_id WHERE i.item_deleted IS NULL";
    
    $result = mysqli_query($con, $Sql);  

if (mysqli_num_rows($result) > 0) {

     while($row = mysqli_fetch_assoc($result)) {

         echo "<tr> 
					<td>" . $row['item_id']."</td>
					<td>" . $row['item_name']."</td>
                    <td>" . $row['cat_name']."</td>
					<td>" . $row['date_added']."</td>
                    <td>" ."<a href='confirm_delete.php?item_id=".$row['item_id']."'>Delete</a>"."</td>
                    </tr>";
         
     } 
    
     echo "</tbody></table></div>";
     
} else {
     echo "you have no records";
}
} // closes the function
?>
    

<tr>
</table>
</html>
