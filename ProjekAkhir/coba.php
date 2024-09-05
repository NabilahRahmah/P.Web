<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SISKA-POLINEMA Dashboard</title>
  <!-- Include Tailwind CSS -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<!-- Sidebar -->
<div class="flex h-screen bg-indigo-800">
  <div class="p-5 w-1/5 bg-indigo-800">
    <h2 class="text-white text-lg mb-6">SISKA-POLINEMA</h2>
    <ul class="space-y-2 text-sm">
      <li><a href="#" class="flex items-center space-x-2 text-white py-3 px-4 rounded-md bg-indigo-700"><span>🏠</span><span>Dashboard</span></a></li>
      <li><a href="#" class="flex items-center space-x-2 text-white py-3 px-4 rounded-md hover:bg-indigo-700"><span>📊</span><span>Survey</span></a></li>
      <li><a href="#" class="flex items-center space-x-2 text-white py-3 px-4 rounded-md hover:bg-indigo-700"><span>📈</span><span>Report</span></a></li>
      <li><a href="#" class="flex items-center space-x-2 text-white py-3 px-4 rounded-md hover:bg-indigo-700"><span>👤</span><span>Profil</span></a></li>
      <li><a href="#" class="flex items-center space-x-2 text-white py-3 px-4 rounded-md hover:bg-indigo-700"><span>🔒</span><span>Logout</span></a></li>
    </ul>
  </div>
  <!-- Main Content -->
  <div class="p-5 w-4/5">
    <!-- User Profile Section -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.0/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Custom styles */
    .circle {
      width: 150px;
      height: 185px;
      border-radius: 50%;
      overflow: hidden;
    }
    .circle img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .photo-caption {
      text-align: center;
      margin-top: 10px;
    }
    .profile-info-label {
      font-weight: bold;
      font-size: 16px;
    }
  </style>
</head>
<body class="bg-gray-100">

<div class="col-span-4 p-10">
  <div class="flex">
    <div class="card-container flex">
      <p class="judul-dalam-kontainer flex">Profile</p>
      <hr>
      <div class="">
        <div class="flex justify-end">
          <div class="circle">
            <img src="logo.jpeg" alt="Placeholder Image">
            <div class="photo-caption">
              <p><span class="profile-info-label">DOSEN</span></p>
            </div>
          </div>
        </div>
        <div class="form">
          <p class="profile-info-label">NIP</p>
          <input type="text" name="username" id="username" class="form-control pb-2" placeholder="111xxxxxxxx" disabled>
        </div>
        <div class="form">
          <p class="profile-info-label">Nama Lengkap</p>
          <input type="text" name="username" id="username" class="form-control pb-2" placeholder="Fahmi Mardiansyah" disabled>
        </div>
        <div class="form">
          <p class="profile-info-label">Nomor HP</p>
          <input type="text" name="username" id="username" class="form-control pb-2" placeholder="0812xxxxxxxx" disabled>
        </div>
        <div>
          <button type="submit" id="edit" class="btn btn-primary fw-bold tombol bg-[#2D1B6B] text-white px-5 py-2" value="edit" style="border-radius: 10px; width: 100%;" href="profileDosenEdit.php">Edit</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>