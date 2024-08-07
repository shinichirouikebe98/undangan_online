<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Undangan Metatah</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link href="{{ mix('css/lightbox.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <meta property="og:title" content="Undangan Metatah Lan Ngasti">
    <meta property="og:description" content="Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/ Ibu/ Saudara/i, berkenan hadir.">
    <meta property="og:image" content="{{asset('img/graph.jpg')}}">
    <meta property="og:url" content="{{ url('/' . $invitation->name) }}">
</head>
<body>
    <section class="">
        <div class="home ">
            <div class="container"></div>
            <div class="wave wave1" ></div>
            <div class="wave wave2" ></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"  ></div>

            <div class="text">
                <p>Undangan Metatah</p>
                <p>Jumat, 16 Agustus 2024</p>
                <p>
                    Kepada<br>
                    Bapak/Ibu/Saudara/i
                </p>
                
                <p>{{ $invitation->name }}</p>
                <div class="button">
                    <a href="#" onclick="enableScrollAndScrollToSection()">Buka Undangan</a>
                </div>
            </div>
        </div>
    </section>
    
    <div class="for-navbar">
        <div class="navbar">
            <div class="container">
                <div class="card">
                    <div class="wrapper">
                    <i class="fa-solid fa-house"></i>
                </div>
                </div>
                <div class="card">
                    <div class="wrapper">
                    <i class="fa-solid fa-person"></i>
                </div>
                </div>
                <div class="card">
                    <div class="wrapper">
                    <i class="fa-solid fa-clock"></i>
                </div>
                </div>
                <div class="card">
                    <div class="wrapper">
                    <i class="fa-solid fa-image"></i>
                </div>
                </div>
                <div class="card">
                    <div class="wrapper">
                        <i id="button" class="fa-solid fa-volume-up"></i>
                        <audio src="{{asset('sound/1.m4a')}}"></audio>
                    </div>
                </div>

                
            </div>
        </div>
    <section class="about">
        <div class="container">
            <div class="text-about" >
                <p data-aos="fade-up" data-aos-duration="1000" >Om Swastyastu</p>
                <p data-aos="fade-up" data-aos-duration="1200">Atas Asung Kertha Wara Nugraha Ida Sang Hyang Widhi Wasa/Tuhan Yang Maha Esa kami bermaksud mengundang Bapak/Ibu/Saudara/i pada Upacara Manusa Yadnya Metatah (Potong Gigi) putri kami.</p>
            </div>
            <div class="wrapper">
                <div class="card" data-aos="fade-up" data-aos-duration="1000">
                    <div class="container">
                        <div class="img">
                            <img src="{{asset('img/profil2.jpg')}}" alt="">
                        </div>
                        <div class="text-card">
                            <p>I Wayan Shinichirou Ikebe</p>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1000">
                    <div class="container">
                        <div class="img">
                            <img src="{{asset('img/profil4.jpg')}}" alt="">
                        </div>
                        <div class="text-card">
                            <p>Ni Putu Sri Amanda</p>
                        </div>
                    </div>
                </div>
                
                <div class="card" data-aos="fade-up" data-aos-duration="1000">
                    <div class="container">
                        <div class="img">
                            <img src="{{asset('img/profil1.jpg')}}" alt="">
                        </div>
                        <div class="text-card">
                            <p>I Kadek Shyota </p>
                        </div>
                    </div>
                </div>
                <div class="card" data-aos="fade-up" data-aos-duration="1000">
                    <div class="container">
                        <div class="img">
                            <img src="{{asset('img/profil3.jpg')}}" alt="">
                        </div>
                        <div class="text-card">
                            <p>Ni Kadek Anggi Utami</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pray" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <p>Devan bhavayatanena te deva bhavayantu vah parasparam bhavayantah sreyah param avapsyatha
                (Bhagavad Gita3:11)</p>
            <p>Dengan ini (Yadnya), kami berbakti kepada Hyang Widhi dan dengan ini pula Hyang Widhi memelihara dan mengasihi kamu. Dengan saling memelihara satu sama lain, kamu akan mencapai kebaikan yang maha tinggi.</p>
        </div>
    </section>

    <section class="date">
        <div class="container">
            <p class="main-text" data-aos="fade-up" data-aos-duration="1000">Waktu & Tempat</p>
            <p class="sub-text" data-aos="fade-up" data-aos-duration="1000">Jumat</p>
            <p class="third-text" data-aos="fade-up" data-aos-duration="1000">16 Agustus 2024</p>
            <p class="sub-text" data-aos="fade-up" data-aos-duration="1000">Pukul</p>
            <p class="third-text" data-aos="fade-up" data-aos-duration="1000">16.00 WITA - Selesai</p>
            <p class="fourth-text" data-aos="fade-up" data-aos-duration="1000">Bertempat di</p>
            <p class="third-text" data-aos="fade-up" data-aos-duration="1000">Br. Karang Dalem 1, Ds. Bongkasa Pertiwi, Abiansemal, Badung, Bali</p>
            <div class="button" data-aos="fade-up" data-aos-duration="1000">
                <a href="https://maps.app.goo.gl/WfzSCmsccTvEvP7TA">MAP LOKASI ACARA</a>
            </div>
            <p class="third-text" data-aos="fade-up" data-aos-duration="1000">Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/ Ibu/ Saudara/i, berkenan hadir.</p>
            <p class="third-text" data-aos="fade-up" data-aos-duration="1000">Atas kehadiran dan doa restunya kami ucapkan terimakasih</p>
            <p class="main-text1" data-aos="fade-up" data-aos-duration="1000">Om Shanti Shanti Shanti Om</p>
            <p class="fifth-text" data-aos="fade-up" data-aos-duration="1000">Kami yang berbahagia</p>
            <p class="six-text" data-aos="fade-up" data-aos-duration="1000">Keluarga Mangku Desa Karang Dalem Tua</p>
            <p class="main-text" data-aos="fade-up" data-aos-duration="1000">Menuju Acara</p>
        </div>
    </section>
    <section class="section-3" id="waktu" data-aos="fade-up" data-aos-duration="1000">
        <div class="countdown">
            <div class="container">
                <div class="wrapper">
                <div class="card">
                    <div class="container">
                        <p id="days"></p>
                    </div>
                </div>
                
                <div class="card">
                    <div class="container">
                        <p id="hours"></p>
                    </div>
                </div>
                <div class="card">
                    <div class="container">
                        <p id="minutes"></p>
                    </div>
                </div>
                <div class="card">
                    <div class="container">
                        <p id="seconds"></p>
                    </div>
                </div>
            </div>
                
                
                
            </div>
        </div>
    </section>

    
    <div class="grid-gallery">
        <div class="grid-item" data-aos-duration="1000">
          <a href="{{asset('img/1 (1).jpg')}}" data-lightbox="gridImage">
            <img src="{{asset('img/1 (1).jpg')}}" />
          </a>
        </div>
        <div class="grid-item" data-aos-duration="1000">
          <a href="{{asset('img/1 (2).jpg')}}" data-lightbox="gridImage">
            <img src="{{asset('img/1 (2).jpg')}}" />
          </a>
        </div>
        <div class="grid-item" data-aos-duration="1000">
            <a href="{{asset('img/1 (3).jpg')}}" data-lightbox="gridImage">
              <img src="{{asset('img/1 (3).jpg')}}" />
            </a>
          </div>
          <div class="grid-item" data-aos-duration="1000">
            <a href="{{asset('img/1 (11).jpg')}}" data-lightbox="gridImage">
              <img src="{{asset('img/1 (11).jpg')}}" />
            </a>
          </div>
          <div class="grid-item" data-aos-duration="1000">
            <a href="{{asset('img/1 (5).jpg')}}" data-lightbox="gridImage">
              <img src="{{asset('img/1 (5).jpg')}}" />
            </a>
          </div>
          <div class="grid-item" data-aos-duration="1000">
            <a href="{{asset('img/1 (6).jpg')}}" data-lightbox="gridImage">
              <img src="{{asset('img/1 (6).jpg')}}" />
            </a>
          </div>
          <div class="grid-item" data-aos-duration="1000">
            <a href="{{asset('img/1 (7).jpg')}}" data-lightbox="gridImage">
              <img src="{{asset('img/1 (7).jpg')}}" />
            </a>
          </div>
          <div class="grid-item" data-aos-duration="1000">
            <a href="{{asset('img/1 (8).jpg')}}" data-lightbox="gridImage">
              <img src="{{asset('img/1 (8).jpg')}}" />
            </a>
          </div>
          <div class="grid-item" data-aos-duration="1000">
            <a href="{{asset('img/1 (9).jpg')}}" data-lightbox="gridImage">
              <img src="{{asset('img/1 (9).jpg')}}" />
            </a>
          </div>
          <div class="grid-item" data-aos-duration="1000">
            <a href="{{asset('img/1 (12).jpg')}}" data-lightbox="gridImage">
              <img src="{{asset('img/1 (12).jpg')}}" />
            </a>
          </div>
          <div class="grid-item" data-aos-duration="1000">
            <a href="{{asset('img/1 (4).jpg')}}" data-lightbox="gridImage">
              <img src="{{asset('img/1 (4).jpg')}}" />
            </a>
          </div>
          <div class="grid-item" data-aos-duration="1000">
            <a href="{{asset('img/1 (10).jpg')}}" data-lightbox="gridImage">
              <img src="{{asset('img/1 (10).jpg')}}" />
            </a>
          </div>
        
      </div>

    <footer>
        <p>Matur Suksma</p>
    </footer>



    



    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- jQuery CDN Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>



    <script>
    AOS.init();
    function enableScrollAndScrollToSection() {
    document.body.style.overflow = 'auto'; // Aktifkan scrolling
    document.body.style.height = 'auto'; // Atur tinggi body kembali ke auto untuk menampilkan seluruh konten
    document.querySelector('.about').scrollIntoView({ behavior: 'smooth' }); // Scroll ke section berikutnya
    }


    var countDownDate = new Date("August 16, 2024 16:00:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in elements with respective ids
    document.getElementById("days").innerHTML = days + "<br> Hari" ;
    document.getElementById("hours").innerHTML = hours + "<br> Jam ";
    document.getElementById("minutes").innerHTML = minutes + "<br> Menit ";
    document.getElementById("seconds").innerHTML = seconds + "<br> Detik ";

    // If the count down is over, write some text 
    if (distance < 0) {
    clearInterval(x);
    document.getElementById("days").innerHTML = "";
    document.getElementById("hours").innerHTML = "";
    document.getElementById("minutes").innerHTML = "";
    document.getElementById("seconds").innerHTML = "";
    document.getElementById("expired").style.display = "block";
    }
    }, 1000);

    lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true
    });

window.addEventListener("DOMContentLoaded", event => {
    const audio = document.querySelector("audio");
    audio.volume = 0.2;
    audio.play();

    const button = document.querySelector("#button");
    const icon = button; // #button adalah elemen <i> itu sendiri

    button.addEventListener("click", () => {
        if (audio.paused) {
            audio.volume = 0.2;
            audio.play();
            icon.classList.remove('fa-volume-mute');
            icon.classList.add('fa-volume-up');
        } else {
            audio.pause();
            icon.classList.remove('fa-volume-up');
            icon.classList.add('fa-volume-mute');
        }
        button.classList.add("fade");
    });
});

    </script>
</body>
</html>
