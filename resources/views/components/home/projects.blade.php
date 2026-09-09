@php
    $projectsSection = $homeSections->get('projects');
@endphp

<section class="projects-section section-padding">

    <div class="container">

        <div class="row align-items-end section-header-row">

            {{-- Section Content --}}
            <div class="col-lg-7">

                <div class="section-heading">

                    @if($projectsSection?->subtitle)

                        <span class="section-kicker">
                            {{ $projectsSection->subtitle }}
                        </span>

                    @endif


                    @if($projectsSection?->title)

                        <h2 class="section-title">
                            {{ $projectsSection->title }}
                        </h2>

                    @endif

                </div>

            </div>



        </div>


        {{-- Projects --}}
        <div class="projects-grid">

            @forelse($projects->take(6) as $project)

                <article class="project-card">

                    {{-- Image --}}
                    <a
                        href="{{ route('projects.show', $project->slug) }}"
                        class="project-image"
                    >

                        @if($project->image)

                            <img
                                src="{{ asset('storage/' . $project->image) }}"
                                alt="{{ $project->title }}"
                                loading="lazy"
                            >

                        @else

                            <div class="project-placeholder">

                                <i class="bi bi-building"></i>

                            </div>

                        @endif


                        <div class="project-overlay">

                            <span class="project-view">

                                <i class="bi bi-arrow-up-left"></i>

                            </span>

                        </div>

                    </a>


                    {{-- Content --}}
                    <div class="project-content">

                        @if($project->category)

                            <span class="project-category">
                                {{ $project->category }}
                            </span>

                        @endif


                        <h3>

                            <a
                                href="{{ route('projects.show', $project->slug) }}"
                            >
                                {{ $project->title }}
                            </a>

                        </h3>


                        @if($project->location)

                            <div class="project-location">

                                <i class="bi bi-geo-alt"></i>

                                {{ $project->location }}

                            </div>

                        @endif

                    </div>

                </article>

            @empty

                <div class="col-12">

                    <div class="text-center py-5">

                        <p>
                            {{ app()->getLocale() === 'ar'
                                ? 'لا توجد مشروعات متاحة حاليًا.'
                                : 'No projects available at the moment.' }}
                        </p>

                    </div>

                </div>

            @endforelse

        </div>

    </div>

</section>
       