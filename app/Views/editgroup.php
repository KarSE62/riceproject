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
        <h1>Edit Group Project</h1>
        <div class="mt-3">
            <form action="<?= site_url('/update'); ?>" method="post" name="update_group">
            <input type="hidden" name="group_id" value="<?php echo $group['group_id']; ?>">
            <div class="form-group">
                <label for="Group">Group Name</label>
                <input type="text" name="group_name" class="form-control" value="<?php echo $group['group_name']; ?>">
            </div>
            <div class="form-group">
                <label for="Group">Group Image</label>
                <input type="text" name="group_pic" class="form-control" value="<?php echo $group['group_pic']; ?>">
            </div>
            <div class="form-group">
                
                <input type="submit" class="btn btn-primary mt-2" value="Update Group">
            </div>
            </form>
        </div>

    </div>



</body>

</html>