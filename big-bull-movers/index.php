<?php get_header(); ?>

<main class="container mx-auto px-6 py-12">

    <!-- Hero Section -->
    <section class="grid md:grid-cols-2 gap-8 items-center">
        <div>
            <p class="text-sm uppercase text-red-700 font-semibold mb-2">Top-Rated</p>
            <h1 class="text-4xl font-extrabold mb-4">
                Removalists In Melbourne – Reliable, <br />
                <span class="text-red-700">Fast &amp; Affordable!</span>
            </h1>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/truck.png" alt="Big Bull Movers Truck" class="w-full max-w-md" />
        </div>
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-red-700">Get a Free Quote</h2>
            <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" class="space-y-4">
                <input type="hidden" name="action" value="submit_quote_form" />
                <div>
                    <label for="name" class="block font-semibold mb-1">Name</label>
                    <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded px-3 py-2" />
                </div>
                <div>
                    <label for="email" class="block font-semibold mb-1">Email</label>
                    <input type="email" id="email" name="email" required class="w-full border border-gray-300 rounded px-3 py-2" />
                </div>
                <div>
                    <label for="phone" class="block font-semibold mb-1">Phone</label>
                    <input type="tel" id="phone" name="phone" required class="w-full border border-gray-300 rounded px-3 py-2" />
                </div>
                <div>
                    <label for="move_date" class="block font-semibold mb-1">Move Date</label>
                    <input type="date" id="move_date" name="move_date" required class="w-full border border-gray-300 rounded px-3 py-2" />
                </div>
                <div>
                    <label for="select_truck" class="block font-semibold mb-1">Select Truck Size</label>
                    <select id="select_truck" name="select_truck" required class="w-full border border-gray-300 rounded px-3 py-2">
                        <option value="">Select</option>
                        <option value="small">Small Truck</option>
                        <option value="medium">Medium Truck</option>
                        <option value="large">Large Truck</option>
                        <option value="extra_large">Extra Large Truck</option>
                    </select>
                </div>
                <div class="flex items-center space-x-2">
                    <input type="checkbox" id="terms" name="terms" required />
                    <label for="terms" class="text-sm">I agree to the terms and conditions</label>
                </div>
                <button type="submit" class="bg-red-700 text-white px-6 py-3 rounded font-semibold hover:bg-red-800 transition">Submit</button>
            </form>
        </div>
    </section>

    <!-- About Section -->
    <section class="mt-20 grid md:grid-cols-2 gap-8 items-center">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/movers.jpg" alt="Movers" class="rounded-lg shadow-lg" />
        </div>
        <div>
            <h2 class="text-red-700 font-bold uppercase mb-4">Melbourne's Trusted</h2>
            <h3 class="text-3xl font-extrabold mb-4">Removalists Moving Made Easy</h3>
            <p class="mb-4">Company Overview:</p>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>Reliable and experienced removalists providing top-notch moving services.</li>
                <li>Customer-focused approach ensuring satisfaction and peace of mind.</li>
                <li>Competitive pricing with no hidden fees.</li>
            </ul>
            <p class="mb-4 mt-6">Experience & Expertise:</p>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>Years of experience in the moving industry.</li>
                <li>Trained and professional staff.</li>
                <li>Use of modern equipment and vehicles.</li>
            </ul>
            <p class="mb-4 mt-6">Customer Commitment:</p>
            <ul class="list-disc list-inside space-y-2 text-gray-700">
                <li>On-time service and transparent communication.</li>
                <li>Careful handling of belongings.</li>
                <li>Customer support available 24/7.</li>
            </ul>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="mt-20 text-center">
        <h2 class="text-red-700 font-bold uppercase mb-6">Why Choose Us</h2>
        <h3 class="text-3xl font-extrabold mb-12">Why Big Bull Movers Is Your Best Choice For A Stress-Free Move</h3>
        <div class="grid md:grid-cols-3 gap-12 max-w-6xl mx-auto">
            <div class="flex flex-col items-center space-y-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/reliable.svg" alt="Reliable & Experienced Movers" class="h-16 w-16" />
                <h4 class="font-semibold text-xl">Reliable & Experienced Movers</h4>
                <p class="text-gray-700 max-w-xs">Our team is trained and experienced to handle your move with care and professionalism.</p>
            </div>
            <div class="flex flex-col items-center space-y-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/pricing.svg" alt="Affordable & Transparent Pricing" class="h-16 w-16" />
                <h4 class="font-semibold text-xl">Affordable & Transparent Pricing</h4>
                <p class="text-gray-700 max-w-xs">No hidden fees, clear pricing upfront so you can plan your move stress-free.</p>
            </div>
            <div class="flex flex-col items-center space-y-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/fully-equipped.svg" alt="Fully Equipped & Insured Services" class="h-16 w-16" />
                <h4 class="font-semibold text-xl">Fully Equipped & Insured Services</h4>
                <p class="text-gray-700 max-w-xs">We use modern equipment and are fully insured for your peace of mind.</p>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="mt-20">
        <h2 class="text-center text-2xl font-bold mb-8">Reliable & Professional Moving Services In Melbourne</h2>
        <div class="grid md:grid-cols-4 gap-8 max-w-7xl mx-auto">
            <?php
            $services = new WP_Query(array('post_type' => 'service', 'posts_per_page' => 4));
            if ($services->have_posts()) :
                while ($services->have_posts()) : $services->the_post(); ?>
                    <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="mb-4">
                                <?php the_post_thumbnail('medium', ['class' => 'rounded']); ?>
                            </div>
                        <?php endif; ?>
                        <h3 class="font-semibold text-lg mb-2"><?php the_title(); ?></h3>
                        <div class="text-gray-700 text-sm"><?php the_content(); ?></div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p class="text-center text-gray-500">No services found.</p>
            <?php endif; ?>
        </div>
        <div class="text-center mt-8">
            <a href="<?php echo esc_url(home_url('/services')); ?>" class="inline-block bg-red-700 text-white px-6 py-3 rounded font-semibold hover:bg-red-800 transition">See More Services</a>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="mt-20 max-w-7xl mx-auto px-6">
        <h2 class="text-center text-2xl font-bold mb-8">Our Price</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="font-semibold text-xl mb-2">Small Truck</h3>
                <p class="text-gray-500 mb-4">Starting From Only</p>
                <p class="text-3xl font-bold text-red-700">$59</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="font-semibold text-xl mb-2">Medium Truck</h3>
                <p class="text-gray-500 mb-4">Starting From Only</p>
                <p class="text-3xl font-bold text-red-700">$69</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="font-semibold text-xl mb-2">Large Truck</h3>
                <p class="text-gray-500 mb-4">Starting From Only</p>
                <p class="text-3xl font-bold text-red-700">$74</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <h3 class="font-semibold text-xl mb-2">Extra Large Truck</h3>
                <p class="text-gray-500 mb-4">Starting From Only</p>
                <p class="text-3xl font-bold text-red-700">$79</p>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="mt-20 max-w-7xl mx-auto px-6">
        <h2 class="text-2xl font-bold mb-8">Frequently Asked Questions</h2>
        <div class="space-y-4">
            <?php
            $faqs = new WP_Query(array('post_type' => 'faq', 'posts_per_page' => 5));
            if ($faqs->have_posts()) :
                while ($faqs->have_posts()) : $faqs->the_post(); ?>
                    <div class="border border-gray-300 rounded p-4">
                        <h3 class="font-semibold cursor-pointer faq-question"><?php the_title(); ?></h3>
                        <div class="faq-answer hidden mt-2 text-gray-700"><?php the_content(); ?></div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>No FAQs found.</p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Areas We Service Section -->
    <section class="mt-20 max-w-7xl mx-auto px-6">
        <h2 class="text-2xl font-bold mb-8">Areas We Service</h2>
        <div class="overflow-x-auto whitespace-nowrap space-x-6">
            <ul class="inline-flex space-x-6 text-gray-700">
                <li>Abbotsford</li>
                <li>Carlton North</li>
                <li>Elsternwick</li>
                <li>Fitzroy</li>
                <li>Hawthorn</li>
                <li>Northcote</li>
                <li>Richmond</li>
                <li>South Yarra</li>
                <li>St Kilda</li>
                <li>Toorak</li>
            </ul>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="mt-20 max-w-7xl mx-auto px-6">
        <h2 class="text-2xl font-bold mb-8 text-center">Client Testimonials</h2>
        <div class="grid md:grid-cols-4 gap-8">
            <?php
            $testimonials = new WP_Query(array('post_type' => 'testimonial', 'posts_per_page' => 4));
            if ($testimonials->have_posts()) :
                while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
                    <div class="bg-white p-6 rounded-lg shadow text-center">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="mb-4">
                                <?php the_post_thumbnail('thumbnail', ['class' => 'rounded-full mx-auto']); ?>
                            </div>
                        <?php endif; ?>
                        <h3 class="font-semibold text-lg mb-2"><?php the_title(); ?></h3>
                        <div class="text-gray-700 text-sm"><?php the_content(); ?></div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p class="text-center text-gray-500">No testimonials found.</p>
            <?php endif; ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>

<script>
    // Simple FAQ toggle script
    document.addEventListener('DOMContentLoaded', function () {
        const questions = document.querySelectorAll('.faq-question');
        questions.forEach(q => {
            q.addEventListener('click', () => {
                const answer = q.nextElementSibling;
                if (answer.classList.contains('hidden')) {
                    answer.classList.remove('hidden');
                } else {
                    answer.classList.add('hidden');
                }
            });
        });
    });
</script>
