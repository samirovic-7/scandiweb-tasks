<?php include 'conn.php';

$AllData = new Connect();

$DataDvd = $AllData->GetDvd();
$DataFurniture = $AllData->getFurniture();
$DataBook = $AllData->getBook();

if (isset($_POST['add'])) {
    if ($_POST['select']=='Book') {

        $AllData->insertBook($_POST);
    }

    elseif ($_POST['select']=='Furniture'){

        $AllData->insertFurniture($_POST);
    }

    elseif ($_POST['select']=='DVD'){

        $AllData->insertDvd($_POST);
    }

}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <link rel="stylesheet" href="./css/Task.css?<?php echo time()?>">
    <title>Product list</title>
</head>
<body>
<div class="container" >


    <form  method="post" id="product_form">
        <div class="row align-items-start justify-content-between">
            <div class="col-2">
                <h3>Product List</h3>
            </div>

            <div class="AllButt col-2">

                <button type="submit" name="add" class="Button_con"><span class="Butt_A">save</span></button>

                 <button class="Button_con"><a href="index.php" class="Butt_A">Close</a></button>


            </div>
        </div>
        <hr id="hr_line">

        <div class="inputs mb-4 row">
            <label for="sku" class="col-sm-1 col-form-label">SKU</label>
            <div class="col-sm-3">
            <input type="number" class="form-control" id="sku" name="id" required>
            </div>
        </div>

        <div class="inputs mb-4 row">
            <label for="name" class="col-sm-1 col-form-label">Name</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" id="name" name="name" required>
            </div>
        </div>

        <div class="inputs mb-4 row">
            <label for="price" class="col-sm-1 col-form-label">Price ($)</label>
            <div class="col-sm-3">
            <input type="number" step=".01" class="form-control" id="price" name="price" required>
            </div>
        </div>

        <div class="inputs mb-4 row">
            <label for="productType" class="col-sm-1 col-form-label">State</label>
            <div class="col-sm-3">
            <select id="productType" class="form-select" onchange="getValue();" name="select">
                <option hidden>Type Switcher</option>
                <option id="DVD" value="DVD" name="DVD">DVD</option>
                <option id="Furniture" value="Furniture" name="Furniture">Furniture</option>
                <option id="Book" value="Book" name="Book">Book</option>
            </select>
            </div>
        </div>
        <div class="mb-4 row" id="wow">

        </div>


    </form>

    <hr id="hr_line">
    <div class="row  align-items-end  justify-content-center">
        <div class="col-2">
            Scandiweb Test assignment
        </div>

    </div>

</div>

<script>
    function getValue(){
      let  productType = document.getElementById('productType').value;
        let wow = document.getElementById('wow');

        if(productType==='DVD'){
            wow.innerHTML ='<label for="size" class="col-sm-1 col-form-label">Size </label>' +
                           '<div class="col-sm-3"> <input type="number" class="form-control" id="size" name="size" required>'+
                           '<div id="emailHelp" class="form-text">please provide the data of the size</div></div>';
        }
        else if(productType==='Furniture'){
            wow.innerHTML = '<label for="height" class="col-sm-1 col-form-label">Height</label>' +
                            '<div class="col-sm-3"><input type="number" class="form-control" id="height"  name="Height" required></div>' +
                            '<div class="mess_text form-text">please provide the data of Height</div>' +

                            '<br><label for="width" class="col-sm-1 col-form-label">Width</label>' +
                            '<div class="col-sm-3"><input type="number" class="form-control" id="width" name="Width" required></div>' +
                            '<div class="mess_text form-text">please provide the data of the Width</div>' +

                            '<br><label for="length" class="col-sm-1 col-form-label">length</label>' +
                            '<div class="col-sm-3"><input type="number" class="form-control" id="length" name="length" required></div>'+
                            '<div class="mess_text form-text">please provide the data of the length</div>';
        }
        else if(productType==='Book'){
            wow.innerHTML = '<label for="weight" class="col-sm-1 col-form-label">Weight</label>' +
                            '<div class="col-sm-3"><input type="number" class="form-control" id="weight" name="Weight" required>'+
                            '<div class="form-text">please provide the data of the Weight</div></div>';
        }
    }

</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>


