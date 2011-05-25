<?php

$_SESSION['records_per_page'] = 2;
if (is_numeric($_GET['page'])) {
  $page = $_GET['page'];
}else{
  $page = 1;
}

function paginationControl($num_records) {
      
   $pages = $num_records / $_SESSION['records_per_page'];
   if ($num_records % $_SESSION['records_per_page']) {
    $pages++;
   }
   
   isset($_GET['page']) ? $currentPage = $_GET['page'] : $currentPage = 1;
    
   $pagination = '';
   for ($i=1; $i <= $pages; $i++) {
        if ($pagination) { $pagination .= " | "; }
        if ($currentPage != $i) {
            $pagination .= "<a href='?page=$i'>$i</a>";
        }else{
            $pagination .= "$i";
        }
   }
   
   return $pagination;
}