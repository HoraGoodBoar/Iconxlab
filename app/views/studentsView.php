<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <?php include_once(ROOT.'/app/views/inc/header.php'); ?>

    <?php foreach($data as $item): ?>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-2 "></div>
                <div class="row col-md-6 col-sm-8 col-12 border rounded mt-3" style="background:#e6e8eb;" >
                    <div class="col-md-4 mt-2 ">
                        <h4> <?php echo $item->FirstName.' '.$item->LastName ?> </h4>
                        <h6> Age :  <?php echo $item->Age; ?>  </h6>
                        <h6> Kind : <?php echo $item->Kind?'Man':'Woman'; ?> </h6>
                     </div>
                    <div class="col-md-6 mt-2">
                        <h6> Faculty :  <?php echo $item->Faculty; ?> </h6>
                        <h6> Group :  <?php echo $item->GroupF; ?> </h6>
                        <h6> Id :  <?php echo $item->id; ?> </h6>
                     </div>
                    <div class="row col-md-2 ">
                        <a href="/Iconxlab/edit/get/<?php echo $item->id; ?>"> <div class=" m-2 btn btn-secondary">Edit</div> </a>
                        <a href="/Iconxlab/edit/delete/<?php echo $item->id; ?>"> <div class=" m-2 btn btn-danger">Delete</div> </a>
                     </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>