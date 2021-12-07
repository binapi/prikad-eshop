<?php
include "db.php";

connectionEshop();
selectAll();

?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="grid.css">
    <title>ESHOP</title>
</head>
<body>
    <header>
       <?php include "header.php";?>
    </header>
    <main>
    <section class="app_set_menu">
        <?php include "menu.php";?>
    </section>
    <section class="app_nav_side_bar_set" style="width: 20vw;">
        <div class="app_nav_drop_down_menu1">
            <ul>
                <li><a href="#">Podle výrobce</a></li>
                <li><a href="#">Ceníkové řazení</a></li>
                <li class="app_nav_drop_down_menu_configurator"><a href="#">Konfigurátory</a><img class="app_nav_drop_down_menu1_image" src="images/arrow_right.png" alt="">
                    <div class="app_nav_drop_down_menu_set_configurator">
                    <ul>
                        <li><a href="#">PC konfigurátory</a></li>
                    </ul>
                    </div>
                </li>
                <li class="app_nav_dropdown_menu_offer" style="border: 0;"><a href="#">Výhodná nabídka</a><img class="app_nav_drop_down_menu1_image" src="images/arrow_right.png" alt="">
                    <div class="app_nav_dropdown_menu_set_offer">
                    <ul>
                        <li><a href="#">Novinky</a></li>
                        <li><a href="#">Top produkt</a></li>
                        <li><a href="#">Promoakce</a></li>
                        <li><a href="#">Výprodej</a></li>
                    </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="app_nav_drop_down_menu2">
            <ul>
                <li class="app_nav_drop_down_menu_pc"><a href="#">PC a Notebooky</a><img class="app_nav_drop_down_menu1_image" src="images/arrow_right.png" alt="">
                    <div class="app_nav_drop_down_menu_set_pc">
                    <ul>
                        <li><a href="#">Notebooky a ultrabooky</a></li>
                        <li><a href="#">Příslušenství k notebookům a ultrabookům</a></li>
                        <li><a href="#">Tašky pro notebooky a ultrabooky</a></li>
                        <li><a href="#">All-in One</a></li>
                        <li><a href="#">PC sestavy</a></li>
                        <li><a href="#">Příslušenství k PC</a></li>
                        <li><a href="#">Elektronické čtečky</a></li>
                        <li><a href="#">Rozšíření záruky k PC a NTB</a></li>
                    </ul>
                    </div>
                </li>
                <li class="app_nav_drop_down_menu_mulifunction"><a href="#">Multifunkce a tiskárny</a><img class="app_nav_drop_down_menu1_image" src="images/arrow_right.png" alt="">
                    <div class="app_nav_drop_down_menu_set_mulifunction">
                    <ul>
                        <li><a href="#">Mulifunkce</a></li>
                        <li><a href="#">Příslušenství k multifunkcím</a></li>
                        <li><a href="#">Tiskárny</a></li>
                        <li><a href="#">Příslušenství k tiskárnám</a></li>
                        <li><a href="#">3D tiskárny</a></li>
                        <li><a href="#">Spotřební materiál k 3D tiskárnám</a></li>
                        <li><a href="#">Skenery</a></li>
                        <li><a href="#">Příslušensví k skenerům</a></li>
                        <li><a href="#">Spotřební materiál k periferiím</a></li>
                        <li><a href="#">Rožšíření záruky k periferiím</a></li>
                    </ul>
                    </div>
                </li>
                <li class="app_nav_drop_down_menu_periphery"><a href="#">Periferie</a><img class="app_nav_drop_down_menu1_image" src="images/arrow_right.png" alt="">
                    <div class="app_nav_drop_down_menu_set_periphery">
                    <ul>
                        <li><a href="#">Monitory</a></li>
                        <li><a href="#">Příslušenstvé k monitorům</a></li>
                        <li><a href="#">Klávesnice</a></li>
                        <li><a href="#">Myši</a></li>
                        <li><a href="#">Sety klávesnice + myš</a></li>
                        <li><a href="#">Podložky pod myš</a></li>
                        <li><a href="#">Grafické tablety</a></li>
                        <li><a href="#">Reproduktory</a></li>
                        <li><a href="#">USB Flash disky</a></li>
                        <li><a href="#">Média</a></li>
                        <li><a href="#">Web kamery</a></li>
                        <li><a href="#">IO karty/zařízení, huby a čtečky</a></li>
                        <li><a href="#">Modemy</a><img class="app_nav_drop_down_menu1_image" src="images/arrow_right.png">                    </li>
                    </ul>
                    </div>
                </li>
                <li class="app_nav_drop_down_menu_component"><a href="#">Komponenty</a><img class="app_nav_drop_down_menu1_image" src="images/arrow_right.png" alt="">
                    <div class="app_nav_drop_down_menu_set_component">
                    <ul>
                        <li><a href="#">Pevné disky</a></li>
                        <li><a href="#">Příslušenství pro pevné disky</a></li>
                        <li><a href="#">Grafické karty</a></li>
                        <li><a href="#">Procesory</a></li>
                        <li><a href="#">Zákaldní desky</a></li>
                        <li><a href="#">Paměti RAM</a></li>
                        <li><a href="#">Zdroje</a></li>
                        <li><a href="#">PC skříně</a></li>
                        <li><a href="#">Příslušenství ke PC skříním</a></li>
                        <li><a href="#">Opické mechaniky</a></li>
                        <li><a href="#">Chladiče</a></li>
                        <li><a href="#">TV tunery/Střihové kary</a></li>
                        <li><a href="#">Zvukové karty</a></li>
                        <li><a href="#">Kabely a redukce (kromě LAN)</a></li>
                    </ul>
                    </div>
                </li>
                <li class="app_nav_drop_down_menu_phone"><a href="#">Mobilní telefony a tablety</a><img class="app_nav_drop_down_menu1_image" src="images/arrow_right.png" alt="">
                    <div class="app_nav_drop_down_menu_set_phone">
                    <ul>
                        <li><a href="#">Mobilní telefony</a></li>
                        <li><a href="#">Tablety</a></li>
                        <li><a href="#">Selfie tyče a stabilizátory</a></li>
                        <li><a href="#">Příslušenství k mobilům a tabletům</a></li>
                    </ul>
                    </div>
                </li>
                <li class="app_nav_drop_down_menu_software"><a href="#">Software</a><img class="app_nav_drop_down_menu1_image" src="images/arrow_right.png" alt="">
                    <div class="app_nav_drop_down_menu_set_software">
                    <ul>
                        <li><a href="#">OS desktopové</a></li>
                        <li><a href="#">OS serverové</a></li>
                        <li><a href="#">Kácelářský</a></li>
                        <li><a href="#">Antivirový</a></li>
                        <li><a href="#">Grafický</a></li>
                        <li><a href="#">Zálohovací</a></li>
                        <li><a href="#">Datábazový</a></li>
                        <li><a href="#">Komunikační</a></li>
                        <li><a href="#">Vývojářský</a></li>
                        <li><a href="#">Hry, zábava, výuka</a></li>
                        <li><a href="#">Ostaní</a></li>
                    </ul>
                    </div>
                </li>
                <li class="app_drop_down_menu_consumerElectronics"><a href="#">Spotřební elektronika</a><img class="app_nav_drop_down_menu1_image" src="images/arrow_right.png" alt="">
                    <div class="app_drop_down_menu_set_consumerElectronics">
                    <ul>
                        <li><a href="#">Audio systémy</a></li>
                        <li><a href="#">Přenosné audio</a></li>
                        <li><a href="#">Příslušenství k hudembním přehrávačům</a></li>
                        <li><a href="#">Paměťové karty</a></li>
                        <li><a href="#">Bezdrátové reproduktory</a></li>
                        <li><a href="#">Sluchátky</a></li>
                        <li><a href="#">Mikrofony</a></li>
                        <li><a href="#">Kalkulátory</a></li>
                        <li><a href="#">Přepěťové ochrany</a></li>
                        <li><a href="#">Ostatní spotřební elektronika</a></li>
                    </ul>
                    </div>
                </li>
                <li class="app_nav_drop_down_menu_office"><a href="#">Kancelářská technika</a><img class="app_nav_drop_down_menu1_image" src="images/arrow_right.png" alt="">
                    <div class="app_nav_drop_down_menu_set_office">
                    <ul>
                        <li><a href="#">Skartovače</a></li>
                        <li><a href="#">Řezačky papíru</a></li>
                        <li><a href="#">Děrovačky a sesívačky</a></li>
                        <li><a href="#">Příslušenství k děrivačkám a sešívačkám</a></li>
                        <li><a href="#">Laminátory</a></li>
                        <li><a href="#">Laminovací fólie a kapsy</a></li>
                        <li><a href="#">Plánovací tabule a nástěnky</a></li>
                        <li><a href="#">Komunikace</a></li>
                        <li><a href="#">Stolní telefony</a></li>
                        <li><a href="#">Příslušenství k VoIP telefonům</a></li>
                        <li><a href="#">Faxy</a></li>
                        <li><a href="#">Identifikace</a></li>
                        <li><a href="#">Ergonomie</a></li>
                        <li><a href="#">Tisková média</a></li>
                    </ul>
                    </div>
                </li>
                <li class="app_nav_drop_down_menu_server"><a href="#">Servery a zálohování</a><img class="app_nav_drop_down_menu1_image" src="images/arrow_right.png" alt="">
                    <div class="app_nav_drop_down_menu_set_server">
                    <ul>
                        <li><a href="#">Servery</a></li>
                        <li><a href="#">Rackové skříně</a></li>
                        <li><a href="#">Zálohovací systémy</a></li>
                        <li><a href="#">Záložní zdroje, EPS a příslušenství</a></li>
                        <li><a href="#">CPU k serverům</a></li>
                        <li><a href="#">Pevné disky k serverům</a></li>
                        <li><a href="#">RAM k serverům</a></li>
                        <li><a href="#">Řadiče RAID/ non RAID</a></li>
                        <li><a href="#">Síťové karty pro servery</a></li>
                        <li><a href="#">Ostatní příslušenství k serverům</a></li>
                        <li><a href="#">Servery - Intel Assembling</a></li>
                        <li><a href="#">Rozšíření záruky kserverům</a></li>
                        <li><a href="#">Zálohovací mechaniky</a></li>
                        <li><a href="#">Média Ultrium</a></li>
                        <li><a href="#">Příslušenství k řadičům</a></li>
                        <li><a href="#">Příslušenství k rackovým skříním</a></li>
                        <li><a href="#">Příslušenství k zálohovacím mechanikám</a></li>
                        <li><a href="#">Příslušenství k zálohovacím systémům</a></li>
                    </ul>
                    </div>
                </li>
                <li class="app_nav_drop_down_menu_networkElements"><a href="#">Síťové prvky</a><img class="app_nav_drop_down_menu1_image" src="images/arrow_right.png" alt="">
                    <div class="app_nav_drop_down_menu_set_networkElements">
                    <ul>
                        <li><a href="#">Wi-fi akvní prvky</a></li>
                        <li><a href="#">Wi-fi antény</a></li>
                        <li><a href="#">Wi-fi příslušenství</a></li>
                        <li><a href="#">Routery a firewally</a></li>
                        <li><a href="#">ADSL, xDSL</a></li>
                        <li><a href="#">PoE PowerLine</a></li>
                        <li><a href="#">RouterBOARD</a></li>
                        <li><a href="#">SFP Moduly</a></li>
                        <li><a href="#">Schwiche</a></li>
                        <li><a href="#">Optická kabeláž</a></li>
                        <li><a href="#">Konverory</a></li>
                        <li><a href="#">Kamery</a></li>
                        <li><a href="#">Příslušenství ke kaamerám</a></li>
                        <li><a href="#">IP telefonie</a></li>
                        <li><a href="#">Datové rozvaděče</a></li>
                        <li><a href="#">Příslušenství k rozvaděčům</a></li>
                        <li><a href="#">Strukturovaná kabeláž</a></li>
                        <li><a href="#">Tiskové servery</a></li>
                        <li><a href="#">Příslušenství k aktivním síťovým prvkům</a></li>
                        <li><a href="#">Rozšířené záruky</a></li>
                        <li><a href="#">PDU, ATS, KVM Switche</a></li>
                        <li><a href="#">Příslušenství k PDU, ATM, KVM switchům</a></li>
                    </ul>
                    </div>
                </li>
                <li class="app_nav_drop_down_menu_cashRegisterSystem"><a href="#">Pokladní systémy</a><img class="app_nav_drop_down_menu1_image" src="images/arrow_right.png" alt="">
                    <div class="app_nav_drop_down_menu_set_cashRegisterSystem">
                    <ul>
                        <li><a href="#">Čtečky/Zapisovačky karet a čipů</a></li>
                        <li><a href="#">Pokladny</a></li>
                        <li><a href="#">Dotykyové moniory</a></li>
                        <li><a href="#">Fixní čtečky kódů</a></li>
                        <li><a href="#">Pokladní tiskárny</a></li>
                        <li><a href="#">Pokladní zásuvky</a></li>
                        <li><a href="#">Programovatelné klávesnice</a></li>
                        <li><a href="#">Datové terminály</a></li>
                        <li><a href="#">Spořební maeriál a příslušenství</a></li>
                        <li><a href="#">Ruční čtečky kódů</a></li>
                        <li><a href="#">Čtečky čárových kódů a etiket</a></li>
                        <li><a href="#">Zákaznické displeje</a></li>
                        <li><a href="#">ITR pásky</a></li>
                        <li><a href="#">Nálepky a RFID</a></li>
                        <li><a href="#">Počítačky mincí/bankovek</a></li>
                    </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="slider_box">
        <div class="slide_box">
            <img class="slide_image" src="images/slide2.jpg" alt="">
        </div>
        <div class="arrows_box">
        <img class="arrow_left" src="images/left-arrow.png" alt="">
        <img class="arrow_right" src="images/arrow_right.png" alt="">
        </div>
    </section>
    <section class="app_catalog_print_item">
        <?php

        foreach($result as $item){
            echo '
                <div class="app_catalog_print_box_item">
                    <div class="app_catalog_print_name_item"><h3>'.$item["Nazev"].'</h3></div>
                    <div class="app_catalog_print_image_item">
                        <a href="https://edshop.edsystem.cz/IMGCACHE/_1556/1556860_0a_9.jpg">
                            <img src="https://edshop.edsystem.cz/IMGCACHE/_1556/1556860_0a_9.jpg">
                        </a>
                    </div>
                    <div class="app_catalog_print_price_id_item">
                        <div class="app_catalog_print_price_id_item">
                            <p>ID produktu: '.$item["id"].'</p>
                        </div>
                        <div class="app_catalog_print_price_dealer_item">
                            <p>'.$item["Dealer"].' Kč</p>
                        </div>
                    </div>
                    <div class="app_catalog_prin_buy_btn">
                        <a href="view_item.php?id='. $item["id"] .'">Koupit</a>
                    </div>
                </div>';
        }
        ?>
    </main>
    <footer>
    <hr class="cara">
        <?php include "foter.php";?>
    </footer>
</body>
<script src="script.js"></script>
</html>