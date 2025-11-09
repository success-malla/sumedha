<?php
/**
 * Template Name: Contact Page
 * Template for displaying contact information and form
 *
 * @package Sumedha_Air
 */

get_header();
?>

<!-- Emergency Banner -->
<div class="emergency-banner">
    <p>CALL NOW FOR EMERGENCIES</p>
    <a href="tel:<?php echo esc_attr( str_replace( array( ' ', '-' ), '', sumedha_air_emergency_phone() ) ); ?>">
        <?php echo esc_html( sumedha_air_emergency_phone() ); ?>
    </a>
</div>

<div class="page-header">
    <h1 class="page-title">Contact Sumedha Air</h1>
    <p class="page-subtitle">Get in touch with our team for emergencies or inquiries</p>
</div>

<div class="contact-layout">
    <!-- Contact Form Section (Left - 60%) -->
    <div class="contact-form-wrapper">
        <h2>Send Us a Message</h2>
        <p>Fill out the form below and we'll get back to you as soon as possible. For emergencies, please call the number above immediately.</p>

        <?php
        // Check if Contact Form 7 is active and display shortcode
        if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
            // Display Contact Form 7 shortcode
            // Note: Admin needs to create the form and add shortcode here
            // Placeholder for the actual shortcode
            echo do_shortcode( '[contact-form-7 id="1" title="Contact Form"]' );
        } else {
            // Fallback HTML form if CF7 is not installed
            ?>
            <form class="contact-form-fallback" action="#" method="post">
                <p>
                    <label for="your-name">Full Name <span style="color: red;">*</span></label>
                    <input type="text" id="your-name" name="your-name" required>
                </p>

                <p>
                    <label for="your-email">Email Address <span style="color: red;">*</span></label>
                    <input type="email" id="your-email" name="your-email" required>
                </p>

                <p>
                    <label for="your-phone">Phone Number <span style="color: red;">*</span></label>
                    <input type="tel" id="your-phone" name="your-phone" placeholder="+977-XXX-XXXX" required>
                </p>

                <p>
                    <label for="service-type">Service Type <span style="color: red;">*</span></label>
                    <select id="service-type" name="service-type" required>
                        <option value="" disabled selected>Select a service...</option>
                        <option value="Mountain Rescue">Mountain Rescue</option>
                        <option value="Medical Evacuation">Medical Evacuation</option>
                        <option value="Search & Rescue">Search & Rescue</option>
                        <option value="Emergency Transport">Emergency Transport</option>
                        <option value="Inter-Hospital Transfer">Inter-Hospital Transfer</option>
                        <option value="General Inquiry">General Inquiry</option>
                    </select>
                </p>

                <p>
                    <label>Inquiry Type <span style="color: red;">*</span></label>
                    <label style="display: inline; font-weight: normal;">
                        <input type="radio" name="inquiry-type" value="Emergency Request"> Emergency Request
                    </label>
                    <label style="display: inline; font-weight: normal; margin-left: 1rem;">
                        <input type="radio" name="inquiry-type" value="General Inquiry" checked> General Inquiry
                    </label>
                </p>

                <p>
                    <label for="your-message">Message <span style="color: red;">*</span></label>
                    <textarea id="your-message" name="your-message" rows="5" placeholder="Please describe your situation or inquiry..." required></textarea>
                </p>

                <p>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </p>

                <p style="font-size: 0.875rem; color: #666;">
                    <em>Note: Contact Form 7 plugin is not installed. Please install it to enable full form functionality.</em>
                </p>
            </form>
            <?php
        }
        ?>
    </div>

    <!-- Contact Info Sidebar (Right - 40%) -->
    <div class="contact-info-sidebar">
        <h3>Contact Information</h3>

        <div class="contact-info-item">
            <h4>🚨 Emergency Hotline</h4>
            <a href="tel:<?php echo esc_attr( str_replace( array( ' ', '-' ), '', sumedha_air_emergency_phone() ) ); ?>" class="emergency-phone">
                <?php echo esc_html( sumedha_air_emergency_phone() ); ?>
            </a>
        </div>

        <div class="contact-info-item">
            <h4>📧 Email</h4>
            <p>
                <a href="mailto:<?php echo esc_attr( sumedha_air_emergency_email() ); ?>">
                    <?php echo esc_html( sumedha_air_emergency_email() ); ?>
                </a>
            </p>
        </div>

        <div class="contact-info-item">
            <h4>📍 Location</h4>
            <p><?php echo esc_html( sumedha_air_address() ); ?></p>
        </div>

        <div class="contact-info-item">
            <h4>🕐 Availability</h4>
            <p><strong style="color: #90c33e;">Available 24/7 for Emergencies</strong></p>
            <p>General inquiries: 9:00 AM - 6:00 PM (Nepal Time)</p>
        </div>

        <div class="contact-info-item">
            <h4>💬 WhatsApp</h4>
            <p>
                <a href="https://wa.me/<?php echo esc_attr( str_replace( array( '+', ' ', '-' ), '', sumedha_air_emergency_phone() ) ); ?>" target="_blank" rel="noopener">
                    Message us on WhatsApp
                </a>
            </p>
        </div>

        <div class="contact-info-item" style="background-color: #d4e8b4; padding: 1rem; border-radius: 4px; margin-top: 2rem;">
            <h4 style="color: #2c3e50;">⚠️ Important</h4>
            <p style="color: #2c3e50; margin-bottom: 0;">For life-threatening emergencies, always call our emergency hotline immediately. Do not rely on email or contact forms in urgent situations.</p>
        </div>
    </div>
</div>

<?php
get_footer();
