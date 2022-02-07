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
        <h1>Group Project Unit</h1>
        <a href="<?php echo site_url('/home') ?>" class="btn btn-success">Go to Group Project</a>
        <div class="d-flex justify-content-end">
            
            <a href="<?php echo site_url('/addunit') ?>" class="btn btn-primary">Add Unit Group</a>
        </div>
        <hr>
        <div class="mt-3">
            <table class="table table-bordered " id="group-project">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Detail</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($unit) : ?>
                        <?php foreach ($unit as $data) : ?>
                            <tr>
                                <td><?php echo $data['km_id']; ?></td>
                                <td><?php echo $data['km_name']; ?></td>
                                <td><?php echo $data['km_detail']; ?></td>
                                <td><img src="<?php echo $data['km_pic']; ?>" width="100" height="100"></td>
                                <td>
                                    <div class="row">
                                        <a href="<?php echo base_url('/editunit/'.$data['km_id']); ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?php echo base_url('/deleteunit/'.$data['km_id']); ?>" class="btn btn-danger mt-2">Delete</a>
                                    </div>
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