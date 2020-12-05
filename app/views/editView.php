<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $data->FirstName.' '.$data->LastName; ?> </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <?php include_once(ROOT.'/app/views/inc/header.php'); ?>

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-2 "></div>
                <div class="col-md-6 col-sm-8 col-12 border rounded mt-3 text-center" style="background:#e6e8eb;" >
                   
                    <form method="post" action="/Iconxlab/edit/update" class="form">
                            <h2 class="m-3"> Edit</h2>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col"><input value='<?php echo $data->FirstName; ?>' type="text" class="form-control" name="update_FirstName" placeholder="First Name" required="required"></div>
                                    <div class="col"><input value='<?php echo $data->LastName; ?>' type="text" class="form-control" name="update_LastName" placeholder="Last Name" required="required"></div>
                                </div>        	
                            </div>
                            <div class="form-group">
                                <div ><input value='<?php echo $data->Faculty; ?>' type="text" class="form-control" name="update_Faculty" placeholder="Faculty" required="required"></div>
                            </div>
                            <div class="form-group">
                                <div><input value='<?php echo $data->GroupF; ?>' type="text" class="form-control" name="update_GroupF" placeholder="Group" required="required"></div>
                            </div>
                            <div class="form-group">
                                <div><input value='<?php echo $data->Age; ?>' type="number" class="form-control" name="update_Age" placeholder="Age" required="required"></div>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Kind:</label>
                                <select class="form-control" id="sel1" name="update_Kind" required="required">
                                    <option  <?php if( $data->Kind) echo 'selected' ?>  >Man</option>
                                    <option  <?php if( !$data->Kind) echo 'selected' ?> >Woman</option>
                                </select>
                            </div>
                            <input value='<?php echo $data->id; ?>' type="number"  name="update_id" style="display:none;" required="required">
                                
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" style="background:#5181b8;">
                                Save
                                </button>
                            </div>
                        </form>
                   
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>