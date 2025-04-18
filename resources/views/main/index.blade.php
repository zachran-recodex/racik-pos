@section('meta_tag')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="{{ $metaTag->description ?? '' }}">
    <meta name="keywords" content="{{ $metaTag->keywords ?? '' }}">
    <meta name="author" content="{{ $metaTag->author ?? '' }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">

    <meta property="og:title" content="{{ $metaTag->og_title ?? $metaTag->title ?? '' }}">
    <meta property="og:description" content="{{ $metaTag->og_description ?? $metaTag->description ?? '' }}">
    <meta property="og:image" content="{{ $metaTag->og_image ?? '' }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="{{ $metaTag->og_type ?? 'website' }}">

    <meta name="twitter:card" content="{{ $metaTag->twitter_card ?? 'summary_large_image' }}">
    <meta name="twitter:title" content="{{ $metaTag->twitter_title ?? $metaTag->title ?? '' }}">
    <meta name="twitter:description" content="{{ $metaTag->twitter_description ?? $metaTag->description ?? '' }}">
    <meta name="twitter:image" content="{{ $metaTag->twitter_image ?? '' }}">

    <link rel="canonical" href="{{ url()->current() }}">

    <title>{{ $metaTag->title ?? $title ?? 'Laravel' }}</title>
@endsection

