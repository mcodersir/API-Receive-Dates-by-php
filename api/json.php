<?php
require 'vendor/autoload.php';
use Goutte\Client;

function fetch_dates() {
    $client = new Client();
    $crawler = $client->request('GET', 'https://www.time.ir/');

    $shamsi_date_num = trim($crawler->filter('#ctl00_cphTop_Sampa_Web_View_TimeUI_ShowDate11cphTop_3917_lblShamsiNumeral')->text());
    $shamsi_date = trim($crawler->filter('#ctl00_cphTop_Sampa_Web_View_TimeUI_ShowDate11cphTop_3917_lblShamsi')->text());
    
    $gregorian_date_num = trim($crawler->filter('#ctl00_cphTop_Sampa_Web_View_TimeUI_ShowDate11cphTop_3917_lblGregorianNumeral')->text());
    $gregorian_date = trim($crawler->filter('#ctl00_cphTop_Sampa_Web_View_TimeUI_ShowDate11cphTop_3917_lblGregorian')->text());
    
    $hijri_date_num = trim($crawler->filter('#ctl00_cphTop_Sampa_Web_View_TimeUI_ShowDate11cphTop_3917_lblHijriNumeral')->text());
    $hijri_date = trim($crawler->filter('#ctl00_cphTop_Sampa_Web_View_TimeUI_ShowDate11cphTop_3917_lblHijri')->text());
    
    $astrological_sign = trim($crawler->filter('#ctl00_cphTop_Sampa_Web_View_TimeUI_ShowDate11cphTop_3917_lblAstrologicalSign')->text());

    $dates = [
        'shamsi' => [
            'numeral' => $shamsi_date_num,
            'full_date' => $shamsi_date,
        ],
        'gregorian' => [
            'numeral' => $gregorian_date_num,
            'full_date' => $gregorian_date,
        ],
        'hijri' => [
            'numeral' => $hijri_date_num,
            'full_date' => $hijri_date,
        ],
        'astrological_sign' => $astrological_sign
    ];

    header('Content-Type: application/json');
    echo json_encode($dates, JSON_UNESCAPED_UNICODE);
}

fetch_dates();
?>
