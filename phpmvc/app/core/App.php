<?php 

    class App {
        protected $controller = 'home',
                  $method = 'index',
                  $params = [];

        public function __construct(){
            $url = $this->parseUrl();
            // mengcek ke url nya dan mengabil controllernya di index ke[0]
    // controller
            if( file_exists('../app/controllers/'. $url[0] . '.php') ){
                $this->controller = $url[0];
                unset($url[0]);
            }

            require_once '../app/controllers/' . $this->controller . '.php';
            $this->controller = new $this->controller;
            // kita timpa dengan instansiasi nya


            // method
            if( isset($url[1]) ){
                if( method_exists($this->controller, $url[1]) ){
                    // dari object controllernya , ada tidak methodnya
                    $this->method = $url[1];
                    unset($url[1]);
                    // kalau methodnya ada maka akan di timpa dengan method default
                }
            }

            // params
            if( !empty( $url) ){
                $this->params = array_values($url);
            }

            // jalankan controller & method, serta kirimkan params jika ada
            call_user_func_array([$this->controller,$this->method],$this->params);





        }
        public function parseUrl(){
            if( isset($_GET['url']) ){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/',$url);
                return $url;
            }
        }
    }   