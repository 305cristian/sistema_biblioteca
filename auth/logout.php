<!DOCTYPE html>
<!--
/**
 * Description of view_books
 *
/**
 * @author CRISTIAN PAZ
 * @date 30 nov. 2023
 * @time 15:08:50
 */       
 
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<?php
session_start();

session_unset();

session_destroy();

header("Location: ../index.php");
exit();