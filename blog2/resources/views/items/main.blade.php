<html dir="rtl">
<head>
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="./css/mainStyle.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<section id="contact">
    <div class="section-content">
        <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s"
                                                data-wow-duration="2s">Data Entry</span></h1>
        <h3>enter your items into database</h3>
    </div>
    @if(Auth::check())
        <div class="contact-section">
            <div class="container">
                <form action="/store" method="POST">
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <label for="exampleInputUsername">Message</label>
                            <input type="text" class="form-control" id="" placeholder=" Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Message</label>
                            <input type="email" class="form-control" id="exampleInputEmail"
                                   placeholder=" Enter Email id">
                        </div>
                        <div class="form-group">
                            <label for="telephone">Message</label>
                            <input type="tel" class="form-control" id="telephone"
                                   placeholder=" Enter 10-digit mobile no.">
                        </div>
                        <div class="form-group">
                            <label for="text"> Message</label>
                            <input type="text" class="form-control" id="description"
                                   placeholder="Enter Your Message"></input>
                        </div>
                        <div class="form-group">
                            <label for="text"> Message</label>
                            <input type="text" class="form-control" id="description"
                                   placeholder="Enter Your Message"></input>
                        </div>
                        <div class="form-group">
                            <label for="text"> Message</label>
                            <input type="text" class="form-control" id="description"
                                   placeholder="Enter Your Message"></input>
                        </div>
                        <div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane"
                                                                                    aria-hidden="true"></i> add
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Message</label>
                            <input type="text" class="form-control" name="type" id="type"
                                   placeholder="Enter Your Message"></input>
                        </div>

                        <div class="form-group">
                            <label for="text"> Message</label>
                            <input type="text" class="form-control" name="name"  id="name"
                                   placeholder="Enter Your Message"></input>
                        </div>

                        <div class="form-group">
                            <label for="text"> Message</label>
                            <input type="text" class="form-control" id="description"
                                   placeholder="Enter Your Message"></input>
                        </div>
                        <div class="form-group">
                            <label for="text"> Message</label>
                            <input type="text" class="form-control" id="description"
                                   placeholder="Enter Your Message"></input>
                        </div>
                        <div class="form-group">
                            <label for="text">Message</label>
                            <input type="text" class="form-control" id="description"
                                   placeholder="Enter Your Message"></input>
                        </div>
                        <div class="form-group">
                            <label for="text">Message</label>
                            <input type="text" class="form-control" id="description"
                                   placeholder="Enter Your Message"></input>
                        </div>
                        <div class="form-group">
                            <label for="text"> Message</label>
                            <input type="text" class="form-control" id="description"
                                   placeholder="Enter Your Message"></input>
                        </div>
                    </div>
                </form>
                @endif
                <div>
                    @if(Auth::guest())
                        <a href="/login" class="btn btn-info"> click here to login
                        </a>
                    @endif
                </div>
            </div>
        </div>
</section>
</html>