<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="<?php echo base_url(); ?>/assets/custom/css/profile_card.css?version=<?php echo rand(); ?>">
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/assets/custom/js/chat.js?version=<?php echo rand(); ?>"></script>
    <style>
        /* Page layout */
        .container-fluid {
            margin-top: 50px;
        }



        .read-more-state {
            display: none;
        }

        .read-more-target {
            opacity: 0;
            max-height: 0;
            font-size: 0;
            transition: .25s ease;
        }

        .read-more-state:checked~.read-more-wrap .read-more-target {
            opacity: 1;
            font-size: inherit;
            max-height: 10em;
        }

        .read-more-state~.read-more-trigger:before {
            content: 'Show more';
        }

        .read-more-state:checked~.read-more-trigger:before {
            content: 'Show less';
        }

        .read-more-trigger {
            cursor: pointer;
            display: inline-block;
            padding: 0 .5em;
            color: #666;
            font-size: .9em;
            line-height: 2;
            border: 1px solid #ddd;
            border-radius: .25em;
        }

        .profile_permission_card {
            /* margin-top: 50px; */
        }
    </style>
</head>

<body>
    <?php $session = \Config\Services::session(); ?>

    <!-- Page layout -->
    <div class="container-fluid">
        <!-- <div class="d-flex align-items-start"> -->
        <div class="row intern_request">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                        aria-selected="true">Internship Request</button>

                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false">Task Status</button>

                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                        aria-selected="false">Group chat</button>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-6">
                <div class="tab-content" id="v-pills-tabContent">
                    <!-- intern Request card -->
                    <div class="tab-pane fade show active " id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <!-- profile cards 1-->
                        <div class="admin_card">
                        </div>
                    </div>
                    
                    <!-- task -->
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <div class="jumbotron border border-2 shadow shadow-sm rounded">
                            <nav class="mt-4 m-3">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Interns details</button>

                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">submissions</button>

                                    <button class="nav-link" id="nav-overdue-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-overdue" type="button" role="tab"
                                        aria-controls="nav-overdue" aria-selected="false">overdue</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row mt-4">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-6">
                                            <div class="jumbotron border border-1 rounded mb-4">
                                                <br>
                                                <h2 class="text-center text-success">Today Tasks</h2>
                                                <br>
                                                <div class="row m-3">
                                                    <input type="text" name="" class="form-control form-control-md"
                                                        placeholder="Check In" id="">
                                                </div>

                                                <div class="row m-3">
                                                    <input type="text" name="" class="form-control form-control-md"
                                                        placeholder="Check Out" id="">
                                                </div>

                                                <div class="row m-3">
                                                    <input type="text" name="" class="form-control form-control-md"
                                                        placeholder="Task" id="">
                                                </div>

                                                <div class="row m-3">
                                                    <input type="text" name="" class="form-control form-control-md"
                                                        placeholder="Task Description" id="">
                                                </div>

                                                <div class="row m-3">
                                                    <input type="text" name="" class="form-control form-control-md"
                                                        placeholder="Task Status" id="">
                                                </div>

                                                <div class="row m-3">
                                                    <input type="submit"
                                                        class="btn btn-lg border border-success rounded text-success"
                                                        value="Insert">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-3"></div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <!-- table -->
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First</th>
                                                <th scope="col">Last</th>
                                                <th scope="col">Handle</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td colspan="2">Larry the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="tab-pane fade" id="nav-overdue" role="tabpanel"
                                    aria-labelledby="nav-overdue-tab">
                                    <h2>Overdue hhhhh</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- c1hat page -->
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
                                        <ul>
                                            <li class="sent">
                                                <img src="<?php echo base_url("assets/workimages/img4.jpg"); ?>"
                                                    alt="username" />
                                                <p>hi</p>
                                            </li>
                                            <li class="replies">
                                                <img src="<?php echo base_url("assets/workimages/img3.jpg"); ?>"
                                                    alt="username" />
                                                <p>Hello</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="row">

                                        <div class="col-lg-0 col-md-0 col-sm-0"> </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 input-group ">
                                            <textarea class="Text-Box" id="message" type="text"
                                                placeholder="Write your message..." data-emojiable="true"></textarea>


                                            <button id="send" class="submit"><i class="fa fa-paper-plane"
                                                    aria-hidden="true"></i></button>

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
        <br> <br>
    </div>
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
                $('.admin_card').empty();
                res.forEach(
                    function (items) {
                        $('.admin_card').append('<img src="<?php echo base_url(); ?>public/public/uploads/' + items.intern_id + '/' + items.profile + '" class="card-img-top"  alt="User-Profile-Image">');
                        var element = $();
                        element = element.add(
                            '<div class="col-lg-4 col-md-4 col-sm-4">'+'</div>'+
                            '<div class="row profile_permission_card g-4">' +
                            '<div class="col-lg-4 col-md-4 col-sm-4">'+
                            '<div id="cards_landscape_wrap-2">' +
                            '<div class="card">' +
                            
                            // '<img src="https://images.freeimages.com/images/large-previews/7b4/grey-catbird-in-profile-1641861.jpg"class= "card-img-top" alt = "..." >' +
                            '<div class="card-body">' +
                            '<div>' +
                            '<input type="checkbox" class="read-more-state" id="post-2" />' +
                            '<div class="read-more-wrap ">' +
                            '<div class="text-container read-more-wrap">' +
                            '<h5 class="card-title">Card title</h5>' +
                            '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content</p>' +
                            '</div>' +
                            '<div class="read-more-target">nithi ipsum dolor sit amet consectetur adipisicing elit' +
                            '</div>' +
                            '</div>' +
                            '<label for="post-2" class="read-more-trigger">' +
                            '</label>' +
                            '<br>' +
                            '<div class="row" style="display:flex">' +
                            '<div class="col d-flex justify-content-center gap-4">' +
                            '<button type="button"class="btn btn-outline-success"> Accept </button>' +
                            '<button type="button" class="btn btn-outline-danger">Decline</button>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>' +
                            '</div>'+
                            '<div class="col-lg-4 col-md-4 col-sm-4">'+'</div>'

                        );
                        $('.admin_card').append(element);

                    }
                );
                // $('.admin_card').append(res[0].profile);
            },
            error: function (er) {
                console.log(er);
                console.log('intern home page ajax failed');
            }
        });

    }
</script>


</html>