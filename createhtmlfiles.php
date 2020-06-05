<?php
    $aCSSProperties = [
        /*'backdrop-filter',
        'backface-visibility',
        */'background',
        'background-attachment',
        'background-blend-mode',
        'background-clip',
        'background-image',
        'background-origin',
        'background-position',
        'background-repeat',
        'background-size',
        /*'block-overflow', later */
        'border-image',
        'border-radius',
        /*'box-decoration-break',
        'caption-side',
        'caret-color',
        */'clear',/*
        'clip-path',
        'color-adjust',
        'contain',
        'content',
        'counter-increment',
        'cursor',
        'direction',
        'display',
        'fill',
        */'filter',/*
        'float',
        */'font',/*
        'font-display',
        */'font-family',/*
        'font-feature-settings',
        'font-size-adjust',
        'font-stretch',
        'font-variant-numeric',
        'grid-template-columns-rows',
        'image-rendering',
        'isolation',
        'line-clamp',
        'offset-anchor',
        'offset-distance',
        'offset-path',
        'offset-rotate',
        'orphans',
        'outline',
        'overflow-anchor',
        'overflow-wrap',
        'page-break',
        'place-items',
        'pointer-events',
        */'position',/*
        'quotes',
        'resize',
        'speak',
        'table-layout',
        */'text-align',/*
        'text-decoration-style',
        'text-justify',
        'text-rendering',
        'text-shadow',
        'text-stroke',
        'touch-action',
        'transform-origin',
        'transform-style',
        'unicode-bidi',
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