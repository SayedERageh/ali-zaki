@php
    $isArabic = app()->getLocale() === 'ar';
@endphp

<section class="contact-info-section section-padding">
    <div class="container">

        {{-- Header --}}
        <div class="row align-items-end section-header-row mb-5">

            <div class="col-lg-7">
                <div class="section-heading">

                    <span class="section-kicker">
                        {{ $isArabic ? 'تواصل معنا' : 'GET IN TOUCH' }}
                    </span>

                    <h2 class="section-title">
                        {{ $isArabic ? 'يسعدنا تواصلك معنا' : 'Let’s Work Together' }}
                    </h2>

                </div>
            </div>

            <div class="col-lg-5">
                <p class="section-intro">
                    {{ $isArabic
                        ? 'تواصل معنا لمناقشة احتياجاتك والحصول على المزيد من المعلومات حول خدماتنا.'
                        : 'Get in touch with our team to discuss your requirements and learn more about our services.'
                    }}
                </p>
            </div>

        </div>


        <div class="row g-4">

            {{-- Contact Details --}}
            <div class="col-lg-7">

                <div class="contact-details-grid">

                    {{-- Email --}}
                    @if($company?->email)
                        <a
                            href="mailto:{{ $company->email }}"
                            class="contact-info-card"
                        >
                            <div class="contact-info-icon">
                                <i class="bi bi-envelope"></i>
                            </div>

                            <div>
                                <span class="contact-info-label">
                                    {{ $isArabic ? 'البريد الإلكتروني' : 'EMAIL' }}
                                </span>

                                <strong>
                                    {{ $company->email }}
                                </strong>
                            </div>
                        </a>
                    @endif


                    {{-- Main Phone --}}
                    @if($company?->phone)
                        <a
                            href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone) }}"
                            class="contact-info-card"
                        >
                            <div class="contact-info-icon">
                                <i class="bi bi-telephone"></i>
                            </div>

                            <div>
                                <span class="contact-info-label">
                                    {{ $isArabic ? 'الهاتف الرئيسي' : 'MAIN PHONE' }}
                                </span>

                                <strong dir="ltr">
                                    {{ $company->phone }}
                                </strong>
                            </div>
                        </a>
                    @endif


                    {{-- WhatsApp --}}
                    @if($company?->whatsapp)
                        <a
                            href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $company->whatsapp) }}"
                            target="_blank"
                            rel="noopener"
                            class="contact-info-card"
                        >
                            <div class="contact-info-icon whatsapp-icon">
                                <i class="bi bi-whatsapp"></i>
                            </div>

                            <div>
                                <span class="contact-info-label">
                                    WhatsApp
                                </span>

                                <strong dir="ltr">
                                    {{ $company->whatsapp }}
                                </strong>
                            </div>
                        </a>
                    @endif


                    {{-- Phone 1 --}}
                    @if($company?->phone_1)
                        <a
                            href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_1) }}"
                            class="contact-info-card"
                        >
                            <div class="contact-info-icon">
                                <i class="bi bi-telephone-forward"></i>
                            </div>

                            <div>
                                <span class="contact-info-label">
                                    {{ $isArabic ? 'رقم الاتصال 1' : 'PHONE 1' }}
                                </span>

                                <strong dir="ltr">
                                    {{ $company->phone_1 }}
                                </strong>
                            </div>
                        </a>
                    @endif


                    {{-- Phone 2 --}}
                    @if($company?->phone_2)
                        <a
                            href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_2) }}"
                            class="contact-info-card"
                        >
                            <div class="contact-info-icon">
                                <i class="bi bi-telephone-forward"></i>
                            </div>

                            <div>
                                <span class="contact-info-label">
                                    {{ $isArabic ? 'رقم الاتصال 2' : 'PHONE 2' }}
                                </span>

                                <strong dir="ltr">
                                    {{ $company->phone_2 }}
                                </strong>
                            </div>
                        </a>
                    @endif


                    {{-- Phone 3 --}}
                    @if($company?->phone_3)
                        <a
                            href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_3) }}"
                            class="contact-info-card"
                        >
                            <div class="contact-info-icon">
                                <i class="bi bi-telephone-forward"></i>
                            </div>

                            <div>
                                <span class="contact-info-label">
                                    {{ $isArabic ? 'رقم الاتصال 3' : 'PHONE 3' }}
                                </span>

                                <strong dir="ltr">
                                    {{ $company->phone_3 }}
                                </strong>
                            </div>
                        </a>
                    @endif


                    {{-- Phone 4 --}}
                    @if($company?->phone_4)
                        <a
                            href="tel:{{ preg_replace('/[^0-9+]/', '', $company->phone_4) }}"
                            class="contact-info-card"
                        >
                            <div class="contact-info-icon">
                                <i class="bi bi-telephone-forward"></i>
                            </div>

                            <div>
                                <span class="contact-info-label">
                                    {{ $isArabic ? 'رقم الاتصال 4' : 'PHONE 4' }}
                                </span>

                                <strong dir="ltr">
                                    {{ $company->phone_4 }}
                                </strong>
                            </div>
                        </a>
                    @endif

                </div>


                {{-- Social Media --}}
                @if(
                    $company?->facebook ||
                    $company?->instagram ||
                    $company?->tiktok
                )

                    <div class="contact-social-box">

                        <span class="contact-info-label">
                            {{ $isArabic ? 'تابعنا على' : 'FOLLOW US' }}
                        </span>

                        <div class="contact-social-links">

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

                    </div>

                @endif

            </div>


            {{-- Website / QR --}}
            <div class="col-lg-5">

                <div class="contact-brand-card">

                    @if($company?->website_name)
                        <span class="contact-info-label">
                            {{ $isArabic ? 'الموقع الإلكتروني' : 'WEBSITE' }}
                        </span>

                        <h3>
                            {{ $company->website_name }}
                        </h3>
                    @endif


                    @if($company?->qr_code)

                        <div class="contact-qr">

                            <img
                                src="{{ asset('storage/' . $company->qr_code) }}"
                                alt="QR Code"
                                loading="lazy"
                            >

                        </div>

                        <p>
                            {{ $isArabic
                                ? 'امسح رمز QR للوصول إلى موقعنا الإلكتروني.'
                                : 'Scan the QR code to visit our website.'
                            }}
                        </p>

                    @endif

                </div>

            </div>

        </div>

    </div>
