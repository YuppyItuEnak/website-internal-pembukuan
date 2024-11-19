<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Icon and Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/dealkan-favicon/favicon-48x48.png') }}"
        sizes="48x48" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/images/dealkan-favicon/favicon.svg') }}" />
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/images/dealkan-favicon/apple-touch-icon.png') }}" />

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- CSS --}}
    @yield('css')

    {{-- Vite JS --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>


    <!-- component -->
    <div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
        <div class="container max-w-screen-lg mx-auto">
            <div>


                <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                    <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                        <div class="text-gray-600">
                            <p class="font-medium text-lg">Personal Details</p>
                            <p>Please fill out all the fields.</p>
                        </div>

                        <div class="lg:col-span-2">
                            <div>
                                <div class="md:col-span-5">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" name="full_name" id="full_name"
                                        class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                </div>

                                <div class="md:col-span-5 my-5">
                                    <label>Tipe:</label>
                                    <select id="tipe" name="tipe">
                                        <option value="#">Pilih Tipe</option>
                                        <option value="primary">Primary</option>
                                        <option value="secondary">Secondary</option>
                                    </select>
                                </div>

                                <div id="form-secondary" style="display: none;">
                                    <x-form-secondary></x-form-secondary>
                                </div>

                                <div id="form-primary" style="display: none;">
                                    <x-form-primary></x-form-primary>
                                </div>

                                <div class="md:col-span-5 mt-5 text-right">
                                    <div class="inline-flex items-end">
                                        <button
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tipeSelect = document.getElementById('tipe');
            const formSecondary = document.getElementById('form-secondary');
            const formPrimary = document.getElementById('form-primary');

            tipeSelect.addEventListener('change', (e) => {
                const tipe = e.target.value;
                if (tipe === 'secondary') {
                    formSecondary.style.display = 'block';
                    formPrimary.style.display = 'none';
                } else if (tipe === 'primary') {
                    formPrimary.style.display = 'block';
                    formSecondary.style.display = 'none';
                }
            });
        });
    </script> --}}

    @vite(['resources/js/formPembukuan.js']);

</body>

</html>
