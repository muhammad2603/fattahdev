<?= $this->extend('layouts/template') ?>

<?= $this->section('content') ?>
<!-- Section Details of Me -->
<section class="details w-full flex flex-col lg:flex-row text-justify">
    <!-- Left Side -->
    <section class="left-side lg:sticky md:top-0 lg:h-screen pt-16 md:pt-[6rem] flex-1 flex flex-col">
        <!-- Top of Left Side -->
        <div class="top">
            <h2 class="my-name-text <?= $tailwind_class['white_color'] ?> font-bold text-3xl 2xl:text-5xl">
                <span class="text-emerald-400">Muhammad Fattahillah. Mz</span>
            </h2>
            <p class="my-role-text mb-3 <?= $tailwind_class['white_color'] ?> font-semibold text-3xl lg:text-3xl xl:text-xl 2xl:text-3xl"><span>Full-Stack</span> Developer</p>
            <p class="my-slogan-text w-3/4 text-slate-400 text-lg 2xl:text-2xl">
                Saya membangun website yang <b class="px-1 text-blue-400 font-bold">efisien</b>, <b class="px-1 text-purple-500 font-bold">responsif</b>, dan dirancang dengan <b class="px-1 text-emerald-400 font-bold">presisi</b> untuk pengalaman pengguna terbaik.
            </p>
        </div>
        <!-- Akhir Top of Left Side -->
        <!-- Details of Me -->
        <div class="details-of-me mt-12 sm:mt-16">
            <!-- Navigation Flow About Me -->
            <nav class="flow-about-me mb-10 flex flex-col gap-3" id="actionNavigates">
                <div class="action-about cursor-pointer w-fit active" role="button" data-navigate-to="about">
                    <span class="horizontal-line inline-block bg-slate-400 align-middle mr-2.5"></span>
                    <span class="text-slate-400 uppercase align-middle font-bold text-sm sm:text-sm 2xl:text-xl tracking-widest">Tentang Saya</span>
                </div>
                <div class="action-experiences cursor-pointer w-fit" role="button" data-navigate-to="experiences">
                    <span class="horizontal-line inline-block bg-slate-400 align-middle mr-2.5"></span>
                    <span class="text-slate-400 uppercase align-middle font-bold text-sm sm:text-sm 2xl:text-xl tracking-widest">Pengalaman Saya</span>
                </div>
                <div class="action-projects cursor-pointer w-fit" role="button" data-navigate-to="projects">
                    <span class="horizontal-line inline-block bg-slate-400 align-middle mr-2.5"></span>
                    <span class="text-slate-400 uppercase align-middle font-bold text-sm sm:text-sm 2xl:text-xl tracking-widest">Proyek Saya</span>
                </div>
            </nav>
            <!-- Akhir Navigation Flow About Me -->
            <!-- Links to My Social Media -->
            <nav class="links w-fit flex gap-6 justify-items-end mb-16" id="links">
                <a href="https://github.com/muhammad2603" target="_blank"><span class="text-2xl 2xl:text-3xl text-slate-400 duration-300 ease-out <?= "hover:" . $tailwind_class['white_color'] ?>"><i class="fa-brands fa-github"></i></span></a>
                <a href="https://instagram.com/m.fattahillah26_" target="_blank"><span class="text-2xl 2xl:text-3xl text-slate-400 duration-300 ease-out <?= "hover:" . $tailwind_class['white_color'] ?>"><i class="fa-brands fa-instagram"></i></span></a>
                <a href="https://www.tiktok.com/@fattahillah26_" target="_blank"><span class="text-2xl 2xl:text-3xl text-slate-400 duration-300 ease-out <?= "hover:" . $tailwind_class['white_color'] ?>"><i class="fa-brands fa-tiktok"></i></span></a>
            </nav>
            <!-- Akhir Links to My Social Media -->
        </div>
        <!-- Akhir Details of Me -->
    </section>
    <!-- Akhir Left Side -->
    <!-- Right Side -->
    <section class="right-side relative sm:my-[6rem] flex-1 flex flex-col text-slate-400" id="rightSide">
        <div class="about-me-details mt-10 sm:mt-0 mb-16 md:mb-[6.5rem] lg:pl-6 flex flex-col gap-4 text-lg sm:text-xl xl:text-[1rem] 2xl:text-xl" id="about">
            <h2 class="lg:hidden md:mb-3 text-xl sm:text-2xl font-semibold <?= $tailwind_class['white_color'] ?> uppercase tracking-widest">Tentang Saya</h2>
            <p class="2xl:leading-[2rem]">Segalanya bermula saat saya menduduki kelas <b class="px-1 text-emerald-400 font-bold">2 SMK</b> di Kosgoro Muara Bulian, ketika mata pelajaran baru bernama Pemrograman mulai masuk ke jadwal saya. Guru saya, Bapak Mosessa, adalah sosok yang sabar dan jelas dalam mengajar, penjelasannya mudah saya pahami, dan disitulah rasa penasaran pertama kali tumbuh.</p>
            <p class="2xl:leading-[2rem]">Bahasa pertama yang saya pelajari adalah <b class="px-1 text-red-400 font-bold">HTML</b>. Saat itu saya begitu antusias hingga mengira <b class="px-1 font-bold">HTML</b> adalah bahasa pemrograman sungguhan. Saya sempat merasa bangga, mengira dunia pemrograman tidak serumit yang dibayangkan, sampai akhirnya saya tahu bahwa <b class="px-1 font-bold">HTML</b> adalah bahasa <i>markup language</i>. Dari situlah saya mulai mendalami bahasa lainnya, yaitu <b class="px-1 text-sky-400 font-bold">CSS</b>, lalu berlanjut ke <b class="px-1 text-amber-400 font-bold">JavaScript</b>, bahasa yang benar-benar mengajarkan saya arti logika, struktur, dan algoritma.</p>
            <p class="2xl:leading-[2rem]">Ketika pertama kali berhadapan dengan JavaScript, saya merasa <i>"dikalahkan"</i>. Logikanya terasa rumit, dan semangat saya sempat padam. Saya bahkan berhenti belajar selama satu tahun penuh. Namun, rasa ingin tahu tidak pernah benar-benar hilang. Setahun kemudian, saya kembali membuka editor VS Code, mencoba menulis kode lagi, dan menemukan semangat yang dulu sempat hilang. Dari sanalah perjalanan saya berlanjut hingga mengenal <b class="px-1 font-bold">PHP</b> dan berbagai <b class="px-1 font-bold">framework</b> seperti <b class="px-1 text-orange-700 font-bold">CodeIgniter</b> dan <b class="px-1 text-blue-500 font-bold">Tailwind CSS</b>.</p>
            <p class="2xl:leading-[2rem]">Kini, saya bekerja di <b class="font-bold">Sekretariat DPRD Kabupaten Batang Hari</b> sebagai pegawai, mengembangkan berbagai website internal dan publik, seperti <a href="https://setwan-batangharikab.id" class="duration-300 font-bold hover:text-emerald-400 hover:underline" target="_blank">Beranda Utama</a> DPRD Kabupaten Batang Hari, <a href="https://e-galoe.setwan-batangharikab.id" class="duration-300 font-bold hover:text-emerald-400 hover:underline" target="_blank">E-Galoe</a> DPRD Kabupaten Batang Hari, <a href="https://sibutel.setwan-batangharikab.id" class="duration-300 font-bold hover:text-emerald-400 hover:underline" target="_blank">SiBUTEL</a> (Sistem Informasi Buku Elektronik) DPRD Kabupaten Batang Hari.</p>
            <p class="2xl:leading-[2rem]">Selain bekerja, saya juga seorang Mahasiswa di <a href="https://ugkmb.ac.id" class="duration-300 font-bold hover:text-emerald-400 hover:underline" target="_blank">Universitas Graha Karya</a> Muara Bulian, saat ini berada di semester 5 dengan mengambil Program Studi Sistem Informasi.</p>
            <p class="2xl:leading-[2rem]">Bagi saya, perjalanan ini bukan sekadar tentang menulis kode, melainkan tentang belajar bertahan, berkembang, dan memahami makna dibalik setiap error yang pernah muncul dilayar. Saya percaya, setiap baris kode yang ditulis dengan niat baik bisa membawa perubahan, sekecil apapun itu untuk orang lain.</p>
        </div>
        <div class="my-experiences-details mb-16 sm:mb-[6.5rem] flex flex-col gap-4 text-lg" id="experiences">
            <h2 class="lg:hidden md:mb-3 text-xl sm:text-2xl font-semibold <?= $tailwind_class['white_color'] ?> uppercase tracking-widest">Pengalaman Saya</h2>
            <?php foreach ($experiences_list as $e): ?>
                <?php
                $periods = explode('-', $e['periods']);
                $links = json_decode($e['links'], true);
                $e['tools'] = explode(',', $e['tools']) // Convert string to array with comma delimiter
                ?>
                <div class="card hover:bg-slate-400/5 hover:border-t-[.05px] hover:border-solid hover:border-t-slate-400/15 py-4 px-6 rounded-md flex flex-col xl:flex-row gap-3 sm:gap-3 lg:gap-4 border-t-[.05px] border-t-transparent duration-150 group text-lg">
                    <div class="first-col basis-128 shrink-0">
                        <span class="text-lg sm:text-xl xl:text-[1rem] 2xl:text-xl font-semibold uppercase"><?= $periods[0] ?> <span class="inline-block w-[25px] h-[1.5px] align-middle bg-slate-400"></span> <?= $periods[1] ?></span>
                    </div>
                    <div class="second-col">
                        <h2 class="card-title mb-1.5 text-xl xl:text-lg 2xl:text-2xl font-semibold <?= $tailwind_class['white_color'] ?> group-hover:text-emerald-300"><?= $e['title'] ?> <span class="arrow-icon ml-1 text-[0.875rem]"><i class="fa-solid fa-location-arrow align-baseline duration-150 ease-in"></i></span></h2>
                        <p class="card-description sm:text-lg xl:text-[1rem] 2xl:text-xl"><?= $e['description'] ?></p>
                        <div class="experience-links flex flex-wrap gap-y-2 gap-x-5 mt-2 mb-1">
                            <?php foreach ($links as $link): ?>
                                <a href="<?= $link['link'] ?>" class="text-sm duration-300 hover:text-emerald-400" target="_blank"><i class="fa-solid fa-link mr-1.5"></i><?= $link['title'] ?></a>
                            <?php endforeach ?>
                        </div>
                        <div class="card-bottom tools mt-4 flex flex-wrap gap-2">
                            <?php foreach ($e['tools'] as $tool): ?>
                                <mark class="sm:text-lg xl:text-sm 2xl:text-xl bg-emerald-400/10 text-emerald-300 font-semibold p-1 px-4 rounded-2xl mix-blend-screen"><?= $tool ?></mark>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="my-projects-details flex flex-col gap-2 text-lg" id="projects">
            <h2 class="lg:hidden md:mb-3 text-xl sm:text-2xl font-semibold <?= $tailwind_class['white_color'] ?> uppercase tracking-widest">Proyek Saya</h2>
            <?php foreach ($projects_list as $p): ?>
                <?php $p['tools'] = explode(',', $p['tools']) // Convert string to array with comma delimiter 
                ?>
                <a href="<?= $p['link'] ?>" target="_blank">
                    <div class="card hover:bg-slate-400/5 mt-3 py-4 px-6 rounded-md flex flex-col 2xl:flex-row gap-2 sm:gap-10 lg:gap-4 cursor-pointer border-t-[.05px] border-t-transparent duration-150 hover:border-t-[.05px] hover:border-solid hover:border-t-slate-400/15 group">
                        <div class="first-col basis-128 shrink-0">
                            <figure class="w-[250px] sm:w-[450px] lg:w-[320px] xl:w-[380px]">
                                <img
                                    src="/assets/images/<?= $p['image_url'] ?>"
                                    alt="<?= $p['title'] ?>"
                                    class="w-full h-full object-cover" />
                            </figure>
                        </div>
                        <div class="second-col">
                            <h2 class="card-title mb-1.5 text-xl 2xl:text-2xl font-semibold <?= $tailwind_class['white_color'] ?> group-hover:text-emerald-300"><?= $p['title'] . ' ' ?><span class="arrow-icon ml-1 text-[0.875rem]"><i class="fa-solid fa-location-arrow align-baseline duration-150 ease-in"></i></span></h2>
                            <p class="card-description sm:text-lg xl:text-[1rem] 2xl:text-xl"><?= $p['description'] ?></p>
                            <div class="card-bottom tools mt-4 flex flex-wrap gap-2">
                                <?php foreach ($p['tools'] as $tool): ?>
                                    <mark class="sm:text-lg xl:text-sm 2xl:text-xl bg-emerald-400/10 text-emerald-300 font-semibold p-1 px-4 rounded-2xl mix-blend-screen"><?= $tool ?></mark>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach ?>
        </div>
        <div class="copyright mb-8 sm:mb-0 mt-16 pl-2 text-sm sm:text-lg xl:text-[1rem] 2xl:text-xl leading-[1.6rem] 2xl:leading-[2rem]">
            <p>© 2025 Copyright Muhammad Fattahillah. Mz. All rights reserved.</p>
            <p>Special thanks for <a href="https://brittanychiang.com" target="_blank" class="font-semibold <?= $tailwind_class['white_color'] ?>">Brittany Chiang</a> as reference this design. Coded with Visual Studio Code by yours truly. Built with <a href="https://codeigniter.com" target="_blank" class="font-semibold <?= $tailwind_class['white_color'] ?>">CodeIgniter</a> and <a href="https://tailwindcss.com" target="_blank" class="font-semibold <?= $tailwind_class['white_color'] ?>">Tailwind</a>.</p>
        </div>
    </section>
    <!-- Akhir Right Side -->
</section>
<!-- Akhir Section Details of Me -->
<?= $this->endSection() ?>