<?php
namespace App\Controllers;
use App\Models\JeuxModel;

class HomeController extends Controller
{
    public function index()
    {
        $jeuxswitch = new JeuxModel();
        $switch = $jeuxswitch->findSwitch();
        $jeuxplaystation = new JeuxModel();
        $playstation = $jeuxplaystation->findPlaystation();
        $this->render('home/index', ['switch'=>$switch , 'playstation'=>$playstation]);
    }
}