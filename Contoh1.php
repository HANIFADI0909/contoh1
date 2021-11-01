<?php
class Contoh1 extends CI_Controller
{
    public function index()
    {
        //echo "<h1>Perkenalkan</h1>";
        //echo"Nama saya Hanif Adi Kumara saya tinggal di Bojonggede olah raga yang saya sukai adalah Berenang";
        $this->load->view('welcome_message2');
    
}
}