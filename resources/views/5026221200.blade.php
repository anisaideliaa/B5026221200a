<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Portofolio</title>
    <link rel="stylesheet" href="uts/css/styles.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
</head>

<body>
    <header class="header">
        <a href="/" class="logo">MyPort.​</a>
        <nav class="navbar">
            <a href="#homes">Home</a>
            <a href="#about">About</a>
            <a href="#skill">Skills</a>
            <a href="#contact">Contact</a>
            <a href="#tugas">Project</a>
            <a href="uts/images/myCVATS.png" target="_blank" class="btn-box" id="cv">Resume</a>
        </nav>
    </header>

    <!-- Ini bagian Home -->
    <section id="homes" class="home" >
        <div class="home-image">
            <img src="uts/images/diriku3.png" alt="Anisa Fatin Idelia" width="450">
        </div>
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Anisa Fatin Idelia</h1>
            <h3>Interested in <span class="text"></span></h3>
            <p>I'm a Information System Undergraduate Students 2022 in Institut Teknologi Sepuluh Nopember
                <br>
            </p>

            <div class="home-sci">
                <a href="https://instagram.com/anisaideliaa?igshid=OGQ5ZDc2ODk2ZA==" target="_blank"><i class='bx bxl-instagram'></i></a>
                <a href="https://wa.me/6285264584555" target="_blank"><i class='bx bxl-whatsapp'></i></a>
                <a href="https://www.facebook.com/anisa.fatin.9085" target="_blank"><i class='bx bxl-facebook'></i></a>
                <a href="https://t.me/anisaideliaa" target="_blank" ><i class='bx bxl-telegram'></i></a>
            </div>
            <a href="#about" class="btn-box">More About Me</a>
        </div>
    </section>

    <!-- Ini bagian About -->
    <section  id="about" class="about">
        <div class="about-text">
            <h2>About<span>Me</span></h2>
            <p>Perkenalkan saya Anisa Fatin Idelia mahasiswi semester 3 dari Institut Teknologi Sepuluh Nopember pada
                Fakultas Teknologi Elektro dan Informatika Cerdas jurusan Sistem Informasi. Saya adalah seorang individu
                yang bersemangat tentang teknologi dan data science.
                Dengan kemampuan komunikasi yang baik, saya bisa menjelaskan konsep teknis kepada yang non-teknis, dan
                saya selalu mencari peluang untuk terus belajar dan berinovasi
                dalam dunia teknologi yang terus berubah. Saya percaya bahwa teknologi adalah alat yang kuat untuk
                mencapai tujuan bisnis dan melayani masyarakat, dan saya siap untuk membantu klien dan tim saya mencapai
                keberhasilan.</p>

        </div>
        <div class="about-img">
            <img src="uts/images/dirikulagi.png" alt="Anisa Fatin Idelia" width="450">
        </div>
    </section>
    <h1 id="skill" class="sub-title"><span>My</span>Skills & Education</h1>

    <!-- Ini bagian Skills -->
    <section id="skills">
        <div class="skills main-container">
            <div class="skills-grid">
                <div class="skills-left">
                    <div class="education">
                        <div class="line">
                            <div></div>
                        </div>
                        <div class="education-info">
                            <h4 class="education-title">Institut Teknologi Sepuluh Nopember</h4>
                            <p>S1 Sistem Informasi </p>
                            <h4 class="education-years">2022 - now</h4>
                        </div>
                    </div>
                    <div class="education">
                        <div class="line">
                            <div></div>
                        </div>
                        <div class="education-info">
                            <h4 class="education-title">SMAN 4 Sidoarjo</h4>
                            <p>Jurusan IPA</p>
                            <h4 class="education-years">2019 - 2022 </h4>
                        </div>
                    </div>
                    <div class="education">
                        <div class="line">
                            <div></div>
                        </div>
                    </div>
                </div>

                <div class="skills-right">
                    <p>
                        Selama beberapa tahun terakhir, saya terus belajar di bidang editing, programming, dan
                        bereksperimen dengan teknologi dan kerangka kerja baru, dan di sini Anda dapat melihat ringkasan
                        keahlian saya.
                    </p>

                    <div class="skills-list">
                        <ul>
                            <li>Java</li>
                            <li>HTML</li>
                            <li>Javascript</li>
                            <li>CSS</li>
                        </ul>
                        <ul>
                            <li>Microsoft Office Word</li>
                            <li>Microsoft Office Power Point</li>
                            <li>Filmora 9</li>
                            <li>Adobe Photoshop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ini bagian Contact -->
    <section id="contact" class="contact" >
        <div class="contact-text">
            <h1>Contact <span>Me</span></h1>
            <h4>Ask Any Question!</h4>
        </div>

        <div class="contact-form">
            <form id="form" action="http://127.0.0.1:8000/success" method="GET">
                <div class="input-control">
                    <input id="username" name='username' type="text" placeholder="Enter Your Name">
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <input id="email" name='username' type="text" placeholder="Enter Your Email">
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <input id="subject" name='username' type="text" placeholder="Enter Your Subject">
                    <div class="error"></div>
                </div>
                <div class="input-control">
                    <textarea id="message" name='username' cols="40" rows="10" placeholder="Enter Your Message"></textarea>
                    <div class="error"></div>
                </div>

                <input type="submit" value="submit" class="send" id="submit">
            </form>
        </div>
    </section>

    <!-- Ini bagian tugas -->
    <section id="tugas" class="tugas1" >
        <div class="tugas-text">
            <h1 id="skill" class="sub-title"><span>My</span>Project</h1>
            <li><a href="http://127.0.0.1:8000/replika" target="blank">Replika</a></li>
            <li><a href="http://127.0.0.1:8000/tugasLayout" target="blank">Layout</a></li>
            <li><a href="http://127.0.0.1:8000/latihanPertama" target="blank">Latihan Pertama</a></li>
            <li><a href="http://127.0.0.1:8000/latihanKedua" target="blank">Latihan Kedua</a></li>
            <li><a href="http://127.0.0.1:8000/latihanKetiga" target="blank">Latihan Ketiga</a></li>
            <li><a href="http://127.0.0.1:8000/latihanKeempat" target="blank">Latihan Keempat</a></li>
            <li><a href="http://127.0.0.1:8000/latihanKelima" target="blank">Latihan Kelima</a></li>
            <li><a href="http://127.0.0.1:8000/latihanKeenam" target="blank">Latihan Keenam</a></li>
            <li><a href="http://127.0.0.1:8000/latihanKetujuh" target="blank">Latihan Ketujuh</a></li>
        </div>
    </section>

    <script src="uts/main.js"></script>

</body>

</html>
