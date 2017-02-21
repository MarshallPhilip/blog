<?php

  /**
   *
   */
  class User extends CI_Controller
  {
    public function __construct()
    {
      //Appel du constructeur
      parent::__construct();
      //Charger BD
      $this->load->database();
      $this->load->model("User_model");
    }

    public function index()
    {
      //facilite création d'une table
      $this->load->library('table');

      //Appelle findAll dans user_model qui retourne le contenu de la table users
      $users = $this->User_model->findAll();
      //"include" de views/user/index.php
      $this->load->view("user/index", ['users'=>$users]);
    }
  }


 ?>
