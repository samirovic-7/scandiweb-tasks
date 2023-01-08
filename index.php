<?php include 'conn.php';

$AllData = new Connect();

$DataDvd = $AllData->GetDvd();
$DataFurniture = $AllData->getFurniture();
$DataBook = $AllData->getBook();

if (isset($_POST['Delete'])){

    $AllData->deleteDvd($_POST);
    $AllData->deleteBook($_POST);
    $AllData->deleteFurniture($_POST);
    if (true) {
        header("Location: index.php");
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Task.css?<?php echo time()?>">
    <title>Product list</title>
</head>
<body>
<div class="container">
    <div class="row align-items-start justify-content-between">
        <div class="col-2">
            <h3>Product List</h3>
        </div>

        <div class="AllButt col-3">
            <button class="Button_con"><a class="Butt_A" href="form.php">ADD</a></button>
            <form  method="post">
                <button type="submit" name="Delete" id="delete-product-btn" class="Button_con"><span class="Butt_A">MASS DELETE</span></button>
        </div>
    </div>
    <hr id="hr_line" >
    <div class="row align-items-center ">

        <?php
        if (is_array($DataDvd) || is_object($DataDvd)) {
            foreach ($DataDvd as $data) {

                echo "   <div class='card_cont_all col-3'>

           <div class='card-body'>
               <input class='delete-checkbox form-check-input' type='checkbox' value='$data[SKU]' id='invalidCheck' name='ids[]'> 
                <div class='card_data'>
                    <h6>$data[SKU]</h6>
                    <h6>$data[Name]</h6>
                    <h6>$data[Price] $</h6>
                    <h6>Size: $data[Size] MB</h6>
                </div>
            </div>

    </div>";
            }
        }
        ?>

        <?php
        if (is_array($DataFurniture) || is_object($DataFurniture)) {
        foreach ($DataFurniture as $data){


            echo"   <div class='card_cont_all col-3'>

           <div class='card-body'  >
                <input class='form-check-input' type='checkbox' value='$data[SKU]' id='invalidCheck' name='ids[]'>
                <div  class='card_data'>
                    <h6>$data[SKU]</h6>
                    <h6>$data[Name]</h6>
                    <h6>$data[Price] $</h6>
                    <h6>Dimension: $data[Height]x$data[Width]x$data[length]  </h6>
                </div>
            </div>

    </div>";
        }
        }
        ?>



        <?php
        if (is_array($DataBook) || is_object($DataBook)) {

            foreach ($DataBook as $data) {

                echo "   <div class='card_cont_all col-3'>

           <div class='card-body'  >
                <input class='form-check-input' type='checkbox' value='$data[SKU]' id='invalidCheck' name='ids[]'>
                <div  class='card_data'>
                    <h6>$data[SKU]</h6>
                    <h6>$data[Name]</h6>
                    <h6>$data[Price] $</h6>
                    <h6>Weight: $data[Weight]KG</h6>
                </div>
            </div>

    </div>";
            }
        }
        ?>
        </form>

    </div>

    <hr id="hr_line">
    <br>
    <div class="row  align-items-end  justify-content-center">
        <div class="col-2">
            Scandiweb Test assignment
        </div>

    </div>

    </div>

<?php

?>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>