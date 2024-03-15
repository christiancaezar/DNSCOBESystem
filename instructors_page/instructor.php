<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../navbar/navbar.css">
    <link rel="stylesheet" href="instructor.css">
</head>
<body>
    <?php include '../navbar/navbar.php'; ?>
    <div class="container-fluid content">
        <div class="hstack mb-3">
            <div class="input-group flex-nowrap email">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search fs-4 d-flex"></i></span>
                <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <button type="button" class="btn d-flex ms-auto add-instructor"><i class="bi bi-plus fs-4 d-flex"></i>Add instructor</button>
        </div>
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Program</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Christian Caezar</td>
                        <td>BS Information Technology</td>
                        <td class="d-flex align-middle">
                            <button type="button" class="btn btn-danger me-2 d-flex"><i class="bi bi-trash-fill fs-5 d-flex pe-2"></i>Delete</button>
                            <button type="button" class="btn btn-warning me-2 d-flex"><i class="bi bi-pen-fill fs-5 d-flex pe-2"></i>Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Albert Einstein</td>
                        <td>BS Information Systems</td>
                        <td class="d-flex">
                            <button type="button" class="btn btn-danger me-2 d-flex"><i class="bi bi-trash-fill fs-5 d-flex pe-2"></i>Delete</button>
                            <button type="button" class="btn btn-warning me-2 d-flex"><i class="bi bi-pen-fill fs-5 d-flex pe-2"></i>Edit</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Thomas Hobbes</td>
                        <td>BS Information Technology</td>
                        <td class="d-flex">
                            <button type="button" class="btn btn-danger me-2 d-flex"><i class="bi bi-trash-fill fs-5 d-flex pe-2"></i>Delete</button>
                            <button type="button" class="btn btn-warning me-2 d-flex"><i class="bi bi-pen-fill fs-5 d-flex pe-2"></i>Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>