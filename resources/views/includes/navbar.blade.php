<header class="site-header">

    <nav class="main-navbar">

        <div class="container">

            <div class="navbar-inner">

                {{-- =====================================================
                    LOGO
                ====================================================== --}}
                <a href="{{ route('home') }}" class="navbar-brand">

                    @if($company->logo)

                        <img
                            src="{{ asset('storage/' . $company->logo) }}"
                            alt="{{ $company->company_name }}"
                        >

                    @else

                        <div class="brand-text">

                            <strong>
                                {{ $company->company_name }}
                            </strong>

                            <span>
                                {{ app()->getLocale() === 'ar'
                                    ? 'الخدمات الصناعية'
                                    : 'INDUSTRIAL SERVICES' }}
                            </span>

                        </div>

                    @endif

                </a>


                {{-- =====================================================
                    DESKTOP NAVIGATION
                ====================================================== --}}
                <div class="navbar-menu">

                    <a
                        href="{{ route('home') }}"
                        class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                    >
                        {{ app()->getLocale() === 'ar' ? 'الرئيسية' : 'HOME' }}
                    </a>


                    <a
                        href="{{ route('about') }}"
                        class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                    >
                        {{ app()->getLocale() === 'ar' ? 'من نحن' : 'ABOUT US' }}
                    </a>


                    <a
                        href="{{ route('services') }}"
                        class="nav-link {{ request()->routeIs('services*') ? 'active' : '' }}"
                    >
                        {{ app()->getLocale() === 'ar' ? 'خدماتنا' : 'SERVICES' }}
                    </a>


                    <a
                        href="{{ route('products') }}"
                        class="nav-link {{ request()->routeIs('products*') ? 'active' : '' }}"
                    >
                        {{ app()->getLocale() === 'ar' ? 'منتجاتنا' : 'PRODUCTS' }}
                    </a>


                    <a
                        href="{{ route('projects') }}"
                        class="nav-link {{ request()->routeIs('projects*') ? 'active' : '' }}"
                    >
                        {{ app()->getLocale() === 'ar' ? 'مشاريعنا' : 'PROJECTS' }}
                    </a>


                    <a
                        href="{{ route('contact') }}"
                        class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                    >
                        {{ app()->getLocale() === 'ar' ? 'تواصل معنا' : 'CONTACT' }}
                    </a>

                </div>


                {{-- =====================================================
                    DESKTOP ACTIONS
                ====================================================== --}}
                <div class="navbar-actions">

                    {{-- Language --}}
                    <a
                        href="{{ route(
                            'language.switch',
                            [
                                'locale' => app()->getLocale() === 'ar'
                                    ? 'en'
                                    : 'ar'
                            ]
                        ) }}"
                        class="language-switcher"
                    >

                        <i class="bi bi-globe2"></i>

                        <span>
                            {{ app()->getLocale() === 'ar' ? 'EN' : 'AR' }}
                        </span>

                    </a>


                    {{-- Phone --}}
                    @if($company->phone)

                        <a
                            href="tel:{{ $company->phone }}"
                            class="navbar-contact"
                        >

                            <span>
                                {{ app()->getLocale() === 'ar'
                                    ? 'اتصل بنا'
                                    : 'CALL US' }}
                            </span>

                            <strong>
                                {{ $company->phone }}
                            </strong>

                        </a>

                    @endif

                </div>


                {{-- =====================================================
                    MOBILE ACTIONS
                    Language + Hamburger
                ====================================================== --}}
                <div class="mobile-actions">

                    {{-- Mobile Language --}}
                    <a
                        href="{{ route(
                            'language.switch',
                            [
                                'locale' => app()->getLocale() === 'ar'
                                    ? 'en'
                                    : 'ar'
                            ]
                        ) }}"
                        class="mobile-language-top"
                        aria-label="{{ app()->getLocale() === 'ar' ? 'English' : 'العربية' }}"
                    >

                        <i class="bi bi-globe2"></i>

                        <span>
                            {{ app()->getLocale() === 'ar' ? 'EN' : 'AR' }}
                        </span>

                    </a>


                    {{-- Mobile Menu Toggle --}}
                    <button
                        type="button"
                        class="mobile-menu-toggle"
                        id="mobileMenuToggle"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                    >

                        <span></span>
                        <span></span>
                        <span></span>

                    </button>

                </div>

            </div>

        </div>

    </nav>


    {{-- ================================================================
        MOBILE MENU
    ================================================================= --}}
    <div class="mobile-menu" id="mobileMenu">

        <div class="container">

            <div class="mobile-menu-inner">


                {{-- Home --}}
                <a
                    href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'active' : '' }}"
                >

                    <i class="bi bi-house"></i>

                    <span>
                        {{ app()->getLocale() === 'ar'
                            ? 'الرئيسية'
                            : 'HOME' }}
                    </span>

                </a>


                {{-- About --}}
                <a
                    href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? 'active' : '' }}"
                >

                    <i class="bi bi-building"></i>

                    <span>
                        {{ app()->getLocale() === 'ar'
                            ? 'من نحن'
                            : 'ABOUT US' }}
                    </span>

                </a>


                {{-- Services --}}
                <a
                    href="{{ route('services') }}"
                    class="{{ request()->routeIs('services*') ? 'active' : '' }}"
                >

                    <i class="bi bi-tools"></i>

                    <span>
                        {{ app()->getLocale() === 'ar'
                            ? 'خدماتنا'
                            : 'SERVICES' }}
                    </span>

                </a>


                {{-- Products --}}
                <a
                    href="{{ route('products') }}"
                    class="{{ request()->routeIs('products*') ? 'active' : '' }}"
                >

                    <i class="bi bi-box-seam"></i>

                    <span>
                        {{ app()->getLocale() === 'ar'
                            ? 'منتجاتنا'
                            : 'PRODUCTS' }}
                    </span>

                </a>


                {{-- Projects --}}
                <a
                    href="{{ route('projects') }}"
                    class="{{ request()->routeIs('projects*') ? 'active' : '' }}"
                >

                    <i class="bi bi-buildings"></i>

                    <span>
                        {{ app()->getLocale() === 'ar'
                            ? 'مشاريعنا'
                            : 'PROJECTS' }}
                    </span>

                </a>


                {{-- Contact --}}
                <a
                    href="{{ route('contact') }}"
                    class="{{ request()->routeIs('contact') ? 'active' : '' }}"
                >

                    <i class="bi bi-envelope"></i>

                    <span>
                        {{ app()->getLocale() === 'ar'
                            ? 'تواصل معنا'
                            : 'CONTACT' }}
                    </span>

                </a>


                {{-- =====================================================
                    MOBILE CONTACT
                ====================================================== --}}
                <div class="mobile-menu-contact">

                    {{-- Phone --}}
                    @if($company->phone)

                        <a href="tel:{{ $company->phone }}">

                            <i class="bi bi-telephone"></i>

                            <span>
                                {{ $company->phone }}
                            </span>

                        </a>

                    @endif


                    {{-- WhatsApp --}}
                    @if($company->whatsapp)

                        <a
                            href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $company->whatsapp) }}"
                            target="_blank"
                            rel="noopener"
                        >

                            <i class="bi bi-whatsapp"></i>

                            <span>
                                WhatsApp
                            </span>

                        </a>

                    @endif

                </div>

            </div>

        </div>

    </div>

