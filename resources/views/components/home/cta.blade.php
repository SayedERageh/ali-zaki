@php
$ctaSection = $homeSections->get('cta');
@endphp

<section class="cta-section">

           
<div class="container">

    <div class="cta-box">

        <div class="cta-content">

            @if($ctaSection?->subtitle)
                <span class="section-kicker">
                    {{ $ctaSection->subtitle }}
                </span>
            @endif

            @if($ctaSection?->title)
                <h2>
                    {{ $ctaSection->title }}
                </h2>
            @endif

            @if($ctaSection?->description)
                <p>
                    {!! nl2br(e($ctaSection->description)) !!}
                </p>
            @endif

        </div>

        <div class="cta-action">

            @if($ctaSection?->button_text)

                <a
                    href="{{ $ctaSection->button_url ?: route('contact') }}"
                    class="btn btn-primary-custom"
                >
                    {{ $ctaSection->button_text }}

                    <i class="bi bi-arrow-up-left"></i>
                </a>

            @endif

        </div>

    </div>

</div>
           

</section>
