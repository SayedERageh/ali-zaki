@php
    $aboutSection = $homeSections->get('about');
@endphp

<section class="about-section section-padding">

    <div class="container">

        <div class="row align-items-center g-5">

            {{-- Content --}}
            <div class="col-lg-6">

                <div class="section-heading">

                    @if($aboutSection?->subtitle)

                        <span class="section-kicker">
                            {{ $aboutSection->subtitle }}
                        </span>

                    @endif


                    @if($aboutSection?->title)

                        <h2 class="section-title">
                            {{ $aboutSection->title }}
                        </h2>

                    @endif

                </div>


                @if($aboutSection?->description)

             

                    <div class="about-text">
                        {!! $company->about !!}
                    </div>

                @endif


                @if($aboutSection?->button_text)

                    <div class="about-actions">

                        <a
                            href="{{ $aboutSection->button_url ?: route('about') }}"
                            class="btn btn-dark-custom"
                        >
                            {{ $aboutSection->button_text }}

                            <i class="bi bi-arrow-up-left"></i>
                        </a>

                    </div>

                @endif

            </div>


            {{-- Visual --}}
            <div class="col-lg-6">

                <div class="about-visual">

                    <div class="about-image-main">

                        @if($aboutSection?->image)

                            <img
                                src="{{ asset('storage/' . $aboutSection->image) }}"
                                alt="{{ $aboutSection->title ?? $company->company_name }}"
                            >

                        @else

                            <img
                                src="{{ asset('assets/images/about-industrial.jpg') }}"
                                alt="{{ $company->company_name }}"
                            >

                        @endif

                    </div>


                    {{-- Floating Card --}}
                    {{-- <div class="about-floating-card">

                        <div class="about-card-icon">

                            <i class="bi bi-shield-check"></i>

                        </div>

                        <div>

                            <strong>
                                {{ $company->company_name }}
                            </strong>

                            <span>
                                {{ $company->phone }}
                            </span>

                        </div>

                    </div> --}}


                    <div class="about-decoration"></div>

                </div>

            </div>

        </div>

    </div>

</section>
  
