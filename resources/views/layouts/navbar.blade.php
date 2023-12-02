<nav class="navbar">

    <div class="navbar__header">
        <li class="fa-light fa-bars menu-icon "></li>
        <div class="navbar__header__page-title"> @stack("PAGE_TITLE") </div>
    </div>
    
    <div class="navbar__content navbar-content">
    
        <ul class="navbar-content__items">
           
           <li class="navbar-content__item">
              <a href="#" class="fa-light fa-envelope navbar-content__item__icon"></a>
           </li>
    
           <li class="navbar-content__item">
              <a href="#" class="fa-light fa-bell navbar-content__item__icon"></a>
           </li>
           
           <li class="navbar-content__item navbar-content__item--avatar">
              <a href="#" class="navbar-content__item__icon">
                 <img class="navbar-content__item__avatar" src="{{ asset("uploads/storage.jpg") }}" />
              </a>
           </li>
    
        </ul>
    
    </div>
    </nav>