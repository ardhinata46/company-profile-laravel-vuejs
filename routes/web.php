<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/portfolio', fn () => Inertia::render('Portfolio'))->name('portfolio');

Route::get('/portfolio/{slug}', function (string $slug) {
    $items = [
        [
            'title' => 'E-commerce Platform Modern',
            'description' => 'Platform e-commerce yang modern dengan fitur AI untuk rekomendasi produk dan analisis pelanggan.',
            'image' => 'https://via.placeholder.com/1200x900',
            'category' => 'Website',
            'technologies' => ['Vue.js', 'Laravel', 'TailwindCSS', 'MySQL'],
            'external' => null,
            'client' => 'Perusahaan Retail',
            'duration' => '6 minggu',
            'year' => date('Y'),
        ],
        [
            'title' => 'Aplikasi Manajemen Kesehatan',
            'description' => 'Aplikasi mobile terintegrasi untuk monitoring kesehatan dengan fitur AI dan IoT.',
            'image' => 'https://via.placeholder.com/1200x900',
            'category' => 'Mobile',
            'technologies' => ['React Native', 'Node.js', 'TensorFlow', 'MongoDB'],
            'external' => null,
            'client' => 'Klinik Sehat',
            'duration' => '8 minggu',
            'year' => date('Y'),
        ],
        [
            'title' => 'Sistem ERP Perusahaan',
            'description' => 'Sistem informasi enterprise yang mengintegrasikan seluruh aspek bisnis perusahaan.',
            'image' => 'https://via.placeholder.com/1200x900',
            'category' => 'Sistem Informasi',
            'technologies' => ['Angular', 'Spring Boot', 'PostgreSQL', 'Docker'],
            'external' => null,
            'client' => 'Perusahaan Manufaktur',
            'duration' => '12 minggu',
            'year' => date('Y'),
        ],
        [
            'title' => 'Platform Pembelajaran Online',
            'description' => 'Website pembelajaran interaktif dengan fitur live streaming dan kolaborasi real-time.',
            'image' => 'https://via.placeholder.com/1200x900',
            'category' => 'Website',
            'technologies' => ['Next.js', 'Django', 'WebRTC', 'Redis'],
            'external' => null,
            'client' => 'EdTech Startup',
            'duration' => '10 minggu',
            'year' => date('Y'),
        ],
        [
            'title' => 'Aplikasi Smart City',
            'description' => 'Aplikasi mobile untuk memantau dan mengelola infrastruktur kota pintar.',
            'image' => 'https://via.placeholder.com/1200x900',
            'category' => 'Mobile',
            'technologies' => ['Flutter', 'Go', 'GraphQL', 'TimescaleDB'],
            'external' => null,
            'client' => 'Pemerintah Kota',
            'duration' => '14 minggu',
            'year' => date('Y'),
        ],
        [
            'title' => 'Dashboard Analytics',
            'description' => 'UI/UX design modern untuk dashboard analitik data bisnis real-time.',
            'image' => 'https://via.placeholder.com/1200x900',
            'category' => 'UI/UX',
            'technologies' => ['Figma', 'Adobe XD', 'Sketch', 'Zeplin'],
            'external' => null,
            'client' => 'Perusahaan Konsultan',
            'duration' => '4 minggu',
            'year' => date('Y'),
        ],
        [
            'title' => 'Sistem Manajemen Rumah Sakit',
            'description' => 'Sistem informasi terintegrasi untuk pengelolaan rumah sakit modern.',
            'image' => 'https://via.placeholder.com/1200x900',
            'category' => 'Sistem Informasi',
            'technologies' => ['Vue.js', 'FastAPI', 'PostgreSQL', 'Kubernetes'],
            'external' => null,
            'client' => 'Rumah Sakit Sehat',
            'duration' => '16 minggu',
            'year' => date('Y'),
        ],
        [
            'title' => 'Branding Startup Tech',
            'description' => 'Desain identitas visual modern untuk startup teknologi.',
            'image' => 'https://via.placeholder.com/1200x900',
            'category' => 'Branding',
            'technologies' => ['Adobe Creative Suite', 'Blender', 'Principle'],
            'external' => null,
            'client' => 'Startup Tech',
            'duration' => '3 minggu',
            'year' => date('Y'),
        ],
        [
            'title' => 'Aplikasi IoT Smart Home',
            'description' => 'Sistem kontrol rumah pintar berbasis IoT dengan interface modern.',
            'image' => 'https://via.placeholder.com/1200x900',
            'category' => 'Mobile',
            'technologies' => ['React Native', 'MQTT', 'Node.js', 'InfluxDB'],
            'external' => null,
            'client' => 'Smart Living',
            'duration' => '9 minggu',
            'year' => date('Y'),
        ],
    ];

    $found = null;
    foreach ($items as $it) {
        if (Str::slug($it['title']) === $slug) {
            $found = $it;
            break;
        }
    }

    if (!$found) {
        return Inertia::render('PortfolioDetail', [
            'project' => null,
            'slug' => $slug,
        ]);
    }

    // extra props for gallery/metrics demonstration
    $gallery = [
        'https://images.unsplash.com/photo-1522199794611-8e4193d0f2d2?q=80&w=1200&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1526378722484-bd91ca387e72?q=80&w=1200&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1200&auto=format&fit=crop',
        'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=1200&auto=format&fit=crop',
    ];
    $metrics = [
        ['label' => 'Peningkatan Kecepatan', 'value' => '↑ 2.3x'],
        ['label' => 'Konversi', 'value' => '+35%'],
        ['label' => 'Waktu Rilis', 'value' => '6 minggu'],
    ];

    return Inertia::render('PortfolioDetail', [
        'project' => $found,
        'slug' => $slug,
        'gallery' => $gallery,
        'metrics' => $metrics,
    ]);
})->name('portfolio.detail');

