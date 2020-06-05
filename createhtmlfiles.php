<?php
    $aCSSProperties = [
        /*'backdrop-filter',
        */'backface-visibility',/*
        'block-overflow',
        'box-decoration-break',
        'color-adjust',
        'contain',
        */'display',/*
        'fill',
        'font-display',
        */'font-feature-settings',
        'font-size-adjust',/*
        'font-variant-numeric',
        'grid-template-columns-rows',
        'isolation',
        'line-clamp',
        'overflow-anchor',
        'overflow-wrap',
        'page-break',
        'place-items',
        'speak',
        'text-decoration-style',
        'text-justify',
        'text-rendering',
        */'transform-origin',
        'transform-style',/*
        'unicode-range',
        'user-select',
        */'widows',
        'z-index'
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