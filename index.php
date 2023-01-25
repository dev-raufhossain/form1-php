<?php
$fields = [

    ["type" => "text", "name" => "name", "class" => "form-control", "placeholder" => "Enter your name", "label"=>"Name"],
    ["type" => "email", "name" => "email", "class" => "form-control", "placeholder" => "Enter your email", "label"=>"Email"],
    ["type" => "number", "name" => "number", "class" => "form-control", "placeholder" => "Enter your number" ,"label"=>"Number"],
    ["type" => "password", "name" => "password", "class" => "form-control", "placeholder" => "Enter your password", "label"=>"Password"],
    ["type" => "number", "name" => "nid", "class" => "form-control", "placeholder" => "Enter your Nathnal ID Card ", "label"=>"NID Card Number"],
    ["type" => "date", "name" => "date", "class" => "form-control", "placeholder" => "Enter your date of birth ", "label"=>"Date of Birth"],

]




?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-4">
                <div class="card  bg-warning">
                    <div class="card-header">
                        <h3 class="mb-0">Registered form</h3>
                    </div>
                    <div class="card-body">
                 <form method="$_REQUEST" action="data.php">

                            <?php foreach ($fields as $field) {
                            ?>
                                <label for="" class="w-100 mt-1">
                                    <span style="text-transform: capitalize;">
                                <?php echo $field['label'] ?>
                                    </span>
                                </label>
                                <input type="<?php echo $field['type'] ?>" name="<?php echo $field['name'] ?>" class="form-control" placeholder="<?php echo $field['placeholder'] ?>">
                            <?php } ?>
                            <div class="d-grid mt-2">
                                <button type="submit" class="btn btn-outline-primary mt-2">Submit</button>
                            </div>
                        </form> 

                        

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>