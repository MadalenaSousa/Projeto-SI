<?php
mailOutputForm($email);

function mailOutputForm($mail)
{
    $message = "Saudacoes,
Este mail serve para confirmar o seu email. Por favor, nao responda a este mail. 
   
BEM VINDO AO LDMEats!
Faça Login na plataforma com a sua nova conta através do seguinte link:

 
Cumprimentos,
LDMEats
    ";
    mail($mail,
        'Form submitted',
        $message,
        'From: mmdesign@example.com');
}