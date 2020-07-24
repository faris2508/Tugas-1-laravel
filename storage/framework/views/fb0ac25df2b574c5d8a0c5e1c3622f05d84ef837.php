<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About me</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .cr{
            margin-top:20px;
        }
        h1{
            text-align:center;
            margin-top:20px;
        }
        h3{
            color:white;
        }
       
        table,td{
            padding:10px;
            margin:auto;
        }
        .subcontent{
            width:900px;
            height:500px;
            margin:auto;
            margin-top:50px;
            
        }
        a{
            color:black;
        }

        .end{
            border-top:1px solid black;
        }

        /* img{
            width:150px;
            height:200px;
            border-radius:100px; */
        /* } */
        #serti,#xd,#java{
            height: 210px;
        }
       
        
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Faris Ferdiansyah</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/about">About Me<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/experience">Experience</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/portofolio">Portofolio</a>
            </li>
            </ul>
        </div>
    </nav>
        <table class="content">
            <tr>
                <h1>Portofolio</h1>
            </tr>
            <tr>
                <td>Disini saya akan menunjkan karya karya apa saja yang sudah saya buat dan juga menunjkan hasil pencapaian saya dalam belajar.</td>
            </tr>   
        </table>
        <div class="subcontent">
            <div class="card-deck">
                <div class="card">
                  <img src="sertifikat.png" class="card-img-top" alt="..." id="serti">
                  <div class="card-body">
                    <h5 class="card-title">Sertifikat Dicoding</h5>
                    <p class="card-text">Mendapatkan serifikat Dicoding dari hasil belajar web dasar.</p>
                  </div>
                  <div class="card-footer">
                    <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                  </div>
                </div>
                <div class="card">
                  <img src="xd.png" class="card-img-top" alt="..." id="xd">
                  <div class="card-body">
                    <h5 class="card-title">Mockup aplikasi pembelian game</h5>
                    <p class="card-text">Saya mendesain mockup untuk aplikasi pembelian game.</p>
                  </div>
                  <div class="card-footer">
                    <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                  </div>
                </div>
                <div class="card">
                  <img src="java.png" class="card-img-top" alt=".." id="java">
                  <div class="card-body">
                    <h5 class="card-title">Membuat aplikasi pembelian game</h5>
                    <p class="card-text">Membuat aplikasi penjualan game menggunakan java pada aplikasi netbeans.</p>
                  </div>
                  <div class="card-footer">
                    <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
                  </div>
                </div>
              </div>
        </div>
        <div class="cr">
            <footer>
                <center>
                    <p>copyright &copy; Faris Ferdiansyah 2020 </p>
                </center>
            </footer> 
        </div>
    
</body>
</html><?php /**PATH D:\xampp\htdocs\belajar_laravel\resources\views/portofolio.blade.php ENDPATH**/ ?>