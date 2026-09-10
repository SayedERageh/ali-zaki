@extends('layouts.app')

@section('content')

@php
    $isArabic = app()->getLocale() === 'ar';
@endphp


{{-- =========================================================
     PROJECT HERO
========================================================= --}}

<section class="project-details-hero">

    <div class="container">

        <div class="project-details-header">

            @if($project->category)

                <span class="project-details-category">
                    {{ $project->category }}
                </span>

            @endif


            <h1 class="project-details-title">
                {{ $project->title }}
            </h1>


            @if($project->location)

                <div class="project-details-location">

                    <i class="bi bi-geo-alt"></i>

                    <span>
                        {{ $project->location }}
                    </span>

                </div>

            @endif

        </div>

    </div>

</section>



{{-- =========================================================
     PROJECT CONTENT
========================================================= --}}

<section class="project-details-section section-padding">

    <div class="container">

        <div class="row g-5 align-items-start">


            {{-- =================================================
                 IMAGE
            ================================================== --}}

            <div class="col-lg-7">

                <div class="project-details-image">

                    @if($project->image)

                        <img
                            src="{{ asset('storage/' . $project->image) }}"
                            alt="{{ $project->title }}"
                        >

                    @else

                        <div class="project-details-placeholder">

                            <i class="bi bi-building"></i>

                        </div>

                    @endif

                </div>

            </div>



            {{-- =================================================
                 INFORMATION
            ================================================== --}}

            <div class="col-lg-5">

                <div class="project-details-content">


                    @if($project->category)

                        <div class="project-info-item">

                            <span class="project-info-label">

                                {{ $isArabic
                                    ? 'التصنيف'
                                    : 'CATEGORY' }}

                            </span>

                            <strong>
                                {{ $project->category }}
                            </strong>

                        </div>

                    @endif


                    @if($project->location)

                        <div class="project-info-item">

                            <span class="project-info-label">

                                {{ $isArabic
                                    ? 'الموقع'
                                    : 'LOCATION' }}

                            </span>

                            <strong>

                                <i class="bi bi-geo-alt"></i>

                                {{ $project->location }}

                            </strong>

                        </div>

                    @endif


                    {{-- Description --}}

                    @if($project->description)

                        <div class="project-description">

                            {!! $project->description !!}

                        </div>

                    @endif


                    {{-- Back Button --}}

                    <div class="project-details-actions">

                        <a
                            href="{{ route('projects') }}"
                            class="project-back-btn"
                        >

                            <i class="bi bi-arrow-left"></i>

                            {{ $isArabic
                                ? 'العودة إلى مشاريعنا'
                                : 'BACK TO PROJECTS' }}

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     CTA
========================================================= --}}

@include('components.home.cta')


<style>

/* =========================================================
   PROJECT DETAILS HERO
========================================================= */

.project-details-hero {

    position: relative;

    padding: 150px 0 80px;

    background:
        linear-gradient(
            135deg,
            rgba(6, 26, 43, .98),
            rgba(10, 65, 95, .95)
        );

    overflow: hidden;
}


.project-details-header {

    max-width: 850px;

}


.project-details-category {

    display: inline-flex;

    align-items: center;

    margin-bottom: 18px;

    padding: 7px 14px;

    border: 1px solid rgba(255,255,255,.2);

    border-radius: 4px;

    color: var(--tabarak-blue);

    font-size: 12px;

    font-weight: 800;

    letter-spacing: 1px;

    text-transform: uppercase;
}


.project-details-title {

    margin: 0;

    color: #ffffff;

    font-size: clamp(36px, 5vw, 64px);

    line-height: 1.08;

    font-weight: 800;
}


.project-details-location {

    display: flex;

    align-items: center;

    gap: 8px;

    margin-top: 22px;

    color: rgba(255,255,255,.75);

    font-size: 15px;
}


.project-details-location i {

    color: var(--tabarak-blue);

    font-size: 18px;
}



/* =========================================================
   PROJECT DETAILS
========================================================= */

.project-details-section {

    background: #ffffff;
}


.project-details-image {

    position: relative;

    width: 100%;

    overflow: hidden;

    border-radius: 8px;

    background: #f1f5f8;

    box-shadow: 0 20px 50px rgba(6,26,43,.12);
}


.project-details-image img {

    display: block;

    width: 100%;

    height: auto;

    max-height: 650px;

    object-fit: cover;
}


.project-details-placeholder {

    display: flex;

    align-items: center;

    justify-content: center;

    min-height: 450px;

    color: #8da1ae;

    font-size: 70px;
}



/* =========================================================
   CONTENT
========================================================= */

.project-details-content {

    padding-top: 5px;
}


.project-info-item {

    display: flex;

    flex-direction: column;

    gap: 7px;

    padding: 0 0 22px;

    margin-bottom: 22px;

    border-bottom: 1px solid #e8eef2;
}


.project-info-label {

    color: #71808b;

    font-size: 11px;

    font-weight: 800;

    letter-spacing: 1px;

    text-transform: uppercase;
}


.project-info-item strong {

    color: #061a2b;

    font-size: 17px;

    line-height: 1.5;
}


.project-info-item strong i {

    color: var(--tabarak-blue);

    margin-right: 5px;
}



/* =========================================================
   DESCRIPTION
========================================================= */

.project-description {

    margin-top: 28px;

    color: #52616d;

    font-size: 16px;

    line-height: 1.9;
}


.project-description p {

    margin-bottom: 16px;
}


.project-description h2,
.project-description h3 {

    margin-top: 25px;

    margin-bottom: 12px;

    color: #061a2b;
}



/* =========================================================
   BACK BUTTON
========================================================= */

.project-details-actions {

    margin-top: 35px;
}


.project-back-btn {

    display: inline-flex;

    align-items: center;

    gap: 10px;

    padding: 13px 20px;

    background: #061a2b;

    border: 1px solid #061a2b;

    border-radius: 4px;

    color: #ffffff !important;

    text-decoration: none;

    font-size: 12px;

    font-weight: 800;

    transition: all .25s ease;
}


.project-back-btn:hover {

    background: var(--tabarak-blue);

    border-color: var(--tabarak-blue);

    transform: translateY(-2px);
}



/* =========================================================
   RTL
========================================================= */

html[dir="rtl"] .project-details-location i {

    margin-left: 3px;

    margin-right: 0;
}


html[dir="rtl"] .project-info-item strong i {

    margin-left: 5px;

    margin-right: 0;
}


html[dir="rtl"] .project-back-btn i {

    transform: rotate(180deg);
}



/* =========================================================
   MOBILE
========================================================= */

@media (max-width: 991px) {

    .project-details-hero {

        padding: 120px 0 60px;
    }

    .project-details-title {

        font-size: 42px;
    }

    .project-details-image img {

        max-height: 500px;
    }

}


@media (max-width: 575px) {

    .project-details-hero {

        padding: 105px 0 50px;
    }

    .project-details-title {

        font-size: 32px;
    }

    .project-details-location {

        font-size: 13px;
    }

    .project-details-image {

        border-radius: 6px;
    }

    .project-details-placeholder {

        min-height: 280px;

        font-size: 50px;
    }

    .project-description {

        font-size: 14px;

        line-height: 1.8;
    }

    .project-back-btn {

        width: 100%;

        justify-content: center;
    }

}

</style>

@endsection
              
