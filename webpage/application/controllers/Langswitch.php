<?php
class Langswitch extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    function switchLanguage($language = "") {
        $language = ($language != "") ? $language : "estonian";
        $this->session->set_userdata('site_lang', $language);
        redirect(base_url());
    }
}