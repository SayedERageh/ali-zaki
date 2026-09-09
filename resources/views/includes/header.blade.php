<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    {{-- =====================================================
         SITE SETTINGS
    ====================================================== --}}

    @php
        $siteSettings = \App\Models\SiteSetting::current();

        /*
        |--------------------------------------------------------------------------
        | SEO
        |--------------------------------------------------------------------------
        */

        $currentRoute = request()->route()?->getName();

        $pageKey = match ($currentRoute) {
            'home' => 'home',
            'about' => 'about',
            'services' => 'services',
            'projects' => 'projects',
            'contact' => 'contact',
            default => null,
        };

        $seo = $pageKey
            ? \App\Models\PageSeo::forPage($pageKey)
            : null;

        $locale = app()->getLocale();

        /*
        |--------------------------------------------------------------------------
        | SEO Title
        |--------------------------------------------------------------------------
        */

        $seoTitle = $locale === 'ar'
            ? ($seo?->title_ar ?? $siteSettings->site_name)
            : ($seo?->title_en ?? $siteSettings->site_name);

        /*
        |--------------------------------------------------------------------------
        | SEO Description
        |--------------------------------------------------------------------------
        */

        $seoDescription = $locale === 'ar'
            ? ($seo?->description_ar ?? $siteSettings->site_description)
            : ($seo?->description_en ?? $siteSettings->site_description);

        /*
        |--------------------------------------------------------------------------
        | Keywords
        |--------------------------------------------------------------------------
        */

        $seoKeywords = $locale === 'ar'
            ? $seo?->keywords_ar
            : $seo?->keywords_en;

        /*
        |--------------------------------------------------------------------------
        | Open Graph
        |--------------------------------------------------------------------------
        */

        $ogTitle = $locale === 'ar'
            ? ($seo?->og_title_ar ?? $seoTitle)
            : ($seo?->og_title_en ?? $seoTitle);

        $ogDescription = $locale === 'ar'
            ? ($seo?->og_description_ar ?? $seoDescription)
            : ($seo?->og_description_en ?? $seoDescription);

        /*
        |--------------------------------------------------------------------------
        | Robots
        |--------------------------------------------------------------------------
        */

        $robots = ($seo?->index ?? true ? 'index' : 'noindex')
            . ','
            . ($seo?->follow ?? true ? 'follow' : 'nofollow');
    @endphp


    {{-- =====================================================
         TITLE
    ====================================================== --}}

    <title>
        @yield('title', $seoTitle)
    </title>


    {{-- =====================================================
         META DESCRIPTION
    ====================================================== --}}

    <meta
        name="description"
        content="@yield('meta_description', $seoDescription)"
    >


    {{-- =====================================================
         KEYWORDS
    ====================================================== --}}

    @if($seoKeywords)
        <meta
            name="keywords"
            content="{{ $seoKeywords }}"
        >
    @endif


    {{-- =====================================================
         ROBOTS
    ====================================================== --}}

    <meta
        name="robots"
        content="{{ $robots }}"
    >


    {{-- =====================================================
         CANONICAL
    ====================================================== --}}

    @if($seo?->canonical_url)
        <link
            rel="canonical"
            href="{{ $seo->canonical_url }}"
        >
    @endif


    {{-- =====================================================
         OPEN GRAPH
    ====================================================== --}}

    <meta
        property="og:title"
        content="{{ $ogTitle }}"
    >

    <meta
        property="og:description"
        content="{{ $ogDescription }}"
    >

    <meta
        property="og:type"
        content="website"
    >

    <meta
        property="og:url"
        content="{{ url()->current() }}"
    >

    @if($seo?->og_image)
        <meta
            property="og:image"
            content="{{ asset('storage/' . $seo->og_image) }}"
        >
    @endif


    {{-- =====================================================
         TWITTER
    ====================================================== --}}

    <meta
        name="twitter:card"
        content="summary_large_image"
    >

    <meta
        name="twitter:title"
        content="{{ $ogTitle }}"
    >

    <meta
        name="twitter:description"
        content="{{ $ogDescription }}"
    >

    @if($seo?->og_image)
        <meta
            name="twitter:image"
            content="{{ asset('storage/' . $seo->og_image) }}"
        >
    @endif


    {{-- =====================================================
         FAVICON
    ====================================================== --}}

    @if($siteSettings->favicon)
        <link
            rel="icon"
            type="image/png"
            href="{{ asset('storage/' . $siteSettings->favicon) }}"
        >
    @endif


    {{-- =====================================================
         CAIRO FONT
    ====================================================== --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    >


    {{-- =====================================================
         BOOTSTRAP
    ====================================================== --}}

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >


    {{-- =====================================================
         BOOTSTRAP ICONS
    ====================================================== --}}

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    {{-- =====================================================
         AOS
    ====================================================== --}}

    <link
        href="https://unpkg.com/aos@2.3.1/dist/aos.css"
        rel="stylesheet"
    >


    {{-- =====================================================
         SWIPER
    ====================================================== --}}

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    >


    {{-- =====================================================
         DYNAMIC COLORS
    ====================================================== --}}

    <style>
        :root {
            --tabarak-navy: {{ $siteSettings->secondary_color }};
            --tabarak-navy-2: {{ $siteSettings->secondary_dark_color }};

            --tabarak-blue: {{ $siteSettings->primary_color }};
            --tabarak-blue-dark: {{ $siteSettings->primary_dark_color }};

            --tabarak-light-blue: {{ $siteSettings->light_blue_color }};
            --tabarak-light: {{ $siteSettings->light_color }};

            --tabarak-white: {{ $siteSettings->white_color }};

            --tabarak-text: {{ $siteSettings->text_color }};
            --tabarak-muted: {{ $siteSettings->muted_color }};

            --tabarak-border: {{ $siteSettings->border_color }};

            --font-cairo: 'Cairo', sans-serif;
        }
    </style>


    {{-- =====================================================
         MAIN CSS
    ====================================================== --}}

    <link
        rel="stylesheet"
        href="{{ asset('assets/css/app.css') }}"
    >


    @stack('styles')

</head>