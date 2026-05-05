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
    retainer: '1000',
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
            this.retainer = '750';
        } else if (eurozone.has(tz)) {
            this.symbol = '€';
            this.bugCheck = '170';
            this.retainer = '900';
        }
    }
});

// Make Alpine available on the window object
window.Alpine = Alpine;

// Start Alpine
Alpine.start();
