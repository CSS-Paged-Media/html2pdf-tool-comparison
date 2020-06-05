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
        'before', 
        'after', 
        'active', 
        'any-link', 
        'adjacent-sibling', 
        'attribute', 
        'blank', 
        'checked', 
        'child', 
        'class', 
        'default', 
        'dir', 
        'disabled', 
        'descendant', 
        'empty', 
        'enabled', 
        'first-letter', 
        'first-line', 
        'first-child', 
        'first-of-type', 
        'focus', 
        'focus-visible', 
        'focus-within', 
        'general-sibling', 
        'hover', 
        'in-range', 
        'invalid', 
        'is', 
        'id', 
        'lang', 
        'last-child', 
        'last-of-type', 
        'link', 
        'marker', 
        'matches', 
        'not', 
        'nth-child', 
        'nth-last-child', 
        'nth-last-of-type', 
        'nth-of-type', 
        'only-child', 
        'only-of-type', 
        'optional', 
        'out-of-range', 
        'placeholder', 
        'placeholder-shown', 
        'read-write', 
        'read-only', 
        'required', 
        'root', 
        'selection', 
        'target', 
        'type', 
        'user-invalid', 
        'universal', 
        'valid', 
        'visited'
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