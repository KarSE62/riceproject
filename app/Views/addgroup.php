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
        <div class="d-flex justify-content-end">
            <a href="/home" class="btn btn-danger">back to Page</a>
        </div>
        <h1>Add Group Project</h1>
        <div class="mt-3">
            <form action="<?= site_url('/submit-form'); ?>" method="post" name="addgroup">
                <div class="form-group">
                    <label for="Group">Group Name</label>
                    <input type="text" name="group_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Group">Group Image</label>
                    <input type="text" name="group_pic" class="form-control">
                </div>
                <div class="form-group">

                    <input type="submit" class="btn btn-success mt-2" value="Add Group">
                </div>
            </form>
        </div>

    </div>



</body>

</html>