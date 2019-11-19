<style>
    .contact
    {
        background: linear-gradient(-45deg,var(--second-bg-color),var(--accent-color),var(--second-bg-color));
    }
    .contact-items div i
    {
        width: 100%;
        color: var(--main-bg-color);
        font-size: 72px;
        text-align: center;
    }
    .contact-items div h6
    {
        margin-top: 16px;
        width: 100%;
        color: var(--main-bg-color);
        text-align: center;
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
</style>
<div class="container-fluid h-100 contact">
    <div class="row align-items-center h-100 contact-items">
        <div class="col-md-4 align-items-center">
            <i class="fas fa-envelope"></i>
            <h6>Email</h6>
        </div>
        <div class="col-md-4">
            <i class="fas fa-map-marker-alt"></i>
            <h6>Location</h6>
        </div>
        <div class="col-md-4">
            <i class="fas fa-phone"></i>
            <h6>Phone</h6>
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


