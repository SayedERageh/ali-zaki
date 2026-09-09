<header class="site-header">

    <nav class="main-navbar">

        <div class="container">

            <div class="navbar-inner">

                {{-- Logo --}}
                <a href="{{ route('home') }}" class="navbar-brand">

                    @if($company->logo)

                        <img
                            src="{{ asset('storage/' . $company->logo) }}"
                            alt="{{ $company->company_name }}"
                        >

                    @else

                        <div class="brand-text">
                            <strong>{{ $company->company_name }}</strong>

                            <span>
                                {{ app()->getLocale() === 'ar'
                                    ? 'الخدمات الصناعية'
                                    : 'INDUSTRIAL SERVICES' }}
                            </span>
                        </div>

                    @endif

                </a>


                {{-- Desktop Navigation --}}
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


                {{-- Actions --}}
                <div class="navbar-actions">

                    {{-- Language --}}
                    <a
                        href="{{ route(
                            'language.switch',
                            ['locale' => app()->getLocale() === 'ar' ? 'en' : 'ar']
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


                {{-- Mobile Toggle --}}
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

    </nav>


    {{-- Mobile Menu --}}
    <div class="mobile-menu" id="mobileMenu">

        <div class="container">

            <div class="mobile-menu-inner">

                <a
                    href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'active' : '' }}"
                >
                    <i class="bi bi-house"></i>
                    {{ app()->getLocale() === 'ar' ? 'الرئيسية' : 'HOME' }}
                </a>

                <a
                    href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? 'active' : '' }}"
                >
                    <i class="bi bi-building"></i>
                    {{ app()->getLocale() === 'ar' ? 'من نحن' : 'ABOUT US' }}
                </a>

                <a
                    href="{{ route('services') }}"
                    class="{{ request()->routeIs('services*') ? 'active' : '' }}"
                >
                    <i class="bi bi-tools"></i>
                    {{ app()->getLocale() === 'ar' ? 'خدماتنا' : 'SERVICES' }}
                </a>
<a
    href="{{ route('products') }}"
    class="{{ request()->routeIs('products*') ? 'active' : '' }}"
>
    <i class="bi bi-box-seam"></i>
    {{ app()->getLocale() === 'ar' ? 'منتجاتنا' : 'PRODUCTS' }}
</a>
                <a
                    href="{{ route('projects') }}"
                    class="{{ request()->routeIs('projects*') ? 'active' : '' }}"
                >
                    <i class="bi bi-buildings"></i>
                    {{ app()->getLocale() === 'ar' ? 'مشاريعنا' : 'PROJECTS' }}
                </a>

                <a
                    href="{{ route('contact') }}"
                    class="{{ request()->routeIs('contact') ? 'active' : '' }}"
                >
                    <i class="bi bi-envelope"></i>
                    {{ app()->getLocale() === 'ar' ? 'تواصل معنا' : 'CONTACT' }}
                </a>


                {{-- Mobile Language --}}
                <a
                    href="{{ route(
                        'language.switch',
                        ['locale' => app()->getLocale() === 'ar' ? 'en' : 'ar']
                    ) }}"
                    class="mobile-language"
                >
                    <i class="bi bi-globe2"></i>

                    {{ app()->getLocale() === 'ar'
                        ? 'English'
                        : 'العربية' }}
                </a>


                <div class="mobile-menu-contact">

                    @if($company->phone)

                        <a href="tel:{{ $company->phone }}">
                            <i class="bi bi-telephone"></i>

                            <span>
                                {{ $company->phone }}
                            </span>
                        </a>

                    @endif

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
    
</style>