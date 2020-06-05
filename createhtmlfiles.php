<?php
    $aCSSProperties = [
        /*'backdrop-filter',
        'block-overflow',
        'color-adjust',
        'contain',
        'fill',
        'font-display',
        'font-variant-numeric',
        'line-clamp',
        'overflow-anchor',
        'overflow-wrap',
        'page-break',
        'place-items',
        'speak',
        'text-rendering',
        'unicode-range',*/
    ];

    $sHtmlContent = '<!DOCTYPE html>
<!-- Sample from  -->
<html lang="en">
    <head>
        <style>
        
        </style>
    </head>
    <body>
    
    </body>
</html>';

    foreach($aCSSProperties as $sCSSProperty){
        $sHtmlFilePath = __DIR__ . '/html/' . $sCSSProperty . '.html';
        if(!is_file( $sHtmlFilePath)){
            file_put_contents( $sHtmlFilePath, $sHtmlContent);
        }
    }