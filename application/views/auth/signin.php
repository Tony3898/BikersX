<style>
    .self-sign-in {
        background: linear-gradient(-45deg, rgba(28, 28, 28, 0.5), rgba(191, 68, 64, 0.7)), url('<?php echo base_url("assets/images/usermangeementback.jpg")?>') no-repeat left;
        background-size: cover;
    }

    .self-sign-in-div {
        background: var(--main-bg-color);
        border-radius: 10px;
        box-shadow: 0 0 3px var(--second-bg-color), 0 0 5px var(--second-bg-color);
    }

    .self-sign-in-div h4 {
        color: var(--accent-color);
        margin-top: 16px;
    }

</style>
<div class="container-fluid self-sign-in">
    <div class="row h-100 align-items-center">
        <div class="col-md-4 offset-md-4 col-sm-12 self-sign-in-div">
            <h4 class="h1-responsive font-weight-bold text-center">Welcome Back Rider</h4>
            <br>
            <form id="signin-form" name="signin-form" action="<?php echo base_url("") ?>"
                  method="POST">

                <div class="row">
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
                            <label for="password" class="">Password</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <a style="color: var(--accent-color)l;float: right;font-size: 14px" href="<?php echo base_url("SignUp")?>">Forgot password</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-center text-md-left">
                            <button type="submit" name="submit" class="btn btn-success" style="color: var(--main-bg-color)">Sign in</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-center text-md-right">
                            <a style="color: var(--accent-color)" href="<?php echo base_url("SignUp")?>">Create Account</a>
                        </div>
                    </div>
                </div>

                <br>
            </form>
        </div>
    </div>
</div>