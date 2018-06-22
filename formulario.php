<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

    <!-- ajax contact form -->
    <section style="margin-top: 50px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="">
                        <div class="card-body">
                            <form class="contact__form" method="post" action="mail.php">
                                <!-- form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                            Tu mensaje fue enviado exitosamente.
                                        </div>
                                    </div>
                                </div>
                                <!-- end message -->

                                <!-- form element -->
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input name="name" type="text" class="form-control" placeholder="Full Name" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input name="email" type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 form-group">
                                        <textarea name="message" class="form-control" rows="3" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input name="submit" type="submit" class="btn btn-success" value="SAY HELLO!">
                                    </div>
                                </div>
                                <!-- end form element -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="main.js"></script>
