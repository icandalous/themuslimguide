<?php namespace Icandalous\Cours\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use System\Helpers\Http;
use Config;

class CoursController extends Controller
{
    public $implement = [    ];
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Icandalous.Cours', 'main-menu-item');
    }

    public function adminLogin()
    {
        $url = Config::get('icandalous.cours::cours_login', "");
        $username = Config::get('icandalous.cours::admin_email', "");
        $password = Config::get('icandalous.cours::admin_password', "");
        $data_array =  array(
            "email"        => $username,
            "password"      => $password
        );

        $result = Http::callAPI('POST', $url, json_encode($data_array));
        $response = json_decode($result, true);
        return $response;
    }

    public function detailsCourses($token)
    {
        $url = Config::get('icandalous.cours::cours_api_url', "");
        $url .= "/cours/details";
        $headers = $this->authorisationHeader($token);

        $result = Http::callAPI('GET', $url, null, $headers);
        $response = json_decode($result, true);
        return $response;
    }

    public function availableCourses($token)
    {
        $url = Config::get('icandalous.cours::cours_api_url', "");
        $url .= "/cours/details";
        $headers = $this->authorisationHeader($token);

        $result = Http::callAPI('GET', $url, null, $headers);
        $response = json_decode($result, true);
        return $response;
    }

    private function authorisationHeader($token)
    {
        return 'Authorization: Bearer ' . $token;
    }
}
