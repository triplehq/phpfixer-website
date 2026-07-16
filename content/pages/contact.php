<?php
$metaTitle = 'Contact – PHPFixer';
$metaDescription = 'Get in touch about a broken site, a bug, or ongoing PHP maintenance. Send a message or book a free introduction call.';
include 'content/pages/_partials/header.php';
?>

    <main class="px-6 md:px-4 py-8 md:py-16">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-center md:text-left text-4xl title md:text-5xl font-bold leading-[1.10] tracking-tight text-zinc-700">Let's fix your problem</h1>
            <p class="mt-6 md:mt-10 text-lg md:text-xl/8 font-light text-neutral-800 md:pr-10">Whether your site is down right now or something has been broken for a while — tell me about it. No jargon, no obligation, and you'll always know the price before any work starts.</p>
        </div>

        <div class="max-w-7xl mx-auto mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
            <div class="bg-neutral-100 rounded-xl p-8 md:p-10 shadow-sm flex flex-col">
                <h2 class="text-2xl font-semibold tracking-tight text-zinc-700 mb-3">Send a message</h2>
                <p class="mb-6 font-light text-neutral-700 flex-1">Describe the problem in your own words — error messages, screenshots, the page that's misbehaving. I'll get back to you with next steps, usually the same working day.</p>
                <a href="#contact" @click.prevent="showContact = true; fathom.trackEvent('contact modal opened')" class="inline-block px-6 py-3 md:text-lg font-semibold text-center rounded-xl bg-gradient-to-b from-cyan-500 to-blue-600 text-white shadow-lg hover:scale-105 transition duration-100">Open the contact form</a>
            </div>
            <div class="bg-neutral-100 rounded-xl p-8 md:p-10 shadow-sm flex flex-col">
                <h2 class="text-2xl font-semibold tracking-tight text-zinc-700 mb-3">Book an appointment</h2>
                <p class="mb-6 font-light text-neutral-700 flex-1">Prefer to talk it through? Pick a slot that suits you for a free, no-pressure introduction call about your situation.</p>
                <a href="https://cal.com/phpfixer/introduction?utm_source=phpfixer.com&utm_medium=cta&utm_campaign=intro-call&utm_content=contact-page" target="_blank" rel="noopener" @click="fathom.trackEvent('book intro call clicked')" class="inline-block px-6 py-3 md:text-lg font-semibold text-center rounded-xl bg-zinc-700 text-white shadow-lg hover:bg-zinc-800 transition">Book a free call</a>
            </div>
        </div>

        <p class="max-w-7xl mx-auto mt-10 mb-24 text-center font-light text-neutral-700">You can also email me directly at <a href="mailto:hello@phpfixer.com" class="text-blue-600 underline hover:opacity-80">hello@phpfixer.com</a>.</p>
    </main>

<?php include 'content/pages/_partials/footer.php'; ?>
