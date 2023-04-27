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
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/custom/css/profile_card.css?version=<?php echo rand(); ?>">

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
            <div class="col-lg-2 col-sm-3">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                        aria-selected="true"><i class="fa fa-address-card fa-2x"></i></button>
                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false"><i class="fa fa-edit fa-2x"></i></button>
                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                        aria-selected="false"><i class="fa fa-commenting fa-2x"></i></button>
                </div>
            </div>
            <div class="col-lg-10 col-sm-12">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="jumbotron border border-1 rounded">
                            <div class="card user-card-full">
                                <div class="intern_details_content"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <div class="jumbotron border border-2 shadow shadow-sm rounded " style="">
                            <nav class="mt-4 m-3">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Today</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">Tasks</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row mt-4">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-8">
                                            <div
                                                class="jumbotron border border-2 border-info shadow shadow-sm rounded ">
                                                <br>
                                                <h2 class="text-center text-success">Today Tasks</h2>
                                                <br>
                                                <div class="row " style="padding:0;margin:0;">
                                                    <div class="col-lg-6" >
                                                        <!-- <div class="m-3"> -->
                                                            <div class="form-outline mb-4 input-container">
                                                                <input type="text" id="check_in" name="" class="input"
                                                                    placeholder=" " onfocus="check_in()"
                                                                    onblur="check_is_time()" />
                                                                <label class="placeholder label" style="color:black">Check In
                                                                </label>
                                                            </div>
                                                        <!-- </div> -->
                                                    </div>
                                                    <div class="col-lg-6" >
                                                        <!-- <div class="m-3"> -->
                                                            <div class="form-outline mb-4 input-container">
                                                                <input type="text" id="check_out" name="" class="input"
                                                                    placeholder=" " onfocus="check_out()"
                                                                    onblur="check_is_time_one();validateTime()" />
                                                                <label class="placeholder label" style="color:black">Check Out
                                                                </label>
                                                                <span id="Time_err"></span>
                                                            </div>
                                                        <!-- </div> -->
                                                    </div>
                                                </div>
                                                
                                                <div class="m-2">
                                                    <!-- <div class="form-outline mb-4 input-container"> -->
                                                    <select class="form-select form-select-lg" id="task_type"
                                                        name="task_type" class="form-control form-control-lg"
                                                        aria-label="Default select example" onblur="ValidateTaskType()">
                                                        <option selected disabled value="">Choose Task Type</option>
                                                        <option value="assigned_task">Assigned Tasks</option>
                                                        <option value="new_task">Assigned Person</option>
                                                        <!-- <option value="3">Three</option> -->
                                                    </select>
                                                    <span id="tasktyp_err"></span>
                                                    <!-- </div> -->
                                                </div>
                                                <div id="task_name_input">
                                                    <div class="m-3">
                                                        <div class="form-outline mb-4 input-container ">
                                                            <input type="text" id="task" name="task" class="input"
                                                                placeholder=" " onblur="validateTaskName()" />
                                                            <label class="placeholder label" style="color:black">Task
                                                            </label>
                                                        </div>
                                                        <span id="Task_err"></span>
                                                    </div>
                                                </div>

                                                <div class="m-3">
                                                    <div class="form-outline mb-4 input-container">
                                                        <input type="text" id="Desc" name="Desc" class="input"
                                                            placeholder=" " onblur="validateDescription()" />
                                                        <label for="Desc" class="placeholder label"
                                                            style="color:black">Task
                                                            Description</label>
                                                        <span id="Desc_err"></span>
                                                    </div>
                                                </div>
                                                <div class="m-3">
                                                    <!-- <div class="form-outline mb-4 input-container"> -->
                                                    <!-- <input type="text" id="Status" onblur="Status()" name="" class="input" placeholder=" " />
                                                        <label class="placeholder label" style="color:black">Task
                                                            Status</label>
                                                        <span id="status_err"></span> -->
                                                    <select class="form-select form-select-lg" id="Task_Status" name=""
                                                        class=" form-control form-control-lg"
                                                        aria-label="Default select example"
                                                        onblur="validate_Task_status()">
                                                        <option selected disabled value="">Choose Task Status</option>
                                                        <option value="in_progress">In Progress</option>
                                                        <option value="submitted">Submitted Evaluation</option>
                                                        <!-- <option value="3">Three</option> -->
                                                    </select>
                                                    <span id="task_status_err"></span>

                                                    <!-- </div> -->
                                                </div>


                                                <div class="m-3">
                                                    <div class="drp_exist mb-3">
                                                        <select class="form-select form-select-lg" id="existing_tasks"
                                                            name="existing_tasks" class="form-control form-control-lg"
                                                            aria-label="Default select example"
                                                            onblur="validate_choose_task()">
                                                            <option selected disabled>Choose Task</option>
                                                            <!-- <option value="assigned_task">Assigned Tasks</option> -->
                                                            <!-- <option value="new_task">Assigned Person</option> -->
                                                            <!-- <option value="3">Three</option> -->
                                                        </select>
                                                        <span id="choose_task_err"></span>
                                                    </div>
                                                    <div class="new_task_assignee mb-3">
                                                        <select name="assignee" id="assignee"
                                                            class="form-select form-select-lg"
                                                            onblur="validate_assign_person()">
                                                            <option value="" selected disabled>Choose Assigned Person
                                                            </option>
                                                        </select>
                                                        <span id="choose_assign_err"></span>
                                                    </div>
                                                </div>
                                                <div class="file_dec"></div>
                                                <!-- <div id="file_link">
                                                    <div class="m-3">
                                                        <div class="form-outline mb-4 input-container">
                                                            <input type="text" id="file_link_val" name="file_link_val" class="input" placeholder=""  onblur="" />
                                                            <label class="placeholder label" style="color:black">File Link Description</label>
                                                            <span id="file_link_Error"></span>
                                                        </div>
                                                    </div>
                                                </div> -->


                                                <div class="row m-3">
                                                    <div class="col-4"></div>
                                                    <div class="col-4">
                                                        <button type="button"
                                                            class="btn btn-lg mx-auto border border-2 border-info rounded text-info next_click"
                                                            style="width:100%" id="today_task"
                                                            value="Insert">Next</button>
                                                    </div>
                                                    <div class="col-4"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-2"></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <!-- table -->
                                    <div class="d-flex p-2 flex-row-reverse">
                                        <select class="custom-select custom-select-lg"
                                            style="margin-left:1rem;margin-right:1rem;">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <button type="button" class="btn btn-md border border-success text-success">
                                            Reset</button>
                                    </div>
                                    <div class="table-responsive-xl">
                                        <table class="table" style="font-size:1.2rem;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Check Inn</th>
                                                    <th scope="col">Check Out</th>
                                                    <th scope="col">Task Date</th>
                                                    <th scope="col">Task</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Assignee</th>
                                                    <th scope="col">Remark</th>
                                                    <th scope="col">Command</th>
                                                    <th scope="col">Correction Count</th>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                            </thead>
                                            <tbody class="task_data">
                                                <tr>
                                                    <th>hi</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                <tr>
                                                    <th>hai</th>
                                                    <td>hiiiiii</td>
                                                    <td>hello</td>
                                                    <th scope="col">Completion File</th>
                                                </tr>
                                                

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <div class="jumbotron border border-2 shadow shadow-md rounded">
                            <!-- <h2 class="text-center text-info">Chat</h2> -->
                            <div id="framechat">
                                <div class="content">
                                    <div class="header">
                                        <i class="fa fa-comments"></i>
                                        <p>CHATBOX</p>
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
                                                placeholder="Write your message..." style="padding-left:1rem;" data-emojiable="true"></textarea>
                                            <button id="send" class="submit msg_send_click"><i class="fa fa-paper-plane"
                                                    aria-hidden="true"></i>
                                            </button>
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
        <!-- </div> -->


        <!-- <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
  </div> -->
    </div>

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
        // function onchange value 
        $(document).on('change', '#task_type', function () {
            // alert('hi');
            var task_type = $('#task_type').val();
            // alert(task_type);
            if (task_type === "assigned_task") {
                $('.new_task_assignee').css('display', 'none');
                $('.drp_exist').css('display', 'inline');
                $('#task_name_input').css('display', 'none');
                $('#task1').val('');
                $('#existing_tasks').val('');
                $('#assignee').val('');
            } else if (task_type === "new_task") {
                $('.drp_exist').css('display', 'none');
                $('.new_task_assignee').css('display', 'inline');
                $('#task_name_input').css('display', 'inline');
                $('#existing_tasks').val('');
                $('#task1').val('');
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
                    ' <div class="form-outline mb-4 input-container">' +
                    '<input type="text" id="file_link_val" name="file_link_val"' +
                    'class="input" placeholder=""' +
                    'onblur="validateFileLink()" />' +
                    '<label class="placeholder label" style="color:black">File' +
                    ' Link Description</label>' +
                    '<span id="file_link_val_err"></span>' +
                    '</div>' +
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
                        if (item.intern_id === intern_id) {
                            element = element.add('<li class="send"><img src="<?php echo base_url(); ?>public/public/uploads/' + intern_id + '/' + item.profile_name + '" alert="username"><p>' + item.intern_msg + '</p></li>')
                        } else {
                            element = element.add('<li class="replies"><img src="<?php echo base_url(); ?>public/public/uploads/' + intern_id + '/' + item.profile_name + '" alert="username"><p>' + item.intern_msg + '</p></li>')
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
                    // console.log("after login intern home page ajax");
                    // console.log(res)
                    $('.intern_details_content').empty();
                    $('#existing_tasks').empty();
                    $('#assignee').empty();


                    res['profile_record'].forEach(function (item) {
                        var element = $();
                        $('.submit').attr('get_domain', item.domain);
                        $('.submit').attr('profile_data', item.profile);
                        element = element.add('<div class="row ">' +
                            '<div class="col-sm-4 bg-c-lite-green user-profile">' +
                            '<div class="card-block text-center text-white" style="margin-top:2rem;">' +
                            '<div class="m-b-25">' +
                            '<img src="<?php echo base_url(); ?>public/public/uploads/' + item.intern_id + '/' + item.profile + '" class="img-radius"  alt="User-Profile-Image">' +
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
                            '<div class="col-sm-6">' +
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
                            '<div class="col-sm-6">' +
                            '<p class="m-b-2 f-w-600">End date</p>' +
                            '<h6 class="text-muted f-w-400">' + item.end_date + '</h6>' +
                            '</div>' +
                            '<div class="col-sm-6">' +
                            '<p class="m-b-2 f-w-600">Email</p>' +
                            '<h6 class="text-muted f-w-400">' + item.email_id + '</h6>' +
                            ' </div>' +
                            '<div class="col-sm-6">' +
                            '<p class="m-b-2 f-w-600">Mobile no.</p>' +
                            '<h6 class="text-muted f-w-400">' + item.mobile + '</h6>' +
                            '</div>'+
                            '</div>' +
                            '<br>'+
                            '<div class="row">'+
                            '<div class="col-md-6">'+
                            '<p class="m-b-2 f-w-600">Bonafide.</p>' +
                            '<span class="text-muted f-w-400 font-weight-bold" style="padding:10px;background-color:#B8B8B8;height:max-content;width:max-content;border-radius:10%;"><a href="<?php echo base_url();?>public/public/uploads/'+item.intern_id+'/'+item.profile+'" download>'+item.profile+'</a> <i class="fa fa-download"></i></span>' +
                            '</div>'+
                            '<div class="col-md-6">'+
                            '<p class="m-b-2 f-w-600">ID Card.</p>'+
                            '<span class="text-muted f-w-400 font-weight-bold" style="padding:10px;background-color:#B8B8B8;height:max-content;width:max-content;border-radius:10%;"><a href="<?php echo base_url();?>public/public/uploads/'+item.id_card+'/'+item.id_card+'" download>'+item.id_card+'</a><i class="fa fa-download"></i> </span>'+
                            '</div>'+
                            '</div>'+
                            '<br>'+
                            '<div class="row">'+
                            '<div class="col-md-6">'+
                            '<p class="m-b-2 f-w-600">Resume.</p>' +
                            '<span class="text-muted f-w-400 font-weight-bold" style="padding:10px;background-color:#B8B8B8;height:max-content;width:max-content;border-radius:10%;"><a href="<?php echo base_url();?>public/public/uploads/'+item.resume+'/'+item.resume+'" download>'+item.resume+'</a><i class="fa fa-download"></i> </span>' +
                            '</div>'+
                            '</div>'+
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
        function validateTime() {
            var checkinTime = document.getElementById("check_in").value;
            var checkoutTime = document.getElementById("check_out").value;
            if (checkinTime >= checkoutTime) {
                // alert("Check-out time must be after check-in time!");
                $('#Time_err').text("Check-out time must be after check-in time!");
                $("#Time_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#Time_err').text("");
                return true;
            }
        }


        function Status() {
            var Status1 = document.getElementById("Status").value;
            if (Status1.trim() === "" || Status1.length < 10) {
                $('#status_err').text("Spaces and <10 character lengths not allowed.");
                $("#status_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#status_err').text("");
                return true;
            }
        }

        function validateTaskName() {
            const TaskNameInput = document.getElementById("task").value;
            // console.log(TaskNameInput);
            // const TaskName = TaskNameInput.value;
            const regex = /^[a-zA-Z]+$/;
            if (!regex.test(TaskNameInput)) {
                // alert("mm");
                $('#Task_err').text("Enter a Task Name.");
                $("#Task_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                // alert("true");
                $('#Task_err').text("");
                return true;
            }
        }

        function validateDescription() {
            const DescriptionInput = document.getElementById("Desc");
            const Description = DescriptionInput.value;
            const regex = /^[a-zA-Z]+$/;
            if (!regex.test(Description)) {
                $('#Desc_err').text("Enter a Valid Description");
                $("#Desc_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#Desc_err').text("");
                return true;
            }
        }
        function ValidateTaskType() {
            var choice = document.getElementById("task_type");
            if (choice.value === "") {
                $('#tasktyp_err').text("Select a Task Type");
                $("#tasktyp_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            }
            else {
                $('#tasktyp_err').text("");
                return true;
            }
        }

        function validate_Task_status() {
            var choice = document.getElementById("Status");
            if (choice.value === "") {
                $('#task_status_err').text("Select a Task Status");
                $("#task_status_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            }
            else {
                $('#task_status_err').text("");
                return true;
            }

        }

        function validate_choose_task() {
            var choice = document.getElementById("existing_tasks");
            if (choice.value === "") {
                $('#choose_task_err').text("Select a Task Status");
                $("#choose_task_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            }
            else {
                $('#choose_task_err').text("");
                return true;
            }
        }

        function validate_assign_person() {
            var choice = document.getElementById("assignee");
            if (choice.value === "") {
                $('#choose_assign_err').text("Select a Task Status");
                $("#choose_assign_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            }
            else {
                $('#choose_assign_err').text("");
                return true;
            }

        }

        function validateFileLink() {
            const FileLinkInput = document.getElementById("file_link_val");
            const FileLink = FileLinkInput.value;
            const regex = /^[a-zA-Z]+$/;
            if (!regex.test(FileLink)) {
                $('#file_link_val_err').text("Enter a Description");
                $('#file_link_val_err').css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#file_link_val_err').text("");
                return true;
            }
        }



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

        function Description() {
            var Description1 = document.getElementById("Description").value;
            if (Description1.trim() === "" || Description1.length < 10) {
                $('#Description_err').text("Spaces and <10 character lengths not allowed.");
                $("#Description_err").css({
                    "color": "red",
                    "font-size": "10px"
                });
                return false;
            } else {
                $('#Description_err').text("");
                return true;
            }
        }


        // fetch data 
        // fetch_data_temp();
        // function fetch_data_temp(){
        //     alert("hai");
        // }

        function fetch_data() {
            // alert("fetching");
            var intern_id = "<?php echo $session->get('intern_id'); ?>";
            console.log(intern_id);
            // var intern =document.getElementById("task_table").value;
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
                    // $('.task_data').empty();

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

        $(document).on('click', '#today_task', function (event) {
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
            display_data();
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
            // var task1 = $('#task1').val();
            var Description = $('#Description').val();
            var Status = $('#Status').val();
            var task_type = $('#task_type').val();
            var assignee = $('#assignee').val();
            var task = $('#existing_tasks').val();
            var domain = $('.submit').attr('get_domain');
            // var task_text = $('#existing_tasks').attr('data-task');
            // console.log(task_text);

            var tmp_assignee = "";
            var tmp_task_id = "";
            if (assignee === null) {
                tmp_assignee = "empty";
                tmp_task_id = task;
                task1 = "empty";

            } else {
                tmp_assignee = assignee;
                tmp_task_id = "empty";
                task1 = $('#task1').val();
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
            console.log(task1);
            console.log(Description);
            console.log(Status);
            console.log(tmp_assignee);
            console.log(tmp_task_id);
            console.log(domain);
            console.log(file_link);


            $.ajax({
                url: "<?php echo base_url('public/index.php/Intern_controller/today_task'); ?>",
                method: "POST",
                dataType: "json",
                data: {
                    intern_id: intern_id,
                    check_in: check_in,
                    check_out: check_out,
                    task1: task1,
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
            $('#task1').val('');
            $('#Description').val('');
            $('#Status').val('');
            $('#existing_tasks').val('');
            $('#assignee').val('');
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
    </script>
</body>

</html>