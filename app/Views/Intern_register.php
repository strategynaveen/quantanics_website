<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Internship Registeration</title>
    <!--semantic ui cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/client1.css?version=<?php echo rand(); ?>">
    <!-- google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/custom/css/inter_register.css?version=<?php echo rand();  ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

</head>

<body>
    <?php require_once "Header.php"; ?>
    <div class="container mb-4 mt-4">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <!-- <form  action="<?php echo base_url('public/index.php/Intern_controller/demo_reg'); ?>" method="post" enctype="multipart/form-data"> -->
                <div class="jumbotron border border-2 border-info shadow shadow-sm  rounded ">
                    <br>
                    <h2 class="text-info text-center">Intern Registeration</h2>
                    <br>
                    <div class="row m-3">
                        <div class="col-lg-6">
                            <div class="form-outline  input-container">
                                <input type="text" id="intern_name" name="intern_name" class="input" placeholder=" " />
                                <label for="intern_name" class="placeholder label">Enter Name</label>
                                <span id="intern_name_err"></span>
                                <!-- form2Example11 Enter Name -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-outline  input-container">
                                <input type="email" id="email_id" name="email_id" class="input" placeholder=" " />
                                <label for="email_id" class="placeholder label">Enter Email ID</label>
                                <span id="email_id_err"></span>
                            </div>
                        </div>
                    </div>       
                    <div class="row m-3">
                        <div class="col-lg-6">
                            <div class="form-outline  input-container">
                                <input type="text" id="dept" name="dept" class="input" placeholder=" " />
                                <label for="dept" class="placeholder label">Enter Department</label>
                                <span id="dept_err"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-outline  input-container">
                                <input type="text" id="mobile" name="mobile" class="input" placeholder=" "/>
                                <label for="mobile" class="placeholder label">Enter Mobile</label>
                                <span id="mobile_err"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-lg-6">
                            <div class="form-outline  input-container ">
                                <input type="text" id="clg_name" name="clg_name" class="input" placeholder=" " />
                                <label for="form2Example11" class="placeholder label">Enter College Name</label>
                                <span id="clg_name_err"></span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-outline input-container">
                                <input type="text" id="year" name="year" class="input" placeholder=" " />
                                <label for="reg_Year" class="placeholder label">Enter Year</label>
                                <span id="reg_Year_err"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row m-3">
                        <div class="col-lg-6">
                            <div class="form-outline  input-container">
                                <input type="text" name="dob" id="dob" class="input date" placeholder=" " />
                                <label for="dob" class=" placeholder  label">Date Of Birth</label>
                            </div>
                            <span id="dob_err"></span>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-select form-select-lg " style="height:90%;font-weight:540;font-size:1.6rem;" aria-label=".form-select-lg example" name="domain_drp" id="domain_drp" >
                                <!-- <option selected disabled value="">Select Domain</option>
                                <option value="Web">Web</option>
                                <option value="App">App</option>
                                <option value="IOT">IOt</option> -->
                            </select>
                          
                            <span id="choice_err1"></span>
                        </div>
                    </div>
                   
                    <div class="row mb-3">
                        <div class="col-4"></div>
                            <div class="col-4">
                                <button type="button" class="btn btn-lg mx-auto border border-2 border-info rounded text-info submit_registeration" style="width:100%" id="reg_first_btn">Register</button>
                            </div>
                            <div class="col-4"></div>
                        </div>
                    </div>
                </div>
                <!-- </form> -->
            <div class="col-lg-3"></div>
        </div>
    </div>

<?php require_once "Footer.php"; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<!-- <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.bundle.min.js"); ?>"></script> -->
<script src="<?php echo  base_url(); ?>assets/custom/js/intern_register.js?version=<?php echo rand(); ?>"></script>
<script>

load_domain_drp();
// load domain dropdown
function load_domain_drp(){
    $.ajax({
        url:'<?php echo  base_url('public/index.php/Intern_controller/domain_load'); ?>',
        method:"POST",
        dataType:"JSON",
        success:function(res){
            console.log("domain dropdown");
            console.log(res);

            $('#domain_drp').empty();
            $('#domain_drp').append('<option value="" selected="true" disabled="true">Choose Domain</option>');
            res.forEach(function(item) {
                var ele = $();
                ele = ele.add('<option value="'+item.domain_id+'">'+item.domain_name+'</option>');
                $('#domain_drp').append(ele);
            });
        }
    });
}

// dob onblur function
$(document).on('blur','#dob',function(event){
    event.preventDefault();
    var dob_att_get = $('#dob').prop("type");
    if (dob_att_get==="date") {
        $('#dob').prop('type','text')
    }
});

// dob onclick function 
$(document).on('focus','#dob',function(event){
    event.preventDefault();
    var dob_att_get = $('#dob').prop('type');
    if (dob_att_get==="text") {
        $('#dob').prop('type','date');
    }
});
   
$(document).on('click','.submit_registeration',function(event){
    event.preventDefault();
    var intern_name = $('#intern_name').val();
    var dept = $('#dept').val();
    var email = $('#email_id').val();
    var mobile = $('#mobile').val();
    var clg_name = $('#clg_name').val();
    var year = $('#year').val();
    var dob = $('#dob').val();
    var domain = $('#domain_drp').val();

    $.ajax({
        url:"<?php echo  base_url('public/index.php/Intern_controller/intern_reg'); ?>",
        method:"POST",
        data:{
            intern_name:intern_name,
            dept:dept,
            email:email,
            mobile:mobile,
            clg_name:clg_name,
            year:year,
            dob:dob,
            domain:domain,
        },
        dataType:"JSON",
        success:function(res){
            console.log("Intern Insertion Success Response");
            console.log(typeof res);
            if (res===true) {
                console.log("working");
                window.location.href="<?php echo  base_url('public/index.php/Home/load_option/intern_login'); ?>";
            }
        },
        error:function(er){
            console.log("Intern Registeration submission error");
            console.log(er);
        }
    });

    // alert('hi');
});

/* temporary hide this function 
        function on_submit(){
            var regno = $('#reg_no').val();
            var dept = $('#dept').val();
            var year = $('#year').val();
            var email_id = $('#email_id').val();
            var sname = $('#sname').val();
            var mobile = $('#mobile').val();
            var clg_name = $('#clg_name').val();
            var sdate = $('#sdate').val();
            var edate = $('#edate').val();
            var domain = $('#domain').val();

            var resume = $("#resume_file")[0].files[0];

            var fd = new FormData();
            // var files = $('#file')[0].files[0];
            fd.append('regno',regno);
            fd.append('dept',dept);
            fd.append('year',year);
            fd.append('sname',sname);
            fd.append('mobile',mobile);
            fd.append('clg_name',clg_name);
            fd.append('sdate',sdate);
            fd.append('edate',edate);
            fd.append('domain',domain);
            fd.append('email_id',email_id);
            fd.append('resume',resume);
            console.log("before ajax");
            console.log(fd);
            $.ajax({
                url:"<?php echo base_url('public/index.php/Intern_controller/new_connection'); ?>",
                method:"post",
                // dataType:"json",
                data:fd,
                contentType: false,
                processData: false,
                success:function(res){
                    console.log("Intern register");
                    console.log(res);
                },
                error:function(er){
                    console.log('Intern register error');
                    console.log(er);
                }
            });
        }
        */
    </script>

</body>

</html>