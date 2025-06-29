<?php include 'content/pages/_partials/header.php'; ?>

    <main class="px-4 py-12">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-semibold mb-8 leading-tight bg-gradient-to-r from-purple-700 via-indigo-500 to-purple-400 bg-clip-text text-transparent">Invest in reliability</h1>
            <p class="mb-12 text-lg font-light text-neutral-800">Every project is different and I don't believe in one-size-fits-all pricing. What I do believe in is <strong class="font-bold">clarity</strong>, <strong class="font-bold">value</strong> and <strong class="font-bold">fixing your problems</strong>.</p>
        </div>

        <div class="max-w-7xl mx-auto">
            <!-- Pricing Boxes -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-16">
                <div class="bg-neutral-100 rounded-xl p-6 shadow-sm flex flex-col">
                    <div class="text-xs uppercase tracking-wider text-purple-700 font-bold mb-2">One-off Bug Check</div>
                    <div class="text-2xl font-bold mb-2">from £150 <span class="text-base font-normal">+ VAT</span></div>
                    <p class="mb-4 text-neutral-700 font-light">Get a professional diagnosis and fix for a single bug or error. Includes a written report and recommendations for future stability.</p>
                    <ul class="mb-4 space-y-1 text-sm text-neutral-700 flex-1">
                        <li>✓ "No win, no fee" — if I can't fix it, you don't pay</li>
                        <li>✓ Clear, actionable report</li>
                        <li>✓ No unexpected add-ons</li>
                    </ul>
                    <a href="#contact" class="inline-block mt-2 px-5 py-2 bg-purple-600 text-white text-center rounded-xl hover:bg-purple-700 transition shadow-md">Request a bug check</a>
                </div>
                <div class="bg-neutral-100 rounded-xl p-6 shadow-sm flex flex-col">
                    <div class="text-xs uppercase tracking-wider text-indigo-700 font-bold mb-2">Monthly Maintenance Retainer</div>
                    <div class="text-2xl font-bold mb-2">from £500 <span class="text-base font-normal">+ VAT</span></div>
                    <p class="mb-4 text-neutral-700 font-light">Ongoing updates, fixes, and expert support for your PHP-based site. Ideal for agencies and businesses who want peace of mind.</p>
                    <ul class="mb-4 space-y-1 text-sm text-neutral-700 flex-1">
                        <li>✓ Priority support</li>
                        <li>✓ Regular updates & monitoring</li>
                        <li>✓ Cancel anytime</li>
                    </ul>
                    <a href="#contact" class="inline-block mt-2 px-5 py-2 bg-indigo-600 text-white text-center rounded-xl hover:bg-indigo-700 transition shadow-md">Enquire about retainer</a>
                </div>
                <div class="bg-neutral-100 rounded-xl p-6 shadow-sm flex flex-col">
                    <div class="text-xs uppercase tracking-wider text-green-700 font-bold mb-2">Custom Project</div>
                    <div class="text-2xl font-bold mb-2">Get a quote</div>
                    <p class="mb-4 text-neutral-700 font-light">Legacy code rescue? Site upgrade? Performance bottlenecks? Let's discuss your project and I can provide a tailored quote.</p>
                    <ul class="mb-4 space-y-1 text-sm text-neutral-700 flex-1">
                        <li>✓ Free initial consultation</li>
                        <li>✓ Scoped to your actual needs</li>
                        <li>✓ Fixed pricing</li>
                    </ul>
                    <a href="#contact" class="inline-block mt-2 px-5 py-2 bg-green-600 text-white text-center rounded-xl hover:bg-green-700 transition shadow-md">Book a call</a>
                </div>
            </div>
        </div>

        <!-- How Pricing Works & FAQ Side by Side -->
        <section class="mb-12">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-2xl font-bold mb-3 bg-gradient-to-r from-purple-700 via-indigo-500 to-purple-400 bg-clip-text text-transparent">How does pricing work</h2>
                    <ul class="list-disc font-light pl-6 text-neutral-800 space-y-2">
                        <li>We start with a free, no-obligation call to understand your needs</li>
                        <li>I review your site and requirements, then provide a quote</li>
                        <li>No work starts until you approve the plan and price</li>
                        <li>For ongoing retainers you can cancel anytime</li>
                    </ul>
                    <h2 class="mt-12 text-2xl font-bold mb-3 bg-gradient-to-r from-purple-700 via-indigo-500 to-purple-400 bg-clip-text text-transparent">Why trust me?</h2>
                    <ul class="list-disc font-light pl-6 text-neutral-800 space-y-2">
                        <li>24+ years of PHP and web experience</li>
                        <li>Trusted by agencies, founders, and businesses across the UK & EU</li>
                        <li>Clear, honest communication — I hate technical BS just as much as you do</li>
                        <li>Fast, reliable, and always focused on your business goals</li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-2xl font-bold mb-3 bg-gradient-to-r from-purple-700 via-indigo-500 to-purple-400 bg-clip-text text-transparent">FAQ</h2>
                    <div class="space-y-2 font-light" x-data="{ openItem: 1 }">
                        <div class="border border-neutral-200 rounded-lg">
                            <button @click="openItem = openItem === 1 ? null : 1" class="w-full px-4 py-3 text-left flex justify-between items-center hover:bg-neutral-50 transition">
                                <span class="font-semibold text-neutral-800">Can you give me an exact price before seeing my site?</span>
                                <svg class="w-5 h-5 text-neutral-600 transition-transform" :class="{ 'rotate-180': openItem === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="openItem === 1" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-100" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="px-4 pb-3 text-neutral-700">
                                Not quite — I'm good, but not "remote energy healer from daytime telly" good. I'll need a quick look at your site first, then I'll send a fixed quote with no surprises.
                            </div>
                        </div>

                        <div class="border border-neutral-200 rounded-lg">
                            <button @click="openItem = openItem === 2 ? null : 2" class="w-full px-4 py-3 text-left flex justify-between items-center hover:bg-neutral-50 transition">
                                <span class="font-semibold text-neutral-800">How fast can you fix a bug?</span>
                                <svg class="w-5 h-5 text-neutral-600 transition-transform" :class="{ 'rotate-180': openItem === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="openItem === 2" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-100" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="px-4 pb-3 text-neutral-700">
                                It depends on the complexity. Some issues can be resolved in under an hour, others take longer. I'll give you a realistic timeframe after my initial review.
                            </div>
                        </div>

                        <div class="border border-neutral-200 rounded-lg">
                            <button @click="openItem = openItem === 3 ? null : 3" class="w-full px-4 py-3 text-left flex justify-between items-center hover:bg-neutral-50 transition">
                                <span class="font-semibold text-neutral-800">Do you work with agencies or just site owners?</span>
                                <svg class="w-5 h-5 text-neutral-600 transition-transform" :class="{ 'rotate-180': openItem === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="openItem === 3" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-100" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="px-4 pb-3 text-neutral-700">
                                Both. I regularly help agencies, founders, and business owners with PHP issues and ongoing support.
                            </div>
                        </div>

                        <div class="border border-neutral-200 rounded-lg">
                            <button @click="openItem = openItem === 4 ? null : 4" class="w-full px-4 py-3 text-left flex justify-between items-center hover:bg-neutral-50 transition">
                                <span class="font-semibold text-neutral-800">Can you work with code written by another developer or agency?</span>
                                <svg class="w-5 h-5 text-neutral-600 transition-transform" :class="{ 'rotate-180': openItem === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="openItem === 4" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-100" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="px-4 pb-3 text-neutral-700">
                                Absolutely. I regularly step into projects where the original developer is unavailable, unresponsive, or no longer involved.
                            </div>
                        </div>

                        <div class="border border-neutral-200 rounded-lg">
                            <button @click="openItem = openItem === 5 ? null : 5" class="w-full px-4 py-3 text-left flex justify-between items-center hover:bg-neutral-50 transition">
                                <span class="font-semibold text-neutral-800">Do you offer emergency support?</span>
                                <svg class="w-5 h-5 text-neutral-600 transition-transform" :class="{ 'rotate-180': openItem === 5 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="openItem === 5" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-100" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="px-4 pb-3 text-neutral-700">
                                Yes, I do offer limited emergency availability for critical bugs and outages. These are priced accordingly and depend on current workload. I sometimes book a few weeks in advance, so get in touch early if possible, but I'll always try to help when something breaks.
                            </div>
                        </div>

                        <div class="border border-neutral-200 rounded-lg">
                            <button @click="openItem = openItem === 6 ? null : 6" class="w-full px-4 py-3 text-left flex justify-between items-center hover:bg-neutral-50 transition">
                                <span class="font-semibold text-neutral-800">What if you can't fix my bug?</span>
                                <svg class="w-5 h-5 text-neutral-600 transition-transform" :class="{ 'rotate-180': openItem === 6 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="openItem === 6" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-100" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="px-4 pb-3 text-neutral-700">
                                If I can't help, you don't pay. I only take on work I'm confident I can deliver.
                            </div>
                        </div>

                        <div class="border border-neutral-200 rounded-lg">
                            <button @click="openItem = openItem === 7 ? null : 7" class="w-full px-4 py-3 text-left flex justify-between items-center hover:bg-neutral-50 transition">
                                <span class="font-semibold text-neutral-800">Do you only work with PHP?</span>
                                <svg class="w-5 h-5 text-neutral-600 transition-transform" :class="{ 'rotate-180': openItem === 7 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="openItem === 7" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-100" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="px-4 pb-3 text-neutral-700">
                                PHP is my core specialty, but I also work with front-end issues (JavaScript, CSS, HTML) and infrastructure problems related to your PHP stack.
                            </div>
                        </div>

                        <div class="border border-neutral-200 rounded-lg">
                            <button @click="openItem = openItem === 8 ? null : 8" class="w-full px-4 py-3 text-left flex justify-between items-center hover:bg-neutral-50 transition">
                                <span class="font-semibold text-neutral-800">How do I get started?</span>
                                <svg class="w-5 h-5 text-neutral-600 transition-transform" :class="{ 'rotate-180': openItem === 8 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="openItem === 8" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-100" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="px-4 pb-3 text-neutral-700">
                                Just <a href="#contact" class="text-purple-700 underline hover:text-purple-900">contact me</a> for a free, no-pressure chat about what you need.
                            </div>
                        </div>

                        <div class="border border-neutral-200 rounded-lg">
                            <button @click="openItem = openItem === 9 ? null : 9" class="w-full px-4 py-3 text-left flex justify-between items-center hover:bg-neutral-50 transition">
                                <span class="font-semibold text-neutral-800">Do you need access to everything right away?</span>
                                <svg class="w-5 h-5 text-neutral-600 transition-transform" :class="{ 'rotate-180': openItem === 9 }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div x-show="openItem === 9" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-out duration-100" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" class="px-4 pb-3 text-neutral-700">
                                No. We'll start with a quick review and scope discussion. I'll only request access if we agree to move forward with the work.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php include 'content/pages/_partials/footer.php'; ?>