<?php

if($msg == "/start")
{
$menu[] = array(
array(
"text" => "Notifica 1",
"callback_data" => "/n1"),
array(
"text" => "Notifica 2",
"callback_data" => "/n2"),
);
$menu[] = array(
array(
"text" => "Help",
"callback_data" => "/help"),
array(
"text" => "Info",
"callback_data" => "/info"),
);
$menu[] = array(
array(
"text" => "Foto",
"callback_data" => "/foto"),
);
$menu[] = array(
array(
"text" => "Modifica Messaggio",
"callback_data" => "/edit"),
);
$menu[] = array(
array(
"text" => "Developer",
"url" => "https://t.me/Matxk"),
);
sm($chatID, "Il Bot Funziona!", $menu, "Markdown");
}

if($msg == "/start2")
{
$menu[] = array(
array(
"text" => "Notifica 1",
"callback_data" => "/n1"),
array(
"text" => "Notifica 2",
"callback_data" => "/n2"),
);
$menu[] = array(
array(
"text" => "Help",
"callback_data" => "/help"),
array(
"text" => "Info",
"callback_data" => "/info"),
);
$menu[] = array(
array(
"text" => "Foto",
"callback_data" => "/foto"),
);
$menu[] = array(
array(
"text" => "Modifica Messaggio",
"callback_data" => "/edit"),
);
$menu[] = array(
array(
"text" => "Developer",
"url" => "https://t.me/Matxk"),
);
cb_reply($cbid, "🔄 Caricamento", false, $cbmid, "Il Bot Funziona!", $menu, "Markdown");
}

if($msg == "/n1")
{
cb_reply($cbid, "Notifica tipo 1", false);
}

if($msg == "/n2")
{
cb_reply($cbid, "Notifica tipo 2", true);
}

if($msg == "/help")
{
$menu[] = array(
array(
"text" => "Indietro",
"callback_data" => "/start2"),
);
cb_reply($cbid, "🔄 Caricamento", false, $cbmid, "I comandi del bot sono:

/n1 | Notifica Tipo 1;
/n2 | Notifica Tipo 2;
/help | Aiuto (Questo menu);
/info | Informazioni sul Bot;
/foto | Ti invia una foto con una didascalia;
/edit | Modifica il messaggio iniziale ogni <TOT> seconarrivare alla fine;

Tutti i comandi sono disponibili nelle tastiere del menu /start", $menu, "Markdown");
}

if($msg == '/foto') {


si($chatID, 'foto.jpg', false, 'Didascalia');

}

if($msg == "/edit")
{
$menu[] = array(
array(
"text" => "Indietro",
"callback_data" => "/start2"),
);
cb_reply($cbid, "🔄 Caricamento", false, $cbmid, "Attendi");
sleep(0.5);
cb_reply($cbid, "🔄 Caricamento", false, $cbmid, "Attendi.");
sleep(0.5);
cb_reply($cbid, "🔄 Caricamento", false, $cbmid, "Attendi..");
sleep(0.5);
cb_reply($cbid, "🔄 Caricamento", false, $cbmid, "Attendi...");
sleep(0.5);
cb_reply($cbid, "🔄 Caricamento", false, $cbmid, "Attendi");
sleep(0.5);
cb_reply($cbid, "🔄 Caricamento", false, $cbmid, "Attendi.");
sleep(0.5);
cb_reply($cbid, "🔄 Caricamento", false, $cbmid, "Attendi..");
sleep(0.5);
cb_reply($cbid, "🔄 Caricamento", false, $cbmid, "Attendi...");
sleep(1);
cb_reply($cbid, "🔄 Caricamento", false, $cbmid, "<b>Bot</b>");
sleep(1);
cb_reply($cbid, "🔄 Caricamento", false, $cbmid, "<b>Bot sviluppato</b>");
sleep(1);
cb_reply($cbid, "🔄 Caricamento", false, $cbmid, "<b>Bot sviluppato da</b>");
sleep(1);
cb_reply($cbid, "🔄 Caricamento", false, $cbmid, "<b>Bot sviluppato da</b> @Matxk", $menu, "HTML");
}