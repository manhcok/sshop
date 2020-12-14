<?php
    //biến chứa cấu trúc cấu hình là $ROUTES, xem cấu trúc tại Core/Route.class.php
    //proccess sử dụng Func::Call_method_of_class_empty được gọi tự động trong Route khi proccess là string
    //cấu hình route
    
    $ROUTES = [
        //Check login
        [
            "method"   => "get",
            "path"     => "*",
            "process"  => "Controller/Login.controller(LoginController)->AutoLogin"
        ],

        //Home Page
        [
            "method"  => "get",
            "path"    => "/",
            "process" => "Controller/Home.controller(HomeController)"
        ],

        //Login & Logout Page
        [
            "method"  => "get",
            "path"    => "/login",
            "process" => "Controller/Login.controller(LoginController)"
        ],

        [
            "method"  => "post",
            "path"    => "/login/submit",
            "process" => "Controller/Login.controller(LoginController)->LoginSubmit"
        ],

        [
            "method"  => "get",
            "path"    => "/logout",
            "process" => "Controller/Login.controller(LoginController)->Logout"
        ],

        [
            "method"        => "get",
            "path"          => "/login/app/[app]",
            "process"       => "Controller/Login.controller(LoginController)->LoginApp",
            "constraint"    => [
                "app" => "[\w|\d]+"
            ]
        ],


        //Register Page
        [
            "method"  => "get",
            "path"    => "/register",
            "process" => "Controller/Register.controller(RegisterController)"
        ],

        [
            "method"  => "post",
            "path"    => "/register/submit",
            "process" => "Controller/Register.controller(RegisterController)->RegisterSubmit"
        ],


        //Categories Page
        [
            "method"    =>  "get",
            "path"      =>  "/categories",
            "process"   =>  "Controller/Categories.controller(CategoriesController)"
        ],

        [
            "method"    =>  "get",
            "path"      =>  "/categories/[id]/[name]",
            "process"   =>  "Controller/Categories.controller(CategoriesController)->View",
            "constraint" => [
                "id" => "[\d]+"
            ]
        ],

        [
            "method"    =>  "get",
            "path"      =>  "/categories/[id]/[name]/page/[page]",
            "process"   =>  "Controller/Categories.controller(CategoriesController)->View",
            "constraint" => [
                "id" => "[\d]+",
                "page" => "[\d]+"
            ]
        ],



        //Products Page
        [
            "method"    =>  "get",
            "path"      =>  "/product",
            "process"   =>  "Controller/Product.controller(ProductController)"
        ],

        [
            "method"    =>  "post",
            "path"      =>  "/product_comment/add/[id]",
            "process"   =>  "Controller/Product.controller(ProductController)->AddComment",
            "constraint" => [
                "id" => "[\d]*"
            ]
        ],

        [
            "method"    =>  "get",
            "path"      =>  "/product_comment/view/[id]/limit/[start]/[count]",
            "process"   =>  "Controller/Product.controller(ProductController)->ViewComment",
            "constraint" => [
                "id" => "[\d]*",
                "start" => "[\d]*",
                "count" => "[\d]*"
            ]
        ],

        [
            "method"    =>  "get",
            "path"      =>  "/product/[id]",
            "process"   =>  "Controller/Product.controller(ProductController)->View",
            "constraint" => [
                "id" => "[\d]*"
            ]
        ],


        //Bag
        [
            "method"    =>  "get",
            "path"      =>  "/bag",
            "process"   =>  "Controller/Bag.controller(BagController)"
        ],

        [
            "method"    =>  "post",
            "path"      =>  "/bag/add",
            "process"   =>  "Controller/Bag.controller(BagController)->Add"
        ],

        [
            "method"    =>  "post",
            "path"      =>  "/bag",
            "process"   =>  "Controller/Bag.controller(BagController)->Change"
        ],

        [
            "method"    =>  "post",
            "path"      =>  "/bag/checkout",
            "process"   =>  "Controller/Bag.controller(BagController)->Checkout"
        ],


        //User profile user
        [
            "method"    =>  "get",
            "path"      =>  "/profile/user",
            "process"   =>  "Controller/ProfileUser.controller(ProfileUserController)"
        ],

        [
            "method"    =>  "post",
            "path"      =>  "/profile/user",
            "process"   =>  "Controller/ProfileUser.controller(ProfileUserController)->UpdateAvatar"
        ],

        //User profile change password
        [
            "method"    =>  "get",
            "path"      =>  "/profile/changepassword",
            "process"   =>  "Controller/ProfileUser.controller(ProfileUserController)->ChangePasswordIndex"
        ],

        [
            "method"    =>  "post",
            "path"      =>  "/profile/changepassword",
            "process"   =>  "Controller/ProfileUser.controller(ProfileUserController)->ChangePasswordSubmit"
        ],


        //User profile contacts
        [
            "method"    =>  "get",
            "path"      =>  "/profile/contact",
            "process"   =>  "Controller/ProfileContact.controller(ProfileContactController)"
        ],

        [
            "method"    =>  "post",
            "path"      =>  "/profile/contact",
            "process"   =>  "Controller/ProfileContact.controller(ProfileContactController)->Action"
        ],


        //User profile order
        [
            "method"    =>  "get",
            "path"      =>  "/profile/order",
            "process"   =>  "Controller/ProfileOrder.controller(ProfileOrderController)"
        ],

        [
            "method"    =>  "get",
            "path"      =>  "/profile/order/[id]",
            "process"   =>  "Controller/ProfileOrder.controller(ProfileOrderController)->ViewDeltail",
            "constraint" => [
                "id" => "[\d]*"
            ]
        ],

        [
            "method"    =>  "post",
            "path"      =>  "/profile/order/[id]",
            "process"   =>  "Controller/ProfileOrder.controller(ProfileOrderController)->CancleOrder",
            "constraint" => [
                "id" => "[\d]*"
            ]
        ],

        //Error Page
        [
            "method"  => "notraffic",
            "process" => "Controller/PageError.controller(PageErrorController)"
        ]
    ];


?>