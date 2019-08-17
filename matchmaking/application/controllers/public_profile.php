<?php
/**
 * Created by PhpStorm.
 * User: Merah
 * Date: 8/4/2019
 * Time: 8:18 AM
 */

class public_profile extends CI_Controller
{

    /**
     * PublicProfileController constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->library('HttpClient', array(
            'headers' => array(
                'Authorization: SomekeyHere',
                'Content-Type: application/json',
            ),
            'data' => array(
                'somekey' => 'somedata',
                'anotherkey' => 'anotherkeydata'
            ),
            //'url' => 'http://heartenly.bio/api/account', //URL ini menandakan dependensi kepada Bio lama
           'url' => 'http://v2.heartenly.bio/api/account', //URL ini menandakan dependensi kepada Bio 2
        ));

    }

    function public_data(){
        $this->httpclient->get();
        $data = $this->httpclient->getResults();

        echo $data;
    }
}