</header>


<style>

/* =========================================================
   MOBILE ACTIONS
========================================================= */

.mobile-actions {

    display: none;

    align-items: center;

    justify-content: center;

    gap: 8px;

    flex-shrink: 0;

}


/* =========================================================
   MOBILE LANGUAGE
========================================================= */

.mobile-language-top {

    display: flex;

    align-items: center;

    justify-content: center;

    gap: 5px;

    min-width: 48px;

    height: 44px;

    padding: 0 8px;

    color: #ffffff !important;

    text-decoration: none;

    font-size: 13px;

    font-weight: 700;

    border: 1px solid rgba(255, 255, 255, .25);

    border-radius: 5px;

    background: rgba(255, 255, 255, .05);

    transition: all .25s ease;

}


.mobile-language-top i {

    width: auto !important;

    color: var(--tabarak-blue) !important;

    font-size: 17px;

}


.mobile-language-top span {

    color: #ffffff;

    line-height: 1;

}


.mobile-language-top:hover {

    background: rgba(255, 255, 255, .12);

    border-color: rgba(255, 255, 255, .45);

}


/* =========================================================
   MOBILE TOGGLE
========================================================= */

.mobile-menu-toggle {

    display: none;

    align-items: center;

    justify-content: center;

    flex-direction: column;

    gap: 5px;

    width: 44px;

    height: 44px;

    padding: 0;

    border: 1px solid rgba(255, 255, 255, .3);

    border-radius: 5px;

    background: rgba(255, 255, 255, .05);

    cursor: pointer;

    flex-shrink: 0;

}


.mobile-menu-toggle span {

    display: block;

    width: 20px;

    height: 2px;

    background: #ffffff;

    border-radius: 2px;

    transition: all .25s ease;

}


.mobile-menu-toggle.active span:nth-child(1) {

    transform: translateY(7px) rotate(45deg);

}