Route::get('/testimoni', fn () => Inertia::render('Testimonial'))->name('testimoni');
Route::get('/blog', fn () => Inertia::render('Blog'))->name('blog');

Route::get('/blog/{slug}', function (string $slug) {
    $posts = [
        [
            'title' => 'Tips Memilih Jasa Web Development Terbaik',
            'content' => '<p>Pelajari cara memilih partner IT yang tepat untuk mendukung pertumbuhan bisnis Anda di era digital.</p>',
            'image' => 'https://via.placeholder.com/600x400',
            'category' => 'Tips & Trik',
            'author' => 'Admin',
            'published_at' => '2025-08-10',
            'tags' => ['web', 'development', 'tips'],
        ],
        [
            'title' => 'Teknologi Terbaru 2025 yang Wajib Diketahui',
            'content' => '<p>Berbagai tren teknologi yang akan mendominasi pasar di tahun 2025, mulai dari AI, Blockchain, hingga AR/VR.</p>',
            'image' => 'https://via.placeholder.com/600x400',
            'category' => 'Teknologi',
            'author' => 'Tech Writer',
            'published_at' => '2025-08-05',
            'tags' => ['teknologi', '2025', 'tren'],
        ],
        [
            'title' => 'Kenapa Website Penting untuk Bisnis?',
            'content' => '<p>Website adalah wajah digital perusahaan Anda. Cari tahu kenapa website sangat penting di era modern ini.</p>',
            'image' => 'https://via.placeholder.com/600x400',
            'category' => 'Bisnis',
            'author' => 'Marketing Team',
            'published_at' => '2025-07-28',
            'tags' => ['website', 'bisnis', 'digital marketing'],
        ],
        [
            'title' => 'UI/UX Design: Rahasia Membuat Pengguna Betah',
            'content' => '<p>Desain yang baik bukan hanya soal estetika, tapi juga kenyamanan pengguna dalam menggunakan aplikasi atau website.</p>',
            'image' => 'https://via.placeholder.com/600x400',
            'category' => 'Desain',
            'author' => 'UI/UX Specialist',
            'published_at' => '2025-07-20',
            'tags' => ['ui', 'ux', 'design'],
        ],
        [
            'title' => 'SEO 2025: Strategi Meningkatkan Ranking Website',
            'content' => '<p>Optimasi mesin pencari terus berkembang. Pelajari strategi SEO terbaru untuk meningkatkan visibilitas bisnis Anda.</p>',
            'image' => 'https://via.placeholder.com/600x400',
            'category' => 'SEO',
            'author' => 'SEO Expert',
            'published_at' => '2025-07-15',
            'tags' => ['seo', 'search engine', 'digital marketing'],
        ],
        [
            'title' => 'Membangun Brand yang Kuat di Media Sosial',
            'content' => '<p>Media sosial bukan sekadar platform promosi, tapi juga alat untuk membangun hubungan dengan audiens.</p>',
            'image' => 'https://via.placeholder.com/600x400',
            'category' => 'Branding',
            'author' => 'Social Media Manager',
            'published_at' => '2025-07-10',
            'tags' => ['branding', 'social media', 'marketing'],
        ],
    ];

    $found = null;
    foreach ($posts as $post) {
        if (Str::slug($post['title']) === $slug) {
            $found = $post;
            break;
        }
    }

    if (!$found) {
        return Inertia::render('BlogDetail', [
            'blog' => null,
            'slug' => $slug,
        ]);
    }

    // Artikel terbaru
    $recentPosts = collect($posts)->where('title', '!=', $found['title'])->values();

    // Kategori contoh
    $categories = [
        ['name' => 'Teknologi', 'slug' => 'teknologi'],
        ['name' => 'Bisnis', 'slug' => 'bisnis'],
        ['name' => 'Berita', 'slug' => 'berita'],
    ];

    return Inertia::render('BlogDetail', [
        'blog' => $found,
        'slug' => $slug,
        'recentPosts' => $recentPosts,
        'categories' => $categories,
    ]);
})->name('blog.detail');

Route::get('/about', fn () => Inertia::render('About'))->name('about');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
