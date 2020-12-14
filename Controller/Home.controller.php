<?php
    Func::Import("Model/ProductModel.class");
    Func::Import("Model/ConfigModel.class");

    class HomeController extends BaseController {

        public function Index(){
            $modelProduct = new ProductModel;
            $modelConfig = new ConfigModel;

            View::bind_data('home_slides', $modelConfig->getSlides());
            View::bind_data('home_top_popular', $modelProduct->GetProductCard10Popular());
            View::bind_data('home_top_sale', $modelProduct->GetProductCard10Sale());

            #Render View
            parent::renderPage(
                "SShop - Trang chủ",
                dirname(__FILE__).'/../View/Home/LayoutHome.php',
                dirname(__FILE__).'/../View/Home/Home.php'
            );
        }

    }


?>

