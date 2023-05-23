<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Quantanics Internship</title>
    <!--semantic ui cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
        integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/internhome.css?version=<?php echo rand(); ?>">
    <!-- google font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto%3A400&display=swap"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- profile cards css file -->
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>/assets/custom/css/profile_card.css?version=<?php echo rand(); ?>">

    <!-- chat css file -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/custom/css/chat.css?version=<?php echo rand(); ?>">

    <!-- chart js file -->
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/assets/custom/js/chat.js?version=<?php echo rand(); ?>"></script>

</head>

<body>

    <?php $session = \Config\Services::session(); ?>

    <?php require_once "Header.php"; ?>

    <div class="container-fluid">
        <!-- <div class="d-flex align-items-start"> -->
        <div class="row">
            <div class="top_nav">
                <div class="nav flex-row nav-pills me-" id="v-pills-tab" role="tablist" aria-orientation="vertical"
                    style="margin-top:5px;font-size: 1rem;">
                    <button class="navbtn show active" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                        aria-selected="true">Profile</button>
                    <button class="navbtn" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false">Task</button>
                    <button class="navbtn" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                        aria-selected="false">Chat</button>
                    <button class="navbtn" id="v-pills-payment-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-payment" type="button" role="tab" aria-controls="v-pills-payment"
                        aria-selected="false">Payment
                    </button>
                </div>
            </div>



            <div class="col-lg-12 col-sm-12"><br>
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- first table -->
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab" style="width:800px; margin-left: 250px;">
                        <div class="jumbotron border border-1 rounded">
                            <div class="card user-card-full">
                                <div class="intern_details_content"></div>
                            </div>
                        </div>
                    </div>

                    <!-- second table -->
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <div class="jumbotron border border-2 shadow shadow-sm rounded " style="">
                            <div class="d-flex p-2 flex-row">
                                <p class="sortby" style="margin-top:8px;">Show</p>
                                <select id="selectoption" class="form-select" aria-label="Default select example"
                                    style="font-size:15px; width:140px;">
                                    <option value="1">All task</option>
                                    <option value="2">All task</option>
                                    <option value="3">All task</option>
                                    <option value="4">All task</option>
                                </select>
                                <p class="sortby">Sort by</p>
                                <select id="selectoption" class="form-select" aria-label="Default select example"
                                    style="font-size:15px; width:140px;">
                                    <option value="1">Auto</option>
                                    <option value="2">Processing</option>
                                    <option value="3">Inprocessing</option>
                                    <option value="4">Completed</option>
                                </select>
                                <!-- <nav> -->
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                    <!-- <button type="button" class="btn btn-light"><i class="fas fa-undo fa-2x"
                                            style="color: #0492c2; margin-top:-3px;"></i></button> -->

                                    <!-- <button class="btn btn-light" id="nav-tasktable" data-bs-toggle="tab"
                                        data-bs-target="#nav-tasktable"><i class="fa fa-list-ul fa-2x" aria-hidden="true"
                                            style="color: #0492c2; margin-top:-3px;" type="button"></i>
                                    </button>

                                    <button type="button" class="btn btn-light" id="pills-navgraph-tab"
                                        data-bs-toggle="pill" data-bs-target="#pills-navgraph" role="tab"
                                        aria-selected="true" aria-controls="pills-navgraph"><i
                                            class="fa fa-line-chart fa-2x" aria-hidden="true"
                                            style="color: #0492c2; margin-top:-3px;"></i></button> -->
                                    <li class="nav-item" role="presentation">
                                        <button type="button" class="nav-link" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true"
                                            style="margin-left:4px; margin-top:3px;"><i
                                                class="fas fa-undo fa-1x"></i></button>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="ture"
                                            style="margin-left:4px; margin-top:3px;"><i class="fa fa-list-ul fa-1x"
                                                type="button"></i>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-contact" type="button" role="tab"
                                            aria-controls="pills-contact" aria-selected="false"
                                            style="margin-left:4px; margin-top:3px;"><i class="fa fa-line-chart fa-1x"
                                                aria-hidden="true"></i></button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button type="button" class="nav-link" data-bs-toggle="modal"
                                            data-bs-target="#task_form" type="button" aria-selected="true"
                                            style="margin-left:4px; margin-top:3px;"><i
                                                class="fa fa-edit fa-1x"></i></button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                                    aria-labelledby="pills-profile-tab">

                                    <div class="table-responsive-xl">
                                        <table class="table" style="font-size:1.2rem;">
                                            <tr class="tabheader">
                                                <th>Check In</th>
                                                <th>Check Out</th>
                                                <th>Task Date</th>
                                                <th>Task</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Assignee</th>
                                                <th>Remark</th>
                                                <th>Command</th>
                                                <th>Correction Count</th>
                                                <th>Completion File</th>
                                            </tr>

                                            <tr>
                                                <td>09.30 AM</td>
                                                <td>07.30 PM</td>
                                                <td>23/04/2023</td>
                                                <td>import table</td>
                                                <td>Import a table in website</td>
                                                <td>Onprocessing</td>
                                                <td>Naveen</td>
                                                <td>Processing</td>
                                                <td>No comments</td>
                                                <td>8</td>
                                                <td>Uploading</td>
                                            </tr>

                                            <tbody class="task_data">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane fade  " id="pills-contact" role="tabpanel"
                                    aria-labelledby="pills-contact-tab">
                                    <h2>charts</h2>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" tabindex="-1" role="dialog" id="task_form">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="container-fluid">
                                    <div class="modal-header">
                                        <h2 class="text-center text-success" style="margin-left: 140px;">Today Tasks
                                        </h2>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row m-3">
                                            <div class="col-lg-6">
                                                <div class="form-outline  input-container">
                                                    <input type="text" id="check_in" name="" class="input"
                                                        placeholder=" " onfocus="check_in()" onblur="check_is_time()" />
                                                    <label class="placeholder label" style="color:black">Check
                                                        In
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-outline  input-container">
                                                    <input type="text" id="check_out" name="" class="input"
                                                        placeholder=" " onfocus="check_out()"
                                                        onblur="check_is_time_one();validateTime()" />
                                                    <label class="placeholder label" style="color:black">Check
                                                        Out
                                                    </label>
                                                    <!-- <span id="Time_err"></span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-3">
                                            <select class="form-select form-select-lg" id="task_type" name="task_type"
                                                class="form-control form-control-lg" aria-label="Default select example"
                                                onblur="ValidateTaskType()">
                                                <option selected disabled value="">Choose Task Type</option>
                                                <option value="assigned_task" id="assigned_task">Assigned Tasks
                                                </option>
                                                <option value="new_task" id="assigned_person">Assigned Person
                                                </option>
                                            </select>
                                            <!-- <span id="tasktyp_err"></span> -->
                                        </div>



                                        <div class="m-3">
                                            <div id="task_name_input">
                                                <div class="form-outline mb-4 input-container ">
                                                    <input type="text" id="task" name="task" class="input"
                                                        placeholder=" " onblur="validateTaskName()" />
                                                    <label class="placeholder label" style="color:black">Task
                                                    </label>
                                                </div>
                                                <!-- <span id="Task_err"></span> -->
                                            </div>
                                        </div>




                                        <div class="m-3">
                                            <div class="form-outline mb-4 input-container">
                                                <input type="text" id="Description" name="Description" class="input"
                                                    placeholder=" " onblur="validateDescription()" />
                                                <label class="placeholder label" style="color:black">Description</label>
                                                <!-- <span id="Desc_err"></span> -->
                                            </div>
                                        </div>

                                        <div class="m-3">
                                            <!-- <div class="form-outline mb-4 input-container">
                                                <input type="text" id="Status" onblur="Status()" name="" class="input"
                                                    placeholder=" " />
                                                <label class="placeholder label" style="color:black">Task
                                                    Status</label>
                                            </div> -->
                                            <select class="form-select form-select-lg" id="task_status" name=""
                                                class=" form-control form-control-lg"
                                                aria-label="Default select example" onblur="validate_Task_status()">
                                                <option selected disabled value="">Choose Task Status</option>
                                                <option value="in_progress">In Progress</option>
                                                <option value="submitted">Submitted Evaluation</option>
                                            </select>
                                            <!-- <span id="task_status_err"></span> -->
                                            <!-- </div> -->
                                        </div>

                                        <div class="m-3">
                                            <div class="drp_exist mb-3">
                                                <select class="form-select form-select-lg" id="existing_tasks"
                                                    name="existing_tasks" class="form-control form-control-lg"
                                                    aria-label="Default select example">
                                                    <option selected disabled>Choose Task</option>
                                                    <option value="process">Process</option>
                                                </select>
                                                <!-- <span id="choose_task_err"></span> -->
                                            </div>
                                            <div class="new_task_assignee mb-3">
                                                <select name="assignee" id="assignee" class="form-select form-select-lg"
                                                    onblur="validate_assign_person()">
                                                    <option value="" selected disabled>Choose Assigned Person
                                                    </option>
                                                    <option value="assign">Assigned
                                                    </option>
                                                </select>
                                                <!-- <span id="choose_assign_err"></span> -->
                                            </div>

                                        </div>
                                        <div class="m-3">
                                            <div class="target_date">
                                                <div class="form-outline mb-4 input-container">
                                                    <input type="text" name="targetdate" class="input" id="targetdate"
                                                        placeholder=" " onfocus=datefun()  onblur=hideDatePicker() />
                                                        <label for="targetdate" class="placeholder">Target Date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="file_dec"></div>


                                        <div class="row m-3">
                                            <div class="col-4"></div>
                                            <div class="col-4">
                                                <button type="button"
                                                    class="btn btn-lg mx-auto border border-2 border-info rounded text-info next_click"
                                                    style="width:100%" id="task" value="Insert">Submit</button>
                                            </div>
                                            <div class="col-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <!-- Thrid table -->
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <!-- <div class="jumbotron border border-2 shadow shadow-md rounded"> -->
                        <!-- <h2 class="text-center text-info">Chat</h2> -->
                        <div id="framechat">
                            <div class="content">
                                <div class="header">
                                    <i class="fa fa-comments"></i>
                                    <p id="chatbox_title">CHATBOX</p>
                                </div>
                                <div class="messages">
                                    <ul class="msg_li">
                                    </ul>
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
                                        <textarea class="Text-Box" id="message" type="text"
                                            placeholder="Write your message..." style="padding-left:1rem;"
                                            data-emojiable="true"></textarea>
                                        <button id="send" class="submit msg_send_click"><i class="fa fa-paper-plane"
                                                aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <div class="col-lg-0 col-md-0 col-sm-0"></div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- fourth tab -->
                    <div class="tab-pane fade" id="v-pills-payment" role="tabpanel"
                        aria-labelledby="v-pills-payment-tab">
                        <br>
                        <div class="row">
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-6">
                                <div class="card text-center">
                                    <div class="card-header">
                                        Payment Registeration
                                    </div>
                                    <div class="card-body">
                                        <form id="form_payment" enctype="multipart/form-data" method="post">
                                            <div class="m-3">
                                                <input type="text" name="amount" id="amount"
                                                    class="form-control form-control-md " placeholder="Paid Amount..">
                                            </div>
                                            <div class="m-3">
                                                <input type="file" name="payment_proof" id="payment_proof"
                                                    class="form-control form-control-md">
                                            </div>
                                            <div class="mx-auto">
                                                <button type="button"
                                                    class="btn btn-md border border-2 border-muted text-muted payment_click_submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Total Amount <span id="total_payment_id"></span> paid Amount <span
                                            id="paid_amount"></span> = Remaining <span id="remaining_amount"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- </div> -->


    <!-- <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
         <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
        </div> -->


    <br>
    <br>

    <?php require "Footer.php"; ?>

    <script>
        // $('.messages').animate({ scrollTop: $('.messages ul').height() }, "fast");

        // function newMessage() {

        //     var message = $('.input-group textarea').val();
        //     if ($.trim(message) == '') {
        //         message = $('.input-group .emoji-wysiwyg-editor').html();
        //         if ($.trim(message) == '') {
        //             return false;
        //         }
        //     }
        //     $('<li class="sent"><img src="<?php echo base_url("assets/workimages/img2.jpg"); ?>" alt="username" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
        //     $('.input-group textarea').val('');
        //     $('.input-group .emoji-wysiwyg-editor').html('');

        //     $('.messages').animate({ scrollTop: $('.messages ul').height() }, "fast");
        // };

        $('.new_task_assignee').css('display', 'none');
        $('.drp_exist').css('display', 'none');
        $('.target_date').css('display', 'none');

        // function onchange value 
        $(document).on('change', '#task_type', function () {
            // alert('hi');
            var task_type = $('#task_type').val();
            // alert(task_type);
            if (task_type === "assigned_task") {
                $('.new_task_assignee').css('display', 'none');
                $('.target_date').css('display', 'none');
                $('.drp_exist').css('display', 'inline');
                $('#task_name_input').css('display', 'none');
                $('#taskname').val('');
                $('#existing_tasks').val('');
                $('#assignee').val('');
            } else if (task_type === "new_task") {
                $('.drp_exist').css('display', 'none');
                $('.new_task_assignee').css('display', 'inline');
                $('#task_name_input').css('display', 'inline');
                $('.target_date').css('display', 'inline');
                $('#existing_tasks').val('');
                $('#taskname').val('');
                $('#assignee').val('');
            }
        });

        $(document).on('change', '#Task_Status', function () {
            // alert("hai");
            // if()
            var get_task_val = $('#Task_Status').val();
            // alert(get_task_val);
            if (get_task_val == "submitted") {
                $('.file_dec').append('<div id="file_link">' +
                    '<div class="m-3">' +
                    '<div class="form-outline mb-4 input-container">' +
                    '<input type="text" id="file_link_val" name="file_link_val"' +
                    'class="input" placeholder=""' +
                    'onblur="validateFileLink()" />' +
                    '<label class="placeholder label" style="color:black">File' +
                    ' Link Description</label>' +
                    '</div>' +
                    // '<span id="file_link_val_err"></span>' +
                    '</div>' +
                    '</div>');
            }
            if (get_task_val == "in_progress") {
                $('.file_dec').text("");
            }
        });

        function check_in() {
            var input = document.getElementById("check_in");
            input.type = "time";
        }

        function check_is_time() {
            var input = document.getElementById("check_in");
            input.type = "text";
        }

        function check_out() {
            var input = document.getElementById("check_out");
            input.type = "time";
        }

        function check_is_time_one() {
            var input = document.getElementById("check_out");
            input.type = "text";
        }

        // message sending function 
        $('.submit').click(function () {
            var intern_id = "<?php echo $session->get('intern_id'); ?>";
            var intern_name = $('.intern_name').text();
            var domain = $('.submit').attr('get_domain');
            var profile_name = $('.submit').attr('profile_data');
            var intern_msg = $('.input-group textarea').val();
            console.log(profile_name);
            console.log(intern_id);
            console.log(intern_name);
            console.log(domain);
            console.log(intern_msg);
            $.ajax({
                url: "<?php echo base_url('public/index.php/Intern_controller/msg_send'); ?>",
                method: "POST",
                data: {
                    intern_id: intern_id,
                    intern_name: intern_name,
                    domain: domain,
                    profile_name: profile_name,
                    intern_msg: intern_msg,
                },
                dataType: 'json',
                success: function (res) {
                    console.log("message insertion ");
                    console.log(res);
                    $('#message').val('');
                    message_retrive();
                },
                error: function (er) {
                    console.log("Message Sending error");
                    console.log(er);
                }
            });
        });

        // onload function
        $(document).on('load', '.messages', function (event) {
            event.preventDefault();
            message_retrive();
        });

        // message displaying fucntion
        message_retrive();
        function message_retrive() {
            // alert('ghj');
            $('.msg_li').empty();
            var intern_id = "<?php echo $session->get('intern_id'); ?>";
            $.ajax({
                url: "<?php echo base_url('public/index.php/Intern_controller/intern_msg_retrive'); ?>",
                method: "POST",
                dataType: "json",
                success: function (result) {

                    console.log("intern message records");
                    console.log(result);
                    var element = $();
                    result.forEach(function (item) {
                        var image_profile = "";
                        if (item.messager_status === "intern") {
                            if (item.mprofile === "empty") {
                                image_profile = "<?php echo base_url(); ?>public/public/uploads/common_profile.png";
                            } else {
                                image_profile = "<?php echo base_url(); ?>public/public/uploads/" + item.mid + "/" + item.mprofile;
                            }
                        } else {
                            image_profile = "<?php echo base_url(); ?>public/public/uploads/admin_profile.png";

                        }
                        if (item.mid === intern_id) {
                            element = element.add('<li class="send"><img src="' + image_profile + '" alert="username"><p>' + item.msg + '</p></li>')
                        } else {
                            element = element.add('<li class="replies"><img src="' + image_profile + '" alert="username"><p>' + item.msg + '</p></li>')
                        }


                        $('.msg_li').append(element);
                    });
                    // <li class="sent">
                    //     <img src="<?php echo base_url("assets/workimages/img4.jpg"); ?>" alt="username" />
                    //     <p>hi</p>
                    // </li>
                    // <li class="replies">
                    //     <img src="<?php echo base_url("assets/workimages/img3.jpg"); ?>" alt="username" />
                    //     <p>Hello</p>
                    // </li>



                },
                error: function (rr) {
                    console.log("Message Retrive Error");
                    console.log(rr);
                }
            });
        }
        // $('#framechat .content .message-input ').on(function (e) {
        $('#framechat .content .input-group ').on('keydown', function (e) {
            if (e.which == send) {
                // newMessage();
                return false;
            }
        });

        retrive_data();

        function retrive_data() {
            var intern_id = "<?php echo $session->get('intern_id'); ?>";

            $.ajax({
                url: "<?php echo base_url(); ?>public/index.php/Intern_controller/getdata",
                method: "POST",
                dataType: "json",
                data: {
                    intern_id: intern_id,
                },
                success: function (res) {
                    console.log("after login intern home page ajax");
                    console.log(res)
                    $('.intern_details_content').empty();
                    $('#existing_tasks').empty();
                    $('#assignee').empty();

                    // payment conditons
                    if (res['profile_record'][0]['payment_status'] === "paid") {
                        $('.payment_btn').removeClass("d-none");
                        $('.payment_btn').attr('class', 'nav-link d-inline');
                        $('#total_payment_id').text(res['payment_data']['total_payment']);
                        $('#paid_amount').text(res['payment_data']['paid_amount']);
                        $('#remaining_amount').text(res['payment_data']['remaining_amount']);

                    } else if (res['profile_record'][0]['payment_status'] === "free") {
                        $('.payment_btn').removeClass("d-inline");
                        $('.payment_btn').attr('class', 'nav-link  d-none');
                    }



                    res['profile_record'].forEach(function (item) {
                        var element = $();
                        $('.submit').attr('get_domain', item.domain);
                        $('.submit').attr('profile_data', item.profile);

                        // profile image conditions
                        var file_name = "<?php echo base_url(); ?>public/public/uploads/" + item.intern_id + "/" + item.profile;
                        var orignal_file_location = "";
                        if (imgError(file_name) === true) {
                            orignal_file_location = file_name;
                        } else {
                            orignal_file_location = "<?php echo base_url(); ?>public/public/uploads/common_profile.png";
                        }

                        element = element.add('<div class="row" >' +
                            '<div class="col-sm-3 bg-c-lite-green user-profile">' +
                            '<div class="card-block text-center text-white" style="margin-top:2rem;">' +
                            '<div class="m-b-25">' +
                            '<img src="' + orignal_file_location + '" class="img-radius"  alt="User-Profile-Image">' +
                            '</div> <br>' +
                            '<h6 class="f-w-600">User Name</h6>' +
                            '<p class="intern_name">' + item.sname + '</p>' +
                            '<i class="fas fa-edit"></i>' +
                            '</div>' +
                            '</div>' +
                            '<div class="col-sm-8">' +
                            '<div class="card-block"><br>' +
                            '<div class="row">' +
                            '<div class="col-sm-6">' +
                            '<p class="m-b-2 f-w-600">Register Number</p>' +
                            '<h6 class="text-muted f-w-400">' + item.regno + '</h6>' +
                            '</div>' +
                            '<div class="col-sm-6">' +
                            '<p class="m-b-2 f-w-600">Department</p>' +
                            '<h6 class="text-muted f-w-400">' + item.dept + '</h6>' +
                            '</div>' +
                            '<div class="col-sm-6">' +
                            '<p class="m-b-2 f-w-600">Year</p>' +
                            '<h6 class="text-muted f-w-400">' + item.year + '</h6>' +
                            '</div>' +
                            '<div class="col-sm-4">' +
                            '<p class="m-b-2 f-w-600">College name</p>' +
                            '<h6 class="text-muted f-w-400">' + item.clg_name + '</h6>' +
                            '</div>' +
                            '</div>' +
                            '<br>' +
                            '<div class="row">' +
                            '<div class="col-sm-6">' +
                            '<p class="m-b-2 f-w-600">Start date</p>' +
                            '<h6 class="text-muted f-w-400">' + item.end_date + '</h6>' +
                            ' </div>' +
                            '<div class="col-sm-4">' +
                            '<p class="m-b-2 f-w-600">End date</p>' +
                            '<h6 class="text-muted f-w-400">' + item.end_date + '</h6>' +
                            '</div>' +
                            '<div class="col-sm-6">' +
                            '<p class="m-b-2 f-w-600">Email</p>' +
                            '<h6 class="text-muted f-w-400">' + item.email_id + '</h6>' +
                            ' </div>' +
                            '<div class="col-sm-4">' +
                            '<p class="m-b-2 f-w-600">Mobile no.</p>' +
                            '<h6 class="text-muted f-w-400">' + item.mobile + '</h6>' +
                            '</div>' +
                            '</div>' +
                            '<br>' +
                            '<div class="row">' +
                            '<div class="col-md-6">' +
                            '<p class="m-b-2 f-w-600">Bonafide.</p>' +
                            '<span class="text-muted f-w-400 font-weight-bold" style="padding:10px;background-color:#B8B8B8;height:max-content;width:max-content;border-radius:10%;"><a href="<?php echo base_url(); ?>public/public/uploads/' + item.intern_id + '/' + item.profile + '" download>' + item.profile + '</a> <i class="fa fa-download"></i></span>' +
                            '</div>' +
                            '<div class="col-md-6">' +
                            '<p class="m-b-2 f-w-600">ID Card.</p>' +
                            '<span class="text-muted f-w-400 font-weight-bold" style="padding:10px;background-color:#B8B8B8;height:max-content;width:max-content;border-radius:10%;"><a href="<?php echo base_url(); ?>public/public/uploads/' + item.id_card + '/' + item.id_card + '" download>' + item.id_card + '</a><i class="fa fa-download"></i> </span>' +
                            '</div>' +
                            '</div>' +
                            '<br>' +
                            '<div class="row">' +
                            '<div class="col-md-6">' +
                            '<p class="m-b-2 f-w-600">Resume.</p>' +
                            '<span class="text-muted f-w-400 font-weight-bold" style="padding:10px;background-color:#B8B8B8;height:max-content;width:max-content;border-radius:10%;"><a href="<?php echo base_url(); ?>public/public/uploads/' + item.resume + '/' + item.resume + '" download>' + item.resume + '</a><i class="fa fa-download"></i> </span>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>');

                        $('.intern_details_content').append(element);
                    });
                    href = "<?php echo base_url('/public/index.php/Home/load_option/iotservice'); ?>";


                    $('#existing_tasks').append('<option selected disabled value="">Choose Tasks</option>');
                    res['assigned_task'].forEach(function (item) {
                        var element = $();

                        element = element.add('<option value=' + item.id + ' data-task="' + item.task + '">' + item.task + '</option>');

                        $('#existing_tasks').append(element);
                    });


                    $('#assignee').append('<option selected disabled value="">Choose Assigned Person</option>');
                    res['assignee_arr'].forEach(function (item) {
                        var ele = $();
                        ele = ele.add('<option value=' + item.user_id + '>' + item.emp_name + '</option>');
                        $('#assignee').append(ele);
                    });


                },
                error: function (er) {
                    console.log(er);
                    console.log('intern home page ajax failed');
                }
            });
        }

        // validate time

        // function validateTime() {
        //     var checkinTime = document.getElementById("check_in").value;
        //     var checkoutTime = document.getElementById("check_out").value;
        //     if (checkinTime >= checkoutTime) {
        //         // alert("Check-out time must be after check-in time!");
        //         $('#Time_err').text("Check-out time must be after check-in time!");
        //         $("#Time_err").css({
        //             "color": "red",
        //             "font-size": "10px"
        //         });
        //         return false;
        //     } else {
        //         $('#Time_err').text("");
        //         return true;
        //     }
        // }


        // function Status() {
        //     var Status1 = document.getElementById("Status").value;
        //     if (Status1.trim() === "" || Status1.length < 10) {
        //         $('#status_err').text("Spaces and <10 character lengths not allowed.");
        //         $("#status_err").css({
        //             "color": "red",
        //             "font-size": "10px"
        //         });
        //         return false;
        //     } else {
        //         $('#status_err').text("");
        //         return true;
        //     }
        // }



        // function validateTaskName() {
        //     const TaskNameInput = document.getElementById("task").value;
        //     const regex = /^[a-zA-Z]+$/;
        //     if (!regex.test(TaskNameInput)) {
        //         $('#Task_err').text("Enter a Task Name.");
        //         $("#Task_err").css({
        //             "color": "red",
        //             "font-size": "10px"
        //         });
        //         return false;
        //     } else {
        //         $('#Task_err').text("");
        //         return true;
        //     }
        // }


        // function validateDescription() {
        //     const DescriptionInput = document.getElementById("Desc");
        //     const Description = DescriptionInput.value;
        //     const regex = /^[a-zA-Z]+$/;
        //     if (!regex.test(Description)) {
        //         $('#Desc_err').text("Enter a Valid Description");
        //         $("#Desc_err").css({
        //             "color": "red",
        //             "font-size": "10px"
        //         });
        //         return false;
        //     } else {
        //         $('#Desc_err').text("");
        //         return true;
        //     }
        // }


        // function ValidateTaskType() {
        //     var choice = document.getElementById("task_type");
        //     if (choice.value === "") {
        //         $('#tasktyp_err').text("Select a Task Type");
        //         $("#tasktyp_err").css({
        //             "color": "red",
        //             "font-size": "10px"
        //         });
        //         return false;
        //     }
        //     else {
        //         $('#tasktyp_err').text("");
        //         return true;
        //     }
        // }

        // function validate_Task_status() {
        //     var choice = document.getElementById("Status");
        //     if (choice.value === "") {
        //         $('#task_status_err').text("Select a Task Status");
        //         $("#task_status_err").css({
        //             "color": "red",
        //             "font-size": "10px"
        //         });
        //         return false;
        //     }
        //     else {
        //         $('#task_status_err').text("");
        //         return true;
        //     }
        // }


        // function validate_choose_task() {
        //     var choice = document.getElementById("existing_tasks");
        //     if (choice.value === "") {
        //         $('#choose_task_err').text("Select a Task Status");
        //         $("#choose_task_err").css({
        //             "color": "red",
        //             "font-size": "10px"
        //         });
        //         return false;
        //     }
        //     else {
        //         $('#choose_task_err').text("");
        //         return true;
        //     }
        // }

        // function validate_assign_person() {
        //     var choice = document.getElementById("assignee");
        //     if (choice.value === "") {
        //         $('#choose_assign_err').text("Select a Task Status");
        //         $("#choose_assign_err").css({
        //             "color": "red",
        //             "font-size": "10px"
        //         });
        //         return false;
        //     }
        //     else {
        //         $('#choose_assign_err').text("");
        //         return true;
        //     }

        // }

        // function validateFileLink() {
        //     const FileLinkInput = document.getElementById("file_link_val");
        //     const FileLink = FileLinkInput.value;
        //     const regex = /^[a-zA-Z]+$/;
        //     if (!regex.test(FileLink)) {
        //         $('#file_link_val_err').text("Enter a Description");
        //         $('#file_link_val_err').css({
        //             "color": "red",
        //             "font-size": "10px"
        //         });
        //         return false;
        //     } else {
        //         $('#file_link_val_err').text("");
        //         return true;
        //     }
        // }




        // function task1() {
        //     var Task1 = document.getElementById("task1").value;
        //     if (Task1.trim() === "" || Task1.length < 10) {
        //         $('#Task_err').text("Spaces and <10 character lengths not allowed.");
        //         $("#Task_err").css({
        //             "color": "red",
        //             "font-size": "10px"
        //         });
        //         return false;
        //     } else {
        //         $('#Task_err').text("");
        //         return true;
        //     }
        // }




        // function Description() {
        //     var Description1 = document.getElementById("Description").value;
        //     if (Description1.trim() === "" || Description1.length < 10) {
        //         $('#Description_err').text("Spaces and <10 character lengths not allowed.");
        //         $("#Description_err").css({
        //             "color": "red",
        //             "font-size": "10px"
        //         });
        //         return false;
        //     } else {
        //         $('#Description_err').text("");
        //         return true;
        //     }
        // }




        function fetch_data() {
            // alert("fetching");
            var intern_id = "<?php echo $session->get('intern_id'); ?>";
            console.log(intern_id);
            var intern = document.getElementById("daily_table").value;
            // console.log(intern);
            $.ajax({
                url: "<?php echo base_url() ?>public/index.php/Intern_controller/fetch_data",
                method: "POST",
                dataType: "json",
                data: {
                    intern_id: intern_id,
                },
                success: function (res) {
                    console.log(res);
                    console.log("ajax woking");
                    $('.task_data').empty();

                    res.forEach(function (items) {
                        console.log("entering forEach");
                        var element = $();
                        var remark = " ";
                        var comment_text = "";
                        var correction_count = "";
                        var completion_file = "";
                        if (items.remark == null) {
                            remark = " ";
                        } else {
                            remark = items.remark;
                        }

                        if (items.comment == null) {
                            comment_text = "";
                        } else {
                            comment_text = items.comment;
                        }

                        if (items.correction_count == null) {
                            correction_count = "";
                        } else {
                            correction_count = items.correction_count
                        }

                        if (items.completion_file == null) {
                            completion_file = "";
                        } else {
                            completion_file = items.completion_file;
                        }
                        element = element.add('<tr>' +
                            '<th scope="row">' + items.check_in + '</th>' +
                            '<td>' + items.check_out + '</td>' +
                            '<td>' + items.tdate + '</td>' +
                            '<td>' + items.task + '</td>' +
                            '<td>' + items.task_desc + '</td>' +
                            '<td>' + items.task_status + '</td>' +
                            '<td>' + items.emp_name + '</td>' +
                            '<td>' + remark + '</td>' +
                            '<td>' + comment_text + '</td>' +
                            '<td>' + correction_count + '</td>' +
                            '<td>' + completion_file + '</td>' +
                            '</tr>');
                        $('.task_data').append(element);
                    });

                },
                error: function (er) {
                    console.log(er);
                    console.log('intern home page ajax failed');
                }
            });
        }


        $(document).on('click', '#task', function (event) {
            // if (validateTime()== false) {
            //     alert("Enter Required data");
            // }
            // else{
            //     // if ((task1() == false)) {
            //     // alert("Enter Required data");
            //     // } else {
            //     if (Description() == false) {
            //         alert("Enter Required data");
            //     } else {
            //         if (Status() == false) {
            //             alert("Enter Required data");
            //         } else {
            display_data()
            //         }
            //     }
            // // }
            // }
        });

        function display_data() {
            event.preventDefault();
            var intern_id = "<?php echo $session->get('intern_id'); ?>";
            var check_in = $('#check_in').val();
            var check_out = $('#check_out').val();
            var taskname  = $('#taskname').val();
            var Description = $('#Description').val();
            var Status = $('#Status').val();
            var task_type = $('#task_type').val();
            var assignee = $('#assignee').val();
            var task = $('#existing_tasks').val();
            var domain = $('.submit').attr('get_domain');
            var task_text = $('#existing_tasks').attr('data-task');
            // console.log(task_text);

            var tmp_assignee = "";
            var tmp_task_id = "";
            if (assignee === null) {
                tmp_assignee = "empty";
                tmp_task_id = task;
                taskname = "empty";

            } else {
                tmp_assignee = assignee;
                tmp_task_id = "empty";
                taskname = $('#taskname').val();
            }

            var file_link = "";
            if (Status === "submitted") {
                file_link = $('#file_link_val').val();
            } else {
                file_link = "empty";
            }
            console.log(intern_id);
            console.log(check_in);
            console.log(check_out);
            console.log(taskname);
            console.log(Description);
            console.log(Status);
            console.log(tmp_assignee);
            console.log(tmp_task_id);
            console.log(domain);
            console.log(file_link);



            $.ajax({
                url: "<?php echo base_url('public/index.php/Intern_controller/task'); ?>",
                method: "POST",
                dataType: "json",
                data: {
                    intern_id: intern_id,
                    check_in: check_in,
                    check_out: check_out,
                    taskname: taskname,
                    Description: Description,
                    Status: Status,
                    tmp_assignee: tmp_assignee,
                    tmp_task_id: tmp_task_id,
                    domain: domain,
                    file_link: file_link,
                },
                success: function (res) {
                    console.log("intern daily update");
                    console.log(res);

                    if (res === true) {
                        reset_task_form();
                        fetch_data();
                        console.log("Data Updated successfully");

                    } else if (res === false) {
                        alert("Data Not Instered properly");

                    }
                    // alert(res);
                    // console.log(res);


                },
                error: function (er) {
                    console.log("Login Error");
                    console.log(er);
                }
            });
        }


        function reset_task_form() {
            $('#check_in').attr('type', 'text');
            $('#check_in').val('');
            $('#check_out').attr('type', 'text');
            $('#check_out').val('');
            $('#task_type').val('');
            $('#taskname').val('');
            $('#Description').val('');
            $('#Status').val('');
            $('#existing_tasks').val('');
            $('#assignee').val('');
            $('#targetdate').attr('type', 'text');
            $('#targetdate').val('');
            $('#file_link_val').val('');

        }



        $(document).on('change', '#Status', function (event) {
            event.preventDefault();
            var task_status = $('#Status').val();
            // alert(task_status);
            $('#file_link_val').val('');
            if (task_status === "submitted") {
                $('#file_link').css('display', 'inline');
            } else if (task_status != "submitted") {
                $('#file_link').css('display', 'none');

            }
            // $('#file_link').css('display','inline');
        });



        // payment submit function
        $(document).on('click', '.payment_click_submit', function (event) {
            event.preventDefault();
            var formData = new FormData();
            var paid_amount = $('#amount').val();
            // var payment_proof = $('#payment_proof').val();
            var intern_id = "<?php echo $session->get('intern_id'); ?>";
            formData.append('paid_amount', paid_amount);
            formData.append('file', document.getElementById("payment_proof").files[0]);
            formData.append('intern_id', intern_id);
            // formData.append('total_amount',)
            $.ajax({
                url: "<?php echo base_url(); ?>public/index.php/Intern_controller/payment_submit_fun",
                method: "POST",
                //dataType:"json",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function (res) {
                    console.log("ajax payment form submission..");
                    console.log(typeof res);
                    $('#amount').val('');
                    $('#payment_proof').val('');
                    if (res === "1") {
                        retrive_data();
                    }
                },
                error: function (er) {
                    console.log('Sorry TryAgain..');
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


        function datefun() {
            var date = document.getElementById("targetdate");
            date.type = "date";
        }

        function hideDatePicker() {
            var date = document.getElementById("targetdate");
            if (date.value === "") {
                date.type = "text";
            }
        }

    </script>
</body>

</html>