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
<div class="modal fade " id="accept_reject_modal" >
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
        <button type="button" class="btn btn-danger reject_click_show" >Reject</button>
        <button type="button" class="btn btn-success accept_click_show">Accept</button>
      </div>
    </div>
  </div>
</div>

<!-- rejection modal -->
<!-- Modal -->
<div class="modal fade" id="rejection_modal" tabindex="-1" aria-labelledby="rejection_modal_label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rejection_modal_label">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row" style="padding:0;margin:0;">
            <div class="col-lg-5"><p style="font-size:1rem;font-weight:600;">Name</p></div>
            <div class="col-lg-1" style="font-size:1rem;font-weight:700;">:</div>
            <div class="col-lg-6"><p id="intern_name" style="text-align:-webkit-match-parent;"></p></div>
        </div>
        <hr style="margin:0.5rem;">
        <textarea name="rejection_reason_val" id="rejection_reason_val" cols="30" rows="10" style="width:100%;height:7rem;padding:0.8rem;border:1px solid #dee2e6; resize: none;border-radius:0.5rem;" Placeholder="Enter Rejection Reason."></textarea>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary rejection_modal_submit">Submit Reason</button>
      </div>
    </div>
  </div>
</div>


<!-- payment modal -->
<div class="modal fade" id="payment_modal_show" tabindex="-1" aria-labelledby="payment_modal_show_label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="payment_modal_show_label">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row" style="padding:0;margin:0;">
            <div class="col-lg-5"><p style="font-size:1rem;font-weight:600;">Name</p></div>
            <div class="col-lg-1" style="font-size:1rem;font-weight:700;">:</div>
            <div class="col-lg-6"><p id="intern_name_p" style="text-align:-webkit-match-parent;"></p></div>
        </div>
        <hr style="margin:0.5rem;">
        <div class="row" style="padding:0;margin:0;">
            <select class="form-select payment_drp" aria-label="Default select example">
                <option selected value="">Select Payment Status</option>
                <option value="paid">Paid</option>
                <option value="free">Free</option>
            </select>
        </div>

        <div class="paid_val">
            <div class="row">
                <input type="text" name="paid_val" class="form-control form-control-md" id="paid_val" value="0" >
            </div>
        </div>



      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button type="button" class="btn btn-primary payment_modal_submit">Submit Payment</button>
      </div>
    </div>
  </div>
</div>
<!-- Payment modal end -->


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
                img_url = "<?php echo base_url(); ?>public/public/uploads/"+item.intern_id+"/"+item.profile;
                img_org_url = "";
                if (imgError(img_url)==true) {
                    img_org_url = "<?php echo base_url(); ?>public/public/uploads/"+item.intern_id+"/"+item.profile;
                }else{
                    img_org_url = "<?php echo base_url(); ?>public/public/uploads/common_profile.png";
                }
                $('.reject_click_show').attr('data-id',item.intern_id);
                $('.accept_click_show').attr('data-id',item.intern_id);
                ele = ele.add('<div class="row";>'
                +'<div class="col-6">'
                +'<img src="'+img_org_url+'" alt="profile_img" style="height:7.5rem;width:7.7rem; display:block; margin-left:160px"><br>'
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
                +'<div class="col-lg-6 col-md-6 col-sm-6""><p id="intern_name_ar">'+item.sname+'</p></div>'
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

// accept click
$(document).on('click','.accept_click_show',function(event){
    event.preventDefault();
    // alert('accept click');
    var intern_id = $('.payment_modal_show').attr('data-id');
    var intern_name = $('#intern_name_ar').text();
    $('.intern_name_p').text(intern_name);
    $('.payment_modal_submit').attr('data-id',intern_id);
    $('#payment_modal_show').modal('show');
});


// rejection modal show click
$(document).on('click','.reject_click_show',function(event){
    event.preventDefault();
    // alert('Rejection Modal');
    var intern_id = $('.reject_click_show').attr('data-id');
    // alert(intern_id);
    var intern_name = $('#intern_name_ar').text();
    $('#intern_name').text(intern_name);
    $('.rejection_modal_submit').attr('data-id',intern_id);
    // $('#accept_reject_modal').style('display','inline');
    $('#rejection_modal').modal('show');
});

// rejection submit function
$(document).on('click','.rejection_modal_submit',function(event){
    event.preventDefault();
    var intern_id = $('.rejection_modal_submit').attr('data-id');
    var reject_msg = $('#rejection_reason_val').val();
    $.ajax({
        url:"<?php echo base_url(); ?>public/index.php/Admin_controller/rejection_con",
        method:"POST",
        data:{
            intern_id:intern_id,
            reject_msg:reject_msg,
        },
        dataType:"json",
        success:function(res){
            console.log("Rejection Result");
            console.log(res);
            fetch_user_data();
            $('#rejection_modal').modal('hide');
            $('#accept_reject_modal').modal('hide');

        },
        error:function(er){
            console.log('Sorry Try Again ... Rejection submission  ajax');
            console.log(er);
        }

    });
})
</script>


</html>