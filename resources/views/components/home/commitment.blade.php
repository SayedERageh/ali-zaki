@php
$commitmentSection = $homeSections->get('commitment');
@endphp
<section class="commitment-section">

    <div class="commitment-overlay"></div>

    <div class="container position-relative">

        <div class="row justify-content-center text-center">

            <div class="col-lg-9">

           @if($commitmentSection?->subtitle)
<span class="section-kicker text-light">
{{ $commitmentSection->subtitle }}
</span>
@endif

@if($commitmentSection?->title)
<h2 class="commitment-title text-white">
{{ $commitmentSection->title }}
</h2>
@endif

@if($commitmentSection?->description)
<p class="commitment-description text-primary">
{{ $commitmentSection->description }}
</p>
@endif


                @if($company->commitment)

                    <div class="commitment-text">
                        {!! $company->commitment !!}
                    </div>

                @endif

            </div>

        </div>

    </div>

</section>