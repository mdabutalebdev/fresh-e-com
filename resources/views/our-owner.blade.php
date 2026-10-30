<x-storefront-layout>
    <!-- Owner Profile -->
    <section class="bg-white py-12 sm:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-start">
                <div class="lg:pt-10">
                    <span class="block text-primary-600 font-bold text-sm uppercase tracking-wider mb-4">
                        Meet The Owner
                    </span>

                    <h1 class="text-2xl sm:text-3xl font-bold text-gray-900 leading-tight mb-1">Elias Hossain</h1>
                    <div class="text-primary-600 font-semibold uppercase tracking-wide text-sm mb-6">Proprietor &amp; CEO, Home Fresh Agro Processor</div>

                    <p class="text-gray-600 leading-relaxed mb-5">
                        Elias Hossain is the Proprietor and CEO of Home Fresh Agro Processor, a trusted name in the export and import of quality agricultural products. With years of dedication to the industry, he has built the company's reputation on reliability, quality, and customer satisfaction.
                    </p>

                    <p class="text-gray-600 leading-relaxed mb-8">
                        Under his leadership, Home Fresh Agro Processor has expanded its reach across international markets including the USA, Singapore, and Malaysia, while maintaining strong roots in Bangladesh through its factory and corporate operations.
                    </p>

                    <div class="flex flex-col sm:flex-row flex-wrap items-center gap-4">
                        <a href="tel:+8801705264853" class="inline-flex justify-center w-full sm:w-auto items-center gap-2 px-6 py-3 bg-primary-600 text-white text-sm font-semibold rounded-md shadow-md hover:bg-primary-700 hover:shadow-lg transition">
                            <i class="fa-solid fa-phone"></i> +88 01705 264 853
                        </a>
                        <a href="mailto:homefreshagroprocessor@gmail.com" class="inline-flex justify-center w-full sm:w-auto items-center gap-2 px-6 py-3 border border-primary-600 text-primary-600 text-sm font-semibold rounded-md hover:bg-primary-50 transition">
                            <i class="fa-solid fa-envelope"></i> homefreshagroprocessor@gmail.com
                        </a>
                    </div>
                </div>

                <div class="mx-auto lg:mx-0 lg:ms-auto w-full max-w-sm lg:max-w-md">
                    @if (file_exists(public_path('images/owner.jpg')))
                        <img src="{{ asset('images/owner.jpg') }}" alt="Elias Hossain"
                             class="object-cover w-full h-auto aspect-square rounded-xl shadow-lg border border-gray-100">
                    @else
                        <div class="bg-gray-100 rounded-xl shadow-lg flex items-center justify-center border border-gray-100 w-full aspect-square">
                            <i class="fa-solid fa-user text-6xl text-gray-300"></i>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <!-- Offices -->
    <section class="bg-gray-50 py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-semibold text-gray-800 mb-8 text-center">Our Offices</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="h-11 w-11 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center mb-4">
                        <i class="fa-solid fa-industry"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Factory Address</h3>
                    <p class="text-base text-gray-600 leading-relaxed">Horidashpur, Vatiyapara Road, Gopalgong</p>
                    <p class="text-sm text-gray-500 mt-2"><i class="fa-solid fa-phone me-1"></i> +88 01920 938046</p>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="h-11 w-11 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center mb-4">
                        <i class="fa-solid fa-building"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Corporate Office</h3>
                    <p class="text-base text-gray-600 leading-relaxed">Kohinoor Tower 01, House S-W-E # 07 Road # 07, Apt # C/1, Gulshan-1, Dhaka-1212, Bangladesh</p>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="h-11 w-11 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center mb-4">
                        <i class="fa-solid fa-map-marker-alt"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Office Address</h3>
                    <p class="text-base text-gray-600 leading-relaxed">Dag-189, Satarkul Road, Uttar Badda, Gulshan-01 Dhaka-1212</p>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="h-11 w-11 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center mb-4">
                        <i class="fa-solid fa-earth-americas"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">USA Office</h3>
                    <p class="text-base text-gray-600 leading-relaxed">31 Rounds Ave, Buffalo, NY 14215, America</p>
                    <p class="text-sm text-gray-500 mt-2"><i class="fa-solid fa-phone me-1"></i> +1 (347) 435-7741</p>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="h-11 w-11 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center mb-4">
                        <i class="fa-solid fa-earth-asia"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Singapore Office</h3>
                    <p class="text-base text-gray-600 leading-relaxed">80 Boat Quay, Singapore 049868</p>
                    <p class="text-sm text-gray-500 mt-2"><i class="fa-solid fa-phone me-1"></i> +65 8158 1372</p>
                </div>

                <div class="bg-white rounded-lg shadow-sm p-6">
                    <div class="h-11 w-11 rounded-full bg-primary-100 text-primary-600 flex items-center justify-center mb-4">
                        <i class="fa-solid fa-earth-asia"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Malaysia Office</h3>
                    <p class="text-base text-gray-600 leading-relaxed">35-1, Jalan PJS 8/12, Sunway Mentari, 46150 Petaling Jaya, Selangor</p>
                    <p class="text-sm text-gray-400 mt-1">ROC (003205801-M)</p>
                    <p class="text-sm text-gray-500 mt-2"><i class="fa-solid fa-phone me-1"></i> +60 11-1111 856</p>
                </div>
            </div>
        </div>
    </section>
</x-storefront-layout>
