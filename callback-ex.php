<? php
  // Basic Funcction
   function display_name($name){
  echo "my name is {$name}";
  }

//main
function get_name($yourname,$show){
  $show($yourname);
}

// run
get_name('Nimalananthan','dispaly_name');
