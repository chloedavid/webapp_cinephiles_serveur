<?php
/*
 * Adherent
 */
namespace Models;

/*
 * Adherent
 */

use JsonSerializable;

class Adherent implements JsonSerializable{
    /* @var Bool $estAssociation  */
    private $estAssociation;
/* @var int $id  */
    private $id;
/* @var string $nom  */
    private $nom;
/* @var string $prenom  */
    private $prenom;
/* @var object $dateNaissance  */
    private $dateNaissance;
/* @var string $email  */
    private $email;
/* @var string $login  */
    private $login;
/* @var string $mdp  */
    private $mdp;
/* @var string $photo  */
    private $photo;
/* @var object[] $categories  */
    private $categories;
/* @var object[] $seances  */
    private $seances;

    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return ['nom' => $this->nom, 'prenom' => $this->prenom];
    }
}
