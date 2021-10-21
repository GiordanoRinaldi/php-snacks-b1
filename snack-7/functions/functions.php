<?php


function media($arr){
    $media = array_sum($arr) / count($arr);
    return $media;
};