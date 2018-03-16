<?php


class AppData {

    public $data;

    public function __construct() {
       
        $array = array_map("str_getcsv", file('data.csv'));
        $this->data = $array;

    }

    public function getAppData() {

        return $this->array;

    }

}

class App extends AppData {

    public function getAppMenu() {

        //$array = array_map("str_getcsv", explode("\n", $csv));
        
        print_r($this->data);
        
        $keys = $this->data[0];

            $i = 0;
            foreach($this->data as $m) {
                $menu_a[$i] = $m[1];
                $i++;
            }
            
            $menu1_a = array_shift($menu_a);
            
            return $menu_a;


    }

    public function getAppContent() {
        
        if (!empty($_GET['lang'])) {
            // Do something.

            $l = htmlspecialchars($_GET["lang"]);
            print $l;
            $i = 0;
            //print $this->data[1][1];
            foreach($this->data as $d) {
    
                if($d[1] == $l){
                    $content = $this->data[$i];
                }    
                
                $i++;
    
            }
    
            return $content;

          }


    }

}
