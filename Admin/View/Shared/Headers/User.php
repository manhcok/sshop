<div class="header-left-top" id="header-user">

        
        @if @Data:page_logged 
        <div class="account">
        <div class="acc-name">
            <span>
                {{@Data:page_name_logged}}
            </span>
            <div></div>
        </div>
        <div class="acc-avatar">
            <a href="{{YUH_URI_ROOT}}/profile"><img src="{{YUH_URI_ROOT}}/Resource/img/account.png"></a>
           
        </div>
        <div class="acc-menu">
            <div class="menu-container">
                <div href-click="{{YUH_URI_ROOT}}/logout">Đăng xuất</div>
            </div>
        </div>
    </div>
    
        @endif

</div>