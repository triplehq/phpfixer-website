<?php
$metaTitle = 'Thanks – your call is booked | PHPFixer';
$metaDescription = 'Your introduction call is booked. Here is how to prepare.';
$noIndex = true;
include 'content/pages/_partials/header.php';
?>

    <main class="px-6 md:px-4 py-8 md:py-16">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-center text-4xl title md:text-5xl font-bold leading-[1.10] tracking-tight text-zinc-700 mb-6">You're booked in!</h1>
            <p class="text-center text-lg md:text-xl/8 font-light text-neutral-800 mb-12">A calendar invite with the call link is on its way to your inbox. Looking forward to speaking with you.</p>

            <div class="bg-neutral-100 rounded-xl p-6 md:p-10 shadow-sm mb-10">
                <h2 class="text-xl md:text-2xl font-semibold tracking-tight text-zinc-700 mb-4">Get the most out of the call</h2>
                <p class="mb-4 font-light text-neutral-700">No preparation is required, but if you can have these to hand, we'll get further faster:</p>
                <ul class="space-y-2 font-light text-neutral-700">
                    <li><span class="text-blue-600 font-bold mr-2">&#8594;</span>The exact error message or a screenshot of what's going wrong</li>
                    <li><span class="text-blue-600 font-bold mr-2">&#8594;</span>The URL of the affected page or site</li>
                    <li><span class="text-blue-600 font-bold mr-2">&#8594;</span>Anything that changed recently — updates, deploys, new plugins, a developer leaving</li>
                </ul>
                <p class="mt-4 font-light text-neutral-700">You won't need to share hosting or code access for this call.</p>
            </div>

            <p class="text-center font-light text-neutral-700">Want to send details ahead of the call? Email <a href="mailto:hello@phpfixer.com" class="text-blue-600 underline hover:opacity-80">hello@phpfixer.com</a>.</p>
            <p class="text-center mt-8"><a href="<?php echo url('/'); ?>" class="text-blue-600 underline hover:opacity-80">&larr; Back to the homepage</a></p>
        </div>
    </main>

    <script>
        window.addEventListener('load', function () {
            if (window.fathom) {
                fathom.trackEvent('intro call booked');
            }
        });
    </script>

<?php include 'content/pages/_partials/footer.php'; ?>
