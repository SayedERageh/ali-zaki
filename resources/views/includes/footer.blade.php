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

                @if($company->website_name)
                    <span class="footer-website-name">
                        {{ $company->website_name }}
                    </span>
                @endif

            

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

                <a href="{{ route('contact') }}">
                    {{ app()->getLocale() === 'ar' ? 'تواصل معنا' : 'Contact Us' }}
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


                {{-- Main Phone --}}
                @if($company->phone)

                    <a
                        href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone) }}"
                    >
                        <i class="bi bi-telephone"></i>
                        <span dir="ltr">
                            {{ $company->phone }}
                        </span>
                    </a>

                @endif


                {{-- Phone 1 --}}
                @if($company->phone_1)

                    <a
                        href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_1) }}"
                    >
                        <i class="bi bi-telephone-forward"></i>
                        <span dir="ltr">
                            {{ $company->phone_1 }}
                        </span>
                    </a>

                @endif


                {{-- Phone 2 --}}
                @if($company->phone_2)

                    <a
                        href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_2) }}"
                    >
                        <i class="bi bi-telephone-forward"></i>
                        <span dir="ltr">
                            {{ $company->phone_2 }}
                        </span>
                    </a>

                @endif


                {{-- Phone 3 --}}
                @if($company->phone_3)

                    <a
                        href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_3) }}"
                    >
                        <i class="bi bi-telephone-forward"></i>
                        <span dir="ltr">
                            {{ $company->phone_3 }}
                        </span>
                    </a>

                @endif


                {{-- Phone 4 --}}
                @if($company->phone_4)

                    <a
                        href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_4) }}"
                    >
                        <i class="bi bi-telephone-forward"></i>
                        <span dir="ltr">
                            {{ $company->phone_4 }}
                        </span>
                    </a>

                @endif


                {{-- Email --}}
                @if($company->email)

                    <a href="mailto:{{ $company->email }}">
                        <i class="bi bi-envelope"></i>
                        <span>
                            {{ $company->email }}
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

{{-- Address --}}
@if($company->address)

    <div class="footer-address">

        <i class="bi bi-geo-alt"></i>

        <span>
            {!! nl2br(e(trim(html_entity_decode(strip_tags($company->address))))) !!}
        </span>

    </div>

@endif

                {{-- Social Media --}}
                @if(
                    $company->facebook ||
                    $company->instagram ||
                    $company->tiktok
                )

                    <div class="footer-social">

                        @if($company->facebook)

                            <a
                                href="{{ $company->facebook }}"
                                target="_blank"
                                rel="noopener"
                                aria-label="Facebook"
                            >
                                <i class="bi bi-facebook"></i>
                            </a>

                        @endif

                        @if($company->instagram)

                            <a
                                href="{{ $company->instagram }}"
                                target="_blank"
                                rel="noopener"
                                aria-label="Instagram"
                            >
                                <i class="bi bi-instagram"></i>
                            </a>

                        @endif

                        @if($company->tiktok)

                            <a
                                href="{{ $company->tiktok }}"
                                target="_blank"
                                rel="noopener"
                                aria-label="TikTok"
                            >
                                <i class="bi bi-tiktok"></i>
                            </a>

                        @endif

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
