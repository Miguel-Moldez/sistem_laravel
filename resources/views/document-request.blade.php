<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            ::before,
            ::after {
                margin: 0 !important;
                padding: 0 !important;
                box-sizing: border-box;
            }
            
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}

        
            .header-grid {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr; /* Three equal columns */
                align-items: center;
                padding: 10px 20px; /* Added padding for left and right */
                background-color: #11468F; /* Background color for the header */
                width: 100%; /* Ensure the header spans the full width */
                margin: 0; /* Remove any margin */
                box-sizing: border-box; /* Ensure padding is included in the total width */
            }
            .header-grid a {
                color: white; /* Text color for the links */
            }
            .header-grid a:hover {
                background-color:rgb(255, 255, 255); /* Bold color for active button */
                font-weight: bold;         /* Optional: Makes text bolder */
                color:  #11468F;              /* Ensures good contrast */
            }
            a.active {
                background-color:rgb(255, 255, 255); /* Bold color for active button */
                font-weight: bold;         /* Optional: Makes text bolder */
                color:  #11468F;              /* Ensures good contrast */
            }
            
            .left-section {
                justify-self: start; /* Aligns to the left */
            }
            .center-section {
                justify-self: center; /* Centers in the middle */
            }
            .right-section {
                justify-self: end; /* Aligns to the right */
            }
            .banner-overlay {
                background: rgba(0, 0, 0, 0.5); /* Semi-transparent black overlay */
            }
            .barangay-section {
                width: 100%; /* Ensures full-width spanning */
                padding-top: 2rem; /* Add space at the top */
                padding-bottom: 2rem; /* Add space at the bottom */
                margin: 0; /* Remove external margin */
                background-color: #11468F; /* Set background color */
                color: #ffffff;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .barangay-logo {
                width: 80px; /* Adjust logo size */
                height: 80px;
            }
            .barangay-name {
                margin-top: 16px;
                font-size: 1.25rem;
            }
            .barangay-address {
                margin-top: 8px;
                font-size: 0.875rem;
                color: #e0e0e0; /* Slightly lighter color for contrast */
            }
            .back-to-top {
                position: fixed;
                bottom: 20px;
                right: 20px; /* Adjusted to the right side */
                padding: 10px 20px;
                font-size: 14px;
                background-color: #11468F;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
                z-index: 1000;
                transition: background-color 0.3s ease;
            }
            .back-to-top:hover {
                background-color: #092d5a;
            }
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1200px;
            margin: 50px auto;
            gap: 20px;
        }
        .text-section {
            background-image: url("{{ asset('background/header_brgy.png') }}"); /* Replace with the path to your background image */
                background-size: cover; /* Ensures the image covers the entire section */
        background-position: center; /* Centers the image */
        background-repeat: no-repeat; /* Prevents the image from repeating */
        width: 100%; /* Makes the section span the full width of the viewport */
        max-width: 1920px; /* Ensures it doesn't exceed the image's width */
        height: auto; /* Automatically adjusts height based on the image's aspect ratio */
        aspect-ratio: 1920 / 500; /* Ensures the aspect ratio is maintained */
        display: flex; /* Enables flexbox for centering */
        flex-direction: column; /* Stacks text vertically */
        justify-content: center; /* Vertically centers content */
        align-items: center; /* Horizontally centers content */
        color: white; /* Makes the text visible on the image */
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7); /* Improves text readability */
        font-weight: bold; /* Makes the font bolder */
        }
        h1 {
            color:#9dc0f1;
            font-size: 3em;
        }
        p {
            margin: 10px 0 30px;
            font-size: 1.2em;
        }
        .service {
            background: #fff;
            padding: 20px;
            border: 1px solid transparent;
            border-radius: 10px;
            width: 30%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            height: 250px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .service:hover {
            border-color: #11468F;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }
        .service h3 {
            color: #11468F;
            font-size: 1.4em;
            margin-bottom: 10px;
        }
        .service p {
            margin-bottom: 15px;
            font-size: 1em;
            flex-grow: 1;
        }
        .service a {
            display: inline-block;
            text-decoration: none;
            background-color: #11468F;
            color: #fff;
            padding: 10px 20px;
            font-size: 1em;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
            margin-top: 15px;
        }
        .service a:hover {
            background-color: #0d3570;
        }
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50 relative">
            <img id="background" class="absolute inset-0 w-full h-full object-cover" src="{{ asset('') }}" alt="Background" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full ">
                <header class="header-grid">
                    <!-- Left-aligned Navigation Links -->
                    <nav class="left-section flex space-x-4">
                        <a href="{{ route('welcome') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Home
                        </a>
                        <a href="{{ route('news') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            News
                        </a>
                        <a href="{{ route('document-request') }}" class="rounded-md px-3 py-2 text-white bg-[#FF2D20] ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20] active">
                            Document Request
                        </a>
                    </nav>

                    <!-- Centered Logo -->
                    <div class="center-section">
                        <img src="{{ asset('logo/802-GO-LOGO.png') }}" alt="Logo" class="h-16 w-auto">
                    </div>

                    @if (Route::has('login'))
                        <!-- Right-aligned Authentication Links -->
                        <nav class="right-section flex space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                {{ Auth::user()->name }}
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>


<!-- Document Request -->
<div class="text-section">
        <h1>Document Request</h1>
        <p>Here are the documents you can easily request online:</p>
    </div>

    <div class="container">
        <div class="service">
            <h3>Barangay Clearance</h3>
            <p>A general document certifying that you are a resident of the barangay.</p>
            <a href="{{ route('barangay-clearance') }}">Click to Apply</a>
        </div>

        <div class="service">
            <h3>Certificate of Residency</h3>
            <p>This document proves that you are currently residing in the barangay.</p>
            <a href="{{ route('certificate-of-residency') }}">Click to Apply</a>
        </div>

        <div class="service">
            <h3>Indigency Certificate</h3>
            <p>This document certifies that you are indigent or belong to a low-income household.</p>
            <a href="{{ route('indigency-certificate') }}">Click to Apply</a>
        </div>

        <div class="service">
            <h3>Barangay Identification Card</h3>
            <p>Some barangays issue their own identification cards to residents.</p>
            <a href="{{ route('barangay-id') }}">Click to Apply</a>
        </div>

        <div class="service">
            <h3>Business Permit</h3>
            <p>If you plan to operate a business within the barangay, you may need to secure the necessary permits from the barangay office.</p>
            <a href="{{ route('business-permit') }}">Click to Apply</a>
        </div>
    </div>
<!-- Map Section -->
<section class="flex justify-center py-5 ">
    
    <!-- Back to Top Button -->
    <button class="back-to-top" onclick="scrollToTop()">Back to Top</button>
    <script>
    // Initialize the map
    const map = L.map('map').setView([14.572701489536044, 121.00241131326865], 100); // Latitude, Longitude, Zoom Level

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Add a marker with a custom popup
    const popupContent = `
      <div class="custom-popup">
        <img src="{{ asset('images/map_brgy.jpg') }}" alt="Location Photo">
        <h4>Barangay 802</h4>
        <p>District 5, Sta. Ana Manila City, Metro Manila, Philippines</p>
        <a href="https://www.google.com/maps/place/Barangay+802+Zone+87+District+V+Manila/@14.57304,120.9936437,16z/data=!4m10!1m2!2m1!1sBrgy.+802+District+5,+Sta.+Ana+Manila+City,+Metro+Manila,+Philippines!3m6!1s0x3397c99ba4d6d167:0x9ee46b591523041a!8m2!3d14.57304!4d121.0026559!15sCkVCcmd5LiA4MDIgRGlzdHJpY3QgNSwgU3RhLiBBbmEgTWFuaWxhIENpdHksIE1ldHJvIE1hbmlsYSwgUGhpbGlwcGluZXOSARpkaXN0cmljdF9nb3Zlcm5tZW50X29mZmljZeABAA!16s%2Fg%2F11bwny0638?entry=ttu&g_ep=EgoyMDI1MDEwOC4wIKXMDSoASAFQAw%3D%3D" target="_blank">Directions</a>
      </div>
    `;

    L.marker([14.572701489536044, 121.00241131326865]).addTo(map)
      .bindPopup(popupContent);
    // Scroll to Top Function
    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }
  </script>
</section>
<!-- Barangay Section -->
<section class="barangay-section bg-[#11468F] text-white py-12 px-6">
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
        <!-- Left Column: Logo and Name with Centered Alignment -->
        <div class="flex items-center justify-center lg:justify-start gap-4">
            <img src="{{ asset('logo/802-GO-LOGO.png') }}" alt="Barangay Logo" class="h-20 w-20 object-contain">
            <div>
                <div class="text-xl font-semibold">Barangay 802</div>
                <div class="text-sm mt-1">District 5, Sta. Ana Manila City, Metro Manila, Philippines</div>
            </div>
        </div>

        <!-- Right Column: Contact Information -->
        <div class="contact-info text-center lg:text-right">
            <h2 class="text-lg font-semibold">CONTACT US:</h2>
            <div class="contact-item mt-2">
                <span class="contact-title font-semibold">24-Hour Command Center:</span>
                <span class="contact-detail block">8-000-0000 / 0999 123 4567</span>
            </div>
            <div class="contact-item mt-2">
                <span class="contact-title font-semibold">Office of the Barangay Captain:</span>
                <span class="contact-detail block">8-000-0000</span>
            </div>
            <div class="contact-item mt-2">
                <span class="contact-title font-semibold">Email:</span>
                <span class="contact-detail block">email@gmail.com</span>
            </div>
            <div class="contact-item mt-2">
                <span class="contact-title font-semibold">Address:</span>
                <span class="contact-detail block">District 5, Sta. Ana Manila City, Metro Manila, Philippines</span>
            </div>
        </div>
    </div>
</section>

<footer style="text-align: center; padding: 30px; background-color: #f8f9fa; border-top: 1px solid #e9ecef; height: 100px; opacity: 0.5;">
    <p style="margin: 0; font-size: 12px;">Copyright &copy; {{ date('Y') }} Barangay 802, Manila City</p>
    <p style="margin: 0; font-size: 12px;">Designed by SISTEM</p>
</footer>

                </div>
            </div>
        </div>
    </body>
</html>
