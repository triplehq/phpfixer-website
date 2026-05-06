<?php
$metaTitle = 'PHPFixer – PHP Bug Fixes & Maintenance for Businesses';
$metaDescription = 'Expert PHP maintenance, bug fixes, and legacy code rescue. Fixed pricing, no-fix no-fee. Trusted by UK & EU agencies and founders.';
$preloadImage = asset('images/mechanic-elephant.png');
include 'content/pages/_partials/header.php';
?>

    <!-- Hero Section -->
    <section class="px-6 md:px-4 pb-4 py-0 relative">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between">
            <div class="w-full lg:w-2/3">
                <h1 class="text-center my-8 md:my-0 md:text-left text-5xl title md:text-7xl font-bold md:mb-4 leading-[1.02] tracking-tight text-zinc-700">The PHP handyman businesses keep on speed dial</h1>
                <p class="text-center md:text-left text-lg font-light md:text-xl/8 md:pr-10 mt-5 text-stone-700">For small and mid-size businesses tired of agencies, ghosted developers and being told they need a full rebuild. No fix, no fee. 25+ years experience.</p>
                <div class="show sm:hidden w-64 justify-center mt-8 md:mt-0 mx-auto">
                    <img src="<?php echo asset('images/mechanic-elephant.png'); ?>" alt="" fetchpriority="high">
                </div>
            </div>
            <div class="hidden lg:flex w-full md:w-1/3 justify-center mt-8 md:mt-0">
                <img src="<?php echo asset('images/mechanic-elephant.png'); ?>" alt="" fetchpriority="high">
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="px-6 md:px-4 pb-12 py-8 md:py-16">
        <div class="max-w-7xl mx-auto">
            <h3 class="text-3xl md:text-4xl text-center font-bold mb-6 bg-linear-to-b from-stone-800 to-stone-600 bg-clip-text text-transparent leading-tight tracking-tight">I can fix your code without <span class="bg-clip-text bg-gradient-to-t from-orange-600 via-red-400 to-red-600
  animate-[fire_2s_infinite] drop-shadow-[0_0_15px_rgba(255,100,0,0.8)]">burning</span> everything down</h3>
            <div class="mb-8 text-lg font-light text-neutral-700 text-center">You don't need a rewrite. You need someone who can find the problem, fix it cleanly, and not break anything else in the process.</div>
            <div class="mb-16 flex flex-col lg:flex-row justify-between gap-6 lg:gap-8">
                <div class="flex-1 bg-neutral-100 rounded-xl p-6 flex flex-col sm:flex-row items-center text-center sm:text-left gap-3 md:gap-4 shadow-sm">
                    <img src="<?php echo asset('images/icon-analyse.png'); ?>" class="w-16 md:w-20 md:mr-6 md:mb-4">
                    <div>
                        <div class="font-bold mb-1 text-xl md:text-2xl">Step 1: Analyse</div>
                        <div class="text-base/6 font-light text-neutral-700">I reproduce the issue and trace it through your codebase.</div>
                    </div>
                </div>
                <div class="flex-1 bg-neutral-100 rounded-xl px-6 py-4 flex flex-col sm:flex-row items-center text-center sm:text-left gap-3 md:gap-4 shadow-sm">
                    <img src="<?php echo asset('images/icon-tools.png'); ?>" class="w-16 md:w-20 md:mr-6 md:mb-4 scale-x-[-1]">
                    <div>
                        <div class="font-bold mb-1 text-xl md:text-2xl">Step 2: Fix</div>
                        <div class="text-base/6 font-light text-neutral-700">I implement the solution and handle damage control.</div>
                    </div>
                </div>
                <div class="flex-1 bg-neutral-100 rounded-xl px-6 py-4 flex flex-col sm:flex-row items-center text-center sm:text-left gap-3 md:gap-4 shadow-sm">
                    <img src="<?php echo asset('images/icon-document.png'); ?>" class="w-16 md:w-20 md:mr-6 md:mb-4 scale-x-[-1]">
                    <div>
                        <div class="font-bold mb-1 text-xl md:text-2xl">Step 3: Clarity</div>
                        <div class="text-base/6 font-light text-neutral-700">Clear summary of what was wrong, what was fixed, and what to watch.</div>
                    </div>
                </div>
            </div>
          <div class="text-2xl font-bold text-neutral-700 text-center">I only access what's needed to fix the problem. <span class="font-light">Nothing more.</span></div>
        </div>
    </section>

    <!-- What I work with -->
    <section class="sm:px-6 md:px-4 py-0 pb-10 md:py-6 md:pb-16">
        <div class="hero-exclusive w-full sm:max-w-7xl mx-auto px-6 py-6 md:py-10 p-5 md:p-10 sm:rounded-xl">
            <h3 class="text-3xl md:text-4xl font-bold mb-8 md:mb-10 bg-gradient-to-t from-neutral-300 to-white bg-clip-text text-transparent tracking-tight text-center">All-inclusive<br class="sm:hidden"> maintenance services for your PHP codebase</h3>
            <p class="mb-8 md:mb-10 text-lg text-neutral-200 md:text-center">I use modern tools and workflows to stabilise, maintain, and extend existing PHP projects. No cowboy hacks, no unnecessary rebuilds. Keep what works, fix what's broken, and make it easier to move forward.</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8 text-base mb-2 text-neutral-100">
                <div class="hero-card rounded-xl p-6">
                    <h4 class="font-semibold text-xl mb-3 tracking-tight text-white">Bugs & crashes</h4>
                    <ul class="space-y-1 list-none list-outside pl-2 font-light">
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>500 errors, broken functionality</li>
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>Slow or crashing pages</li>
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>AI-generated code gone wrong</li>
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>Memory leaks</li>
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>Performance bottlenecks</li>
                    </ul>
                </div>
                <div class="hero-card rounded-xl p-6">
                    <h4 class="font-semibold text-xl mb-3 tracking-tight text-white">Legacy & upgrades</h4>
                    <ul class="space-y-1 list-none list-outside pl-2 font-light">
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>Old codebases, PHP version upgrades</li>
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>Laravel and Symfony updates</li>
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>WordPress and CraftCMS upgrades</li>
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>Abandoned packages</li>
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>Deprecated functions</li>
                    </ul>
                </div>
                <div class="hero-card rounded-xl p-6">
                    <h4 class="font-semibold text-xl mb-3 tracking-tight text-white">Ongoing maintenance</h4>
                    <ul class="space-y-1 list-none list-outside pl-4 font-light">
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>Regular updates, monitoring</li>
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>Technical debt cleanup, DevOps</li>
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>CI/CD pipelines, database optimisation</li>
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>Security updates</li>
                        <li><span class="text-neutral-100 font-bold mr-2">&#8594;</span>Peace of mind</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="px-6 md:px-4 py-8 pb-10">
        <div class="max-w-7xl mx-auto">
            <h3 class="text-3xl md:text-5xl text-center font-bold mb-6 md:mb-10 bg-gradient-to-b from-stone-800 to-stone-600 bg-clip-text text-transparent leading-tight tracking-tight">What clients say about PHPFixer</h3>
            <div class="grid grid-cols-1 lg:grid-cols-3 space-y-6 lg:space-y-0 gap-8 lg:gap-10">
                <div class="bg-neutral-100 text-base/6 text-stone-700 rounded-xl p-6 shadow-sm relative after:content-[''] after:absolute after:bottom-[-20px] after:left-8 after:w-0 after:h-0 after:border-t-[20px] after:border-t-gray-100 after:border-l-[14px] after:border-l-transparent after:border-r-[14px] after:border-r-transparent after:border-b-0 after:border-b-transparent">
                    <p class="mb-4 font-light">"I have a WordPress website where one of the pages kept showing a 500 error. I spoke with several agencies, but most of them tried to convince me that I need a new website, because I'm not using the correct plugins. I contacted PHPFixer, and within an hour he had identified the issue and gave me a quote to fix it permanently. He saved me a lot of money!"</p>
                    <div class="font-bold text-sm text-gray-600">B2B company owner (UK)</div>
                </div>
                <div class="bg-neutral-100 text-base/6 text-stone-700 rounded-xl p-6 shadow-sm relative after:content-[''] after:absolute after:bottom-[-20px] after:left-8 after:w-0 after:h-0 after:border-t-[20px] after:border-t-gray-100 after:border-l-[14px] after:border-l-transparent after:border-r-[14px] after:border-r-transparent after:border-b-0 after:border-b-transparent">
                    <p class="mb-4 font-light">"Our site runs on CraftCMS. One day, I started receiving upgrade warnings, but the original developer who wasn't available anymore. I brought in PHPFixer and he handled the upgrade smoothly. He manages our maintenance every quarter — zero downtime in 5 months. He's reliable, easy to work with, and we've had zero downtime since."</p>
                    <div class="font-bold text-sm text-gray-600">Online Marketplace (EU)</div>
                </div>
                <div class="bg-neutral-100 text-base/6 text-stone-700 rounded-xl p-6 shadow-sm relative after:content-[''] after:absolute after:bottom-[-20px] after:left-8 after:w-0 after:h-0 after:border-t-[20px] after:border-t-gray-100 after:border-l-[14px] after:border-l-transparent after:border-r-[14px] after:border-r-transparent after:border-b-0 after:border-b-transparent">
                    <p class="mb-4 font-light">"We inherited a legacy Laravel project with no tests and inconsistent code. I convinced the management to give PHPFixer a go: within 6 weeks we had a clean codebase, basic test coverage, and a working CI pipeline. That made a huge difference to our team's confidence and velocity."</p>
                    <div class="font-bold text-sm text-gray-600">Lead Developer, SaaS Startup (UK)</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA: Second Opinion -->
    <section class="px-6 md:px-4 py-8 md:py-16 md:pb-10">
      <div class="max-w-7xl mx-auto flex flex-col gap-6 md:gap-0 md:flex-row justify-between items-center py-6 md:py-12 px-6 md:p-12 border-2 border-blue-100 rounded-xl">
        <h3 class="text-3xl lg:text-4xl text-center md:text-left font-semibold bg-gradient-to-t from-blue-800/80 to-cyan-700 bg-clip-text text-transparent leading-tight tracking-tight">Tired of firefighting? Let's fix it for good.</h3>
        <div>
          <a href="#contact" @click.prevent="showContact = true; fathom.trackEvent('contact modal opened')" class="inline-block px-6 py-3 md:text-lg font-semibold rounded-2xl bg-gradient-to-b from-cyan-500 to-blue-600 text-white rounded-xl shadow-lg hover:scale-110 transition duration-100">
            Get a free quote
          </a>
        </div>
      </div>
    </section>

    <!-- About Banner -->
    <section class="px-6 md:px-4 py-0 pb-10">
      <div class="max-w-7xl mx-auto flex flex-row items-end md:items-center gap-5 md:gap-12 bg-linear-135 from-[#2d3748] via-[#4a5568] to-[#374151] rounded-xl px-6 pt-2 shadow-sm border-0">
        <div class="shrink-0">
          <img src="<?php echo asset('images/tamas-photo.png'); ?>" alt="Tamas Erdelyi – PHPFixer" class="w-32 md:w-48" loading="lazy">
        </div>
        <div class="pb-1">
          <h3 class="text-lg md:text-3xl font-bold tracking-tight text-zinc-100 mb-2">You're in good hands</h3>
          <p class="text-sm/5 md:text-base/6 font-light text-neutral-200 pb-4 md:pb-0">My name is Tamas. PHP developer with 25+ years of experience, UK-based solo consultant trusted by agencies and SMBs across UK &amp; EU.<span class="hidden md:inline-block"> No unnecessary rebuilds, no technical jargon — just clean fixes and honest communication.</span></p>
        </div>
      </div>
    </section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "PHPFixer",
  "url": "https://phpfixer.com",
  "description": "Expert PHP maintenance, bug fixes, and legacy code rescue for businesses, agencies, and founders.",
  "areaServed": ["GB", "EU"],
  "priceRange": "££",
  "serviceType": ["PHP Bug Fixing", "PHP Maintenance", "Legacy Code Rescue", "Framework Upgrades"],
  "provider": {
    "@type": "Person",
    "name": "Tamas Erdelyi",
    "sameAs": "https://www.linkedin.com/in/terdelyi/"
  }
}
</script>

<?php include 'content/pages/_partials/footer.php'; ?>
