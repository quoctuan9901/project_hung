<?php 
function select_dequy ($data,$selected,$parent = 0,$str = '') {
    foreach ($data as $item) {
        if ($item->parent_id == $parent) {
            if ($selected == $item->id) {
                echo '<option selected value="'.$item->id.'">'.$str.$item->name.'</option>';
            } else {
                echo '<option value="'.$item->id.'">'.$str.$item->name.'</option>';
            }
           

            select_dequy ($data,$selected,$item->id,$str.'---| ');
        }
    }
}

?>