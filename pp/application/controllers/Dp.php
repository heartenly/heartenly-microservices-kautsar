<?php
/**
 * Created by PhpStorm.
 * User: Merah
 * Date: 8/4/2019
 * Time: 9:02 AM
 */

class Dp extends CI_Controller
{

    /**
     * dp_controller constructor.
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
                'id_account' => 'somedata',
            ),
            'url' => 'http://heartenly.bio/api/detail_profile',
        ));
    }

    public function view_detail($id)
    {
        $this->httpclient->setOptions(array(
            'headers' => array(
                'Authorization: SomekeyHere',
                'Content-Type: application/json',
            ),
            'url' => 'http://heartenly.bio/api/detail_profile/' . $id,//Dependensi ke Bio
        ));
        $this->httpclient->get();
        $data = $this->httpclient->getResults();

        echo $data;
    }
}