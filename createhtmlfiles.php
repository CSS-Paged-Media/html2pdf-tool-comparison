<?php
    $aCSSProperties = [
        /*'backdrop-filter',
        'backface-visibility',
        'block-overflow',
        'box-decoration-break',
        'caption-side',
        */'caret-color',/*
        'clip-path',
        'color-adjust',
        'contain',
        'content',
        'counter-increment',
        'cursor',
        'display',
        'fill',
        'font-display',
        'font-feature-settings',
        'font-size-adjust',
        'font-stretch',
        'font-variant-numeric',
        'grid-template-columns-rows',
        'isolation',
        'line-clamp',
        */'orphans',/*
        'overflow-anchor',
        'overflow-wrap',
        'page-break',
        'place-items',
        'pointer-events',
        'quotes',
        'speak',
        'text-decoration-style',
        'text-justify',
        'text-rendering',
        'touch-action',
        'transform-origin',
        'transform-style',
        'unicode-range',
        'user-select',
        'white-space',
        'widows',
        'will-change',
        'word-spacing',
        'z-index',*/
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