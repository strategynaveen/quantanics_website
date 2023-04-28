<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quantanics Website</title>
    <!-- <link rel="stylesheet" href=""> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/assets/css/edit.css?version=<?php echo rand(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet"    href="<?php echo base_url(); ?>/assets/custom/css/profile_card.css?version=<?php echo rand(); ?>"> -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/assets/custom/js/chat.js?version=<?php echo rand(); ?>"></script>
</head>

<body>
    <?php $session = \Config\Services::session(); ?>
    <?php require_once "Header.php"; ?>

    <div class="container-fluid">
        <div class="row " style="justify-content:center;align-items:center;">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="width:max-content;margin-block:revert;">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-request-tab" data-bs-toggle="pill" data-bs-target="#pills-request" type="button" role="tab" aria-controls="pills-request" aria-selected="true"><i class="fa fa-address-card fa-2x"></i></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-edit fa-2x"></i></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fa fa-commenting fa-2x"></i></button>
                </li>
            </ul>
        </div>
        <div class="row">          
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-request" role="tabpanel" aria-labelledby="pills-request-tab">
                    <h2 class="text-center text-muted font-weight-bold">Internship Request</h2>
                    <br>
                    <div class="row intern_request_cards_div">
                    <!-- <div class=""></div> -->
                    </div>
                    
                    <!-- cards demo ui  -->

                    <!-- <div class="col-lg-3">
                        <div class="jumbotron border border-2 border-info rounded">
                            <div class="row " style="margin:0;padding:0;">
                                <div class="col-6">
                                    <img src="" alt="profile_img">
                                    <p>Naveen</p>
                                </div>
                                <div class="col-6">
                                    <p>Anna University Regional Campus Madurai</p>
                                    <p>3rd Year</p>
                                    
                                </div>
                            </div>
                            <p class="text-center"><a href="">View More Details</a></p>
                        </div>
                    </div> -->
                    <br>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <h2 class="text-center text-muted font-weight-bold">Payment Details</h2>

                    <br>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h2 class="text-center text-muted font-weight-bold">Task ASSIGNING</h2>
                    <br>
                </div>
            </div>
        </div>
  

    </div>


    <!-- Footer -->
    <?php require_once "Footer.php"; ?>
    <!-- Footer -->
    
</body>
<script>
    fetch_user_data();
    function fetch_user_data() {
        $.ajax({
            url: "<?php echo base_url() ?>public/index.php/Intern_controller/fetch_user_data",
            method: "POST",
            dataType: "json",
            success: function (res) {
                console.log(res);
                console.log("ajax woking");
                $('.intern_request_cards_div').empty();
                res.forEach(function(item){
                    var ele = $();
                    var file_name = "<?php echo  base_url(); ?>public/public/uploads/"+item.intern_id+"/"+item.profile;
                    if(imgError(file_name)==true){
                        ele = ele.add('<div class="col-lg-3 col-md-4 col-sm-6">'
                        +'<div class="jumbotron border border-2 border-info rounded">'
                            +'<div class="row " style="margin:0;padding:0;">'
                                +'<div class="col-6">'
                                    +'<img src="<?php echo base_url();?>public/public/uploads/'+item.intern_id+'/'+item.profile+'" alt="profile_img" style="height:7.5rem;width:7.7rem;">'
                                    +'<p style="text-align:center;">'+item.sname+'</p>'
                                +'</div>'
                                +'<div class="col-6">'
                                    +'<p style="text-transform:capitalize;text-align:center;font-size:1rem;font-weight:600;margin-block:revert;">'+item.clg_name+'</p>'
                                    +'<p>'+item.year+'</p>'
                                    +'<p>'+item.domain+'</p>'
                                    // +'<p>'+item.email_id+'</p>'
                                +'</div>'
                            +'</div>'
                            +' <p class="text-center"><a href="">View More Details</a></p>'
                        +'</div>'
                        +'</div>');
                    }else{
                        ele = ele.add('<div class="col-lg-3 col-md-4 col-sm-6">'
                        +'<div class="jumbotron border border-2 border-info rounded">'
                            +'<div class="row " style="margin:0;padding:0;">'
                                +'<div class="col-6">'
                                    +'<img src="<?php echo base_url();?>public/public/uploads/common_profile.png" alt="profile_img" style="height:7.5rem;width:7.7rem;">'
                                    +'<p style="text-align:center;">'+item.sname+'</p>'
                                +'</div>'
                                +'<div class="col-6">'
                                    +'<p style="text-transform:capitalize;text-align:center;font-size:1rem;font-weight:600;margin-block:revert;">'+item.clg_name+'</p>'
                                    +'<p>'+item.year+'</p>'
                                    +'<p>'+item.domain+'</p>'
                                    // +'<p>'+item.email_id+'</p>'
                                +'</div>'
                            +'</div>'
                            +' <p class="text-center"><a href="">View More Details</a></p>'
                        +'</div>'
                        +'</div>');
                    }
                   
                    $('.intern_request_cards_div').append(ele);
                });
            },
            error: function (er) {
                console.log(er);
                console.log('intern home page ajax failed');
            }
        });

    }

    
function imgError(file_name){
    var xhr = new XMLHttpRequest();
    xhr.open('HEAD', file_name, false);
    xhr.send();
            
    if (xhr.status  === 404 ) {
        return false;
    } else {
        return true;
    }
}
</script>


</html>