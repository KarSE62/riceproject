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
    <h1>Group Project</h1>
    <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/addgroup')?>" class="btn btn-primary">Add Group Project</a>
    </div>
    <hr>
    <div class="mt-3">
        <table class="table table-bordered text-center" id="group-project" >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>View More</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if($Group) :?>
                    <?php foreach($Group as $group):?>
                        <tr>
                            <td><?php echo $group['group_id'];?></td>
                            <td><?php echo $group['group_name'];?></td>
                            <td><img src="<?php echo $group['group_pic'];?>" width="100" height="100"></td>
                            <td><a href="<?php echo base_url('/seemore/'.$group['group_id']);?>" class="btn btn-primary">View</a></td>
                            <td>
                                <a href="<?php echo base_url('/editgroup/'.$group['group_id']);?>" class="btn btn-warning">Edit</a>
                                <a href="<?php echo base_url('/delete/'.$group['group_id']);?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    </div>

</body>

</html>