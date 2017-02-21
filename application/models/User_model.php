<?php
  /**
   *
   */
   //TOUTES LES CLASSES DANS MODELS HERITENT DE CI MODEL
  class User_model extends CI_Model
  {
    private $table = "user";

    public function __construct()
    {
      # code...
    }
    public function findAll()
    {
      $this->db->order_by("Badge", 'ASC');
      return $this->db->get($this->table)->result_object();
    }


  }

 ?>
