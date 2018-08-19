@extends('front.layout')
@section('content')
    <header class="title-block__header header">
        <div class="header__logo-wrap">
            <img src="/img/" alt="" class="header__logo">
        </div>
        <nav class="header__nav-wrap js_nav_wrap">
            <ul class="header__nav-list">
                <li class="header__nav-item"><a href="#about" class="js_goto_anchor header__nav-link"><span class="header__link-text">О комплексе</span></a></li>
                <li class="header__nav-item"><a href="#gallery" class="js_goto_anchor header__nav-link"><span class="header__link-text">Галерея</span></a></li>
                <li class="header__nav-item"><a href="#flats" class="js_goto_anchor header__nav-link"><span class="header__link-text">Планировки</span></a></li>
                <li class="header__nav-item"><a href="#contacts" class="js_goto_anchor header__nav-link"><span class="header__link-text">Контакты</span></a></li>
            </ul>
        </nav>
        <div class="header__menu-button menu-button js_menu">
            <div class="menu-button__rows-wrap">
                <span class="menu-button__top"></span>
                <span class="menu-button__middle"></span>
                <span class="menu-button__bottom"></span>
            </div>
        </div>
    </header>

    <section class="about"></section>
@endsection
