<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>homeaddtour</title>

</head>
</div>
<a href="<?php echo base_url('index.php/Admin');?> ">back</a>
<form role="form" method="post" action="<?php echo base_url('index.php/homecen/receive');?>" enctype="multipart/form-data">
            <div class="row">
              <div class="form-group col-lg-6">
                  <label>Destination</label>
                  <input type="text" class="form-control" name="derection" required="required">
              </div><br>
              <div class="form-group col-lg-6">
                  <label>Duration</label>
                  <input type="text" class="form-control" name="duration" required="required">
              </div><br>
              <div class="form-group col-lg-6">
                  <label>Start Price</label>
                  <input type="text" class="form-control" name="Start" required="required">
              </div><br>

                <div class="form-group col-lg-6">
                     <label>Picture  </label>

                        <input type="file" name="picture" required="required"><br>
                </div><br>
                
                <div class="form-group col-lg-6">
                    <label>TRIP</label>
                    <textarea type="text" class="form-control" name="name" required="required"></textarea>
                </div><br>
               <div class="form-group col-lg-12">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div><br>
          </div>
    </form>
<form role="form" method="post" action="<?php echo base_url('index.php/homecen/deletes');?>">
	 <div class="form-group col-lg-2">
                    <label>Input ID for delete</label>
                    <input type="text" class="form-control" name="name" required="required"><br>
					<button type="submit" class="btn btn-default">deleted</button>
                </div>
</form>
<?php foreach($promotion->result() as $pro)
  {?>
    <div class="roow">
<table width="311" border="1" align="center">
          <tbody>
            <tr>
              <td colspan="2" align="center">about trip</td>
            </tr>
            <tr>
              <td width="92" align="center">ID</td>
              <td width="203"><?php echo  $pro->proId;	?></td>
            </tr>
            <tr>
              <td align="center">Trip</td>
              <td><?php echo $pro->proTex;	?></td>
            </tr>
            <tr>
              <td align="center">Destination</td>
              <td><?php echo $pro->derection;	?></td>
            </tr>
            <tr>
              <td align="center">Duration</td>
              <td><?php echo $pro->duration;	?></td>
            </tr>
            <tr>
              <td align="center">Start Price</td>
              <td><?php echo $pro->derection;	?></td>
            </tr>
             <tr>
              <td align="center">Img</td>
              <td><?php printf('<img src="%s" width="100px" height="100px">',base_url().'/'.$pro->proImg);	?></td>
            </tr>

          </tbody>
</table><br>
</div>
<?php }

?>

<?php echo validation_errors(); ?>
</body>
</html>
