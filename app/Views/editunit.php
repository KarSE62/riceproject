<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <div class="container mt-4">
        <h1>Edit Unit Project</h1>
        <div class="mt-3">
            <form action="<?= site_url('/updateunit'); ?>" method="post">
            <input type="hidden" name="km_id" value="<?php echo $unit['km_id']; ?>">
            <div class="form-group">
                <label for="Group">Unit Name</label>
                <input type="text" name="km_name" class="form-control" value="<?php echo $unit['km_name']; ?>">
            </div>
            <div class="form-group">
                <label for="Group">Unit Image</label>
                <input type="text" name="km_pic" class="form-control" value="<?php echo $unit['km_pic']; ?>">
            </div>
            <div class="form-group">
                <label for="Group">Unit Detail</label>
                <input type="text" name="km_detail" class="form-control" value="<?php echo $unit['km_detail']; ?>">
            </div>
            <div class="form-group">
                
                <input type="submit" class="btn btn-primary mt-2" value="Update Unit">
            </div>
            </form>
        </div>

    </div>



</body>

</html>