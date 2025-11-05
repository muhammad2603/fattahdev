<!-- Landing Page -->
<main class="landing-page relative w-full h-screen flex flex-col">
    <!-- Header -->
    <header class="flex py-4">
        <!-- Logo -->
        <div class="identity sm:flex-1">
            <h1 class="<?= $tailwind_class['white_color'] ?> text-3xl 2xl:text-4xl font-semibold tracking-normal select-none">Fattah<span class="text-rose-500 font-bold tracking-wide text-xl 2xl:text-2xl align-baseline uppercase">Dev</span></h1>
        </div>
        <!-- AkhirLogo -->
        <!-- Navigasi Menu -->
        <nav class="flex justify-end items-center gap-3 sm:gap-6 md:gap-8 flex-1" id="navHomePage">
            <a href="javascript:void(0)" class="text-md text-slate-400 font-semibold duration-300 ease-out text-sm sm:text-lg md:text-lg 2xl:text-2xl <?= "hover:{$tailwind_class['white_color']}" ?>" role="button" data-navigate-to="about" tabindex="-1">About</a>
            <a href="javascript:void(0)" class="text-md text-slate-400 font-semibold duration-300 ease-out text-sm sm:text-lg md:text-lg 2xl:text-2xl <?= "hover:{$tailwind_class['white_color']}" ?>" role="button" data-navigate-to="experiences" tabindex="-1">Experiences</a>
            <a href="javascript:void(0)" class="text-md text-slate-400 font-semibold duration-300 ease-out text-sm sm:text-lg md:text-lg 2xl:text-2xl <?= "hover:{$tailwind_class['white_color']}" ?>" role="button" data-navigate-to="projects" tabindex="-1">Projects</a>
        </nav>
        <!-- Akhir Navigasi Menu -->
    </header>
    <!-- Akhir Header -->
    <!-- Introductions -->
    <div class="introductions grow flex items-center md:ml-0 lg:ml-8 xl:ml-12">
        <!-- Introduction Text | Left Flow Landing Page -->
        <div class="introduction-text sm:w-2/4 mb-12 flex-1 relative">
            <p class="hello-text sm:mb-1 2xl:mb-2 font-bold text-2xl sm:text-3xl xl:text-3xl 2xl:text-4xl <?= $tailwind_class['white_color'] ?>">Halo!</p>
            <h2 id="myName" class="my-name-text mt-2 mb-4 sm:mt-0 sm:mb-3.5 lg:h-[88px] xl:h-auto <?= $tailwind_class['white_color'] ?> font-bold text-4xl 2xl:text-5xl xl:text-nowrap">Saya <span class="text-emerald-400 font-bold">Muhammad Fattahillah. Mz</span></h2>
            <div class="main-job-description">
                <p class="my-role-text relative mb-4 2xl:mb-6 <?= $tailwind_class['white_color'] ?> font-bold text-xl 2xl:text-3xl"><span class="bg-rose-500 py-0.5 px-2 tracking-wider">Full-Stack</span> <span id="developerText" class="inline-block relative z-[-1]">Developer</span></p>
            </div>
            <p class="who-is-me-text w-[85%] sm:w-full inline-block sm:text-lg xl:text-lg <?= $tailwind_class['white_color'] ?>">
                Saya seorang <b class="px-1 text-emerald-300 font-bold">Web Developer</b> yang berfokus pada pengembangan website <b class="px-1 font-bold">pemerintahan</b> dan <b class="px-1 font-bold">sistem layanan digital internal</b>. Selama lebih dari <b class="px-1 font-bold">5</b> tahun, saya telah mengerjakan berbagai proyek berbasis web menggunakan <b class="px-1 text-amber-400 font-bold">JavaScript</b> dan <b class="px-1 text-violet-400 font-bold">PHP</b>.
            </p>
            <p class="<?= $tailwind_class['white_color'] ?> mt-2.5 w-[85%] sm:w-3/4 sm:text-lg xl:text-lg">Website ini saya buat menggunakan: <span class="font-semibold" id="tools" data-typed="CodeIgniter,Tailwind CSS"></span></p>
        </div>
        <!-- Akhir Introduction Text | Left Flow Landing Page -->
        <!-- Image Hero -->
        <div class="my-image-hero flex-1 hidden lg:flex justify-end">
            <figure class="sm:w-[450px] xl:w-[80%] aspect-square relative top-[-20px] mix-blend-lighten" id="myPhoto">
                <img src="/assets/images/muhammad-fattahillah.png" alt="Muhammad Fattahillah. Mz" class="w-full h-full object-cover brightness-[0.9]">
            </figure>
        </div>
        <!-- Akhir Image Hero -->
    </div>
    <!-- Akhir Introductions -->
    <!-- Scrolldown Interactive -->
    <div class="scroll-down-interactive absolute bottom-6 w-full flex justify-center">
        <span class="relative text-sm tracking-wider <?= $tailwind_class['white_color'] ?>">Scroll kebawah</span>
    </div>
    <!-- Akhir Scrolldown Interactive -->
</main>
<!-- Akhir Landing Page -->