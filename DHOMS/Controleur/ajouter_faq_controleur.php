<?php

if (isset($_POST['nvtitre'])){
    if(isset($_POST['nvreponse'])){
        ajouterFAQ($nvtitre,$nvreponse);
    }
}