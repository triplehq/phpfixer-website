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

        const { error } = await supabase
            .from('enquiries')
            .insert({
                name: this.name,
                email: this.email,
                website: this.website || null,
                message: this.message,
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

// Make Alpine available on the window object
window.Alpine = Alpine;

// Start Alpine
Alpine.start();
