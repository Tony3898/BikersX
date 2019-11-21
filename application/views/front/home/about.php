<style>
    .about-container {
        background: linear-gradient(var(--second-bg-color), var(--accent-color), var(--second-bg-color));
        color: var(--main-bg-color);
        padding: 50px 100px;
    }

    .about-container h1 {
        width: 100%;
        text-align: center;
        margin-top: 50px;
        font-weight: bold;
    }

    .our-team {
        border: 2px solid var(--main-bg-color);
        border-radius: 10px;
        text-align: center;
        margin: 10px;
        z-index: 1;
        position: relative;
    }

    .our-team:before,
    .our-team:after {
        content: "";
        width: 100%;
        height: 104%;
        background: var(--main-bg-color);
        position: absolute;
        top: 50%;
        left: 0;
        z-index: -1;
        transform: translateY(-50%) scaleX(0.3);
        transition: all 0.3s ease 0s;
    }

    .our-team:after {
        width: 106%;
        left: 50%;
        transform: translate(-50%, -50%) scaleY(0.25);
    }

    .our-team:hover:before {
        transform: translateY(-50%) scaleX(0.7);
    }

    .our-team:hover:after {
        transform: translate(-50%, -50%) scaleY(0.7);
    }

    .our-team img {
        width: 100%;
        height: 300px;
        border-radius: 10px;
        transition: all 0.3s ease 0s;
    }

    .our-team .team-content {
        width: 93%;
        padding: 25px 0 10px;
        background: var(--accent-color);
        position: absolute;
        bottom: 50px;
        left: 50%;
        opacity: 0;
        -webkit-clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%);
        clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%);
        transform: translateX(-50%);
        transition: all 0.3s cubic-bezier(0.5, 0.2, 0.1, 0.9);
    }

    .our-team:hover .team-content {
        bottom: 10px;
        opacity: 1;
    }

    .our-team .title {
        font-size: 25px;
        font-weight: 600;
        color: var(--main-bg-color);
        letter-spacing: 1px;
        text-transform: capitalize;
        margin: 0;
    }

    .our-team .post {
        display: block;
        font-size: 16px;
        color: var(--main-bg-color);
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .our-team .social {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .our-team .social li {
        display: inline-block;
        margin: 0 5px;
    }

    .our-team .social li a {
        display: block;
        width: 35px;
        position: relative;
        height: 35px;
        line-height: 35px;
        border-radius: 50%;
        background: var(--main-bg-color);
        font-size: 20px;
        color: var(--accent-color);
        transition: all 0.3s ease 0s;
    }
    .our-team .social li a i
    {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
    }

    .our-team .social li a:hover {
        background: linear-gradient(to bottom, var(--second-bg-color), var(--accent-color));
        box-shadow: 0 0 0 5px rgba(255, 255, 255, 0.3);
        color: var(--main-bg-color);
    }


</style>
<div class="container-fluid about-container">

    <div class="row">
        <div class="col-12">
            <h1>About Us</h1>
            <p class="lead lead-small" style="text-align: center;padding: 25px">Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type
                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus
                PageMaker including versions of Lorem Ipsum</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <h1 style="margin-bottom: 30px">Meet the team</h1>
        <div class="col-md-4">
            <div class="our-team">
                <img src="<?php echo base_url("assets/images/team1.jpeg") ?>">
                <div class="team-content">
                    <h3 class="title">Tejas</h3>
                    <span class="post">Web Developer</span>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="our-team">
                <img src="<?php echo base_url("assets/images/team2.jpeg") ?>">
                <div class="team-content">
                    <h3 class="title">Tony</h3>
                    <span class="post">Android Developer</span>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="our-team">
                <img src="<?php echo base_url("assets/images/team3.jpg") ?>">
                <div class="team-content">
                    <h3 class="title">Teju</h3>
                    <span class="post">Php Developer</span>
                    <ul class="social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