</section>


<style>
.contact-info-section {
    background: #f7fafc;
}

.contact-details-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 16px;
}

.contact-info-card {
    display: flex;
    align-items: center;
    gap: 16px;
    min-height: 100px;
    padding: 20px;
    background: #fff;
    border: 1px solid #e5edf2;
    border-radius: 8px;
    color: inherit;
    text-decoration: none;
    box-shadow: 0 10px 30px rgba(6, 26, 43, .05);
    transition: all .3s ease;
}

.contact-info-card:hover {
    transform: translateY(-4px);
    border-color: var(--tabarak-blue);
    box-shadow: 0 18px 40px rgba(6, 26, 43, .10);
}

.contact-info-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 48px;
    height: 48px;
    flex: 0 0 48px;
    border-radius: 6px;
    background: rgba(30, 166, 219, .10);
    color: var(--tabarak-blue);
    font-size: 21px;
}

.contact-info-card strong {
    display: block;
    margin-top: 5px;
    color: #061a2b;
    font-size: 15px;
    line-height: 1.5;
    overflow-wrap: anywhere;
}

.contact-info-label {
    display: block;
    color: #7b8a94;
    font-size: 10px;
    font-weight: 800;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.contact-social-box {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-top: 20px;
    padding: 22px;
    background: #061a2b;
    border-radius: 8px;
}

.contact-social-box .contact-info-label {
    color: rgba(255,255,255,.65);
}

.contact-social-links {
    display: flex;
    align-items: center;
    gap: 9px;
}

.contact-social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border: 1px solid rgba(255,255,255,.15);
    border-radius: 5px;
    color: #fff;
    text-decoration: none;
    transition: all .25s ease;
}

.contact-social-links a:hover {
    background: var(--tabarak-blue);
    border-color: var(--tabarak-blue);
    transform: translateY(-2px);
}

.contact-brand-card {
    height: 100%;
    min-height: 100%;
    padding: 35px;
    background: #061a2b;
    border-radius: 8px;
    color: #fff;
}

.contact-brand-card h3 {
    margin: 10px 0 25px;
    color: #fff;
    font-size: 27px;
    line-height: 1.3;
}

.contact-qr {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 190px;
    height: 190px;
    margin: 10px auto 20px;
    padding: 10px;
    background: #fff;
    border-radius: 6px;
}

.contact-qr img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.contact-brand-card p {
    margin: 0;
    color: rgba(255,255,255,.65);
    font-size: 13px;
    line-height: 1.7;
    text-align: center;
}

html[dir="rtl"] .contact-social-box {
    direction: rtl;
}

@media (max-width: 991px) {
    .contact-details-grid {
        grid-template-columns: 1fr;
    }

    .contact-brand-card {
        min-height: 400px;
    }
}

@media (max-width: 575px) {
    .contact-info-section {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .contact-info-card {
        padding: 16px;
    }

    .contact-social-box {
        align-items: flex-start;
        flex-direction: column;
        gap: 15px;
    }

    .contact-brand-card {
        padding: 25px 20px;
    }

    .contact-brand-card h3 {
        font-size: 22px;
    }
}
</style>