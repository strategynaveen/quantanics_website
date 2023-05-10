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
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/assets/custom/js/chat.js?version=<?php echo rand(); ?>"></script>
      <!-- chat css file -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/custom/css/chat.css?version=<?php echo rand(); ?>">

      <style>
        .custome_select_body{
            height:max-content;
            width:13rem;
            background-color:white;
            border-radius:0.25rem;
            position:absolute;
        }
        .custome_drp_div{
            display:flex;
            flex-direction:row;
            justify-content:start;
            padding-left:1rem;
            font-size:0.8rem;
        }

        .custome_drp_div:hover{
            background:#0dcaf0;
            color:white;
            cursor:pointer;
        }


        .custome_img_div{
            width:20%;
            display:flex;
            flex-direction:row;
            justify-content:center;
            align-items:center;
        }
        .custome_img_style{
            height:2rem;
            width:2rem;
        }
        .custome_text_div{
            width:80%;
            display:flex;
            flex-direction:row;
            justify-content:start;
            align-items:center;
        }

        .drp_click_div{
            display:flex;
            flex-direction:row;
            justify-content:start;
            align-items:center;
            margin-left:1rem;
            cursor:pointer;
        }
        .drp_click_img_div{
            width:5%;
        }
        .drp_click_txt_div{
            width:80%;
            display:flex;
            flex-direction:row;
            justify-content:start;
            align-items:center;
            /* font-weight:bold; */
            /* font-size:1.3rem; */
        }


      </style>

</head>

<body>
    <?php $session = \Config\Services::session(); ?>
    <?php require_once "Header.php"; ?>

    <div class="container-fluid">
        <div class="row " style="justify-content:center;align-items:center;">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="width:max-content;margin-block:revert;">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-request-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-request" type="button" role="tab" aria-controls="pills-request"
                        aria-selected="true"><i class="fa fa-address-card fa-2x"></i></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false"><i class="fa fa-edit fa-2x"></i></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false"><i class="fa fa-commenting fa-2x"></i></button>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-request" role="tabpanel"
                    aria-labelledby="pills-request-tab">
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
                    <div id="framechat" style="margin-bottom:2rem;">
                        <div class="content">
                            <div class="header">
                             
                                <div class="drp_click_div" style="">
                                    <div class="drp_click_img_div" >
                                        <img src="<?php echo base_url(); ?>assets/aboutimages/abt5.png" style="height:2rem;width:2rem;" class="img_add_div" alt="">
                                    </div>
                                    <div class="drp_click_txt_div" style="">
                                        <p id="selected_val_custome_drp_txt" style="font-size:0.9rem;font-weight:bold;">Selected Title</p>
                                    </div>
                                </div>
                                <!-- <p id="chatbox_title">CHATBOX</p> -->
                            </div>
                            <div class="custome_select_body" style="">
                                <div class="custome_drp_div click_get_val" style="">
                                    <div class="custome_img_div" style="">
                                        <img src="<?php echo  base_url(); ?>assets/aboutimages/abt5.png" data-img="abt5.png" class="custome_img_style" style="" alt="">
                                    </div>
                                    <div class="custome_text_div" style="">
                                        <p style="margin-block:auto;" class="custome_drp_text_content"  data-txt="web">WEB App Development</p>
                                    </div>
                                </div>

                                <div class="custome_drp_div click_get_val" style="">
                                    <div class="custome_img_div" style="">
                                        <img src="<?php echo  base_url(); ?>assets/aboutimages/abt5.png" data-img="abt5.png" class="custome_img_style" style="" alt="">
                                    </div>
                                    <div class="custome_text_div" style="">
                                        <p style="margin-block:auto;" class="custome_drp_text_content" data-txt="app">APP Development</p>
                                    </div>
                                </div>

                                <div class="custome_drp_div click_get_val" style="">
                                    <div class="custome_img_div" style="">
                                        <img src="<?php echo  base_url(); ?>assets/aboutimages/abt5.png" data-img="abt5.png" class="custome_img_style" style="" alt="">
                                    </div>
                                    <div class="custome_text_div" style="">
                                        <p style="margin-block:auto;" class="custome_drp_text_content" data-txt="iot">IOT Development</p>
                                    </div>
                                </div>
                            </div>
                            <div class="messages">
                                <ul class="msg_li"></ul>
                                <!-- <ul>
                                    <li class="sent">
                                        <img src="<?php echo base_url("assets/workimages/img4.jpg"); ?>" alt="username" />
                                        <p>hi</p>
                                    </li>
                                    <li class="replies">
                                        <img src="<?php echo base_url("assets/workimages/img3.jpg"); ?>" alt="username" />
                                        <p>Hello</p>
                                    </li>
                                </ul> -->
                            </div>
                            <div class="row">
                                <div class="col-lg-0 col-md-0 col-sm-0"> </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 input-group ">
                                        <textarea class="Text-Box" id="message" type="text" placeholder="Write your message..." style="padding-left:1rem;" data-emojiable="true"></textarea>
                                        <button id="send" class="submit msg_send_click"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="col-lg-0 col-md-0 col-sm-0"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <!-- Button trigger modal
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#accept_reject_modal">
  Launch demo modal
