<footer class="site-footer">

    <div class="container">

        <div class="footer-main">

            {{-- Company --}}
            <div class="footer-company">

                <a
                    href="{{ route('home') }}"
                    class="footer-logo"
                >

                    @if($company->logo)

                        <img
                            src="{{ asset('storage/' . $company->logo) }}"
                            alt="{{ $company->company_name }}"
                        >

                    @else

                        <strong>
                            {{ $company->company_name }}
                        </strong>

                    @endif

                </a>

                <p>
                    {{ app()->getLocale() === 'ar'
                        ? 'حلول صناعية موثوقة مصممة للقطاعات الصناعية والطاقة والنفط والغاز.'
                        : 'Reliable industrial solutions for Oil & Gas, Power, Energy and Industrial sectors.' }}
                </p>

            </div>


            {{-- Navigation --}}
            <div class="footer-column">

                <h4>
                    {{ app()->getLocale() === 'ar'
                        ? 'روابط سريعة'
                        : 'QUICK LINKS' }}
                </h4>

                <a href="{{ route('home') }}">
                    {{ app()->getLocale() === 'ar' ? 'الرئيسية' : 'Home' }}
                </a>

                <a href="{{ route('about') }}">
                    {{ app()->getLocale() === 'ar' ? 'من نحن' : 'About Us' }}
                </a>

                <a href="{{ route('services') }}">
                    {{ app()->getLocale() === 'ar' ? 'خدماتنا' : 'Services' }}
                </a>

                <a href="{{ route('projects') }}">
                    {{ app()->getLocale() === 'ar' ? 'مشاريعنا' : 'Projects' }}
                </a>

            </div>


            {{-- Services --}}
            <div class="footer-column">

                <h4>
                    {{ app()->getLocale() === 'ar'
                        ? 'خدماتنا'
                        : 'OUR SERVICES' }}
                </h4>

                @foreach($services->take(4) as $service)

                    <a href="{{ route('services.show', $service->slug) }}">
                        {{ $service->title }}
                    </a>

                @endforeach

            </div>


            {{-- Contact --}}
            <div class="footer-column footer-contact">

                <h4>
                    {{ app()->getLocale() === 'ar'
                        ? 'تواصل معنا'
                        : 'CONTACT US' }}
                </h4>

                @if($company->phone)

                    <a href="tel:{{ $company->phone }}">
                        <i class="bi bi-telephone"></i>
                        {{ $company->phone }}
                    </a>

                @endif

                @if($company->email)

                    <a href="mailto:{{ $company->email }}">
                        <i class="bi bi-envelope"></i>
                        {{ $company->email }}
                    </a>

                @endif

                @if($company->whatsapp)

                    <a
                        href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $company->whatsapp) }}"
                        target="_blank"
                    >
                        <i class="bi bi-whatsapp"></i>
                        WhatsApp
                    </a>

                @endif

                @if($company->address)

                    <div class="footer-address">

                        <i class="bi bi-geo-alt"></i>

                        <span>
                            {{ $company->address }}
                        </span>

                    </div>

                @endif

            </div>

        </div>


        {{-- Bottom --}}
        <div class="footer-bottom">

            <p>
                © {{ date('Y') }}
                {{ $company->company_name }}.
                {{ app()->getLocale() === 'ar'
                    ? 'جميع الحقوق محفوظة.'
                    : 'All Rights Reserved.' }}
            </p>

            <div class="footer-tagline">
                BUILT ON SAFETY · DRIVEN BY QUALITY
            </div>

        </div>

    </div>

</footer>