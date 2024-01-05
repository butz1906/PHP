<?php

namespace App\Models;

use Exception;
use App\Core\DbConnect;
use App\Entities\Jeux;

class JeuxModel extends DbConnect
{
    public function findPlaystation()
    {
        $this->request = 'SELECT * FROM jeux WHERE categorie = "Playstation" AND intro <> "" ORDER BY titre';
        $result = $this->connection->query($this->request);
        $playstation = $result->fetchAll();
        return $playstation;
    }

    public function findSwitch()
    {
        $this->request = 'SELECT * FROM jeux WHERE categorie = "Switch" AND intro <> "" ORDER BY titre';
        $result = $this->connection->query($this->request);
        $switch = $result->fetchAll();
        return $switch;
    }

    public function findJeuxPS(int $id)
    {
        $this->request = $this->connection->prepare("SELECT * FROM jeux WHERE id = :id");
        $this->request->bindParam(":id", $id);
        $this->request->execute();
        $jeuxPlaystation = $this->request->fetch();
        return $jeuxPlaystation;
    }

    public function findJeuxSwitch(int $id)
    {
        $this->request = $this->connection->prepare("SELECT * FROM jeux WHERE id = :id");
        $this->request->bindParam(":id", $id);
        $this->request->execute();
        $jeuxSwitch = $this->request->fetch();
        return $jeuxSwitch;
    }

    public function backlog()
    {
        $this->request = 'SELECT * FROM jeux WHERE intro = "" ORDER BY titre';
        $result = $this->connection->query($this->request);
        $backlog = $result->fetchAll();
        return $backlog;
    }

    public function pantheon()
    {
        $this->request = 'SELECT DISTINCT annee FROM pantheon';
        $result = $this->connection->query($this->request);
        $pantheon = $result->fetchAll();
        return $pantheon;
    }

    public function annee(int $annee)
    {
        $this->request = $this->connection->prepare('SELECT * FROM pantheon WHERE annee = :annee ORDER BY titre');
        $this->request->bindParam(":annee", $annee);
        $this->request->execute();
        $annee = $this->request->fetchAll();
        return $annee;
    }

}
