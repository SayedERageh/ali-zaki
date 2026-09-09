      
@php
    $valuesSection = $homeSections->get('values');
@endphp

<section class="values-section section-padding">

    <div class="container">

        <div class="row justify-content-center text-center">

            <div class="col-lg-8">

                <div class="section-heading">

                    @if($valuesSection?->subtitle)
                        <span class="section-kicker">
                            {{ $valuesSection->subtitle }}
                        </span>
                    @endif

                    @if($valuesSection?->title)
                        <h2 class="section-title">
                            {{ $valuesSection->title }}
                        </h2>
                    @endif

                </div>

                @if($valuesSection?->description)
                    <div class="section-description mt-3">
                        {!! nl2br(e($valuesSection->description)) !!}
                    </div>
                @endif

            </div>

        </div>


        <div class="row g-0 values-grid">

            @forelse($coreValues as $value)

                <div class="col-md-6 col-lg-4">

                    <div class="value-card">

                        <div class="value-number">
                            {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                        </div>

                        <div class="value-icon">

                            @if($value->icon)
                                <i class="{{ $value->icon }}"></i>
                            @else
                                <i class="bi bi-check2-circle"></i>
                            @endif

                        </div>

                        <h3>
                            {{ $value->title }}
                        </h3>

                        @if($value->description)

                            <p>
                                {{ $value->description }}
                            </p>

                        @endif

                    </div>

                </div>

            @empty

                <div class="col-12">

                    <div class="text-center py-5">

                        <p class="mb-0">
                            {{ app()->getLocale() === 'ar'
                                ? 'لا توجد قيم أساسية متاحة حاليًا.'
                                : 'No core values available at the moment.' }}
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>
          
