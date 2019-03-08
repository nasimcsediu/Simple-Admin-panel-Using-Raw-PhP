<?php
   session_start();
   require_once('functions.php');

  

   if(user_logedin()) : ?>

   	   <h1>Wellcome to your Dashboard </h1>

       <a href="all-employee.php">All Employee</a><br><hr>
       <a href="create-empoley.php">Add Employee</a><br><hr>
  
   	  <a href="logout.php">Logout</a>
   
   <?php  endif; ?>


   <?php

      if (!user_logedin()) {
      	header('location: login.php');
      }
   ?>
