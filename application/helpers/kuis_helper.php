<?php

function _POST($par)
{
    $ci = &get_instance();
    $par = $ci->input->post($par);
    $par = htmlspecialchars($par);
    $par = str_replace("'", "", $par);
    return $par;
}

function _view($view, $data = array())
{
    $ci = &get_instance();
    $ci->load->view($view, $data);
}

function _GET($par)
{
    $ci = &get_instance();
    $par = $ci->input->get($par);
    $par = htmlspecialchars($par);
    $par = str_replace("'", "", $par);
    return $par;
}


function _assets($url = '')
{
    if ($url) {
        return base_url("assets/$url");
    } else {
        return base_url("assets");
    }
}

function _alert()
{
    $ci = &get_instance();
    if ($ci->session->flashdata('success')) {
        return '<div class="alert alert-success solid alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>'
        . $ci->session->flashdata('success') .
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
        </button>
    </div>';
    } else if ($ci->session->flashdata('error')) {
        return '<div class="alert alert-danger solid alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24 " height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>' . $ci->session->flashdata('error') . '</div>';
    }
}




