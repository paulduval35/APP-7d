<?php
/**
 * Created by IntelliJ IDEA.
 * User: epida
 * Date: 08/06/2018
 * Time: 10:19
 */



if (isset($_POST['nvtitre'])){
    if(isset($_POST['nvreponse'])){
        ajouterFAQ($nvtitre,$nvreponse);
    }
}