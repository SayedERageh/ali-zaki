<section class="hero-section">

    <div class="swiper hero-swiper">

        <div class="swiper-wrapper">

            @forelse($heroSlides as $slide)

                <div class="swiper-slide">

                    <div
                        class="hero-slide"
                        @if($slide->image)
                            style="background-image: url('{{ asset('storage/' . $slide->image) }}')"
                        @endif
                    >

                        <div class="hero-overlay"></div>

                        <div class="container">

                            <div class="hero-content">

                                @if($slide->subtitle)
                                    <span
                                        class="hero-subtitle"
                                        data-aos="fade-up"
                                    >
                                        {{ $slide->subtitle }}
                                    </span>
                                @endif

                                @if($slide->title)
                                    <h1
                                        class="hero-title"
                                        data-aos="fade-up"
                                        data-aos-delay="100"
                                    >
                                        {{ $slide->title }}
                                    </h1>
                                @endif

                                @if($slide->description)
                                    <p
                                        class="hero-description"
                                        data-aos="fade-up"
                                        data-aos-delay="200"
                                    >
                                        {{ $slide->description }}
                                    </p>
                                @endif

                                @if($slide->button_text || $slide->secondary_button_text)

                                    <div
                                        class="hero-buttons"
                                        data-aos="fade-up"
                                        data-aos-delay="300"
                                    >

                                        @if($slide->button_text)
                                            <a
                                                href="{{ $slide->button_url ?: '#' }}"
                                                class="btn btn-primary-custom"
                                            >
                                                {{ $slide->button_text }}

                                                <i class="bi bi-arrow-up-left"></i>
                                            </a>
                                        @endif

                                        @if($slide->secondary_button_text)
                                            <a
                                                href="{{ $slide->secondary_button_url ?: '#' }}"
                                                class="btn btn-outline-light"
                                            >
                                                {{ $slide->secondary_button_text }}
                                            </a>
                                        @endif

                                    </div>

                                @endif

                            </div>

                        </div>

                        <div class="hero-scroll">

                            <span>
                                {{ app()->getLocale() === 'ar'
                                    ? 'اكتشف المزيد'
                                    : 'DISCOVER MORE' }}
                            </span>

                            <i class="bi bi-arrow-down"></i>

                        </div>

                    </div>

                </div>

            @empty

                <div class="swiper-slide">

                    <div class="hero-slide hero-empty">

                        <div class="hero-overlay"></div>

                        <div class="container">

                            <div class="hero-content">

                                <span class="hero-subtitle">
                                    Industrial Construction & Services
                                </span>

                                <h1 class="hero-title">
                                    {{ $company->company_name }}
                                </h1>

                            </div>

                        </div>

                    </div>

                </div>

            @endforelse

        </div>

        <div class="hero-pagination"></div>

        <div class="hero-navigation">

            <button
                type="button"
                class="hero-prev"
                aria-label="Previous slide"
            >
                <i class="bi bi-arrow-right"></i>
            </button>

            <button
                type="button"
                class="hero-next"
                aria-label="Next slide"
            >
                <i class="bi bi-arrow-left"></i>
            </button>

        </div>

    </div>

</section>