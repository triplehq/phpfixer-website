<?php
$metaTitle = 'PHP Maintenance Services: Upgrades, Fixes & Support | PHPFixer';
$metaDescription = 'PHP bug fixes, version upgrades, Laravel and WordPress upgrades, database tuning and deployment for existing PHP sites and applications.';
include 'content/pages/_partials/header.php';
?>

    <!-- Hero Section -->
    <section class="px-6 md:px-4 py-0 mb-10">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight tracking-tight bg-linear-to-b from-stone-800 to-stone-600 bg-clip-text text-transparent">All-inclusive PHP maintenance services for your business</h1>
            <p class="text-lg md:text-xl font-light text-neutral-700">PHP maintenance done properly. Upgrades, fixes, and performance improvements, with no shortcuts and no cowboy hacks.</p>
        </div>
    </section>

    <!-- Quick guide -->
    <section class="px-6 md:px-4 pb-10">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl font-bold tracking-tight text-neutral-800 mb-6">Not sure which service you need?</h2>
            <div class="flex flex-wrap gap-3">
                <a href="#bugs" class="rounded-full bg-sky-100 hover:bg-sky-200 px-6 py-3 text-sky-900 transition">My site shows an error or has stopped working</a>
                <a href="#upgrades" class="rounded-full bg-sky-100 hover:bg-sky-200 px-6 py-3 text-sky-900 transition">My host says my PHP version is being retired</a>
                <a href="#frameworks" class="rounded-full bg-sky-100 hover:bg-sky-200 px-6 py-3 text-sky-900 transition">My developer has disappeared and I'm stuck</a>
                <a href="#performance" class="rounded-full bg-sky-100 hover:bg-sky-200 px-6 py-3 text-sky-900 transition">My site is slow or times out</a>
                <a href="#deployment" class="rounded-full bg-sky-100 hover:bg-sky-200 px-6 py-3 text-sky-900 transition">Every release feels risky and things break</a>
                <a href="#ai-code" class="rounded-full bg-sky-100 hover:bg-sky-200 px-6 py-3 text-sky-900 transition">An AI tool built my app and it isn't holding up</a>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="px-6 md:px-4 pb-12 md:pb-16">
        <div class="max-w-7xl mx-auto">
            <div class="bg-neutral-100 rounded-t-xl overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-2">

                    <!-- Box 1: Bugs & crashes, tall left, spans 2 rows -->
                    <div id="bugs" class="service-target scroll-mt-6 p-6 md:p-10 lg:row-span-2 flex flex-col border-b border-neutral-200 lg:border-b lg:border-r">
                        <h2 class="text-2xl font-bold tracking-tight text-neutral-800 mb-2">Bugs & crashes</h2>
                        <p class="text-base text-neutral-600 font-light leading-relaxed mb-6">Your site is throwing errors, pages won't load, or something stopped working overnight. I find the cause and fix it cleanly, and most issues are resolved within a day.</p>
                        <p class="text-base text-neutral-600 font-light leading-relaxed mb-6">I start by finding out what actually went wrong: what the error says, what changed recently, and what the site was doing when it failed. Then I fix the real cause instead of hiding the symptom. Common reasons are a recent update, a plugin that stopped working, a server that ran out of space, or an outside service that changed how it works.</p>
                        <ul class="space-y-2 text-neutral-700">
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">500 errors and white screens</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Broken forms and payment flows</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">AI-generated code gone wrong</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Post-update breakage</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Memory leaks and performance bottlenecks</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Third-party API and integration failures</span></li>
                        </ul>
                        <p class="mt-5 text-sm leading-relaxed text-neutral-600 font-light"><span class="font-semibold text-neutral-700">What you get:</span> A working site, and a plain-English note of what went wrong and what I changed.</p>
                        <div class="mt-auto pt-10">
                            <div class="bg-sky-800 rounded-xl p-6 md:px-8 md:py-8">
                                <h3 class="text-2xl lg:text-3xl font-semibold text-white leading-tight tracking-tight">Something broken right now?</h3>
                                <p class="mt-3 text-sky-200 font-light text-base">Tell me what's happening and I'll tell you if I can fix it. If I can't, you don't pay.</p>
                                <div class="mt-6 flex flex-col sm:flex-row sm:items-center gap-4">
                                    <a href="#contact" @click.prevent="showContact = true; fathom.trackEvent('contact modal opened')" class="inline-block px-6 py-3 font-semibold text-center rounded-xl bg-white text-sky-800 shadow-lg hover:scale-105 transition duration-100">Get help now</a>
                                    <a href="<?php echo url('blog/emergency-php-checklist'); ?>" class="text-sky-100 hover:text-white underline">Try the emergency checklist first</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Box 2: PHP upgrades -->
                    <div id="upgrades" class="service-target scroll-mt-6 p-6 md:p-10 border-b border-neutral-200">
                        <h2 class="text-2xl font-bold tracking-tight text-neutral-800 mb-2">PHP version upgrades and modernisation</h2>
                        <p class="text-base text-neutral-600 font-light leading-relaxed mb-4">Running an old PHP version is a security risk and often the reason things start breaking. I handle the upgrade without taking your site offline.</p>
                        <p class="text-base text-neutral-600 font-light leading-relaxed mb-4">Newer versions of PHP drop old features, so code written years ago can stop working after an upgrade. I check your site against the new version first, fix what would break, and test everything before your live site is switched over. <a href="<?php echo url('blog/php-8-0-and-8-1-end-of-life'); ?>" class="underline hover:text-neutral-900">What end of life means for your site</a>.</p>
                        <ul class="space-y-1 text-neutral-700">
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Version upgrades (PHP 5.6 → 8.4)</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Modern practices and coding standards</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Code audits and security reviews</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Version control setup and workflows</span></li>
                        </ul>
                        <p class="mt-5 text-sm leading-relaxed text-neutral-600 font-light"><span class="font-semibold text-neutral-700">What you get:</span> Your site on a supported PHP version, with a list of what changed.</p>
                    </div>

                    <!-- Box 3: Framework/CMS -->
                    <div id="frameworks" class="service-target scroll-mt-6 p-6 md:p-10 border-b border-neutral-200">
                        <h2 class="text-2xl font-bold tracking-tight text-neutral-800 mb-2">Framework and CMS upgrades</h2>
                        <p class="text-base text-neutral-600 font-light leading-relaxed mb-4">Your original developer set it up, but now it's years out of date and nobody wants to touch it. I upgrade it safely, with a tested rollback plan.</p>
                        <p class="text-base text-neutral-600 font-light leading-relaxed mb-4">Big upgrades are done one step at a time, with a full backup before each one. I check that your plugins and add-ons will still work before touching anything.</p>
                        <ul class="space-y-1 text-neutral-700">
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Laravel and Symfony core upgrades</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">WordPress, CraftCMS, Statamic updates</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Plugin and dependency audits</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Backup strategy implementation</span></li>
                        </ul>
                        <p class="mt-5 text-sm leading-relaxed text-neutral-600 font-light"><span class="font-semibold text-neutral-700">What you get:</span> An up-to-date site, a fresh backup, and a rollback plan.</p>
                        <p class="mt-2 text-sm leading-relaxed text-neutral-600 font-light">Related: <a href="<?php echo url('blog/what-to-do-when-your-developer-disappears'); ?>" class="underline hover:text-neutral-900">What to do when your web developer disappears</a></p>
                    </div>

                    <!-- Box 4: Database & Performance -->
                    <div id="performance" class="service-target scroll-mt-6 p-6 md:p-10 border-b border-neutral-200 lg:border-b-0 lg:border-r">
                        <h2 class="text-2xl font-bold tracking-tight text-neutral-800 mb-2">Database optimisation and performance tuning</h2>
                        <p class="text-base text-neutral-600 font-light leading-relaxed mb-4">If your site is slow or timing out under load, the problem is usually in the database. I find it and fix it.</p>
                        <p class="text-base text-neutral-600 font-light leading-relaxed mb-4">I find out what is actually making the site slow before changing anything, then fix the biggest cause first. Extra speed boosts are only added where they will make a real difference.</p>
                        <ul class="space-y-1 text-neutral-700">
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Query optimisation (MySQL, MariaDB, Postgres)</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Caching layers (Redis, OPCache, Memcached, Cloudflare)</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Queue workers (Redis, RabbitMQ, Amazon SQS)</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Load time reduction and bottleneck analysis</span></li>
                        </ul>
                        <p class="mt-5 text-sm leading-relaxed text-neutral-600 font-light"><span class="font-semibold text-neutral-700">What you get:</span> A faster site, and a short summary of what was slowing it down.</p>
                    </div>

                    <!-- Box 5: Deployment -->
                    <div id="deployment" class="service-target scroll-mt-6 p-6 md:p-10">
                        <h2 class="text-2xl font-bold tracking-tight text-neutral-800 mb-2">Deployment and monitoring</h2>
                        <p class="text-base text-neutral-600 font-light leading-relaxed mb-4">Deploying changes shouldn't be a nail-biting moment. I set up pipelines and monitoring so problems are caught before your customers see them.</p>
                        <p class="text-base text-neutral-600 font-light leading-relaxed mb-4">A good setup checks every update automatically, puts it live the same way every time, and can undo it in one step. If something does break, you hear about it before your customers do.</p>
                        <ul class="space-y-1 text-neutral-700">
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Shared hosting, VPS, and cloud infrastructure</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Containerisation (Docker, Kubernetes)</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">CI/CD pipelines (GitHub Actions, GitLab CI)</span></li>
                            <li class="flex items-start"><span class="text-neutral-600 font-bold mr-2">&#8594;</span><span class="font-light">Error tracking and log monitoring</span></li>
                        </ul>
                        <p class="mt-5 text-sm leading-relaxed text-neutral-600 font-light"><span class="font-semibold text-neutral-700">What you get:</span> Updates that go live the same way every time, and an alert when something fails.</p>
                    </div>

                </div>
            </div>
            <!-- CTA block, outside the bordered grid -->
            <div class="flex flex-col gap-6 md:gap-0 md:flex-row justify-between items-center px-10 py-8 bg-neutral-700 rounded-b-xl">
                <div>
                    <h3 class="text-3xl lg:text-4xl text-center md:text-left font-semibold text-white leading-tight tracking-tight">Not sure what you need?</h3>
                    <p class="mt-3 text-neutral-400 font-light text-base text-center md:text-left">Your website is down right now? <a href="<?php echo url('blog/emergency-php-checklist'); ?>" class="text-neutral-300 hover:text-white underline">Start with our emergency checklist →</a></p>
                </div>
                <div>
                    <a href="https://cal.com/phpfixer/introduction?utm_source=phpfixer.com&utm_medium=cta&utm_campaign=intro-call&utm_content=services-consultation" target="_blank" rel="noopener" @click="fathom.trackEvent('book intro call clicked')" class="inline-block px-6 py-3 md:text-lg font-semibold rounded-xl bg-white text-neutral-700 shadow-lg hover:scale-110 transition duration-100">
                        Book a free consultation
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- AI-generated code section + CTA bento -->
    <section class="px-6 md:px-4 pb-20 md:pb-24">
        <div class="max-w-7xl mx-auto">
            <div id="ai-code" class="service-target scroll-mt-6 border border-sky-200 rounded-xl overflow-hidden shadow-sm grid grid-cols-1 lg:grid-cols-2">

                <!-- Image cell -->
                <div class="p-10 flex items-center justify-center bg-white border-sky-200 border-b-0 lg:border-b">
                    <img src="<?php echo asset('images/elephant-robot.png'); ?>" class="w-1/2 md:w-2/3 mx-auto scale-x-[-1]" loading="lazy" alt="">
                </div>

                <!-- Text cell -->
                <div class="p-6 md:p-10 border-b border-sky-200">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 leading-tight tracking-tight bg-linear-to-b from-sky-500 to-sky-700 bg-clip-text text-transparent">Built with Cursor, Lovable, Bolt, Codex or Claude?</h2>
                    <p class="text-base font-light text-neutral-700 leading-relaxed mb-6">AI can write code fast, but architecture, scalability and maintainability are where it consistently falls short. This can be a problem under real traffic, edge cases, or when it needs to connect with the rest of your system. If you've built something with AI assistance, hired someone who did, or inherited a codebase that looks like it was written by a very confident AI agent, I can help.</p>
                    <h3 class="text-lg font-bold tracking-tight text-neutral-800 mb-3">What I fix</h3>
                    <ul class="space-y-2 text-neutral-700">
                        <li class="flex items-start"><span class="text-sky-600 font-bold mr-2">&#8594;</span><span class="font-light">Code that works in demo but breaks in production</span></li>
                        <li class="flex items-start"><span class="text-sky-600 font-bold mr-2">&#8594;</span><span class="font-light">Security holes AI tools routinely miss</span></li>
                        <li class="flex items-start"><span class="text-sky-600 font-bold mr-2">&#8594;</span><span class="font-light">No error handling, no logging, no tests</span></li>
                        <li class="flex items-start"><span class="text-sky-600 font-bold mr-2">&#8594;</span><span class="font-light">Spaghetti structure that's impossible to extend</span></li>
                        <li class="flex items-start"><span class="text-sky-600 font-bold mr-2">&#8594;</span><span class="font-light">Dependencies nobody updated or reviewed</span></li>
                    </ul>
                    <p class="mt-5 text-sm leading-relaxed text-neutral-600 font-light"><span class="font-semibold text-neutral-700">What you get:</span> An app that holds up under real use, with the weak spots found and fixed.</p>
                    <p class="mt-2 text-sm leading-relaxed text-neutral-600 font-light">Related: <a href="<?php echo url('blog/using-ai-to-fix-code'); ?>" class="underline hover:text-neutral-900">Why you shouldn't rely on AI alone to fix broken code</a></p>
                </div>

                <!-- CTA cell — spans full width -->
                <div class="bg-sky-50 col-span-1 lg:col-span-2 flex flex-col gap-6 md:gap-0 md:flex-row justify-between items-center px-10 py-8">
                    <h3 class="text-3xl lg:text-4xl text-center md:text-left font-semibold bg-linear-to-t from-sky-800/80 to-sky-700 bg-clip-text text-transparent leading-tight tracking-tight">Let's get your vibe-coded PHP app production-ready</h3>
                    <a href="#contact" @click.prevent="showContact = true; fathom.trackEvent('contact modal opened')" class="inline-block px-6 py-3 md:text-lg font-semibold rounded-xl bg-linear-to-b from-cyan-500 to-blue-600 text-white shadow-lg hover:scale-110 transition duration-100">
                        Get a quote
                    </a>
                </div>

            </div>
        </div>
    </section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "PHPFixer",
  "url": "https://phpfixer.com/services/",
  "areaServed": "GB",
  "makesOffer": [
    {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "PHP bug fixes and crash investigation"}},
    {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "PHP version upgrades and modernisation"}},
    {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Laravel, Symfony and CMS upgrades"}},
    {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Database optimisation and performance tuning"}},
    {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Deployment and monitoring"}},
    {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Cleanup of AI-generated PHP code"}}
  ]
}
</script>

<?php include 'content/pages/_partials/footer.php'; ?>