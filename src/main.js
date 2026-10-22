// Import TailwindCSS
import './style.css';

// Import Alpine.js
import Alpine from 'alpinejs';

// Contact form component
Alpine.data('contactForm', () => ({
    name: '',
    email: '',
    website: '',
    message: '',
    bot: '',
    success: false,
    error: false,
    loading: false,

    async submit() {
        if (this.bot) return; // honeypot check

        this.loading = true;
        this.error = false;

        const currency = Alpine.store('currency');

        try {
            const body = new URLSearchParams({
                'form-name': 'contact',
                'bot-field': this.bot,
                name: this.name,
                email: this.email,
                website: this.website || '',
                message: this.message,
                currency: currency.symbol + currency.bugCheck + ' / ' + currency.symbol + currency.retainer,
                timezone: currency.timezone,
            });

            const response = await fetch('/', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: body.toString(),
            });

            if (!response.ok) throw new Error('Network response was not ok');

            this.success = true;
            fathom.trackEvent('contact form submitted');
            this.name = '';
            this.email = '';
            this.website = '';
            this.message = '';
        } catch {
            this.error = true;
        }

        this.loading = false;
    }
}));

// Currency store — GBP for UK, EUR for EU, USD for everyone else
Alpine.store('currency', {
    symbol: '$',
    bugCheck: '200',
    retainer: '750',
    timezone: '',
    init() {
        const tz = Intl.DateTimeFormat().resolvedOptions().timeZone;
        const lang = (navigator.language || (navigator.languages && navigator.languages[0]) || '').toLowerCase();
        this.timezone = tz;

        const eurozone = new Set([
            'Europe/Vienna', 'Europe/Brussels', 'Europe/Nicosia', 'Asia/Nicosia',
            'Europe/Tallinn', 'Europe/Helsinki', 'Europe/Paris', 'Europe/Berlin',
            'Europe/Athens', 'Europe/Dublin', 'Europe/Rome', 'Europe/Riga',
            'Europe/Vilnius', 'Europe/Luxembourg', 'Europe/Malta', 'Europe/Amsterdam',
            'Europe/Lisbon', 'Atlantic/Azores', 'Atlantic/Madeira',
            'Europe/Bratislava', 'Europe/Ljubljana', 'Europe/Madrid',
            'Africa/Ceuta', 'Atlantic/Canary', 'Europe/Zagreb',
            'Europe/Andorra', 'Europe/Monaco', 'Europe/Vatican', 'Europe/San_Marino',
        ]);

        if (tz === 'Europe/London' || lang === 'en-gb') {
            this.symbol = '£';
            this.bugCheck = '150';
            this.retainer = '550';
        } else if (eurozone.has(tz)) {
            this.symbol = '€';
            this.bugCheck = '170';
            this.retainer = '650';
        }
    }
});

// End of life tracker: status of one release, worked out from today's date so it
// stays correct between rebuilds. Mirrors $status in content/pages/tools/eol-tracker.php.
Alpine.data('eolStatus', (release) => ({
    get today() {
        return new Date().toISOString().slice(0, 10);
    },
    get isPast() {
        return release.eol === null ? release.ended : release.eol <= this.today;
    },
    get status() {
        if (this.isPast) return 'ended';

        const soon = new Date();
        soon.setMonth(soon.getMonth() + 6);
        if (release.eol !== null && release.eol <= soon.toISOString().slice(0, 10)) return 'soon';

        if (release.activeUntil !== null && release.activeUntil <= this.today) return 'security';
        return 'supported';
    },
    get label() {
        return {
            ended: 'No longer supported',
            soon: 'Support ends soon',
            security: 'Security fixes only',
            supported: 'Supported',
        }[this.status];
    },
    get relative() {
        if (release.eol === null) return '';

        const days = Math.round((new Date(release.eol) - new Date(this.today)) / 86400000);
        const abs = Math.abs(days);
        let amount;
        if (abs < 45) amount = abs === 1 ? '1 day' : abs + ' days';
        else if (abs < 365 * 2) amount = Math.round(abs / 30.4) + ' months';
        else amount = Math.round(abs / 365) + ' years';

        if (days === 0) return 'today';
        return days > 0 ? 'in ' + amount : amount + ' ago';
    },
}));

// Make Alpine available on the window object
window.Alpine = Alpine;

// Start Alpine
Alpine.start();
