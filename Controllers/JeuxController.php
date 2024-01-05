<?php
namespace App\Controllers;
use App\Models\JeuxModel;

class JeuxController extends Controller
{
    //methode pour afficher la liste
    public function switch()
    {
        $jeux = new JeuxModel();
        $switch = $jeux->findSwitch();
        $this->render('jeux/switch', ['switch'=>$switch]);
    }

    public function playstation()
    {
        $jeux = new JeuxModel();
        $playstation = $jeux->findPlaystation();
        $this->render('jeux/playstation', ['playstation'=>$playstation]);
    }

    public function testPlaystation($id)
    {
        $jeux = new JeuxModel();
        $testPlaystation = $jeux->findJeuxPS($id);
        $this->render('jeux/testPlaystation', ['testPlaystation'=>$testPlaystation]);
    }

    public function testSwitch($id)
    {
        $jeux = new JeuxModel();
        $testSwitch = $jeux->findJeuxSwitch($id);
        $this->render('jeux/testSwitch', ['testSwitch'=>$testSwitch]);
    }

    public function backlog()
    {
        $jeux = new JeuxModel();
        $backlog = $jeux->backlog();
        $this->render('jeux/backlog', ['backlog'=>$backlog]);
    }

    public function pantheon()
    {
        $jeux = new JeuxModel();
        $pantheon = $jeux->pantheon();
        $this->render('jeux/pantheon', ['pantheon'=>$pantheon]);
    }

    public function annee($annee)
     {
        $jeux = new JeuxModel();
        $annee = $jeux->annee($annee);
        $pantheon = $jeux->pantheon();
        $this->render('jeux/annee', ['annee'=>$annee, 'pantheon'=>$pantheon]);
     }
}