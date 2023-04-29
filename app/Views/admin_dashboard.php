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


   <!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accept_reject_modal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade " id="accept_reject_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Intern Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="intern_request_fill_div"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Reject</button>
        <button type="button" class="btn btn-success">Accept</button>
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
                            +' <p class="text-center"><a href="" class="accept_reject_click" data-id="'+item.intern_id+'">View More Details</a></p>'
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
                            +' <p class="text-center"><a href="" class="accept_reject_click" data-id="'+item.intern_id+'">View More Details</a></p>'
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


// accept reject modal show click function 
$(document).on('click','.accept_reject_click',function(event){
    event.preventDefault();
    var find_class_index = $('.accept_reject_click');
    var get_index = find_class_index.index($(this));
    var get_intern_id = $('.accept_reject_click:eq('+get_index+')').attr('data-id');
    // alert(get_intern_id);
    $.ajax({
        url:'<?php echo base_url(); ?>public/index.php/Admin_controller/get_intern_data',
        method:"POST",
        data:{
            intern_id:get_intern_id,
        },
        dataType:"json",
        success:function(res){
            // alert(res);
            console.log("Admin View Intern Profile");
            console.log(res);
            $('#intern_request_fill_div').empty();
            res.forEach(function(item){
                var ele = $();

                ele = ele.add('<div class="row";>'
                +'<div class="col-6">'
                +'<img src="<?php echo base_url();?>public/public/uploads/'+item.intern_id+'/'+item.profile+'" alt="profile_img" style="height:7.5rem;width:7.7rem; display:block; margin-left:160px"><br>'
                +'</div>'

                +'<div class="col-6"><p style="font-weight: bold;"></p>'
                +'</div>'

                +'<div class="row"><hr>'
                +'<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5""><p style="font-weight: bold;">Reg No</p></div>'
                +'<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><p style="font-weight: bold;">:</p></div>'
                +'<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6""><p>'+item.regno+'</p></div>'
                +'</div>'
                
                +'<div class="row"><hr>'
                +'<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Name</p></div>'
                +'<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                +'<div class="col-lg-6 col-md-6 col-sm-6""><p>'+item.sname+'</p></div>'
                +'</div>'

                +'<div class="row"><hr>'
                +'<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Domain</p></div>'
                +'<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                +'<div class="col-lg-6 col-md-6 col-sm-6""><p>'+item.domain+'</p></div>'
                +'</div>'

                +'<div class="row"><hr>'
                +'<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">DOB</p></div>'
                +'<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                +'<div class="col-lg-6 col-md-6 col-sm-6""><p>'+item.dob+'</p></div>'
                +'</div>'

                +'<div class="row"><hr>'
                +'<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Email ID</p></div>'
                +'<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                +'<div class="col-lg-6 col-md-6 col-sm-6""><p>'+item.email_id+'</p></div>'
                +'</div>'

                +'<div class="row"><hr>'
                +'<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Department</p></div>'
                +'<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                +'<div class="col-lg-6 col-md-6 col-sm-6"><p>'+item.dept+'</p></div>'
                +'</div>'
                
                +'<div class="row"><hr>'
                +'<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Mobile No</p></div>'
                +'<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                +'<div class="col-lg-6 col-md-6 col-sm-6"><p>'+item.mobile+'</p></div>'
                +'</div>'

                +'<div class="row"><hr>'
                +'<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Registeration Status</p></div>'
                +'<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                +'<div class="col-lg-6 col-md-6 col-sm-6""><p>'+item.registeration_status+'</p></div>'
                +'</div>'

                +'<div class="row"><hr>'
                +'<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Start Date</p></div>'
                +'<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                +'<div class="col-lg-6 col-md-6 col-sm-6"><p>'+item.start_date+'</p></div>'
                +'</div>'

                +'<div class="row"><hr>'
                +'<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">End Date</p></div>'
                +'<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                +'<div class="col-lg-6 col-md-6 col-sm-6"><p>'+item.end_date+'</p></div>'
                +'</div>'

                +'<div class="row"><hr>'
                +'<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Year</p></div>'
                +'<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                +'<div class="col-lg-6 col-md-6 col-sm-6"><p>'+item.year+'</p></div>'
                +'</div>'

                +'<div class="row"><hr>'
                +'<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Resume</p></div>'
                +'<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                +'<div class="col-lg-6 col-md-6 col-sm-6"><p><a target="<?php echo base_url();?>public/public/uploads/'+item.intern_id+'/'+item.resume+'" href="<?php echo base_url();?>public/public/uploads/'+item.intern_id+'/'+item.resume+'">View</a></p></div>'
                +'</div>'

                +'<div class="row"><hr>'
                +'<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Bonafide</p></div>'
                +'<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                +'<div class="col-lg-6 col-md-6 col-sm-6"><p><a target="<?php echo base_url();?>public/public/uploads/'+item.intern_id+'/'+item.bonafide+'" href="<?php echo base_url();?>public/public/uploads/'+item.intern_id+'/'+item.bonafide+'">View</a></p></div>'
                +'</div>'

                +'<div class="row"><hr>'
                +'<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">ID Card</p></div>'
                +'<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                +'<div class="col-lg-6 col-md-6 col-sm-6"><p><a target="<?php echo base_url();?>public/public/uploads/'+item.intern_id+'/'+item.id_card+'" href="<?php echo base_url();?>public/public/uploads/'+item.intern_id+'/'+item.id_card+'">View</a></p></div>'
                +'</div>'
                // +'<div class="row">'
                
                +'</div>');

                $('#intern_request_fill_div').append(ele);
            });

            $('#accept_reject_modal').modal('show');

        },
        error:function(er){
            console.log('Sorry Try Again...');
            console.log(er);
        }
    });
});


// image checking if exists or not 
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