.mobile-menu-toggle.active span:nth-child(2) {

    opacity: 0;

}


.mobile-menu-toggle.active span:nth-child(3) {

    transform: translateY(-7px) rotate(-45deg);

}


/* =========================================================
   MOBILE MENU
========================================================= */

.mobile-menu {

    position: absolute;

    top: 100%;

    right: 0;

    left: 0;

    width: 100%;

    display: none;

    z-index: 9999;

    background: rgba(6, 26, 43, .98);

    border-top: 1px solid rgba(255, 255, 255, .08);

    box-shadow: 0 25px 50px rgba(0, 0, 0, .25);

}


.mobile-menu.open,
.mobile-menu.active {

    display: block !important;

}


.mobile-menu-inner {

    display: flex;

    flex-direction: column;

    padding: 14px 0 24px;

}


/* =========================================================
   MOBILE LINKS
========================================================= */

.mobile-menu-inner > a {

    display: flex !important;

    align-items: center;

    gap: 12px;

    width: 100%;

    min-height: 52px;

    padding: 0 16px;

    border-bottom: 1px solid rgba(255, 255, 255, .07);

    color: rgba(255, 255, 255, .9) !important;

    text-decoration: none;

    font-size: 14px;

    font-weight: 700;

    transition: all .2s ease;

}


.mobile-menu-inner > a:hover,
.mobile-menu-inner > a.active {

    color: var(--tabarak-blue) !important;

    background: rgba(255, 255, 255, .04);

}


.mobile-menu-inner > a i {

    width: 22px;

    flex-shrink: 0;

    color: var(--tabarak-blue);

    font-size: 17px;

}


.mobile-menu-inner > a span {

    display: block;

}


/* =========================================================
   MOBILE CONTACT
========================================================= */

.mobile-menu-contact {

    display: flex;

    flex-direction: column;

    gap: 8px;

    margin-top: 16px;

    padding: 14px 0 0;

    border-top: 1px solid rgba(255, 255, 255, .08);

}


.mobile-menu-contact a {

    display: flex;

    align-items: center;

    gap: 10px;

    min-height: 44px;

    padding: 0 16px;

    color: rgba(255, 255, 255, .8);

    text-decoration: none;

    font-size: 13px;

}


.mobile-menu-contact a:hover {

    color: #ffffff;

}


.mobile-menu-contact i {

    color: var(--tabarak-blue);

    font-size: 17px;

}


/* =========================================================
   TABLET + MOBILE
========================================================= */

@media (max-width: 991px) {

    .navbar-inner {

        min-height: 78px;

    }


    /* Hide desktop navigation */

    .navbar-menu {

        display: none !important;

    }


    /* Hide desktop actions */

    .navbar-actions {

        display: none !important;

    }


    /* Show mobile actions */

    .mobile-actions {

        display: flex !important;

    }


    /* Show hamburger */

    .mobile-menu-toggle {

        display: flex !important;

    }


    /* Mobile menu */

    .mobile-menu {

        position: absolute;

        top: 100%;

        right: 0;

        left: 0;

    }

}


/* =========================================================
   SMALL MOBILE
========================================================= */

@media (max-width: 575px) {

    .navbar-inner {

        min-height: 70px;

    }


    .navbar-brand {

        min-width: 0;

        max-width: calc(100% - 110px);

    }


    .navbar-brand img {

        max-width: 145px;

        max-height: 46px;

        object-fit: contain;

    }


    .brand-text {

        min-width: 0;

    }


    .brand-text strong {

        font-size: 16px;

    }


    .brand-text span {

        font-size: 9px;

    }


    .mobile-actions {

        gap: 6px;

    }


    .mobile-language-top {

        min-width: 44px;

        height: 42px;

        padding: 0 6px;

        font-size: 12px;

    }


    .mobile-language-top i {

        font-size: 16px;

    }


    .mobile-menu-toggle {

        width: 42px;

        height: 42px;

    }


    .mobile-menu-inner {

        padding: 12px 0 22px;

    }


    .mobile-menu-inner > a {

        min-height: 50px;

        font-size: 14px;

    }

}


/* =========================================================
   VERY SMALL SCREENS
========================================================= */

@media (max-width: 380px) {

    .navbar-brand {

        max-width: calc(100% - 100px);

    }


    .navbar-brand img {

        max-width: 125px;

    }


    .mobile-language-top {

        min-width: 40px;

        padding: 0 5px;

    }


    .mobile-language-top i {

        font-size: 15px;

    }


    .mobile-menu-toggle {

        width: 40px;

        height: 40px;

    }

}

</style>
