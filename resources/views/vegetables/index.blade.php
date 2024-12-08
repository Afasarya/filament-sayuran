<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alam Sari</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .logo img {
            width: 120px;
              /* Sesuaikan ukuran logo */
        }
        .home-text {
            max-width: 600px; /* Batasi lebar teks */
        }
        .home img {
         max-width: 350px;
        height: auto;
        margin-left: 27%; /* Ubah persentase sesuai kebutuhan */
}

        .btn-explore {
            padding: 0.75rem 2rem;
            font-size: 1rem;
            transition: background 0.3s ease;
        }
        .btn-explore:hover {
            background: #244B4A;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <header class="fixed top-0 left-0 w-full bg-white shadow-md py-4 px-6 md:px-10 flex justify-between items-center z-50">
        <div class="logo">
            <a href="#"><img src="ASSET/logo.png" alt="Logo"></a>
        </div>
        <nav class="hidden md:flex space-x-6">
            <a href="#Home" class="font-semibold text-base uppercase text-gray-900 hover:text-green-500 transition">Home</a>
            <a href="#Produk" class="font-semibold text-base uppercase text-gray-900 hover:text-green-500 transition">Produk</a>
            <a href="#Tips" class="font-semibold text-base uppercase text-gray-900 hover:text-green-500 transition">Tips</a>
            <a href="#Testimoni" class="font-semibold text-base uppercase text-gray-900 hover:text-green-500 transition">Testimoni</a>
            @auth
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="font-semibold text-base uppercase text-gray-900 hover:text-red-500 transition">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-base uppercase text-gray-900 hover:text-green-500 transition">Login</a>
            @endauth
        </nav>
    </header>

    <!-- Home Section -->
    <section class="home min-h-screen flex flex-col md:flex-row items-center justify-center text-center md:text-left bg-white pt-20 px-6 md:px-20" id="Home">
        <div class="home-text flex-1">
            <span class="text-2xl font-semibold uppercase text-green-900 ">Welcome To</span>
            <h1 class="text-5xl font-extrabold uppercase text-green-900 my-4 leading" >Sari Alam</h1>
            <p class="text-xl md:text-2xl font-medium text-green-900 mb-8">Mau Buah dan Sayur Segar? <br> Sari Alam Solusinya !!</p>
            <a href="#Produk" class="px-4 py-2 border-2 border-green-900 rounded-full text-green-900 font-medium hover:bg-green-900 hover:text-white transition">Explore Now</a>
        </div>
        <div class="home-image flex-1 mt-8 md:mt-0">
            <img src="ASSET/LOGO GEDE.png" alt="Logo Besar">
        </div>
    </section>

 

    <section class="shop py-16" id="Produk">
        <div class="heading text-left ml-20">
            <span class="text-4xl font-semibold text-green-600">Get Your Own Here !!</span>
            <h2 class="text-6xl font-bold text-gray-600 mt-4">Of Our Product</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
            @foreach ($vegetables as $vegetable)
                <div class="menu_card text-center bg-green-900 text-white rounded-lg shadow-md p-6 hover:translate-y-[-10px] transition-transform duration-300">
                    <div class="menu_image">
                        <img src="{{ asset('storage/' . $vegetable->image) }}" alt="{{ $vegetable->name }}" class="w-38 h-36 rounded-full object-cover mb-4 mx-auto">
                    </div>
                    <div class="small_card flex justify-center mb-4">
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                    </div>
                    <div class="menu_info">
                        <h2 class="text-2xl font-semibold mb-2">{{ $vegetable->name }}</h2>
                        <h3 class="text-xl mb-6">{{ $vegetable->price }} / KG</h3>
                        <a href="https://wa.me/+6285640433734" target="_blank" class="inline-block text-white border-1.5 border-white rounded-full px-6 py-2 hover:bg-green-700 hover:border-white transition-colors duration-300">Beli Sekarang</a>
                    </div>
                </div>
            @endforeach
            @forelse ($vegetables as $vegetable)
    <div class="menu_card">
        
    </div>
@empty
    <p>No vegetables available.</p>
@endforelse

        </div>
    </section>

<div class="container mx-auto px-4 my-8">
    <img src="ASSET/tips.jpeg" class="w-full rounded-2xl shadow-lg" alt="Tips Image">
</div>