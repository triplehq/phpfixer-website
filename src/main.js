// Import TailwindCSS
import './style.css';

// Import Alpine.js
import Alpine from 'alpinejs';

// Import Supabase
import { createClient } from '@supabase/supabase-js';

const supabase = createClient(
    import.meta.env.VITE_SUPABASE_URL,
    import.meta.env.VITE_SUPABASE_ANON_KEY
);

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

        const { error } = await supabase
            .from('enquiries')
            .insert({
                name: this.name,
                email: this.email,
                website: this.website || null,
                message: this.message,
                currency: currency.symbol + currency.bugCheck + ' / ' + currency.symbol + currency.retainer,
                timezone: currency.timezone,
            });

        if (error) {
            this.error = true;
        } else {
            this.success = true;
            fathom.trackEvent('contact form submitted');
            this.name = '';
            this.email = '';
            this.website = '';
            this.message = '';
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
