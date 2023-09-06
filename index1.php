<?php
require('vendor/autoload.php');
$con=mysqli_connect('localhost','root','','log_in');
$res=mysqli_query($con,"select * from log_in_s");
if(mysqli_num_rows($res)>0){
	$html='<style></style><table class="table">';
		$html.='<tr><td>ID</td><td>UserName</td><td>Password</td><td>Name</td></tr>';
		while($row=mysqli_fetch_assoc($res)){
			$html.='<tr><td>'.$row['id'].'</td><td>'.$row['username'].'</td><td>'.$row['password'].'</td><td>'.$row['name'].'</td></tr>';
		}
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='media/'.time().'.pdf';
$mpdf->output($file,'I');

?>