<?php
/**
 * Template Name: Services Page
 * Template for displaying all services
 *
 * @package Sumedha_Air
 */

get_header();
?>

<div class="page-header">
    <h1 class="page-title">Emergency Rescue Services</h1>
    <p class="page-subtitle">Professional helicopter operations across Nepal</p>
</div>

<div class="page-content">
    <div class="services-list">

        <!-- Service 1: Mountain Rescue -->
        <div class="service-item">
            <h3>🏔️ Mountain Rescue</h3>
            <p>Expert helicopter rescue operations in Nepal's most challenging mountain terrain. Our experienced pilots and crew specialize in high-altitude emergency response across all mountain regions of Nepal.</p>

            <div class="service-details">
                <h4>When to Use This Service:</h4>
                <ul>
                    <li>Altitude sickness or medical emergencies in high-altitude areas</li>
                    <li>Climbing accidents or injuries on mountain expeditions</li>
                    <li>Stranded climbers or trekkers in remote mountain locations</li>
                    <li>Weather-related emergencies in mountain regions</li>
                </ul>

                <h4>Coverage & Capabilities:</h4>
                <ul>
                    <li>High-altitude rescue up to 7000 meters</li>
                    <li>Coverage: Everest region, Annapurna, Langtang, Manaslu, and all major peaks</li>
                    <li>Experienced mountain rescue specialists with local terrain knowledge</li>
                    <li>Advanced high-altitude rescue equipment</li>
                </ul>
            </div>

            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request This Service</a>
        </div>

        <!-- Service 2: Medical Evacuation -->
        <div class="service-item">
            <h3>🚑 Medical Evacuation</h3>
            <p>Critical medical evacuation services with trained medical personnel on board. Swift and safe transport from remote areas to major hospitals in Kathmandu for life-saving treatment.</p>

            <div class="service-details">
                <h4>When to Use This Service:</h4>
                <ul>
                    <li>Serious injuries requiring immediate hospital treatment</li>
                    <li>Life-threatening medical conditions in remote areas</li>
                    <li>Altitude sickness requiring urgent descent and hospitalization</li>
                    <li>Medical emergencies during trekking or mountaineering</li>
                </ul>

                <h4>Coverage & Capabilities:</h4>
                <ul>
                    <li>Medical staff on board for critical care during transport</li>
                    <li>Direct coordination with major hospitals in Kathmandu</li>
                    <li>Advanced life support equipment available</li>
                    <li>24/7 availability for medical emergencies</li>
                </ul>
            </div>

            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request This Service</a>
        </div>

        <!-- Service 3: Search & Rescue -->
        <div class="service-item">
            <h3>🔍 Search & Rescue</h3>
            <p>Comprehensive search and rescue operations across all regions of Nepal. We deploy advanced equipment and trained personnel to locate and rescue individuals in distress, working closely with local authorities.</p>

            <div class="service-details">
                <h4>When to Use This Service:</h4>
                <ul>
                    <li>Missing persons in remote or mountain areas</li>
                    <li>Lost trekkers or climbers off-trail</li>
                    <li>Overdue expedition members</li>
                    <li>Emergency locator beacon activations</li>
                </ul>

                <h4>Coverage & Capabilities:</h4>
                <ul>
                    <li>Advanced search technology and thermal imaging equipment</li>
                    <li>Coordination with local rescue teams and authorities</li>
                    <li>Coverage across all Nepal regions including remote areas</li>
                    <li>Experienced search and rescue specialists</li>
                </ul>
            </div>

            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request This Service</a>
        </div>

        <!-- Service 4: Emergency Transport -->
        <div class="service-item">
            <h3>✈️ Emergency Transport</h3>
            <p>Rapid emergency transport services available 24/7. Whether medical emergency or urgent evacuation from remote areas, our helicopters are ready to respond at any time, day or night.</p>

            <div class="service-details">
                <h4>When to Use This Service:</h4>
                <ul>
                    <li>Urgent evacuation from remote trekking areas</li>
                    <li>Time-sensitive transport to medical facilities</li>
                    <li>Emergency situations requiring immediate air transport</li>
                    <li>Natural disaster evacuations</li>
                </ul>

                <h4>Coverage & Capabilities:</h4>
                <ul>
                    <li>24/7 availability for urgent situations</li>
                    <li>Fast deployment and rapid response times</li>
                    <li>All-weather capable aircraft when conditions permit</li>
                    <li>Nationwide coverage throughout Nepal</li>
                </ul>
            </div>

            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request This Service</a>
        </div>

        <!-- Service 5: Inter-Hospital Transfer -->
        <div class="service-item">
            <h3>🏥 Inter-Hospital Transfer</h3>
            <p>Safe and efficient helicopter transfer between hospitals for patients requiring specialized care. Coordination with both sending and receiving medical facilities for seamless patient transport.</p>

            <div class="service-details">
                <h4>When to Use This Service:</h4>
                <ul>
                    <li>Transfer to specialized medical facilities</li>
                    <li>Critical care transport between hospitals</li>
                    <li>Urgent transfer for specialized treatment not available locally</li>
                    <li>Time-sensitive medical transport</li>
                </ul>

                <h4>Coverage & Capabilities:</h4>
                <ul>
                    <li>Medical personnel escort during transfer</li>
                    <li>Coordination between medical facilities</li>
                    <li>Medical equipment and life support during transport</li>
                    <li>Transfers between all major hospitals in Nepal</li>
                </ul>
            </div>

            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Request This Service</a>
        </div>

    </div>

    <!-- Emergency Call to Action -->
    <div class="emergency-contact-section" style="margin-top: 4rem;">
        <h2>Need Immediate Assistance?</h2>
        <p>Don't wait in an emergency - contact us now</p>
        <a href="tel:<?php echo esc_attr( str_replace( array( ' ', '-' ), '', sumedha_air_emergency_phone() ) ); ?>" class="emergency-phone">
            <?php echo esc_html( sumedha_air_emergency_phone() ); ?>
        </a>
    </div>
</div>

<?php
get_footer();
