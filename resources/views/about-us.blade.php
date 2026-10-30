<x-storefront-layout>
    <!-- About Company -->
    @if ($about)
        <x-about-section :about="$about" />
    @endif

    <!-- Vision -->
    <section class="bg-white py-8 sm:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Vision</h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        To become a globally recognized and trusted Bangladeshi agro-food processing company, delivering premium-quality, safe, and innovative food products to customers across the world. We aspire to set new benchmarks in quality, food safety, and sustainability while continuously expanding our presence in international markets. Through excellence, integrity, innovation, and customer-focused values, we aim to promote the rich heritage of Bangladeshi food products and create long-term value for our customers, business partners, employees, and communities.
                    </p>
                </div>
                <div class="order-first lg:order-last text-center">
                    @if(file_exists(public_path('images/vision.webp')))
                        <img src="{{ asset('images/vision.webp') }}" alt="Our Vision" class="max-w-[250px] md:max-w-xs mx-auto mix-blend-multiply">
                    @else
                        <div class="w-64 h-64 mx-auto bg-gray-200 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-eye text-5xl text-gray-400"></i>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Mission -->
    <section class="bg-white py-8 sm:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="text-center">
                    @if(file_exists(public_path('images/mision.png')))
                        <img src="{{ asset('images/mision.png') }}" alt="Our Mission" class="max-w-[250px] md:max-w-xs mx-auto mix-blend-multiply">
                    @else
                        <div class="w-64 h-64 mx-auto bg-gray-200 rounded-full flex items-center justify-center">
                            <i class="fa-solid fa-bullseye text-5xl text-gray-400"></i>
                        </div>
                    @endif
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Mission</h2>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Our mission is to manufacture and export safe, hygienic, nutritious, and premium-quality agro-food products that consistently meet international food safety and quality standards. We are committed to sourcing high-quality raw materials, adopting advanced manufacturing technologies, and maintaining strict quality control throughout every stage of production. By fostering innovation, operational excellence, and ethical business practices, we strive to exceed customer expectations and build lasting relationships with clients around the world. We are dedicated to expanding our global footprint, contributing to the growth of Bangladesh’s export sector, creating employment opportunities, and supporting sustainable development while ensuring complete customer satisfaction through reliable products and exceptional service.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="bg-gray-50 py-10 sm:py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900">Why Choose Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-10">
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition h-full text-center">
                    <div class="w-14 h-14 bg-primary-100 text-primary-600 rounded-xl flex items-center justify-center mx-auto mb-6 text-2xl">
                        <i class="fa-solid fa-leaf"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Premium Quality</h3>
                    <p class="text-gray-600">We source only the finest raw materials to ensure every product is nutritious and safe.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition h-full text-center">
                    <div class="w-14 h-14 bg-primary-100 text-primary-600 rounded-xl flex items-center justify-center mx-auto mb-6 text-2xl">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Global Export</h3>
                    <p class="text-gray-600">Our products are trusted globally, reaching customers in international markets.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition h-full text-center">
                    <div class="w-14 h-14 bg-primary-100 text-primary-600 rounded-xl flex items-center justify-center mx-auto mb-6 text-2xl">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Strict Standards</h3>
                    <p class="text-gray-600">We maintain rigorous quality control that meets global food safety requirements.</p>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition h-full text-center">
                    <div class="w-14 h-14 bg-primary-100 text-primary-600 rounded-xl flex items-center justify-center mx-auto mb-6 text-2xl">
                        <i class="fa-solid fa-handshake"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Customer First</h3>
                    <p class="text-gray-600">Building lasting relationships through reliable products and exceptional service.</p>
                </div>
            </div>
        </div>
    </section>
</x-storefront-layout>
