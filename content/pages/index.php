<?php include 'content/pages/_partials/header.php'; ?>

    <!-- Hero Section -->
    <section class="relative px-4 pb-8 py-10">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between">
            <div class="w-full lg:w-2/3">
                <h2 class="text-3xl title md:text-6xl font-bold mb-4 leading-[1.20] text-stone-700">I fix broken websites and<span class="hidden md:inline"><br></span> fragile codebases</h2>
                <p class="text-base font-light text-lg/8 md:pr-10 mt-5 text-stone-700">Legacy codebase? Random crashes? Cursed pages? Upgrades gone wrong?<br>I'm the handyman agencies and business owners keep on speed dial.</p>
                <div class="w-full mt-12">
                    <h2 class="text-xl font-semibold mb-5 leading-[1.20] text-stone-600">I specialised in problems like</h2>
                    <div class="font-light flex flex-col md:flex-row gap-4 md:gap-16 text-stone-700">
                        <ul class="pl-0 space-y-1">
                            <li><span class="text-blue-600 font-bold mr-2">✓</span>Copy+paste AI-generated code</li>
                            <li><span class="text-blue-600 font-bold mr-2">✓</span>Legacy code which is hard to extend</li>
                            <li><span class="text-blue-600 font-bold mr-2">✓</span>Deprecated PHP functions haunting your logs</li>
                            <li><span class="text-blue-600 font-bold mr-2">✓</span>Slow or crashing WordPress sites</li>
                            <li><span class="text-blue-600 font-bold mr-2">✓</span>Fatal errors from rogue plugins</li>
                            <li><span class="text-blue-600 font-bold mr-2">✓</span>500 Internal Server Errors with no clear cause</li>
                            <li><span class="text-blue-600 font-bold mr-2">✓</span>Memory leaks and performance bottlenecks</li>
                        </ul>
                        <ul class="pl-0 space-y-1">
                            <li><span class="text-blue-600 font-bold mr-2">✓</span>"No one knows how this works" codebases</li>
                            <li><span class="text-blue-600 font-bold mr-2">✓</span>Eliminating years of technical debt</li>
                            <li><span class="text-blue-600 font-bold mr-2">✓</span>Laravel version upgrades</li>
                            <li><span class="text-blue-600 font-bold mr-2">✓</span>Replacing abandoned packages</li>
                            <li><span class="text-blue-600 font-bold mr-2">✓</span>Switching hosting providers</li>
                            <li><span class="text-blue-600 font-bold mr-2">✓</span>Regular maintenance</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hidden lg:flex w-full md:w-1/3 justify-center mt-8 md:mt-0">
                <img src="<?php echo asset('images/doctor-elephant.png'); ?>" alt="Dr ElePHPant">
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="px-4 py-16">
        <div class="max-w-7xl mx-auto">
            <h3 class="text-4xl text-center font-bold mb-6 leading-[1.20] bg-gradient-to-t from-stone-800 to-stone-500 bg-clip-text text-transparent">Fixing your code without burning everything down</h3>
            <p class="mb-8 text-lg font-light text-neutral-700 text-center">You don't need a rewrite if something doesn't work. You need a fix! I diagnose the problem, find a solution and making it work again.</p>
            <div class="flex flex-col lg:flex-row justify-between gap-6 lg:gap-8">
                <div class="flex-1 bg-neutral-100 rounded-xl p-6 flex flex-col md:flex-row items-center text-center md:text-left gap-3 md:gap-4 shadow-sm">
                    <img src="<?php echo asset('images/icon-analyse.png'); ?>" class="w-16 md:w-20 md:mr-6 mb-4 md:mb-0">
                    <div>
                        <div class="font-bold mb-1 text-xl md:text-2xl">Analyse</div>
                        <div class="text-base/6 font-light text-neutral-700">I reproduce the issue and trace it through your codebase.</div>
                    </div>
                </div>
                <div class="flex-1 bg-neutral-100 rounded-xl px-6 py-4 flex flex-col md:flex-row items-center text-center md:text-left gap-3 md:gap-4 shadow-sm">
                    <img src="<?php echo asset('images/icon-tools.png'); ?>" class="w-16 md:w-20 md:mr-6 mb-4 md:mb-0">
                    <div>
                        <div class="font-bold mb-1 text-xl md:text-2xl">Fix</div>
                        <div class="text-base/6 font-light text-neutral-700">I implement the solution with an option to rollback.</div>
                    </div>
                </div>
                <div class="flex-1 bg-neutral-100 rounded-xl px-6 py-4 flex flex-col md:flex-row items-center text-center md:text-left gap-3 md:gap-4 shadow-sm">
                    <img src="<?php echo asset('images/icon-document.png'); ?>" class="w-16 md:w-20 md:mr-6 mb-4 md:mb-0">
                    <div>
                        <div class="font-bold mb-1 text-xl md:text-2xl">Document</div>
                        <div class="text-base/6 font-light text-neutral-700">I provide a short report or a full audit on request.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What I work with -->
    <section class="px-4 py-6">
        <div class="max-w-7xl mx-auto bg-gradient-to-b from-blue-600 via-sky-700 to-sky-700 px-10 py-10 rounded-xl">
            <h3 class="text-5xl font-bold mb-6 leading-[1.20] bg-gradient-to-t from-neutral-300 to-white bg-clip-text text-transparent text-center">All-inclusive maintenance services</h3>
            <p class="mb-6 text-lg text-neutral-200">I use modern tools and workflows to stabilise, maintain, and extend existing PHP projects. No cowboy hacks, no unnecessary rebuilds. I keep what works, fix what's broken, and make it easier to move forward.</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-base mb-2 text-neutral-100">
                <div class="bg-white/15 backdrop-blur-md border border-white/30 rounded-xl p-6 shadow-lg">
                    <h4 class="font-bold text-lg mb-2 text-white">PHP improvements</h4>
                    <ul class="space-y-1 list-disc list-inside font-light">
                        <li>Version upgrades (5.6 → 8.4)</li>
                        <li>Modern code practices: Composer, PSR, autoloading</li>
                        <li>Code audits with PHPStan, PHPCSFixer</li>
                    </ul>
                </div>
                <div class="bg-white/15 backdrop-blur-md border border-white/30 rounded-xl p-6 shadow-lg">
                    <h4 class="font-bold text-lg mb-2 text-white">Frameworks & CMS</h4>
                    <ul class="space-y-1 list-disc list-inside font-light">
                        <li>Laravel version upgrades (5.x → 12.x)</li>
                        <li>WordPress, CraftCMS, Statamic</li>
                    </ul>
                </div>
                <div class="bg-white/15 backdrop-blur-md border border-white/30 rounded-xl p-6 shadow-lg">
                    <h4 class="font-bold text-lg mb-2 text-white">Database & performance</h4>
                    <ul class="space-y-1 list-disc list-inside font-light">
                        <li>MySQL & MariaDB tuning</li>
                        <li>Caching (Redis, OPCache, Memcached, Cloudflare</li>
                        <li>Queue workers (Redis, Rabbit MQ, Amazon SQS)</li>
                    </ul>
                </div>
                <div class="bg-white/15 backdrop-blur-md border border-white/30 rounded-xl p-6 shadow-lg">
                    <h4 class="font-bold text-lg mb-2 text-white">Servers & DevOps</h4>
                    <ul class="space-y-1 list-disc list-inside font-light">
                        <li>Web servers: Apache & NGINX</li>
                        <li>Shared/VPS hosting (cPanel, Plesk, Kinsta)</li>
                        <li>Containerisation (Docker), CI/CD pipelines</li>
                    </ul>
                </div>
                <div class="bg-white/15 backdrop-blur-md border border-white/30 rounded-xl p-6 shadow-lg">
                    <h4 class="font-bold text-lg mb-2 text-white">Debugging & monitoring</h4>
                    <ul class="space-y-1 list-disc list-inside font-light">
                        <li>Xdebug for step-through diagnosis</li>
                        <li>Error tracking with Sentry, LogRocket, Bugsnag, Laravel Nightwatch</li>
                    </ul>
                </div>
                <div class="bg-white/15 backdrop-blur-md border border-white/30 rounded-xl p-6 shadow-lg">
                    <h4 class="font-bold text-lg mb-2 text-white">Collaboration & source Control</h4>
                    <ul class="space-y-1 list-disc list-inside font-light">
                        <li>GitHub, GitLab, BitBucket</li>
                        <li>Code reviews</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-12 px-4">
        <div class="max-w-7xl mx-auto">
            <h3 class="text-4xl text-center font-bold mb-8 leading-[1.20] text-stone-700">What clients said about PHPFixer</h3>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">
                <div class="bg-neutral-100 text-base/6 text-stone-700 rounded-xl border border-stone-400/10 p-6 shadow-sm relative after:content-[''] after:absolute after:bottom-[-20px] after:left-8 after:w-0 after:h-0 after:border-t-[20px] after:border-t-gray-100 after:border-l-[14px] after:border-l-transparent after:border-r-[14px] after:border-r-transparent after:border-b-0 after:border-b-transparent">
                    <p class="mb-4 font-light">"I have a WordPress website where one of the pages kept showing a 500 error. I spoke with several agencies—most of them tried to convince me the entire site needed rebuilding from scratch. I contacted PHPFixer, and within an hour he had identified the real issue and gave me a straightforward quote to fix it permanently."</p>
                    <div class="font-bold text-sm text-gray-600">WordPress site owner (UK)</div>
                </div>
                <div class="bg-neutral-100 text-base/6 text-stone-700 rounded-xl p-6 shadow-sm relative after:content-[''] after:absolute after:bottom-[-20px] after:left-8 after:w-0 after:h-0 after:border-t-[20px] after:border-t-gray-100 after:border-l-[14px] after:border-l-transparent after:border-r-[14px] after:border-r-transparent after:border-b-0 after:border-b-transparent">
                    <p class="mb-4 font-light">"Our site runs on CraftCMS. One day, I started receiving upgrade warnings, but the original developer who built it said he couldn't help anymore. I brought in PHPFixer and he handled the upgrade smoothly and now manages our maintenance every quarter. He's reliable, easy to work with, and we've had zero downtime since."</p>
                    <div class="font-bold text-sm text-gray-600">Online Marketplace (EU)</div>
                </div>
                <div class="bg-neutral-100 text-base/6 text-stone-700 rounded-xl p-6 shadow-sm relative after:content-[''] after:absolute after:bottom-[-20px] after:left-8 after:w-0 after:h-0 after:border-t-[20px] after:border-t-gray-100 after:border-l-[14px] after:border-l-transparent after:border-r-[14px] after:border-r-transparent after:border-b-0 after:border-b-transparent">
                    <p class="mb-4 font-light">"We inherited a legacy Laravel project with no tests, inconsistent code, and fragile deployments. PHPFixer stepped in, cleaned up key parts of the codebase, introduced basic testing, and set up a proper deployment pipeline with Git and staging. It's made a huge difference to our team's confidence and velocity."</p>
                    <div class="font-bold text-sm text-gray-600">Lead Developer, SaaS Startup (UK)</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA: Second Opinion -->
    <section class="px-4 py-16">
        <div class="max-w-7xl mx-auto flex justify-between items-center border border-stone-400/10 p-12 rounded-xl bg-gradient-to-t from-stone-100">
            <h3 class="text-3xl md:text-4xl font-medium leading-[1.20] bg-gradient-to-t from-neutral-800 to-neutral-600 bg-clip-text text-transparent">Tired of firefighting? Let’s fix it for good.</h3>
            <div>
                <a href="#contact" class="inline-block px-6 py-3 text-lg font-semibold rounded-2xl bg-gradient-to-b from-cyan-500 to-blue-600 text-white rounded-xl shadow-lg hover:bg-blue-600 transition">Request a bug check</a>
            </div>
        </div>
    </section>

    <!-- CTA: Second Opinion -->
    <section class="px-4 py-12 hidden">
        <div class="max-w-7xl mx-auto text-center border border-neutral-200 rounded-xl p-6 py-10 shadow-sm">
            <h3 class="text-3xl md:text-4xl font-medium mb-4 leading-[1.20] bg-gradient-to-t from-neutral-800 to-neutral-600 bg-clip-text text-transparent">Want a second opinion before committing to a rebuild?</h3>
            <a href="#contact" class="inline-block mt-2 px-8 py-4 bg-gradient-to-r from-purple-600 to-indigo-600 text-white text-lg font-semibold rounded-2xl shadow-md hover:scale-105 hover:bg-purple-700 transition">Book a FREE consult</a>
        </div>
    </section>

<?php include 'content/pages/_partials/footer.php'; ?>
