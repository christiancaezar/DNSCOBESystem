<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../navbar/navbar.css">
    <link rel="stylesheet" href="grades.css">
</head>
<body>
    <?php
        $location = '../assets';
        include '../navbar/navbar.php';
    ?>


    <div class="container-fluid content">
        <div class="hstack mb-3">
            <div class="input-group flex-nowrap search">
                
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-search fs-4 d-flex"></i></span>
                    <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <button type="button" class="btn d-flex ms-auto add-course-subject" data-bs-toggle="modal" data-bs-target="#viewModal2"><i class="bi bi-plus fs-4 d-flex"></i>Add CO Grades</button>
            
        </div>
        <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Course Code</th>
                        <th scope="col">Course Name</th>
                        <th scope="col">Instructor</th>
                        <th scope="col">Course Outcomes</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>IT111</td>
                        <td>Sample Course Name 1</td>
                        <td>Vengie Nohara</td>
                        <td>
                            <div class="d-flex justify-content-evenly" >
                            <p style="background-color:  #32e032; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO1
                            </p>
                            <p style="background-color:  #32e032; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO2
                            </p>
                            <p style="background-color:  #32e032; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO3
                            </p>
                            </div>
                        </td>
                        <td class="d-flex justify-content-end">
                            <button type="button" class="btn btn-danger me-2 d-flex"><i class="bi bi-trash-fill fs-5 d-flex pe-2"></i>Delete</button>
                            <button type="button" class="btn btn-warning me-2 d-flex"><i class="bi bi-eye-fill fs-5 d-flex pe-2"></i>View   </button>
                        </td>
                    </tr>
                    <tr>
                        <td>IT112</td>
                        <td>Sample Course Name 2</td>
                        <td>Vengie Nohara</td>
                        <td>
                        <div class="d-flex justify-content-evenly" >
                            <p style="background-color: red; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO1
                            </p>
                            <p style="background-color: red; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO2
                            </p>
                            <p style="background-color: red; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO3
                            </p>
                            </div>


                        </td>
                        <td class="d-flex justify-content-end">
                            <button type="button" class="btn btn-danger me-2 d-flex"><i class="bi bi-trash-fill fs-5 d-flex pe-2"></i>Delete</button>
                            <button type="button" class="btn btn-warning me-2 d-flex"><i class="bi bi-eye-fill fs-5 d-flex pe-2"></i>View</button>
                        </td>
                    </tr>
                    <tr>
                        <td>IT113</td>
                        <td>Sample Course Name 3</td>
                        <td>Vengie Nohara</td>
                        <td>
                        <div class="d-flex justify-content-evenly" >
                            <p style="background-color:  #32e032; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO1
                            </p>
                            <p style="background-color:  #32e032; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO2
                            </p>
 
                            <p style="background-color: #32e032; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO3
                            </p>
                            <p style="background-color:  #32e032; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO4
                            </p>
                            </div>
                        </td>
                        <td class="d-flex justify-content-end">
                            <button type="button" class="btn btn-danger me-2 d-flex"><i class="bi bi-trash-fill fs-5 d-flex pe-2"></i>Delete</button>
                            <button type="button" class="btn btn-warning me-2 d-flex"><i class="bi bi-eye-fill fs-5 d-flex pe-2"></i>View</button>
                        </td>
                    </tr>
                    <tr>
                        <td>IT114</td>
                        <td>Sample Course Name 4</td>
                        <td>Vengie Nohara</td>
                        <td>
                        <div class="d-flex justify-content-evenly" >
                            <p style="background-color:  #32e032; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO1
                            </p>
                            <p style="background-color:  #32e032; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO2
                            </p>
                            </div>
                        </td>
                        <td class="d-flex justify-content-end">
                            <button type="button" class="btn btn-danger me-2 d-flex"><i class="bi bi-trash-fill fs-5 d-flex pe-2"></i>Delete</button>
                            <button type="button" class="btn btn-warning me-2 d-flex"><i class="bi bi-eye-fill fs-5 d-flex pe-2"></i>View</button>
                        </td>
                    </tr>
                    <tr>
                        <td>IT115</td>
                        <td>Sample Course Name 5</td>
                        <td>Vengie Nohara</td>
                        <td><div class="d-flex justify-content-evenly" >
                            <p style="background-color: red; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO1
                            </p>
                            <p style="background-color: red; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO2
                            </p>
                            <p style="background-color: red; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO3
                            </p>

                            <p style="background-color: red; border-radius: 10px; width: fit-content; padding: 2px;">
                                CO4
                            </p>
                            </div></td>
                        <td class="d-flex justify-content-end">
                            <button type="button" class="btn btn-danger me-2 d-flex"><i class="bi bi-trash-fill fs-5 d-flex pe-2"></i>Delete</button>
                            <button type="button" class="btn btn-warning me-2 d-flex" data-bs-toggle="modal" data-bs-target="#viewModal"><i class="bi bi-eye-fill fs-5 d-flex pe-2"></i>View</button>
                        </td>
                    </tr>
                </tbody>
                
            </table>
        <div class="container d-flex justify-content-end align-items-center page-count">
            <button type="button" class="btn no-outline"><i class="bi bi-caret-left-fill fs-5"></i></button>
                <strong class="pt-2">Page 1 of 10</strong>
            <button type="button" class="btn"><i class="bi bi-caret-right-fill fs-5"></i></button>
        </div>
    </div>

    

                <!-- Modal -->
            <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLongTitle">Course Code - Course Title</h5>

                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"> Course Outcome 1</th>
                                <th scope="col"> Course Outcome 2</th>
                                <th scope="col"> Course Outcome 3</th>
                                <th scope="col"> Course Outcome 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>89</td>
                                <td>75</td>
                                <td>90</td>
                                <td>76</td>
                            </tr>
                        </tbody>

                    </table>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" style="background-color:#005E00;">Save changes</button>
                </div>
                </div>
            </div>  
            </div>

            <!-- modal 2 -->
            <div class="modal fade" id="viewModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                <div class="modal-header" style="background-color: #005E00;">
                    <h5 class="modal-title" style="color:aliceblue;" id="ModalLongTitle">Add Course Outcome Grades</h5>

                </div>
                <div class="modal-body">
                    <form action="">
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="">Course Code</span>
                    </div>
                    <select class="custom-select" id="inputGroupSelect02" style="width: 200px;">
                                <option selected></option>
                                <option value="1">IT 111</option>
                                <option value="2">IT 112</option>
                                <option value="3">IT 113</option>
                            </select>

                            <div class="input-group-prepend">
                        <span class="input-group-text" style="margin-left: 20px;" id="">Instructor</span>
                    </div>
                    <select class="custom-select" id="inputGroupSelect02" style="width: 200px;">
                                <option selected></option>
                                <option value="1">Vengie Nohara</option>
                                <option value="2">Vengie Nohara</option>
                                <option value="3">Vengie Nohara</option>
                            </select>
                    </div>
                   
                   
                <div class="container" style="margin-top:10px">
                 <span>Course Outcomes</span>
                  <!-- <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" style="margin-left: 20px;" id="">CO1</span>
                    </div> 
                    <select class="custom-select" id="inputGroupSelect02" style="width: 200px;">

                    </div> -->
                </div>
            </form>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" style="background-color:#005E00;">Save changes</button>
                </div>
                </div>
            </div>  
            </div>
                
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>