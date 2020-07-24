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
            margin-top:200px;
        }
        h1,h2{
            text-align:center;            
        }
        h3{
            color:white;
        }
       
        .content{
            padding:10px;
            margin:auto;
        }
        .subcontent{
            width:900px;
            height:200px;
            margin:auto;
            margin-top:10px;
            
        }
        a{
            color:black;
        }

        .end{
            border-top:1px solid black;
        }
        .fi{
            text-align:center;
            margin-top:45px;
            
        }

        #pp{
            margin-left:50px;
            width:150px;
            height:200px;
            border-radius:100px;
        }
       .ig,.fb,.git{
           height:50px;
       }
       .sosmed{
           padding:100px;
           margin-left:41%;
           
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
            <li class="nav-item active">
                <a class="nav-link" href="/about">About Me<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/experience">Experience</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/portofolio">Portofolio</a>
            </li>
            </ul>
        </div>
    </nav>
        <table class="content">
            <tr>
                <h1>About Me</h1>
            </tr>
            <tr>
                <td><img src="{{('faris.jpg')}}" alt="foto faris" class="rounded-circle" id="pp"></td>
            </tr>
            <tr>
               <td> <h2>Faris Ferdiansyah</h2></td>
            </tr>   
        </table>
        <div class="subcontent">
            <p>Perkenalkan nama saya Faris Ferdiansyah, Saya adalah pelajar dari sekolah SMK Taruna Bhakti, saat ini saya sedang duduk di kelas XII di jurusan Rekayasa Perangkat lunak atau biasa disebut RPL. Saya mempunyai passion front-end developer karna saya senang dalam mendesain suatu tampilan.</p>            
            <p>Saya mempunyai mempunyai hobi bermain game untuk menghabiskan waktu luang saya,dan saya juga senang bersepeda untuk kegiatan olahraga,saya juga mengambil ekskul volly di sekolah ,tetapi sekarang karna situasi sedang seperti ini jadi tidak bisa melanjutkan ekskul volly. Saya mempunyai makanan favorit , yaitu nasi goreng, mie instan dan ayam geprek dan untuk minuman favorit saya adalah thai tea, oke sekian perkenalannya terima kasih.</p>
            <br>
            <p class="fi"><strong>Find me in social media</strong></p>
            <table class="sosmed">
                <tr>
                    <td><a href="https://www.instagram.com/farisferdiansyah__/"><img src="ig.png" alt="" class="ig"></a></td>
                    <td><a href="https://web.facebook.com/faris.uyee.1/"><img src="fb.png" alt="" class="fb"></a></td>
                    <td><a href="https://github.com/faris2508"><img src="github.png" alt="" class="git"></a></td>
                </tr>
                
            </table>
        </div>
        <div class="cr">
            <footer>
                <center>
                    <p>copyright &copy; Faris Ferdiansyah 2020 </p>
                </center>
            </footer> 
        </div>
    
</body>
</html>