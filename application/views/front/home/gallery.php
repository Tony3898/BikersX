<style>
    .container-fluid.gallery-container {
        background:linear-gradient(var(--second-bg-color),var(--accent-color),var(--second-bg-color));
        color: var(--main-bg-color);
        padding: 30px 50px;
    }

    .gallery-container h1 {
        text-align: center;
        margin-top: 80px;
        font-weight: bold;
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

</style>
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