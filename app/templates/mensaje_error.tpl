<!DOCTYPE html>
<html lang="en">

<head>
<base href="http://{$smarty.server.SERVER_NAME}:{$smarty.server.SERVER_PORT}{dirname($smarty.server.PHP_SELF)}/" target="_self">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ionic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>


<body style="background-color: #E5E5E5;">
    <ion-app id="app-container">
        <ion-card>
            <ion-card-content>
            <ion-icon name="close"></ion-icon>
                <strong>ERROR!</strong>
                <strong>Falta ingresar Datos</strong> 
            </ion-card-content>
        </ion-card>
    <ion-app>
{include file="footer.tpl"}