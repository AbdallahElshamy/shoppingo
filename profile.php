<?php
session_start();
if(isset($_SESSION["id"]))
{
	include_once "headerafter.php";
}
else
	include_once "headerbefore.php";
?>
<div style="width:50%;text-align:left ; margin-top : 150px ; margin-left : 30px">
				<div class="modal-header" style="background-color: lightblue ;width:20%;text-align:center">
					<h2 class="modal-title">My Profile</h2>
				</div>
                <div class="modal-header">
                <table class='table table-borderd'>
                    <?php
                          include_once "Database.php";
                          $db=new Database();
                       
                          $rs=$db->GetData("select * from customer where cust_id='".$_SESSION["id"]."'");
                          if($row=mysqli_fetch_assoc($rs))
                          { 
                    ?>
                    <tr>
                        <th>
                            Your Name
                        </th>
                        <td>
                           <?php echo $row["name"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Phone
                        </th>
                        <td>
                           <?php echo $row["phone"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Gender
                        </th>
                        <td>
                           <?php echo $row["gender"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Email
                        </th>
                        <td>
                           <?php echo $row["email"]; ?>
                        </td>
                    </tr>
                    <?php
                          }
                    ?>
                </table>
                </div>
                </div>
    <?php
	include_once "footer.php";
	?>
                   