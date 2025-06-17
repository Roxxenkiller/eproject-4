<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Care Group</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome CDN -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

 <style>
  body {
    font-family: "Poppins", sans-serif;
  }

  /* Button hover effect for all buttons */
  .button-hover-effect {
    transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
  }
  .button-hover-effect:hover {
    background-color: #93E9BE; /* lighter shade */
    transform: scale(1.1);
    box-shadow: 0 0 10px 3px rgba(147, 233, 190, 0.46); /* glowing blue shadow */
  }
</style>

</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Banner -->
  <div class="h-[400px] md:h-[450px] relative bg-gradient-to-br from-[#1C39BB] via-[#4DD4D4] to-[#93E9BE]">
  <img src="./assets/bg3.jpg" class="w-full h-full object-cover opacity-30 absolute top-0 left-0 z-0" />
  <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center text-white z-10 text-center px-4" data-aos="fade-down">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Find Your Specialist Doctor</h1>
    <p class="text-lg">Book appointments quickly with top doctors near you</p>
  </div>
</div>


  <!-- Search Input -->
  <div class="max-w-4xl mx-auto px-4 -mt-10 relative z-20" data-aos="zoom-in">
    <div class="flex items-center gap-4 bg-white p-4 shadow-md rounded-lg">
      <input type="text" placeholder="Search for doctors, specialties..." class="flex-grow p-3 border border-gray-200 rounded-md focus:outline-none focus:ring-2 focus:ring-[#1C39BB]" />
      <button class="button-hover-effect bg-[#1C39BB] text-white px-5 py-3 rounded-md transition-all">
        <i class="fas fa-search mr-2"></i><b>Search</b>
      </button>
    </div>
  </div>

  <!-- Doctor Cards -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto px-4 py-12">
    
    <!-- Doctor 1 -->
    <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-2xl transition-transform duration-300 ease-in-out hover:-translate-y-4" data-aos="fade-up">
      <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Doctor" class="w-24 h-24 rounded-full mx-auto mb-4 shadow-md" />
      <h2 class="text-xl font-bold text-center text-[#1C39BB]">Dr. John Doe</h2>
      <p class="text-center text-gray-600">MBBS, MD</p>
      <p class="text-center text-gray-500 italic">Cardiologist</p>
      <p class="text-sm mt-4 text-center">Providing compassionate care with modern technology and experience.</p>
      <div class="mt-6 text-center">
        <button class="button-hover-effect bg-[#1C39BB] text-[#ffff] px-4 py-2 rounded-md font-semibold transition">Book Appointment</button>
      </div>
    </div>

    <!-- Doctor 2 -->
    <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-2xl transition-transform duration-300 ease-in-out hover:-translate-y-4" data-aos="fade-up" data-aos-delay="100">
      <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Doctor" class="w-24 h-24 rounded-full mx-auto mb-4 shadow-md" />
      <h2 class="text-xl font-bold text-center text-[#1C39BB]">Dr. Sarah Smith</h2>
      <p class="text-center text-gray-600">MBBS, MS</p>
      <p class="text-center text-gray-500 italic">Neurologist</p>
      <p class="text-sm mt-4 text-center">Focused on patient well-being through advanced neuroscience techniques.</p>
      <div class="mt-6 text-center">
        <button class="button-hover-effect bg-[#1C39BB] text-[#ffff] px-4 py-2 rounded-md font-semibold transition">Book Appointment</button>
      </div>
    </div>

    <!-- Doctor 3 -->
    <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-2xl transition-transform duration-300 ease-in-out hover:-translate-y-4" data-aos="fade-up" data-aos-delay="200">
      <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Doctor" class="w-24 h-24 rounded-full mx-auto mb-4 shadow-md" />
      <h2 class="text-xl font-bold text-center text-[#1C39BB]">Dr. Alex Turner</h2>
      <p class="text-center text-gray-600">MBBS, DCH</p>
      <p class="text-center text-gray-500 italic">Pediatrician</p>
      <p class="text-sm mt-4 text-center">Caring for your children’s health with expertise and love.</p>
      <div class="mt-6 text-center">
        <button class="button-hover-effect bg-[#1C39BB] text-[#ffff] px-4 py-2 rounded-md font-semibold transition">Book Appointment</button>
      </div>
    </div>

    <!-- Doctor 4 -->
    <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-2xl transition-transform duration-300 ease-in-out hover:-translate-y-4" data-aos="fade-up">
      <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Doctor" class="w-24 h-24 rounded-full mx-auto mb-4 shadow-md" />
      <h2 class="text-xl font-bold text-center text-[#1C39BB]">Dr. Emma Watson</h2>
      <p class="text-center text-gray-600">MBBS, MD</p>
      <p class="text-center text-gray-500 italic">Dermatologist</p>
      <p class="text-sm mt-4 text-center">Bringing out your skin’s health and beauty with gentle care.</p>
      <div class="mt-6 text-center">
        <button class="button-hover-effect bg-[#1C39BB] text-[#ffff] px-4 py-2 rounded-md font-semibold transition">Book Appointment</button>
      </div>
    </div>

    <!-- Doctor 5 -->
    <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-2xl transition-transform duration-300 ease-in-out hover:-translate-y-4" data-aos="fade-up" data-aos-delay="100">
      <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Doctor" class="w-24 h-24 rounded-full mx-auto mb-4 shadow-md" />
      <h2 class="text-xl font-bold text-center text-[#1C39BB]">Dr. Mike Jordan</h2>
      <p class="text-center text-gray-600">MBBS, MS</p>
      <p class="text-center text-gray-500 italic">Orthopedic Surgeon</p>
      <p class="text-sm mt-4 text-center">Helping patients regain strength and mobility after injuries.</p>
      <div class="mt-6 text-center">
        <button class="button-hover-effect bg-[#1C39BB] text-[#ffff] px-4 py-2 rounded-md font-semibold transition">Book Appointment</button>
      </div>
    </div>

    <!-- Doctor 6 -->
    <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-2xl transition-transform duration-300 ease-in-out hover:-translate-y-4" data-aos="fade-up" data-aos-delay="200">
      <img src="https://randomuser.me/api/portraits/women/25.jpg" alt="Doctor" class="w-24 h-24 rounded-full mx-auto mb-4 shadow-md" />
      <h2 class="text-xl font-bold text-center text-[#1C39BB]">Dr. Lisa Monroe</h2>
      <p class="text-center text-gray-600">MBBS, DM</p>
      <p class="text-center text-gray-500 italic">Endocrinologist</p>
      <p class="text-sm mt-4 text-center">Committed to managing diabetes and hormonal disorders effectively.</p>
      <div class="mt-6 text-center">
        <button class="button-hover-effect bg-[#1C39BB] text-[#ffff] px-4 py-2 rounded-md font-semibold transition">Book Appointment</button>
      </div>
    </div>
  </div>

  <!-- AOS JS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800,
      easing: 'ease-in-out',
      once: true
    });
  </script>
</body>
</html>
