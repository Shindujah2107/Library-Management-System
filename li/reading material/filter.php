<?php  
 //filter.php  
 if(isset($_POST["from_date"], $_POST["to_date"]))  
 {  
      $connection4 = mysqli_connect("localhost", "root", "", "library3");  
      $output = '';  
      $query = "  
           SELECT * FROM transectiontable  
           WHERE order_date BETWEEN '".$_POST["from_date"]."' AND '".$_POST["to_date"]."'  
		   
      ";  
      $result = mysqli_query($connection4, $query);  
      $output .= '  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">Student ID</th>  
                     <th width="30%">ISBN</th>  
                     <th width="43%">Department</th>  
                     
                     <th width="12%">Issue Date</th>  
					 <th width="12%">Return Date</th>  
					 <th width="12%">Approve Status</th> 
                </tr>  
      ';  
	 
	  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>'. $row["stuid"] .'</td>  
                          <td>'. $row["isbn"] .'</td>  
                          <td>'. $row["department"] .'</td>  
                           
                          <td>'. $row["order_date"] .'</td> 
  						  <td>'. $row["returndate"] .'</td>  
						   <td>'. $row["approve"] .'</td>  
                     </tr>  
                ';  
           }  
      }  
      else  
      {  
           $output .= '  
                <tr>  
                     <td colspan="5">No Order Found</td>  
                </tr>  
           ';  
      }  
      $output .= '</table>';  
      echo $output;  
 }  
 ?>