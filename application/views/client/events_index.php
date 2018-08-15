Events Page title
<?php

if (isset($view_tagged)){
    foreach ($view_tagged as $value_post){
        echo $value_post->E_TITLE .'<br>';
        echo $value_post->E_DATE .'<br>';
        echo $value_post->E_POSTS.'<br>';
    }

}

?>