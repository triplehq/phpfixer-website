<?php include 'content/pages/_partials/header.php'; ?>

    <main class="px-4 py-0">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-center md:text-left text-4xl title md:text-6xl font-bold leading-[1.10] text-zinc-700">Invest in reliability</h1>
            <p class="mt-10 text-xl/8 font-light text-neutral-800">Every project is different, and I don't believe in one-size-fits-all pricing. What I do believe in is <strong class="font-bold">clarity</strong>, <strong class="font-bold">value</strong> and <strong class="font-bold">fixing your problems</strong>.</p>
        </div>

        <div class="max-w-7xl mx-auto mt-12 mb-24">
            <!-- Pricing Boxes -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="bg-neutral-100 rounded-xl p-6 shadow-sm flex flex-col">
                    <div class="text-center text-xs uppercase tracking-wider text-purple-700 font-bold mb-2">One-off Bug Check</div>
                    <div class="text-center text-3xl font-bold mb-5">from £150</div>
                    <p class="mb-4 text-neutral-700 font-light">Get a professional diagnosis and fix for a single bug or error quickly, without being locked into ongoing work.</p>
                    <ul class="mb-4 space-y-1 text-sm text-neutral-700 flex-1">
                        <li><span class="text-blue-600 font-bold mr-2">✓</span> If I can't fix the problem, <strong>you don't pay</strong></li>
                        <li><span class="text-blue-600 font-bold mr-2">✓</span> Single, straight-forward pricing</li>
                        <li><span class="text-blue-600 font-bold mr-2">✓</span> Custom quote if it takes longer</li>
                    </ul>
                    <a href="#contact" @click.prevent="showContact = true" class="inline-block mt-2 px-5 py-3 bg-blue-600 text-white font-semibold text-center rounded-xl hover:bg-blue-700 transition shadow-md">Request a bug check</a>
                </div>
                <div class="bg-neutral-100 rounded-xl p-6 shadow-sm flex flex-col">
                    <div class="text-center text-xs uppercase tracking-wider text-zinc-700 font-bold mb-2">Monthly Maintenance Retainer</div>
                    <div class="text-center text-3xl font-bold mb-5">from £750 <span class="text-base font-normal">/ month</div>
                    <p class="mb-4 text-neutral-700 font-light">Ongoing updates, fixes, and expert support for your PHP-based site. Ideal for agencies and businesses who want peace of mind.</p>
                    <ul class="mb-4 space-y-1 text-sm text-neutral-700 flex-1">
                        <li><span class="text-blue-600 font-bold mr-2">✓</span> Priority support</li>
                        <li><span class="text-blue-600 font-bold mr-2">✓</span> Regular updates & monitoring</li>
                        <li><span class="text-blue-600 font-bold mr-2">✓</span> Cancel anytime</li>
                    </ul>
                    <a href="#contact" @click.prevent="showContact = true" class="inline-block mt-2 px-5 py-3 bg-zinc-700 text-white font-semibold text-center rounded-xl hover:bg-zinc-800 transition shadow-md">Enquire about retainer</a>
                </div>
                <div class="bg-neutral-100 rounded-xl p-6 shadow-sm flex flex-col">
                    <div class="text-center text-xs uppercase tracking-wider text-green-700 font-bold mb-2">Custom Project</div>
                    <div class="text-center text-3xl font-bold mb-5">Get a quote</div>
                    <p class="mb-4 text-neutral-700 font-light">Legacy code rescue? Site upgrade? Performance bottlenecks? Let's discuss your project and I give you a tailored quote.</p>
                    <ul class="mb-4 space-y-1 text-sm text-neutral-700 flex-1">
                        <li><span class="text-blue-600 font-bold mr-2">✓</span> Free initial consultation included</li>
                        <li><span class="text-blue-600 font-bold mr-2">✓</span> Scoped to your actual needs</li>
                        <li><span class="text-blue-600 font-bold mr-2">✓</span> Tailored pricing</li>
                    </ul>
                    <a href="#contact" @click.prevent="showContact = true" class="inline-block mt-2 px-5 py-3 bg-green-600 text-white font-semibold text-center rounded-xl hover:bg-green-700 transition shadow-md">Book a call</a>
                </div>
            </div>
        </div>

        <!-- How Pricing Works & FAQ Side by Side -->
        <section class="mb-16">
            <div class="max-w-7xl mx-auto flex justify-between">
                <div>
                    <h2 class="text-3xl font-semibold mb-6 text-zinc-700 text-transparent">The PHPFixer approach</h2>
                    <ul class="list-disc font-light pl-6 text-neutral-800 space-y-2">
                        <li>We start with a <strong class="font-semibold">free, no-obligation call</strong> to understand your situation</li>
                        <li>Then I review your site or application with the requirements and <strong class="font-semibold">provide a quote</strong></li>
                      <li><strong class="font-semibold">No work starts</strong> until you approve the plan and price</li>
                      <li>For ongoing retainers you can <strong class="font-semibold">cancel your plan anytime</strong></li>
                    </ul>
                    <h2 class="mt-16 text-3xl font-semibold mb-6 text-zinc-700">Why trust PHPFixer?</h2>
                    <ul class="list-disc font-light pl-6 text-neutral-800 space-y-2">
                      <li>I have more than <strong class="font-semibold">25 years of experience</strong> working on PHP and web projects</li>
                        <li>I'm trusted by agencies, founders and businesses across the UK & EU</li>
                        <li>Clear, honest communication – I hate technical BS just as much as you do!</li>
                      <li>I'm fast, reliable and <strong class="font-semibold">your business goals are my priority</strong></li>
                    </ul>
                </div>
                <div class="align-right">
                    <img src="<?php echo asset('images/doctor-elephant.png'); ?>" alt="How can I help?" class="w-104" loading="lazy">
                </div>
            </div>
            <div class="mt-8 max-w-7xl mx-auto">
                <h2 class="text-3xl font-semibold mb-8 text-zinc-500">Frequently asked questions</h2>
                <div class="space-y-3 font-light" x-data="{ openItem: 1 }">
                    <div class="faq-item border border-neutral-200 rounded-lg">
                        <button @click="openItem !== 1 && (openItem = 1)" class="faq-button w-full px-5 py-4 text-left flex justify-between items-center transition-colors duration-200" :class="{ 'faq-active': openItem === 1 }">
                            <span class="font-semibold text-zinc-500">Can you give me an exact price before seeing my site?</span>
                            <svg class="w-5 h-5 text-neutral-600 transition-transform duration-300 ease-out" :class="{ 'rotate-180': openItem === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="openItem === 1" x-collapse.duration.300ms class="px-5 pb-4 pr-20 text-neutral-700">
                            Not quite — I'm good, but not "remote energy healer from daytime telly" good. I need a quick look at your site first, then I will send a fixed quote with no surprises.
                        </div>
                    </div>

                    <div class="faq-item border border-neutral-200 rounded-lg">
                        <button @click="openItem !== 2 && (openItem = 2)" class="faq-button w-full px-5 py-4 text-left flex justify-between items-center transition-colors duration-200" :class="{ 'faq-active': openItem === 2 }">
                            <span class="font-semibold text-zinc-500">How fast can you fix a bug?</span>
                            <svg class="w-5 h-5 text-neutral-600 transition-transform duration-300 ease-out" :class="{ 'rotate-180': openItem === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="openItem === 2" x-collapse.duration.300ms class="px-5 pb-4 pr-20 text-neutral-700">
                            It depends on the complexity. Some issues can be resolved in under an hour, others take longer. I will give you a realistic timeframe after the initial review, but usually it has obvious clues if I cannot fix it in an hour. In that case you can decide to carry on or stop. Any additional hours will be billed as £75 / hour.
                        </div>
                    </div>

                    <div class="faq-item border border-neutral-200 rounded-lg">
                        <button @click="openItem !== 3 && (openItem = 3)" class="faq-button w-full px-5 py-4 text-left flex justify-between items-center transition-colors duration-200" :class="{ 'faq-active': openItem === 3 }">
                            <span class="font-semibold text-zinc-500">Do you work with agencies or just site owners?</span>
                            <svg class="w-5 h-5 text-neutral-600 transition-transform duration-300 ease-out" :class="{ 'rotate-180': openItem === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="openItem === 3" x-collapse.duration.300ms class="px-5 pb-4 pr-20 text-neutral-700">
                            Both. I regularly help agencies, founders, and business owners with PHP issues and ongoing support.
                        </div>
                    </div>

                    <div class="faq-item border border-neutral-200 rounded-lg">
                        <button @click="openItem !== 4 && (openItem = 4)" class="faq-button w-full px-5 py-4 text-left flex justify-between items-center transition-colors duration-200" :class="{ 'faq-active': openItem === 4 }">
                            <span class="font-semibold text-zinc-500">Can you work with code written by another developer or agency?</span>
                            <svg class="w-5 h-5 text-neutral-600 transition-transform duration-300 ease-out" :class="{ 'rotate-180': openItem === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="openItem === 4" x-collapse.duration.300ms class="px-5 pb-4 pr-20 text-neutral-700">
                            Absolutely. I regularly step into projects where the original developer is unavailable, unresponsive, or no longer involved.
                        </div>
                    </div>

                    <div class="faq-item border border-neutral-200 rounded-lg">
                        <button @click="openItem !== 5 && (openItem = 5)" class="faq-button w-full px-5 py-4 text-left flex justify-between items-center transition-colors duration-200" :class="{ 'faq-active': openItem === 5 }">
                            <span class="font-semibold text-zinc-500">Do you offer emergency support?</span>
                            <svg class="w-5 h-5 text-neutral-600 transition-transform duration-300 ease-out" :class="{ 'rotate-180': openItem === 5 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="openItem === 5" x-collapse.duration.300ms class="px-5 pb-4 pr-20 text-neutral-700">
                            Yes, I do offer limited emergency availability for critical bugs and outages. These are priced accordingly and depend on current workload. I sometimes booked a few weeks in advance, so get in touch early if possible, but I will always try to help when something breaks.
                        </div>
                    </div>

                    <div class="faq-item border border-neutral-200 rounded-lg">
                      <button @click="openItem !== 10 && (openItem = 10)" class="faq-button w-full px-5 py-4 text-left flex justify-between items-center transition-colors duration-200" :class="{ 'faq-active': openItem === 10 }">
                        <span class="font-semibold text-zinc-500">Wait a second, do you work alone?</span>
                        <svg class="w-5 h-5 text-neutral-600 transition-transform duration-300 ease-out" :class="{ 'rotate-180': openItem === 10 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                      </button>
                      <div x-show="openItem === 10" x-collapse.duration.300ms class="px-5 pb-4 pr-20 text-neutral-700">
                        Mainly, yes. But I also have people I work with regularly for specific tasks and I can bring in trusted experts if needed. But I have eyes on each project and I take full responsibility for the quality what each subcontracted work. You will always have a single point of contact and I will be the one doing the work or managing it directly.
                      </div>
                    </div>

                    <div class="faq-item border border-neutral-200 rounded-lg">
                        <button @click="openItem !== 6 && (openItem = 6)" class="faq-button w-full px-5 py-4 text-left flex justify-between items-center transition-colors duration-200" :class="{ 'faq-active': openItem === 6 }">
                            <span class="font-semibold text-zinc-500">What if you can't fix my bug?</span>
                            <svg class="w-5 h-5 text-neutral-600 transition-transform duration-300 ease-out" :class="{ 'rotate-180': openItem === 6 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="openItem === 6" x-collapse.duration.300ms class="px-5 pb-4 pr-20 text-neutral-700">
                            It's simple: if I can't help, you don't pay. I only take on work where I'm confident I can deliver.
                        </div>
                    </div>

                    <div class="faq-item border border-neutral-200 rounded-lg">
                        <button @click="openItem !== 7 && (openItem = 7)" class="faq-button w-full px-5 py-4 text-left flex justify-between items-center transition-colors duration-200" :class="{ 'faq-active': openItem === 7 }">
                            <span class="font-semibold text-zinc-500">Do you only work with PHP?</span>
                            <svg class="w-5 h-5 text-neutral-600 transition-transform duration-300 ease-out" :class="{ 'rotate-180': openItem === 7 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="openItem === 7" x-collapse.duration.300ms class="px-5 pb-4 pr-20 text-neutral-700">
                            As the name suggests PHP is my core specialty, but I also work with front-end issues (JavaScript, CSS, HTML) and infrastructure problems related to your PHP stack.
                        </div>
                    </div>

                    <div class="faq-item border border-neutral-200 rounded-lg">
                        <button @click="openItem !== 8 && (openItem = 8)" class="faq-button w-full px-5 py-4 text-left flex justify-between items-center transition-colors duration-200" :class="{ 'faq-active': openItem === 8 }">
                            <span class="font-semibold text-zinc-500">How do I get started?</span>
                            <svg class="w-5 h-5 text-neutral-600 transition-transform duration-300 ease-out" :class="{ 'rotate-180': openItem === 8 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="openItem === 8" x-collapse.duration.300ms class="px-5 pb-4 pr-20 text-neutral-700">
                            Just <a href="#contact" @click.prevent="showContact = true" class="text-purple-700 underline hover:text-purple-900">contact me</a> for a free, no-pressure chat about what you need.
                        </div>
                    </div>

                    <div class="faq-item border border-neutral-200 rounded-lg">
                        <button @click="openItem !== 9 && (openItem = 9)" class="faq-button w-full px-5 py-4 text-left flex justify-between items-center transition-colors duration-200" :class="{ 'faq-active': openItem === 9 }">
                            <span class="font-semibold text-zinc-500">Do you need access to everything right away?</span>
                            <svg class="w-5 h-5 text-neutral-600 transition-transform duration-300 ease-out" :class="{ 'rotate-180': openItem === 9 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="openItem === 9" x-collapse.duration.300ms class="px-5 pb-4 pr-20 text-neutral-700">
                            No. We will start with a quick review and scope discussion. I only request access if we both agreed and happy to move forward with the work. All of your credentials and data are treated with the utmost care and confidentiality, and I will only access what is necessary to complete the agreed-upon work.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'content/pages/_partials/footer.php'; ?>