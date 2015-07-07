<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin_view</title>
</head>
</div>
<a href="<?php echo base_url('index.php/homecen/adddata');?> ">add data</a>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" >
<table width="311" border="1" align="center">
          <tbody>
            <tr>
              <td colspan="2" align="center">หน้า admin</td>
            </tr>
            <tr>
              <td width="92" align="center">username</td>
              <td width="203"><?php echo $loginData['username'];	?></td>
            </tr>
            <tr>
              <td align="center">status</td>
              <td><?php echo $loginData['status'];	?></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><a href="<?php echo base_url();?>index.php/home/logout">Logout</a></td>
            </tr>
          </tbody>
</table>


<?php foreach($findAll->result() as $pro)
  {?>
<table width="311" border="1" align="center">
          <tbody>
            <tr>
              <td colspan="2" align="center">ordern</td>
            </tr>
            <tr>
              <td width="92" align="center">ID</td>
              <td width="203"><?php echo  $pro->id;	?></td>
            </tr>
            <tr>
              <td align="center">NAME</td>
              <td><?php echo $pro->name;	?></td>
            </tr>
             <tr>
              <td align="center">E-mail</td>
              <td><?php echo $pro->email;	?></td>
            </tr>
			        <tr>
              <td align="center">PHONE</td>
              <td><?php echo $pro->phone;	?></td>
              </tr>
			         <tr>
              <td align="center">MESSAGE</td>
              <td><?php echo $pro->message;	?></td>
            </tr>
            <tr>
           <td align="center">DADE</td>
           <td><?php echo $pro->datamessage;	?></td>
         </tr>
          </tbody>
</table><br>
<?php }

?>

</body>
</html>
