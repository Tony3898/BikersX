<style>
    .indexmain {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('<?php echo base_url("assets/images/bikesback.jpg")?>') no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
    }

    .container-fluid .row .indexmain-con {
        color: var(--second-bg-color);
        text-align: center;
        margin: 0 auto;
        padding: 25px;
        display: block;
        background: var(--main-bg-color);
        border-radius: 10px;
        box-shadow: 0 0 3px var(--second-bg-color), 0 0 5px var(--second-bg-color);
        font-family: 'Crimson Text', serif;
        font-weight: 700;
    }

    .indexabout {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('<?php echo base_url("assets/images/bg2.jpg")?>') no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
    }

    .indexabout-con {
        color: var(--second-bg-color);
        padding: 25px;
        background: var(--main-bg-color);
        box-shadow: 0 0 3px var(--second-bg-color), 0 0 5px var(--second-bg-color);
        border-radius: 10px 0;
    }

    .indexcontact {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.5)), url('<?php echo base_url("assets/images/contact.jpg")?>') no-repeat;;
        background-size: cover;
        width: 100%;
        height: 100%;
    }
    .indexcontact-con {
        color: var(--second-bg-color);
        padding: 25px;
        background: var(--main-bg-color);
        box-shadow: 0 0 3px var(--second-bg-color), 0 0 5px var(--second-bg-color);
    }
    .container-fluid.gallery-container {
        background:linear-gradient(var(--second-bg-color),var(--accent-color),var(--second-bg-color));
        color: var(--main-bg-color);
        min-height: 100vh;
        padding: 30px 50px;
    }

    .gallery-container h1 {
        text-align: center;
        margin-top: 50px;
        font-weight: bold;
    }

    .gallery-container p.page-description {
        text-align: center;
        margin: 25px auto;
        font-size: 18px;
        color: #999;
    }

    .tz-gallery {
        padding: 40px;
    }

    /* Override bootstrap column paddings */
    .tz-gallery .row > div {
        padding: 2px;
    }

    .tz-gallery .lightbox img {
        width: 100%;
        height: 250px;
        border-radius: 0;
        position: relative;
    }

    .tz-gallery .lightbox:before {
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -13px;
        margin-left: -13px;
        opacity: 0;
        color: #fff;
        font-size: 26px;
        pointer-events: none;
        z-index: 9000;
        transition: 0.4s;
    }


    .tz-gallery .lightbox:after {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        background-color: var(--accent-color);
        content: '';
        transition: 0.4s;
    }

    .tz-gallery .lightbox:hover:after,
    .tz-gallery .lightbox:hover:before {
        opacity: 0.5;
    }

    .baguetteBox-button {
        background-color: transparent !important;
    }
</style>
<div class="indexmain">
    <div class="container-fluid">
        <div class="row h-100 align-items-center head">
            <div class="indexmain-con">
                <h1 class="display-2">BIKERS<span style="color:var(--accent-color)">X</span></h1>
                <p class="lead">The <span style="color:var(--accent-color)">Speed</span> You Love</p>
                <div class="text-center text-md-center" style="color:var(--accent-color);">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="indexabout container-fluid">
    <div class="row align-items-center h-100">
        <div class="col-md-4 offset-md-1 indexabout-con">
            <h1 style="text-align: center;font-family: 'Crimson Text', serif;">ABOUT <span
                        style="color:var(--accent-color);">US</span>
            </h1>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
            <button style="border: 1px solid var(--second-bg-color);padding: 8px;text-align: center;background: var(--second-accent-color);color: var(--main-bg-color);">
                Read More <i
                        class="fa fa-angle-right icon-right" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
<div class="container-fluid gallery-container">

    <h1>Gallery</h1>

    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="<?php echo base_url("assets/images/gal1.jpg")?>">
                    <img src="<?php echo base_url("assets/images/gal1.jpg")?>" >
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo base_url("assets/images/gal2.jpg")?>">
                    <img src="<?php echo base_url("assets/images/gal2.jpg")?>" >
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo base_url("assets/images/gal3.jpg")?>">
                    <img src="<?php echo base_url("assets/images/gal3.jpg")?>" >
                </a>
            </div>
            <div class="col-sm-12 col-md-4">
                <a class="lightbox" href="<?php echo base_url("assets/images/gal4.jpg")?>">
                    <img src="<?php echo base_url("assets/images/gal4.jpg")?>" >
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo base_url("assets/images/gal5.jpg")?>">
                    <img src="<?php echo base_url("assets/images/gal5.jpg")?>" >
                </a>
            </div>
            <div class="col-sm-6 col-md-4">
                <a class="lightbox" href="<?php echo base_url("assets/images/gal6.jpg")?>">
                    <img src="<?php echo base_url("assets/images/gal6.jpg")?>" >
                </a>
            </div>

        </div>

    </div>

</div>
<div class="indexcontact container-fluid">
    <div class="row h-100">
        <div class="col-md-5 offset-md-7 indexcontact-con">
            <section class="mb-4">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to
                    contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>

                <div class="row">
                    <div class="col-md-12 mb-md-0 mb-5">
                        <form id="contact-form" name="contact-form" action="<?php echo base_url("contact/contactus")?>" method="POST">

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="name" class="">Name</label>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="email" class="">Email</label>
                                        <input type="text" id="email" name="email" class="form-control" required>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Subject</label>
                                        <input type="text" id="subject" name="subject" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12">

                                    <div class="md-form">
                                        <label for="message">Your message</label>
                                        <textarea type="text" id="message" name="message" rows="2" required
                                                  class="form-control md-textarea"></textarea>
                                    </div>

                                </div>
                            </div>
                            <br>
                            <div class="text-center text-md-left">
                                <input type="submit" name="submit" class="btn btn-success" style="color: var(--main-bg-color)"/>
                            </div>
                        </form>
                        <br>
                        <div class="status"></div>
                    </div>
                    <!--Grid column-->
                </div>

            </section>
            <!--Section: Contact v.2-->
        </div>
    </div>
</div>


