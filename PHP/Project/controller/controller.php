<?php 
class controller{
    public $static_base_url = "http://localhost/laravel/27AugLaravelTTS10_30/27AugLaravelTTS10_30/PHP/Project/assets/";
    public $base_url = "";
    public function __construct() {
        //echo "http://localhost/laravel/27AugLaravelTTS10_30/PHP/Project/assets/";
        // echo $this->static_base_url;
        // $ReqURI = explode("/",$_SERVER['REQUEST_URI']);
        // $this->base_url = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/".$ReqURI[1]."/".$ReqURI[2]."/".$ReqURI[3]."/".$ReqURI[4]."/assets/";
        // echo "<pre>";
        // print_r($_SERVER);
        // echo "</pre>";
        if (isset($_SERVER['PATH_INFO'])) {
            switch ($_SERVER['PATH_INFO']) {
                case '/index':
                    include_once("views/header.php");
                    include_once("views/homepage.php");
                    include_once("views/footer.php");
                    break;
                case '/about':
                    include_once("views/header.php");
                    echo "<h2>About us page</h2>"; 
                    include_once("views/footer.php");
                    break;
                case '/services':
                    include_once("views/header.php");
                    echo "<h2>services</h2>"; 
                    include_once("views/footer.php");
                    break;
                
                default:
                    # code...
                    break;
            }
        }
        
    }
}

$controller = new controller;

?>