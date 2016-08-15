<?php
$aModule = array(
    'id' => 'cleanupoxremark',
    'title'       => 'clean up oxremark',
    'description' =>  array(
        'de'=>"Tabelle oxremark in Datenbank aufr&aumlumen<br><br>
                <b>BENUTZUNG:</b><br>
                Dieses Modul aktivieren und unter Einstellungen eintragen<br>
								wie alt Einträge mindestens sein müssen, so dass sie automatsch gelöscht werden.<br>
								Default : 365 Tage / 1 Jahr<br>
                Jetzt werden beim Anmelden eines Admins im Backend <br>
                alte Einträge automatsch gelöscht.<br>
                <br>
                <b>Spende:</b><br>
                falls Dir das Modul gefällt, freue ich mich über<br>
								eine Spende über 5 Euro via PayPal:<br>
                <a href='http://www.patchwork.de/paypal?amount=5' target='_blank'>
								<img src='http://www.patchwork.de/paypal/btn_donate_de.gif' alt='zur PayPal-Seite' border='0'></a><br>",
								
        'en'=>"claen up table oxremark in oxid database<br><br>
                <b>HOW TO USE:</b><br>
                Activate this module and note under settings.<br>
                how old notes should be to delete these automatically<br>
								default : 365 days / 1 year<br>
                <br>
                <b>DONATION:</b><br>
                if You like this module, I appreciate a tip of 5 Euro via PayPal:<br>
                <a href='http://www.patchwork.de/paypal?amount=5' target='_blank'>
								<img src='http://www.patchwork.de/paypal/btn_donate_de.gif' alt='to PayPal' border='0'></a><br>",
    ),
    'version'     => '1.0',
    'url'         => 'http://www.patchwork.de',
    'email'       => 'info@patchwork.de',
    'author'      => 'Patchwork.de',

    'extend' => array(
        'oxuser' => 'patchwork_de/cleanupoxremark/cleanupoxremark', 
    ),
    'settings' => array(
        array('group' => 'settings', 'name' => 'iCleanUpDays', 'type' => 'str',  'value' => '365'),
        array('group' => 'settings', 'name' => 'iCleanUpDaysRegistration', 'type' => 'str',  'value' => '3'),
        array('group' => 'settings', 'name' => 'iCleanUpDaysNotes', 'type' => 'str',  'value' => '7'),
        array('group' => 'settings', 'name' => 'iCleanUpDaysRemark', 'type' => 'str',  'value' => '3'),
    )

);
