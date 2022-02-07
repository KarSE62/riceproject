<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Unit Group</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>

<body>

    <div class="container mt-4">
        <div class="d-flex justify-content-end">
            <a href="/home" class="btn btn-danger">back to Page</a>
        </div>
        <h1>Add Unit Group</h1>
        <div class="mt-3">
            <form action="<?= site_url('/submit'); ?>" method="post">
                <div class="form-group">
                    <label for="Group">Unit Name</label>
                    <input type="text" name="km_name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Group">Unit Image</label>
                    <input type="text" name="km_pic" class="form-control">
                </div>
                <div class="form-group mt-2 mb-2">
                    <label for="Group">Group</label>
                    <select class="custom-select" name="km_group">
                        <option selected>Choose Group</option>
                        <option value="1">ความรู้พื้นฐานการปลูกข้าว</option>
                        <option value="2">นโยบายที่เกี่ยวข้องกับการปลูกข้าว</option>
                        <option value="3">วิกฤติการณ์ที่ส่งผลกระทบต่อการปลูกข้าว</option>
                        <option value="4">เทคโนโลยีที่ใช้ในการผลิตข้าว</option>
                        <option value="5">การเพิ่มมูลค่าให้กับข้าว</option>
                        <option value="6">การตลาดและการประชาสัมพันธ์</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Group">Unit Detail</label>
                    <input type="text" name="km_detail" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success mt-2" value="Add Unit">
                </div>
            </form>

        </div>

    </div>



</body>

</html>