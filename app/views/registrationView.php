<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <?php include_once(ROOT.'/app/views/inc/header.php'); ?>

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-2 "></div>  
                <div class="col-md-6 col-sm-8 col-12 border rounded mt-3 text-center" style="background:#e6e8eb;" >
                   
                <form method="post" action="/Iconxlab/registration/add" class="form">
                        <h2 class="m-3"> Register</h2>
                        <div class="form-group">
                            <div class="row">
                                <div class="col"><input type="text" class="form-control" name="FirstName" placeholder="First Name" required="required"></div>
                                <div class="col"><input type="text" class="form-control" name="LastName" placeholder="Last Name" required="required"></div>
                            </div>        	
                        </div>
                        <div class="form-group">
                            <div ><input type="text" class="form-control" name="Faculty" placeholder="Faculty" required="required"></div>
                        </div>
                        <div class="form-group">
                            <div><input type="text" class="form-control" name="GroupF" placeholder="Group" required="required"></div>
                        </div>
                        <div class="form-group">
                            <div><input type="number" class="form-control" name="Age" placeholder="Age" required="required"></div>
                        </div>
                        <div class="form-group">
                            <label for="sel1">Kind:</label>
                            <select class="form-control" id="sel1" name="Kind" required="required">
                                <option>Man</option>
                                <option>Woman</option>
                            </select>
                        </div>
                              
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" style="background:#5181b8;">
                               Register Now
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