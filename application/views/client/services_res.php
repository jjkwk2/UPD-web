<?php

if (isset($view_tagged)){
    foreach ($view_tagged as $value_post){
        echo $value_post->TITLE .'<br>';
        echo $value_post->POSTDATE .'<br>';
        echo $value_post->POSTXT .'<br>';
    }

}

?>