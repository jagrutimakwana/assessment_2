<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 0);

include_once('model.php');
class control extends model
{
        function __construct()
		{
			session_start();

			model::__construct();

			$path=$_SERVER['PATH_INFO'];

			switch ($path)
			 {
				case '/admin':
			    include_once('admin.php');
			    break;

                case '/adminregister':
			    include_once('adminregister.php');
			    break;
             
			    case '/adminlogin':
				if(isset($_REQUEST['submit']))
					{
						$email=$_REQUEST['email'];
						$password=md5($_REQUEST['password']);

						$arr=array("email"=>$email,"password"=>$password);

						$res=$this->select_where('admin',$arr);
						$chk=$res->num_rows;

						if($chk==1)
						{
							$fetch=$res->fetch_object(); // data fetch after function call
                            $_SESSION['email']=$fetch->email;
							$_SESSION['password']=$fetch->password;
							
							 echo"<script>
							 alert('Login Sucess');
							 window.location='admin';
							 </script>
							 ";
						}
						else
						{
							echo"<script>
							 alert('Login Failed');
							</script>
							";
						}
					}
			    include_once('adminlogin.php');
			    break;
				
				
				case '/managerlogin':
				if(isset($_REQUEST['submit']))
					{
						$manager_email=$_REQUEST['manager_email'];
						$manager_password=md5($_REQUEST['manager_password']);

						$arr=array("manager_email"=>$manager_email,"manager_password"=>$manager_password);

						$res=$this->select_where('manager',$arr);
						$chk=$res->num_rows;

						if($chk==1)
						{
							$fetch=$res->fetch_object(); // data fetch after function call
                            $_SESSION['manager_email']=$fetch->manager_email;
							$_SESSION['manager_password']=$fetch->manager_password;
							
							 echo"<script>
							 alert('Manager Login Sucess');
							 window.location='pharmacymanager';
							 </script>
							 ";
						}
						else
						{
							echo"<script>
							 alert('Manager Login Failed');
							</script>
							";
						}
					}
			    include_once('managerlogin.php');
			    break;
           
		        case '/viewallmanager':
				$data_pharmacy_manager=$this->select('pharmacy_manager');
			    include_once('viewallmanager.php');
			    break;
				
				case '/viewallmedicine':
				$data_medicines=$this->select('medicines');
			    include_once('viewallmedicine.php');
			    break;
				
				case '/pharmacymanager':
			    include_once('pharmacymanager.php');
			    break;
				
				case '/managerviewmedicine':
				$data_medicines=$this->select('medicines');
			    include_once('managerviewmedicine.php');
			    break;
				
				case '/managerdeletemedicine':
				$data_medicines=$this->select('medicines');
			    include_once('managerdeletemedicine.php');
			    break;
				
				case '/addmedicine':
				if(isset($_REQUEST['submit']))
					{
						$medicine_id=($_REQUEST['medicine_id']);
						$medicine_name=($_REQUEST['medicine_name']);
						$qty=$_REQUEST['qty'];
						$added_date=$_REQUEST['added_date'];
						$added_by=$_REQUEST['added_by'];
						$price=$_REQUEST['price'];
						
					    
						$arr=array("medicine_id"=>$medicine_id,"medicine_name"=>$medicine_name,"qty"=>$qty,"added_date"=>$added_date,"added_by"=>$added_by,"price"=>$price);
						$res=$this->insert('medicines',$arr);

						if($res)
						{
							echo"
							<script>
							alert('Add Medicine Sucess');
							window.location='medicine';
							</script>
							";
						}
						else
						{
							echo"<script>
							 alert('Medicine Does Not Exist');
							</script>
							";
						}
                    }   
			       include_once('addmedicine.php');
			       break;
				
			       case '/medicine':
					if(isset($_REQUEST['submit']))
					{
						$medicine_id=($_REQUEST['medicine_id']);
						$medicine_name=($_REQUEST['medicine_name']);
						$qty=$_REQUEST['qty'];
						$added_date=$_REQUEST['added_date'];
						$added_by=$_REQUEST['added_by'];
						$price=$_REQUEST['price'];
						
					    
						$arr=array("medicine_id"=>$medicine_id,"medicine_name"=>$medicine_name,"qty"=>$qty,"added_date"=>$added_date,"added_by"=>$added_by,"price"=>$price);
						$res=$this->insert('medicines',$arr);

						if($res)
						{
							echo"
							<script>
							alert('Medicine Register Sucess');
							window.location='medicine';
							</script>
							";
						}
						else
						{
							echo"<script>
							 alert('Medicine Does Not Exist');
							</script>
							";
						}
                    }   
			        include_once('medicine.php');
			        break;	
					
					 case '/managerregister':
					if(isset($_REQUEST['submit']))
					{
						$manager_id=($_REQUEST['manager_id']);
						$manager_name=($_REQUEST['manager_name']);
						$pharmacy_name=$_REQUEST['pharmacy_name'];
						
					    
						$arr=array("manager_id"=>$manager_id,"manager_name"=>$manager_name,"pharmacy_name"=>$pharmacy_name);
						$res=$this->insert('pharmacy_manager',$arr);

						if($res)
						{
							echo"
							<script>
							alert('Manager Register Sucess');
							window.location='managerregister';
							</script>
							";
						}
						else
						{
							echo"<script>
							 alert('Manager Register Failed');
							</script>
							";
						}
                    }   
			        include_once('managerregister.php');
			        break;	

                    case '/delete':
			        if(isset($_REQUEST['delmedicine_id']))
			        {
				    $medicine_id=$_REQUEST['delmedicine_id'];
				
				    $where=array("medicine_id"=>$medicine_id);
				    $res=$this->delete_where('medicines',$where);
				         if($res)
				         {
					          echo "<script> 
					          alert('Delete Success'); 
						      window.location='managerdeletemedicine';
					          </script>";
				         }
						else
						{
							  echo "<script> 
					          alert('Delete Failed'); 
						      window.location='managerdeletemedicine';
					          </script>";
						}
						 
			        }				
                
			       default:
			       echo "<h1>Page Not Found</h1>";
		           break;
		}
	
		}
	}	

$obj=new control;
?>