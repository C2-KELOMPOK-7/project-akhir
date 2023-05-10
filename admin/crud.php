
<?php
session_start();

// Periksa apakah pengguna telah login sebagai admin
if ($_SESSION['role'] !== 'admin') {
  header('Location: ../login.php');
  exit();
}

if (isset($_GET['logout'])) {
  session_destroy();
  header('Location: ../login.php');
  exit();
}

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>postest 3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  
  <style>
    .box {
	color: #272164;
}
.box:after {
	content: '';
	display: block;
	clear: both;
}
    .box .col-4 h4 {
	margin:20px 0;
}
.box .col-4 {
		width:100%;
		float: none;
		margin-bottom: 20px;
	}
    .box .col-4 {
	width:25%;
	padding:20px;
	box-sizing: border-box;
	text-align: center;
	float: left;
}
    .contain {
	width:80%;
	margin:0 auto;
}
.contain:after {
	content:'';
	display: block;
	clear: both;
}
	.servis {
	padding-bottom: 100px;
}
     .kontainer{
	max-width: 1000px;
	width: 100%;
	background-color: #fff;
	padding: 25px 30px;
	border-radius: 5px;
	box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  }
  .kontainer .title{
	font-size: 25px;
	font-weight: 500;
	position: relative;
  }
  .kontainer .title::before{
	content: "";
	position: absolute;
	left: 0;
	bottom: 0;
	height: 3px;
	width: 30px;
	border-radius: 5px;
	background: linear-gradient(135deg, #71b7e6, #9b59b6);
  }

  .kontener{
	max-width: 1000px;
	width: 100%;
	background-color: #fff;
	padding: 25px 30px;
	border-radius: 5px;
	box-shadow: 0 5px 10px rgba(0,0,0,0.15);
  }
  .kontener p {
	background-color: white;
    padding: 20px 20px;
    border-radius: 12px;
    box-shadow: 0 1px 20px rgb(0 0 0 / 20%);
    width: 350px;
    margin: 15px auto;
}
.kontener p:hover{
    background-color: #18d3ad;
}
.kontener .oke{
	width: 200px;
	height: 200px;
	border-radius: 50%;


	margin-left: 40%;
}
.animasi-teks {
	font-size: 29px;
	width: 100%;
	white-space:nowrap;
	overflow:hidden;
	-webkit-animation: typing 5s steps(70, end);
	animation: animasi-ketik 5s steps(70, end);
  }
  
  @keyframes animasi-ketik{
	from { width: 0; }
  }
  
  @-webkit-keyframes animasi-ketik{
	from { width: 0; }
  }

  .content form .user-details{
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
	margin: 20px 0 12px 0;
  }
  form .user-details .input-box{
	margin-bottom: 15px;
	width: calc(100% / 2 - 20px);
  }
  form .input-box span.details{
	display: block;
	font-weight: 500;
	margin-bottom: 5px;
  }
  .user-details .input-box input{
	height: 45px;
	width: 100%;
	outline: none;
	font-size: 16px;
	border-radius: 5px;
	padding-left: 15px;
	border: 1px solid #ccc;
	border-bottom-width: 2px;
	transition: all 0.3s ease;
  }
  .kombo{
	height: 45px;
	width: 100%;
	outline: none;
	font-size: 16px;
	border-radius: 5px;
	padding-left: 15px;
	border: 1px solid #ccc;
	border-bottom-width: 2px;
	transition: all 0.3s ease;
  }

  .teks{
	height: 100px;
	width: 100%;
	outline: none;
	font-size: 16px;
	border-radius: 5px;

	border: 1px solid #ccc;
	border-bottom-width: 2px;
	transition: all 0.3s ease;
  }

  .user-details .input-box input:focus,
  .user-details .input-box input:valid{
	border-color: #9b59b6;
  }
   form .gender-details .gender-title{
	font-size: 20px;
	font-weight: 500;
   }
   form .hobi{
	font-size: 20px;
	font-weight: 500;
   }
   form .category{
	 display: flex;
	 width: 80%;
	 margin: 14px 0 ;
	 padding-right: 38rem;
	 justify-content: space-between;
   }
   form .category label{
	 display: flex;
	 align-items: center;
	 cursor: pointer;
   }
   form .category label .dot{
	height: 18px;
	width: 18px;
	border-radius: 50%;
	margin-right: 10px;
	background: #d9d9d9;
	border: 5px solid transparent;
	transition: all 0.3s ease;
  }
   #dot-1:checked ~ .category label .one,
   #dot-2:checked ~ .category label .two,
   #dot-3:checked ~ .category label .three{
	 background: #148F77;
	 border-color: #d9d9d9;
   }
   form input[type="radio"]{
	 display: none;
   }
   form .button{
	 height: 45px;
	 margin: 35px 0
   }
   form .button input{
	 height: 100%;
	 width: 100%;
	 border-radius: 5px;
	 border: none;
	 color: #fff;
	 font-size: 18px;
	 font-weight: 500;
	 letter-spacing: 1px;
	 cursor: pointer;
	 transition: all 0.3s ease;
	 background: linear-gradient(135deg, #0099ff, #272164);
   }
   form .button input:hover{
	/* transform: scale(0.99); */
	background: linear-gradient(-135deg, #0099ff, #272164);
	}
   @media(max-width: 584px){
   .kontainer{
	max-width: 100%;
  }
  form .user-details .input-box{
	  margin-bottom: 15px;
	  width: 100%;
	}
	form .category{
	  width: 100%;
	}
	.content form .user-details{
	  max-height: 300px;
	  overflow-y: scroll;
	}
	.user-details::-webkit-scrollbar{
	  width: 5px;
	}
	}
	@media(max-width: 459px){
	.kontainer .content .category{
	  flex-direction: column;
	}
}
</style>
  <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);">
	  			<div class="user-logo">
	  				<div class="img" style="background-image: url(images/admin.png);"></div>
	  				<h3 id=nama_ni></h3>
	  			</div>
	  		</div>
			  <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="index.php"><span class="fa fa-home mr-3"></span> Home</a>
          </li>
          <li>
          <a href="data.php"><span class="fa fa-table mr-3"></span>Data RAB</a>
          </li>
          <li>
          <a href="crud.php"><span class="fa fa-table mr-3"></span>Data kegiatan</a>
          </li>
          <li>
          <a href="?logout=true"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
          </li>
        </ul>

    	</nav>
 


        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">Data Kegiatan Eksternal</h2>

<ul>



			  <div class="kontainer">
			<div class="content">
				<h1 align="center">form pendataan</h1>
				
				<br>
				<form>
				  <div class="user-details">
					<div class="input-box">
					  <span class="details">nama kegiatan</span>
					  <input type="text" id="nama" name="nama" placeholder="masukan nama kegiatan">
					</div>
					<div class="input-box">
					  <span class="details">penyelenggara</span>
					  <input type="text" id="penyelenggara" name="penyelenggara" placeholder="masukan penyelenggara">
					</div>
					<div class="input-box">
					  <span class="details">lokasi</span>
					  <input type="text" id="lokasi" name="lokasi" placeholder="masukan lokasi">
					</div>
					
				
					  <div class="input-box">
						<span class="details">jenis kegiatan</span>
						
					  <select class="kombo" id="jenis" name="jenis">
                    
						
                      <option value="wajib">Wajib</option>
    					<option value="opsional">Opsional</option>
                    </select>
					</div>
					
					<div class="input-box">
						<span class="details">deskripsi kegiatan</span>
						<textarea class="teks" id="deskripsi" name="deskripsi"></textarea>
					  </div>
					  
				  </div>
				  
				
				  <div class="button">
					<input type="submit" name="submit" onclick="tambahData()">
				  </div>
				</form>
				</div>
			  </div>
    <br><br>
	<h2>Data kegiatan</h2>
			  <table id="tabel" border="1">
		<tr>
			<th>Nama kegiatan</th>
			<th>lokasi</th>
			<th>penyelenggara</th>
		
			<th>deskripsi kegiatan</th>
			<th>jenis kegiatan</th>
			

			<th>Aksi</th>
		</tr>
	</table>

	</ul>
        
      </div>
		</div>

		<script>
		// Mendapatkan referensi ke elemen form
const form = document.querySelector('form');

// Mendapatkan referensi ke elemen tabel
const tabel = document.querySelector('#tabel');

// Mendapatkan data dari localStorage (jika tersedia) atau menginisialisasi data kosong
let data = JSON.parse(localStorage.getItem('data')) || [];

// Fungsi untuk menampilkan data ke dalam tabel
function tampilkanData() {
  // Menghapus semua baris di tabel kecuali header
  while (tabel.rows.length > 1) {
    tabel.deleteRow(1);
  }

  // Menambahkan setiap data ke dalam tabel
  for (let i = 0; i < data.length; i++) {
    const row = tabel.insertRow();

    const namaCell = row.insertCell();
    namaCell.textContent = data[i].nama;

    const lokasiCell = row.insertCell();
    lokasiCell.textContent = data[i].lokasi;

    const penyelenggaraCell = row.insertCell();
    penyelenggaraCell.textContent = data[i].penyelenggara;

    const deskripsiCell = row.insertCell();
    deskripsiCell.textContent = data[i].deskripsi;

    const jenisCell = row.insertCell();
    jenisCell.textContent = data[i].jenis;

    const aksiCell = row.insertCell();
    const editButton = document.createElement('button');
    editButton.textContent = 'Edit';
    editButton.addEventListener('click', function() {
      editData(i);
    });
    aksiCell.appendChild(editButton);

    const hapusButton = document.createElement('button');
    hapusButton.textContent = 'Hapus';
    hapusButton.addEventListener('click', function() {
      hapusData(i);
    });
    aksiCell.appendChild(hapusButton);
  }
}

// Fungsi untuk menambahkan data ke dalam tabel dan localStorage
function tambahData() {
  const nama = form.elements.nama.value;
  const lokasi = form.elements.lokasi.value;
  const penyelenggara = form.elements.penyelenggara.value;
  const deskripsi = form.elements.deskripsi.value;
  const jenis = form.elements.jenis.value;

  // Mengecek apakah data yang ingin ditambahkan sudah ada di dalam array `data`
  const isDuplicate = data.some((item) => {
    return item.nama === nama && item.lokasi === lokasi && item.penyelenggara === penyelenggara && item.deskripsi === deskripsi && item.jenis === jenis;
  });

  // Jika data sudah ada, tampilkan pesan kesalahan dan keluar dari fungsi
  if (isDuplicate) {
  
    return;
  }

  const newData = {
    nama: nama,
    lokasi: lokasi,
    penyelenggara: penyelenggara,
    deskripsi: deskripsi,
    jenis: jenis
  };

  data.push(newData);
  localStorage.setItem('data', JSON.stringify(data));
  tampilkanData();
}


// Fungsi untuk mengedit data di dalam tabel dan localStorage
function editData(index) {
  const newData = {
    nama: prompt('Masukkan nama kegiatan:', data[index].nama),
    lokasi: prompt('Masukkan lokasi kegiatan:', data[index].lokasi),
    penyelenggara: prompt('Masukkan penyelenggara:', data[index].penyelenggara),
    deskripsi: prompt('Masukkan deskripsi kegiatan:', data[index].deskripsi),
    jenis: prompt('Masukkan jenis kegiatan (wajib/opsional):', data[index].jenis)
  };

  data[index] = newData;
  localStorage.setItem('data', JSON.stringify(data));
  tampilkanData();
}

// Fungsi untuk menghapus data dari tabel dan localStorage
function hapusData(index) {
  data.splice(index, 1);
  localStorage.setItem('data', JSON.stringify(data));
  tampilkanData();
}

// Menampilkan data pertama kali
tampilkanData();

// Event listener untuk form submit
form.addEventListener('submit', function(event) {
  event.preventDefault();

  const nama = form.elements.nama.value;
  const lokasi = form.elements.lokasi.value;
  const penyelenggara = form.elements.penyelenggara.value;
const deskripsi = form.elements.deskripsi.value;
const jenis = form.elements.jenis.value;

// Memanggil fungsi tambahData dengan parameter yang sesuai
tambahData(nama, lokasi, penyelenggara, deskripsi, jenis);

// Mereset nilai input pada form
form.reset();
});





		</script>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/utama.js"></script>
  </body>
</html>