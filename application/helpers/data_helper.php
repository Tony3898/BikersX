<?php
function get_msg()
{

    $CI =& get_instance();

    if (($CI->session->flashdata('error'))) {
        echo $CI->session->flashdata('error');
    }

    if (($CI->session->flashdata('success'))) {
        echo $CI->session->flashdata('success');
    }

    if (($CI->session->flashdata('warning'))) {
        echo $CI->session->flashdata('warning');
    }

    if (($CI->session->flashdata('info'))) {
        echo $CI->session->flashdata('info');
    }
}

function set_msg($key, $value)
{
    $CI =& get_instance();
    $msg = 'Plz set message';


    if ($key == 'error') {
        $msg = '<div class="m-alert m-alert--icon m-alert--outline alert alert-danger alert-dismissible fade show" role="alert">
											<div class="m-alert__icon">
												<i class="la la-warning"></i>
											</div>
											<div class="m-alert__text">
												<strong>Error !</strong> ' . $value . '
											</div>
											<div class="m-alert__close">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												</button>
											</div>
										</div>';
    }

    if ($key == 'success') {
        $msg = '<div class="m-alert m-alert--icon m-alert--outline alert alert-success alert-dismissible fade show" role="alert">
											<div class="m-alert__icon">
												<i class="la la-warning"></i>
											</div>
											<div class="m-alert__text">
												<strong>Well done!</strong> ' . $value . '
											</div>
											<div class="m-alert__close">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												</button>
											</div>
										</div>';

    }


    if ($key == 'warning') {
        $msg = '<div class="m-alert m-alert--icon m-alert--outline alert alert-warning alert-dismissible fade show" role="alert">
											<div class="m-alert__icon">
												<i class="la la-warning"></i>
											</div>
											<div class="m-alert__text">
												<strong>Warning !</strong> ' . $value . '
											</div>
											<div class="m-alert__close">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												</button>
											</div>
										</div>';;
    }

    if ($key == 'info') {
        $msg = '<div class="m-alert m-alert--icon m-alert--outline alert alert-info alert-dismissible fade show" role="alert">
											<div class="m-alert__icon">
												<i class="la la-warning"></i>
											</div>
											<div class="m-alert__text">
												<strong>Info !</strong> ' . $value . '
											</div>
											<div class="m-alert__close">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												</button>
											</div>
										</div>';;
    }

    $CI->session->set_flashdata($key, $msg);

}

?>