</button> -->

    <!-- Modal -->
    <div class="modal fade " id="accept_reject_modal">
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
                    <button type="button" class="btn btn-danger reject_click_show">Reject</button>
                    <button type="button" class="btn btn-success accept_click_show">Accept</button>
                </div>
            </div>
        </div>
    </div>

    <!-- rejection modal -->
    <!-- Modal -->
    <div class="modal fade" id="rejection_modal" tabindex="-1" aria-labelledby="rejection_modal_label"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rejection_modal_label">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:0;margin:0;">
                        <div class="col-lg-5">
                            <p style="font-size:1rem;font-weight:600;">Name</p>
                        </div>
                        <div class="col-lg-1" style="font-size:1rem;font-weight:700;">:</div>
                        <div class="col-lg-6">
                            <p id="intern_name" style="text-align:-webkit-match-parent;"></p>
                        </div>
                    </div>
                    <hr style="margin:0.5rem;">
                    <div>
                    <textarea name="rejection_reason_val" id="rejection_reason_val" cols="30" rows="10"
                        style="width:100%;height:7rem;padding:0.8rem;border:1px solid #dee2e6; resize: none;border-radius:0.5rem;"
                        Placeholder="Enter Rejection Reason." onblur="rejectvalidation();" class="inputtag" >
                    </textarea>
                    <span id="rejectvalidation_err1"></span>
                    </div>
                    
                   
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-primary rejection_modal_submit">Submit Reason</button>
                </div>
            </div>
        </div>
    </div>


    <!-- payment modal -->
    <div class="modal fade" id="payment_modal_show" tabindex="-1" aria-labelledby="payment_modal_show_label"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="payment_modal_show_label">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row" style="padding:0;margin:0;">
                        <div class="col-lg-5">
                            <p style="font-size:1rem;font-weight:600;">Name</p>
                        </div>
                        <div class="col-lg-1" style="font-size:1rem;font-weight:700;">:</div>
                        <div class="col-lg-6">
                            <p id="intern_name_p" style="text-align:-webkit-match-parent;"></p>
                        </div>
                    </div>
                    <hr style="margin:0.5rem;">
                    <div class="row" style="padding:0;margin:0;">
                        <select class="form-select payment_drp" aria-label="Default select example" id="paymethod"
                            onblur="paymentmethod()">
                            <option selected value="">Select Payment Status</option>
                            <option value="paid">Paid</option>
                            <option value="free">Free</option>
                        </select>
                        <span id="method_err1"></span>
                    </div>
                    <hr style="margin:0.5rem;">
                    <div class="paid_val">
                        <div class="row" style="padding:0;margin:0;">
                            <input type="text" name="paid_val" class="form-control form-control-md" id="paid_val"
                                value="0" onblur="fee_val()">
                            <span id="fee_val_err1"></span>
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
    // $(document).ready(fucntion(){
    //     $('.custome_select_body').css('display','none');
    // });
    fetch_user_data();
    $('.custome_select_body').css('display','none');
    function fetch_user_data() {
        $.ajax({
            url: "<?php echo base_url() ?>public/index.php/Intern_controller/fetch_user_data",
            method: "POST",
            dataType: "json",
            success: function (res) {
                console.log(res);
                console.log("ajax woking");
                $('.intern_request_cards_div').empty();
                res.forEach(function (item) {
                    var ele = $();
                    var file_name = "<?php echo base_url(); ?>public/public/uploads/" + item.intern_id + "/" + item.profile;
                    if (imgError(file_name) == true) {
                        ele = ele.add('<div class="col-lg-3 col-md-4 col-sm-6">'
                            + '<div class="jumbotron border border-2 border-info rounded">'
                            + '<div class="row " style="margin:0;padding:0;">'
                            + '<div class="col-6">'
                            + '<img src="<?php echo base_url(); ?>public/public/uploads/' + item.intern_id + '/' + item.profile + '" alt="profile_img" style="height:7.5rem;width:7.7rem;">'
                            + '<p style="text-align:center;">' + item.sname + '</p>'
                            + '</div>'
                            + '<div class="col-6">'
                            + '<p style="text-transform:capitalize;text-align:center;font-size:1rem;font-weight:600;margin-block:revert;">' + item.clg_name + '</p>'
                            + '<p>' + item.year + '</p>'
                            + '<p>' + item.domain + '</p>'
                            // +'<p>'+item.email_id+'</p>'
                            + '</div>'
                            + '</div>'
                            + ' <p class="text-center"><a href="" class="accept_reject_click" data-id="' + item.intern_id + '">View More Details</a></p>'
                            + '</div>'
                            + '</div>');
                    } else {
                        ele = ele.add('<div class="col-lg-3 col-md-4 col-sm-6">'
                            + '<div class="jumbotron border border-2 border-info rounded">'
                            + '<div class="row " style="margin:0;padding:0;">'
                            + '<div class="col-6">'
                            + '<img src="<?php echo base_url(); ?>public/public/uploads/common_profile.png" alt="profile_img" style="height:7.5rem;width:7.7rem;">'
                            + '<p style="text-align:center;">' + item.sname + '</p>'
                            + '</div>'
                            + '<div class="col-6">'
                            + '<p style="text-transform:capitalize;text-align:center;font-size:1rem;font-weight:600;margin-block:revert;">' + item.clg_name + '</p>'
                            + '<p>' + item.year + '</p>'
                            + '<p>' + item.domain + '</p>'
                            // +'<p>'+item.email_id+'</p>'
                            + '</div>'
                            + '</div>'
                            + ' <p class="text-center"><a href="" class="accept_reject_click" data-id="' + item.intern_id + '">View More Details</a></p>'
                            + '</div>'
                            + '</div>');
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
    $(document).on('click', '.accept_reject_click', function (event) {
        event.preventDefault();
        var find_class_index = $('.accept_reject_click');
        var get_index = find_class_index.index($(this));
        var get_intern_id = $('.accept_reject_click:eq(' + get_index + ')').attr('data-id');
        // alert(get_intern_id);
        $.ajax({
            url: '<?php echo base_url(); ?>public/index.php/Admin_controller/get_intern_data',
            method: "POST",
            data: {
                intern_id: get_intern_id,
            },
            dataType: "json",
            success: function (res) {
                // alert(res);
                console.log("Admin View Intern Profile");
                console.log(res);
                $('#intern_request_fill_div').empty();
                res.forEach(function (item) {
                    var ele = $();
                    img_url = "<?php echo base_url(); ?>public/public/uploads/" + item.intern_id + "/" + item.profile;
                    img_org_url = "";
                    if (imgError(img_url) == true) {
                        img_org_url = "<?php echo base_url(); ?>public/public/uploads/" + item.intern_id + "/" + item.profile;
                    } else {
                        img_org_url = "<?php echo base_url(); ?>public/public/uploads/common_profile.png";
                    }
                    $('.reject_click_show').attr('data-id', item.intern_id);
                    $('.accept_click_show').attr('data-id', item.intern_id);
                    ele = ele.add('<div class="row";>'
                        + '<div class="col-6">'
                        + '<img src="' + img_org_url + '" alt="profile_img" style="height:7.5rem;width:7.7rem; display:block; margin-left:160px"><br>'
                        + '</div>'

                        + '<div class="col-6"><p style="font-weight: bold;"></p>'
                        + '</div>'

                        + '<div class="row"><hr>'
                        + '<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5""><p style="font-weight: bold;">Reg No</p></div>'
                        + '<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"><p style="font-weight: bold;">:</p></div>'
                        + '<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6""><p>' + item.regno + '</p></div>'
                        + '</div>'

                        + '<div class="row"><hr>'
                        + '<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Name</p></div>'
                        + '<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                        + '<div class="col-lg-6 col-md-6 col-sm-6""><p id="intern_name_ar">' + item.sname + '</p></div>'
                        + '</div>'

                        + '<div class="row"><hr>'
                        + '<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Domain</p></div>'
                        + '<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                        + '<div class="col-lg-6 col-md-6 col-sm-6""><p>' + item.domain + '</p></div>'
                        + '</div>'

                        + '<div class="row"><hr>'
                        + '<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">DOB</p></div>'
                        + '<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                        + '<div class="col-lg-6 col-md-6 col-sm-6""><p>' + item.dob + '</p></div>'
                        + '</div>'

                        + '<div class="row"><hr>'
                        + '<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Email ID</p></div>'
                        + '<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                        + '<div class="col-lg-6 col-md-6 col-sm-6""><p>' + item.email_id + '</p></div>'
                        + '</div>'

                        + '<div class="row"><hr>'
                        + '<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Department</p></div>'
                        + '<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                        + '<div class="col-lg-6 col-md-6 col-sm-6"><p>' + item.dept + '</p></div>'
                        + '</div>'

                        + '<div class="row"><hr>'
                        + '<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Mobile No</p></div>'
                        + '<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                        + '<div class="col-lg-6 col-md-6 col-sm-6"><p>' + item.mobile + '</p></div>'
                        + '</div>'

                        + '<div class="row"><hr>'
                        + '<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Registeration Status</p></div>'
                        + '<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                        + '<div class="col-lg-6 col-md-6 col-sm-6""><p>' + item.registeration_status + '</p></div>'
                        + '</div>'

                        + '<div class="row"><hr>'
                        + '<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Start Date</p></div>'
                        + '<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                        + '<div class="col-lg-6 col-md-6 col-sm-6"><p>' + item.start_date + '</p></div>'
                        + '</div>'

                        + '<div class="row"><hr>'
                        + '<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">End Date</p></div>'
                        + '<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                        + '<div class="col-lg-6 col-md-6 col-sm-6"><p>' + item.end_date + '</p></div>'
                        + '</div>'

                        + '<div class="row"><hr>'
                        + '<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Year</p></div>'
                        + '<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                        + '<div class="col-lg-6 col-md-6 col-sm-6"><p>' + item.year + '</p></div>'
                        + '</div>'

                        + '<div class="row"><hr>'
                        + '<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Resume</p></div>'
                        + '<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                        + '<div class="col-lg-6 col-md-6 col-sm-6"><p><a target="<?php echo base_url(); ?>public/public/uploads/' + item.intern_id + '/' + item.resume + '" href="<?php echo base_url(); ?>public/public/uploads/' + item.intern_id + '/' + item.resume + '">View</a></p></div>'
                        + '</div>'

                        + '<div class="row"><hr>'
                        + '<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">Bonafide</p></div>'
                        + '<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                        + '<div class="col-lg-6 col-md-6 col-sm-6"><p><a target="<?php echo base_url(); ?>public/public/uploads/' + item.intern_id + '/' + item.bonafide + '" href="<?php echo base_url(); ?>public/public/uploads/' + item.intern_id + '/' + item.bonafide + '">View</a></p></div>'
                        + '</div>'

                        + '<div class="row"><hr>'
                        + '<div class="col-lg-5 col-md-5 col-sm-5"><p style="font-weight: bold;">ID Card</p></div>'
                        + '<div class="col-lg-1 col-md-1 col-sm-1"><p style="font-weight: bold;">:</p></div>'
                        + '<div class="col-lg-6 col-md-6 col-sm-6"><p><a target="<?php echo base_url(); ?>public/public/uploads/' + item.intern_id + '/' + item.id_card + '" href="<?php echo base_url(); ?>public/public/uploads/' + item.intern_id + '/' + item.id_card + '">View</a></p></div>'
                        + '</div>'
                        // +'<div class="row">'

                        + '</div>');

                    $('#intern_request_fill_div').append(ele);
                });

                $('#accept_reject_modal').modal('show');

            },
            error: function (er) {
                console.log('Sorry Try Again...');
                console.log(er);
            }
        });
    });


    // image checking if exists or not 
    function imgError(file_name) {
        var xhr = new XMLHttpRequest();
        xhr.open('HEAD', file_name, false);
        xhr.send();

        if (xhr.status === 404) {
            return false;
        } else {
            return true;
        }
    }



    //accept form validation
    //payment type
    function paymentmethod() {
        var method = document.getElementById("paymethod");
        if (method.value === "") {
            $('#method_err1').text("Select Payment Method");
            $("#method_err1").css({
                "color": "red",
                "font-size": "10px"
            });
            return false;
        }
        else {
            $('#method_err1').text("");
            return true;
        }
    }


    //accept form validation
    //fees
    function fee_val() {
        var method = document.getElementById("paid_val");
        if (method.value === "") {
            $('#fee_val_err1').text("Select Payment Method");
            $("#fee_val_err1").css({
                "color": "red",
                "font-size": "10px"
            });
            return false;
        }
        else {
            $('#fee_val_err1').text("");
            return true;
        }
    }

    

    // $(document).ready(function(){
    //     $("textarea").click(function(){
    //         alert($("inputtag")).val();
    //     });
    // });

    $(document).on('click', '.inputtag', function (event) {
            alert("Hi");
    });
       
     
    // function rejectvalidation(){
    //     var method1 = document.getElementById(".inputtag");
    //     if (method1===""){
    //         alert(method1);
    //     }
    // }
    





 



    // accept click
    $(document).on('click', '.accept_click_show', function (event) {
        event.preventDefault();
        // alert('accept click');
        var intern_id = $('.accept_click_show').attr('data-id');
        var intern_name = $('#intern_name_ar').text();
        $('#intern_name_p').text(intern_name);
        $('.payment_modal_submit').attr('data-id', intern_id);
        $('#payment_modal_show').modal('show');
    });


    // rejection modal show click
    // alert(intern_id);
    // alert('Rejection Modal');
    // $('#accept_reject_modal').style('display','inline');

    $(document).on('click', '.reject_click_show', function (event) {
        event.preventDefault();
        var intern_id = $('.reject_click_show').attr('data-id');
        var intern_name = $('#intern_name_ar').text();
        $('#intern_name').text(intern_name);
        $('.rejection_modal_submit').attr('data-id', intern_id);
        $('#rejection_modal').modal('show');

    });


    //accept module
    $(document).on('click', '.payment_modal_submit', function (event) {
        event.preventDefault();
        var intern_id = $('.accept_click_show').attr('data-id');
        var intern_status = $('#paymethod').val();
        var fees = $('#paid_val').val();
        if (paymentmethod() == true) {
            $.ajax({
                url: "<?php echo base_url(); ?>public/index.php/Admin_controller/accept_con",
                method: "POST",
                data: {
                    intern_id: intern_id,
                    intern_status: intern_status,
                    fees: fees,
                },
                dataType: "json",
                success: function (res) {
                    console.log(" Accept Result");
                    console.log(res);
                    fetch_user_data();
                    $('#payment_modal_show').modal('hide');
                    $('#accept_reject_modal').modal('hide');

                },
                error: function (er) {
                    console.log('Submission ajax');
                    console.log(er);
                }
            });
        }

    });


    // rejection submit function
    $(document).on('click', '.rejection_modal_submit', function (event) {
        event.preventDefault();
        var intern_id = $('.rejection_modal_submit').attr('data-id');
        var reject_msg = $('#rejection_reason_val').val();
        if(reject_validation()==true){
            $.ajax({
            url: "<?php echo base_url(); ?>public/index.php/Admin_controller/rejection_con",
            method: "POST",
            data: {
                intern_id: intern_id,
                reject_msg: reject_msg,
            },
            dataType: "json",
            success: function (res) {
                console.log("Rejection Result");
                console.log(res);
                fetch_user_data();
                $('#rejection_modal').modal('hide');
                $('#accept_reject_modal').modal('hide');
            },
            error: function (er) {
                console.log('Sorry Try Again ... Rejection submission  ajax');
                console.log(er);
            }
        });
            
        }
        
    });


    // custome dropdown value selection function
    $(document).on('click','.click_get_val',function(event){
        event.preventDefault();
        var findex_tmp = $('.click_get_val');
        var get_findex =findex_tmp.index($(this));
        var get_text = $('.custome_drp_text_content:eq('+get_findex+')').attr("data-txt");
        var get_img = $('.custome_img_style:eq('+get_findex+')').attr("data-img");
        
        // text getting function
        var final_text = "";
        if (get_text==="web") {
            final_text="Web App Development";
        }
        else if(get_text==="app"){
            final_text="App Development";
        }
        else{
            final_text = "IOT Development";
        }
        $('#selected_val_custome_drp_txt').text(final_text);
        $('#selected_val_custome_drp_txt').attr('data-final-res',get_text);
        var url_img = "<?php echo base_url(); ?>assets/aboutimages/"+get_img;
        $('.img_add_div').attr('src',url_img);
        $('.custome_select_body').css('display','none');
        get_message_data();

    });

    function get_message_data(){
        // alert('ji');
        var message_txt = $('#selected_val_custome_drp_txt').attr('data-final-res');
        alert(message_txt);
        $.ajax({
            url:"<?php echo base_url('public/index.php/Admin_controller/get_message_data'); ?>",
            method:"POST",
            dataType:"JSON",
            data:{
                message_domain:message_txt,
            },
            success:function(res){
                console.log("after select list using ajax");
                console.log(res);
                alert(res);
            },
            error:function(er){
                console.log("Sorry TryAgain get message data");
                console.log(er);
            }
        });
    }

    // cursor click visible div
    $(document).on('click','.drp_click_div',function(event){
        event.preventDefault();
        $('.custome_select_body').css('display','inline');
    });
</script>


</html>