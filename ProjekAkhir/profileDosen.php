<!-- profileDosen.php -->
<div?php 

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Profile</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" />
<style>
    body {
        font-family: "Montserrat";
        font-style: normal;
        font-weight: 400;
    }
    .profile-card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 30px;
        text-align: center;
    }

    .profile-card h2 {
        margin: 0;
        margin-bottom: 10px;
    }

    .profile-card p {
        margin: 0;
        margin-bottom: 20px;
    }

    .profile-card a {
        display: block;
        background-color: #2685F5;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
    }

    .profile-card a:hover {
        background-color: #1A62B5;
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
<script src="https://cdn.tailwindcss.com"></script>

<body>
    <!--DIV 1 (HEADER)-->
    <div class="grid grid-cols-2">
        <div class="left relative">
            <div class="flex items-center gap-4 mb-2 ps-4">
                <img src="logo.jpeg" class="w-20" />
                <div>
                    <h1 class="font-bold text-xl">SISKA - POLINEMA</h1>
                    <p class="text-xs font-bold">SURVEY KEPUASAN PELANGGAN POLINEMA</p>
                </div>
            </div>
        </div>
        <div class="text-sm text-end mt-10">
            <h1><b>Fahmi Mardiansyah | Dosen</b></h1>
        </div>
        <hr />
    </div>
    <hr class="border-2 border-black" />
    <!--DIV 2 (BODY)-->
    <div class="grid grid-cols-5 h-screen">
        <!--DIV KIRI (SIDE BAR KIRI)-->
        <div class="left bg-[#130B2d] py-20 relative">
            <ul class="grid grid-rows-3 gap-3 text-center text-sm items-center justify-center">
                <li class="px-5 py-2 bg-[#2D1B6B] font-bold text-white rounded-xl">
                    <a class="flex items-center gap-3" href="dashboardDosen.php"><img src="dashSym.svg" class="w-10" /><span>Dashboard</span></a>
                </li>
                <li class="px-5 py-2 bg-[#2D1B6B] font-bold text-white rounded-xl">
                    <a class="flex items-center gap-3" href="surveyDosen.php"><img src="surveySym.svg" class="w-10" /><span>Survey</span></a>
                </li>
                <li class="px-5 py-2 bg-[#2D1B6B] font-bold text-white rounded-xl">
                    <a class="flex items-center gap-3" href="reportDosen.php"><img src="ReportSym.svg" class="w-10" /><span>Report</span></a>
                </li>
                <li class="px-5 py-2 bg-[#2685F5] font-bold text-white rounded-xl">
                    <a class="flex items-center gap-3" href="profileDosen.php"><img src="profileSym.svg" class="w-10" /><span>Profile</span></a>
                </li>
                <li class="px-5 py-2 bg-[#423C57] font-bold text-white rounded-xl">
                    <a class="flex items-center gap-3" href="index.html"><img src="Logout.svg" class="w-10" /><span>LOG OUT</span></a>
                </li>
            </ul>
        </div>
        <!--DIV KANAN (PROFILE CONTENT)-->
        <div class="col-span-4 p-10">
        <div class="flex">
        <div class="card-container flex">
        <div class="flex justify-end">
            <div class="">
                <div class="form">
                    <p style="text-align: left; font-weight: bold; font-size: 20px; color: #000000; opacity: 75%; padding-left: 5px;">NIP</p>
                    <input type="text" name="username" id="username" class="form-control pb-2" placeholder="111xxxxxxxx" style="border-radius: 15px; border-width: 2px; width: 600px; height: 57px;" disabled>
                </div>
                <div class="form">
                    <p style="text-align: left; font-weight: bold; font-size: 20px; color: #000000; opacity: 75%; padding-left: 5px;">Nama Lengkap</p>
                    <input type="text" name="username" id="username" class="form-control pb-2" placeholder="Fahmi Mardiansyah" style="border-radius: 15px; border-width: 2px; width: 600px; height: 57px;" disabled>
                </div>
                <div class="form">
                    <p style="text-align: left; font-weight: bold; font-size: 20px; color: #000000; opacity: 75%; padding-left: 5px;">Nomor HP</p>
                    <input type="text" name="username" id="username" class="form-control pb-2" placeholder="0812xxxxxxxx" style="border-radius: 15px; border-width: 2px; width: 600px; height: 57px;" disabled>
                </div>
                <!-- <div>
                    <button type="submit" id="edit" class="btn btn-primary fw-bold tombol bg-[#2D1B6B] text-white px-5 py-2" value="edit" style="border-radius: 10px; width: 100%;" href="profileDosenEdit.php">Edit</button>
                </div> -->
                <div class="mt-20 mb-36 ps-4">
                <a href="profileDosenEdit.php" class="btn btn-primary fw-bold tombol bg-[#2D1B6B] text-white px-5 py-2" style="border-radius: 10px; width: 100%;">Edit</a>
            </div>
            </div>
        </div>
        <div class="circle" style="margin-top: 20px; margin-left: 100px;">
            <img src="logo.jpeg" alt="Placeholder Image" width="250" height="285">
                <div class="photo-caption">
                <button class="btn btn-primary fw-bold tombol bg-[#2D1B6B] text-white px-5 py-2" style="border-radius: 10px; width: 100%;">DOSEN</button>
                </div>
        </div>
        </div>
    </div>
    </div>
</body>
</html>    