<x-layouts.main>
    <section class="mb-16 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4" style="color: var(--color-brown);">RACIK Brand Guidelines</h1>
        <p class="text-xl text-gray-600 mb-8">Rangkaian Aplikasi Cerdas untuk Industri Kopi</p>
        <div class="section-divider w-32 mx-auto"></div>
    </section>

    <section id="overview" class="mb-16">
        <div class="card bg-white p-8">
            <h2 class="text-3xl font-bold mb-6" style="color: var(--color-brown);">1. Brand Overview</h2>

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Nama & Tagline</h3>
                    <p class="mb-2"><strong>Nama Brand:</strong> RACIK</p>
                    <p class="mb-4"><strong>Singkatan:</strong> Rangkaian Aplikasi Cerdas untuk Industri Kopi</p>

                    <p class="mb-2"><strong>Tagline:</strong></p>
                    <ul class="list-disc pl-5 mb-4">
                        <li>"Racikan Cerdas untuk Bisnis Kopimu"</li>
                        <li>"POS Lokal untuk Café yang Serius Ngopi"</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Visi & Misi</h3>
                    <p class="mb-4"><strong>Visi:</strong> Menyediakan solusi POS cerdas yang mudah digunakan untuk industri kopi di Indonesia, dengan mengoptimalkan operasional dan memberikan kemudahan bagi para pelaku usaha.</p>

                    <p class="mb-2"><strong>Misi:</strong></p>
                    <ul class="list-disc pl-5 mb-4">
                        <li>Mengembangkan aplikasi POS yang mudah diintegrasikan dan diadaptasi oleh coffee shop di seluruh Indonesia.</li>
                        <li>Menjadi mitra terpercaya dalam meningkatkan efisiensi operasional café dan bisnis kopi.</li>
                    </ul>
                </div>
            </div>

            <div class="mt-8">
                <h3 class="text-xl font-bold mb-4">Nilai-Nilai</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="p-4 border border-gray-200 rounded-lg">
                        <h4 class="font-bold mb-2" style="color: var(--color-green);">Inovasi</h4>
                        <p>Selalu menyediakan teknologi terbaru untuk mempermudah pengelolaan bisnis kopi.</p>
                    </div>
                    <div class="p-4 border border-gray-200 rounded-lg">
                        <h4 class="font-bold mb-2" style="color: var(--color-green);">Keandalan</h4>
                        <p>Menyediakan solusi yang dapat diandalkan dan aman.</p>
                    </div>
                    <div class="p-4 border border-gray-200 rounded-lg">
                        <h4 class="font-bold mb-2" style="color: var(--color-green);">Keterhubungan Lokal</h4>
                        <p>Fokus pada pasar Indonesia dan kearifan lokal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="logo" class="mb-16">
        <div class="card bg-white p-8">
            <h2 class="text-3xl font-bold mb-6" style="color: var(--color-brown);">2. Logo Guidelines</h2>

            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Logo Utama RACIK</h3>
                    <p class="mb-4">Logo harus jelas dan mudah dikenali. Berikut elemen yang harus diperhatikan:</p>

                    <ul class="list-disc pl-5 mb-6">
                        <li><strong>Font:</strong> Gunakan font yang tegas dan modern, seperti sans-serif untuk kesan bersih dan cerdas.</li>
                        <li><strong>Warna:</strong> Kombinasikan warna yang mengingatkan pada kopi dan teknologi (misalnya coklat tua, krem, hitam, atau hijau).</li>
                        <li><strong>Simbol:</strong> Bisa menggunakan elemen biji kopi atau cangkir kopi sebagai bagian dari logo (minimalis).</li>
                        <li><strong>Versi Hitam-Putih:</strong> Pastikan logo bisa terlihat baik dalam versi monokrom.</li>
                    </ul>
                </div>

                <div class="flex justify-center items-center">
                    <div class="bg-white p-8 rounded-xl shadow-md border border-gray-200 text-center">
                        <div class="text-5xl font-bold" style="color: var(--color-brown);">
                            <span>RACIK</span>
                            <span style="font-size: 0.5em; vertical-align: super; color: var(--color-green);">☕</span>
                        </div>
                        <p class="mt-4 text-sm text-gray-500">Contoh visualisasi logo RACIK dengan simbol kopi</p>
                    </div>
                </div>
            </div>

            <div class="mt-8">
                <h3 class="text-xl font-bold mb-4">Penggunaan Logo dan Space</h3>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="font-bold mb-2">Logo Primary Use:</h4>
                        <ul class="list-disc pl-5 mb-4">
                            <li>Gunakan logo pada website, aplikasi, dan materi promosi.</li>
                            <li>Logo harus ditempatkan di tempat yang jelas dan tidak tertutup oleh elemen lain (misalnya di header website atau aplikasi).</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold mb-2">Space:</h4>
                        <p>Pastikan ada ruang kosong di sekitar logo agar tetap terlihat bersih dan profesional. Minimal jarak di sekitar logo adalah 1x tinggi logo itu sendiri.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="colors" class="mb-16">
        <div class="card bg-white p-8">
            <h2 class="text-3xl font-bold mb-6" style="color: var(--color-brown);">3. Warna Brand</h2>

            <div class="mb-8">
                <h3 class="text-xl font-bold mb-4">Warna Utama</h3>
                <div class="flex flex-wrap justify-center">
                    <div class="m-2 text-center">
                        <div class="color-swatch bg-brown">#4E3629</div>
                        <p class="mt-2">Coklat Tua</p>
                    </div>
                    <div class="m-2 text-center">
                        <div class="color-swatch bg-cream">#F5E1A4</div>
                        <p class="mt-2">Krem</p>
                    </div>
                    <div class="m-2 text-center">
                        <div class="color-swatch bg-black">#212121</div>
                        <p class="mt-2">Hitam</p>
                    </div>
                    <div class="m-2 text-center">
                        <div class="color-swatch bg-green">#4CAF50</div>
                        <p class="mt-2">Hijau</p>
                    </div>
                </div>
            </div>

            <div class="mb-8">
                <h3 class="text-xl font-bold mb-4">Warna Sekunder</h3>
                <div class="flex flex-wrap justify-center">
                    <div class="m-2 text-center">
                        <div class="color-swatch bg-white">#FFFFFF</div>
                        <p class="mt-2">Putih</p>
                    </div>
                    <div class="m-2 text-center">
                        <div class="color-swatch bg-orange">#FF5722</div>
                        <p class="mt-2">Oranye</p>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4">Penggunaan Warna</h3>
                <ul class="list-disc pl-5">
                    <li>Gunakan warna utama untuk elemen penting seperti logo dan header.</li>
                    <li>Warna sekunder digunakan untuk aksen dan tombol call-to-action.</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="typography" class="mb-16">
        <div class="card bg-white p-8">
            <h2 class="text-3xl font-bold mb-6" style="color: var(--color-brown);">4. Tipografi</h2>

            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Font Utama</h3>

                    <div class="mb-6">
                        <h4 class="font-bold mb-2">Roboto (Sans-serif)</h4>
                        <ul class="list-disc pl-5 mb-4">
                            <li>Gunakan untuk teks utama dan body copy.</li>
                            <li>Ukuran font: 16px untuk teks biasa, 24px untuk judul.</li>
                        </ul>

                        <div class="bg-gray-100 p-4 rounded">
                            <p class="font-sample-roboto text-4xl font-bold">Aa Bb Cc</p>
                            <p class="font-sample-roboto mt-2">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
                            <p class="font-sample-roboto">abcdefghijklmnopqrstuvwxyz</p>
                            <p class="font-sample-roboto">1234567890</p>
                        </div>
                    </div>

                    <div>
                        <h4 class="font-bold mb-2">Playfair Display (Serif)</h4>
                        <ul class="list-disc pl-5 mb-4">
                            <li>Bisa digunakan untuk elemen judul atau taglines yang ingin memberi kesan lebih elegan.</li>
                            <li>Ukuran font: 36px+ untuk headline besar.</li>
                        </ul>

                        <div class="bg-gray-100 p-4 rounded">
                            <p class="font-sample-playfair text-4xl font-bold">Aa Bb Cc</p>
                            <p class="font-sample-playfair mt-2">ABCDEFGHIJKLMNOPQRSTUVWXYZ</p>
                            <p class="font-sample-playfair">abcdefghijklmnopqrstuvwxyz</p>
                            <p class="font-sample-playfair">1234567890</p>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Penggunaan Tipografi</h3>

                    <div class="mb-6">
                        <div class="bg-gray-100 p-4 rounded mb-4">
                            <p class="font-sample-playfair text-3xl font-bold" style="color: var(--color-brown);">Judul Utama</p>
                            <p class="text-sm text-gray-500">Playfair Display Bold</p>
                        </div>

                        <div class="bg-gray-100 p-4 rounded mb-4">
                            <p class="font-sample-roboto text-xl font-medium" style="color: var(--color-black);">Sub Judul</p>
                            <p class="text-sm text-gray-500">Roboto Regular</p>
                        </div>

                        <div class="bg-gray-100 p-4 rounded mb-4">
                            <p class="font-sample-roboto" style="color: var(--color-black);">Body Copy menggunakan Roboto Regular untuk kemudahan membaca dalam paragraf panjang dan teks informatif.</p>
                            <p class="text-sm text-gray-500">Roboto Regular</p>
                        </div>

                        <div class="bg-gray-100 p-4 rounded">
                            <p class="font-sample-playfair italic" style="color: var(--color-brown);">Teks Highlight untuk penekanan khusus</p>
                            <p class="text-sm text-gray-500">Playfair Display Italic</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="visual" class="mb-16">
        <div class="card bg-white p-8">
            <h2 class="text-3xl font-bold mb-6" style="color: var(--color-brown);">5. Elemen Visual</h2>

            <div class="mb-8">
                <h3 class="text-xl font-bold mb-4">Ikon & Gambar</h3>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <ul class="list-disc pl-5">
                            <li class="mb-2">Gunakan ikon yang sederhana dan mudah dimengerti, terkait dengan dunia kopi, seperti cangkir kopi, biji kopi, atau alat barista.</li>
                            <li class="mb-2">Gambar yang digunakan harus memiliki nuansa hangat dan ramah, menggambarkan suasana coffee shop yang nyaman.</li>
                            <li>Hindari gambar yang terlalu ramai atau berwarna mencolok. Gambar dengan tone coklat, krem, dan hijau lebih disarankan.</li>
                        </ul>
                    </div>

                    <div class="flex flex-wrap justify-center gap-4">
                        <div class="w-16 h-16 flex items-center justify-center bg-gray-100 rounded-lg">
                            <span class="text-3xl" style="color: var(--color-brown);">☕</span>
                        </div>
                        <div class="w-16 h-16 flex items-center justify-center bg-gray-100 rounded-lg">
                            <span class="text-3xl" style="color: var(--color-brown);">🫖</span>
                        </div>
                        <div class="w-16 h-16 flex items-center justify-center bg-gray-100 rounded-lg">
                            <span class="text-3xl" style="color: var(--color-brown);">🌱</span>
                        </div>
                        <div class="w-16 h-16 flex items-center justify-center bg-gray-100 rounded-lg">
                            <span class="text-3xl" style="color: var(--color-green);">💻</span>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4">Aplikasi Visual</h3>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="font-bold mb-2">Website:</h4>
                        <ul class="list-disc pl-5 mb-4">
                            <li>Gunakan palet warna coklat tua, krem, dan hijau pada background dan elemen-elemen besar.</li>
                            <li>Teks utama menggunakan font Roboto, dan tombol menggunakan warna Hijau atau Oranye untuk aksi.</li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-bold mb-2">Packaging (jika diperlukan untuk merchandise coffee shop):</h4>
                        <ul class="list-disc pl-5">
                            <li>Gunakan warna coklat, krem, dan hijau.</li>
                            <li>Visual dapat menampilkan cangkir kopi atau biji kopi, dikombinasikan dengan elemen teknologi yang minimalis (misalnya garis-garis tipis atau elemen geometri).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="voice" class="mb-16">
        <div class="card bg-white p-8">
            <h2 class="text-3xl font-bold mb-6" style="color: var(--color-brown);">6. Tone of Voice</h2>

            <div class="grid md:grid-cols-2 gap-8 mb-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">Suara Brand</h3>
                    <ul class="list-disc pl-5">
                        <li class="mb-2"><strong>Akrab dan Ramah:</strong> Menggunakan bahasa yang mudah dipahami dan dekat dengan audiens coffee shop.</li>
                        <li class="mb-2"><strong>Profesional dan Cerdas:</strong> Karena ini adalah sistem POS, brand harus berbicara dengan suara yang memancarkan kepercayaan dan kredibilitas.</li>
                        <li><strong>Sederhana dan Ringkas:</strong> Menghindari istilah teknis yang membingungkan. Fokus pada kemudahan penggunaan dan efisiensi.</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-xl font-bold mb-4">Contoh Phrases</h3>
                    <div class="bg-gray-100 p-4 rounded mb-4">
                        <p class="italic font-sample-playfair">"Racikan Cerdas untuk Bisnis Kopimu"</p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded mb-4">
                        <p class="italic font-sample-roboto">"Mengelola transaksi dengan lebih cepat dan mudah"</p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded">
                        <p class="italic font-sample-roboto">"Solusi POS yang simpel, untuk kafe yang berkembang"</p>
                    </div>
                </div>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4">Penggunaan pada Media Sosial</h3>
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <h4 class="font-bold mb-2">Gaya Visual Media Sosial:</h4>
                        <ul class="list-disc pl-5">
                            <li>Gunakan gambar produk, behind-the-scenes (seperti pembuatan kopi), dan tips seputar kopi.</li>
                            <li>Gunakan filter yang menonjolkan warna-warna hangat dan natural seperti coklat dan krem.</li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-bold mb-2">Hashtags:</h4>
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-gray-100 px-3 py-1 rounded-full text-sm" style="color: var(--color-brown);">#RacikCoffee</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full text-sm" style="color: var(--color-brown);">#SolusiPOSKopi</span>
                            <span class="bg-gray-100 px-3 py-1 rounded-full text-sm" style="color: var(--color-brown);">#CerdasBersamaRACIK</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>
