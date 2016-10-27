<?php

include 'header.php';

?>

<?php

function show_all_stores($message, $result)
{
  //----------------------------------------------------------
  // Start the html page

  echo "<HTML>";
  echo "<HEAD>";
  echo "</HEAD>";
  echo "<BODY>";

	echo"
		<div id='callToAction'>
			<h2>Are you sure you want to delete this Store Location?</h2>
		</div>
		";

  // If the message is non-null and not an empty string print it
  // message contains the lastname and firstname
  if ($message)
  {
    if ($message != "")
       {
	 echo '<center><font color="blue">'.$message.'</font></center><br />';
       }
  }

   //While there are more rows in the $result, get the next row
   //as an associative array
   while ($row = mysql_fetch_assoc($result))
   {
		 $storeid = $row['StoreId'];
		 $storecode = $row['StoreCode'];
	 	 $storename = $row['StoreName'];
  	 $address = $row['Address'];
 	 	 $city = $row['City'];
 	 	 $state = $row['State'];
	 	 $zip = $row['ZIP'];
	 	 $phone = $row['Phone'];
	 	 $mgrname = $row['ManagerName'];
     $status = $row['Status'];

      //Put these in a table row. The htmlentities function converts any
      //special chars in the string to a html-displayable form.

		 echo"
		 <form action='update_store_delete.php' method='post'>
				 <table align='center'>
						 <tr>
								 <td align='right'>Store ID:</td>
								 <td><input NAME='storeid' TYPE='text' SIZE='50' value='$storeid' readonly required/></td>
						 </tr>
						 <tr>
								 <td align='right'>Store Code:</td>
								 <td><input NAME='storecode' TYPE='text' SIZE='50' value='$storecode' readonly required/></td>
						 </tr>
						 <tr>
								 <td align='right'>Store Name:</td>
								 <td><input NAME='storename' TYPE='text' SIZE='50' value='$storename' readonly required/></td>
						 </tr>
						 <tr>
								 <td align='right'>Address:</td>
								 <td><input NAME='address' TYPE='text' SIZE='50' value='$address' readonly required/></td>
						 </tr>
						 <tr>
								 <td align='right'>City:</td>
								 <td><input NAME='city' TYPE='text' SIZE='50' value='$city' readonly required/></td>
						 </tr>
						 <tr>
							 <td align='right'>State:</td>
							 <td><input NAME='state' TYPE='text' SIZE='50' value='$state' readonly required/></td>
						 </tr>
						 <tr>
								 <td align='right'>Zip:</td>
								 <td><input NAME='zip' TYPE='text' SIZE='50' value='$zip' readonly required/></td>
						 </tr>
						 <tr>
								 <td align='right'>Phone:</td>
								 <td><input NAME='phone' TYPE='text' SIZE='50' value='$phone' readonly required/></td>
						 </tr>
						 <tr>
								 <td align='right'>Manager Name:</td>
								 <td><input NAME='mgrname' TYPE='text' SIZE='50' value='$mgrname' readonly required/></td>
						 </tr>
             <tr>
                 <td align='right'>Status:</td>
                 <td><input name='status' type='text' size'50' value='$status' readonly/></td>
             </tr>
				 </table>
				 <p align='center'>
						 <input type='submit' value='Confirm Delete'/>
				 </p>
				  <div id='button'>
					<input id='tiny_button' type='submit' id='submit' name='submit' >
					<input id='tiny_button' type='reset' id='reset' name='reset'>
</div>
		 </form> ";
	}

  echo "</BODY>";
  echo "</HTML>";


}
?>
