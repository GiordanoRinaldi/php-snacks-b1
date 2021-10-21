<?php


function media($arr){
    $media = round((array_sum($arr) / count($arr)), 1) ;
    return $media;
};