<?php
if (isset($view_table)){
echo 'hello index<br>';
    foreach ($view_table as $add_list){
    echo '<a href="'.base_url('Services/filteredDetails/'.$add_list->TAG_ID).'">'.$add_list->TAG_NAME.'</a><br>';
    }
}
?>