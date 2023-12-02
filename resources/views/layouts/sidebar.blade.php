<aside class="sidebar">
        <div class="sidebar__frame">
    
            <!-- aside header contain a brand name and logo  -->
            <div class="sidebar__header sidebar-header">
                <li class="fa-light fa-xmark sidebar__close-btn "></li>
                <a href="#" class="sidebar-header__logo">
                    <img id="sidebar-logo" src="{{ asset("uploads/logo4.png") }}" alt="Logo Contain G letter and website name Golden-links">
                </a>
                
            </div>
        
            <!-- aside body contain all aside links and buttons -->
            <div class="sidebar__content sidebar-content">
                @php
                    $dashboard = false ;
                    $links = false ;
                    $add_link = false ;
                    $user_links = false ;
                    $referral = false ;
                    $support = false ;
                    $setting = false ;
        
                    switch (Route::currentRouteName()) {
                        case 'dashboard':
                              $dashboard = true ;
                            break;
                        case 'links':
                              $links = true ;
                            break;
                        case 'add-link':
                              $add_link = true ;
                            break;
                        case 'user-links':
                              $user_links = true ;
                            break;
                        case 'referral':
                              $referral = true ;
                            break;
                        case 'support':
                              $support = true ;
                            break;
                        case 'setting':
                              $setting = true ;
                            break;
                        
                    }
                @endphp
        
                <ul class="sidebar-content__items sidebar-items">
        
                    <li class="sidebar-items__frame sidebar-item ">
                        <a href="/" @class(['sidebar-item__link', "fa-light", " fa-grid-2" , 'active-route' => $dashboard]) >
                            <span class="sidebar-item__title"> لوحة التحكم </span>
                        </a>
                    </li>
        
        
                    <li class="sidebar-items__frame sidebar-item">
                        <a href="links" @class(['sidebar-item__link', "fa-light", " fa-bullseye-pointer " , 'active-route' => $links])>
                            <span class="sidebar-item__title"> تبادل الزيارات </span>
                        </a>
                    </li>
        
                    <li class="sidebar-items__frame sidebar-item">
                        <a href="add-link" @class(['sidebar-item__link', "fa-light", " fa-plus " , 'active-route' => $add_link])>
                            <span class="sidebar-item__title"> أضافة رابط </span>
                        </a>
                    </li>
        
                    <li class="sidebar-items__frame sidebar-item">
                        <a href="user-links" @class(['sidebar-item__link', "fa-light", " fa-link " , 'active-route' => $user_links])>
                            <span class="sidebar-item__title"> روابطك </span>
                        </a>
                    </li>
        
                    <li class="sidebar-items__frame sidebar-item">
                        <a href="referral"@class(['sidebar-item__link', "fa-light", " fa-users-line " , 'active-route' => $referral])>
                            <span class="sidebar-item__title"> الإحالة </span>
                        </a>
                    </li>
        
                    <li class="sidebar-items__frame sidebar-item">
                        <a href="support" @class(['sidebar-item__link', "fa-light", " fa-messages-question " , 'active-route' => $support])>
                            <span class="sidebar-item__title"> اسئلة شائعة </span>
                        </a>
                    </li>
        
        
                    <li class="sidebar-items__frame sidebar-item">
                        <a href="setting" @class(['sidebar-item__link', "fa-light", " fa-gear " , 'active-route' => $setting])>
                            <span class="sidebar-item__title"> الإعدادات </span>
                        </a>
                    </li>
        
                </ul>
        
            </div>
            <section class="sidebar__footer">
                <a href="{{ route("logout") }}" class="sidebar-item__link fa-light fa-arrow-right-from-bracket">
                  <span class="sidebar-item__title" id="logout-btn">  تسجيل خروج </span>
                </a>
            </section>
    </div>
</aside>