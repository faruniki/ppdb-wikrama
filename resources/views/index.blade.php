@extends('layout')

@section('content')

<link rel="stylesheet" href="{{asset('assets/css/index.css')}}">


<div class="atas">
<header class="headernav">
    <a href="#" class="logo">SMK WIKRAMA BOGOR</a>
    <nav class="navbar">
        <li class="homenav">HOME</li>
        <li>MAJORS</li>
        <li>TESTIMONIAL</li>
        <li>CONTACT</li>
        <li>LOGIN</li>
    </nav>
</header>
<p class="welcome">SELAMAT DATANG</p>
<p class="ppdb-hl">PENDAFTARAN PESERTA DIDIK BARU<br>SMK WIKRAMA BOGOR<br>TELAH DIBUKA</p>
<p class="segera">Segera daftarkan dirimu ke SMK Wikrama Bogor<br>dengan menekan tombol pendaftaran dibawah</p>
<p class="button-daftar"><a href="/register">DAFTAR</a></p>
<center class="center1">
    <div class="batas1"></div>
    <div class="gariscui"></div>
</center>
<div class="bawah-hl">
    <div class="satu">
        <center>
            <p class="motto-judul">MOTTO</p>
            <p class="motto-desk">Ilmu yang Amaliah, Amal yang<br>Ilmiah, Akhlaqul Karimah</p>
        </center>
    </div>
    <div class="dua">
    <center>
            <p class="affirmation-judul">AFFIRMATION</p>
            <p class="affirmation-desk">Padamu Negeri, kami berjanji.<br>Lulus Wikrama, siap membangun negeri.</p>
        </center>
    </div>
    <div class="tiga">
    <center>
            <p class="attitude-judul">ATTITUDE</p>
            <p class="attitude-desk">Aku ada<br>Lingkunganku bahagia</p>
        </center>
    </div>
</div>
<div class="majors">
    <div class="majors-select">
        <p class="majors-judul">MAJORS</p>
        <ul class="majors-list">
            <li href="#" class="pplg">PPLG</li>
            <li href="#" class="tjkt">TJKT</li>
            <li href="#" class="dkv">DKV</li>
            <li href="#" class="pmn">PMN</li>
            <li href="#" class="mplb">MPLB</li>
            <li href="#" class="kln">KLN</li>
            <li href="#" class="htl">HTL</li>
        </ul>
    </div>
    <div class="majors-desk">
        <div class="majors-desk-isi">
            <p class="pplg-h1">PERKEMBANGAN PERANGKAT LUNAK DAN GAME</p>
            <p class="pplg-h2">PENJELASAN</p>
            <p class="pplg-p">Jurusan ini mempelajari dan mendalami cara-cara mengembangkan<br>perangkat lunak. Mulai dari pembuatan, pemeliharaan, manajemen<br>kualitas, dan manajemen organisasi pengembangan perangkat lunak.<br><br>
            Selain itu, jurusan PPLG juga berhubungan dengan software komputer<br>seperti pembuatan aplikasi, website, game dan semua yang<br>berhubungan dengan pemrograman. Singkatnya, jurusan PPLG erat<br>kaitannya dengan coding, desain, dan algoritma.</p>
            <p class="pplg-h2-2">KEAHLIAN</p>
            <p class="pplg-p-2">Desktop Programming, Web Programming,<br>Mobile Programming, Bussiness Analyst,<br>Database Administration.</p>
        </div>
        <img src="assets/img/majors-pplg.png" alt="" class="majors-image">
        <div class="button">
            <button class="m-button"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="m-button"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
    </div>
</div>
<div class="pertengahan">
    <center>
        <p class="testi-judul">TESTIMONIAL</p>
    </center>
    <div class="testimonial">
        <div class="testi-1">
            <img src="assets/img/fajrul.jpeg" alt="" class="profile-testi">
                <p class="nama">Reza Rahadian</p>
                <p class="lulusan">Lulusan RPL</p>
                <p class="testi-isi">Disini saya dibekali<br>ilmu mengenai dunia<br>kerja, juga potensi<br>saya dimaksimalkan<br>agar bekal saya dalam<br>dunia kerja tercukupi</p>
                <p class="testi-from">??? Full Stack Dev<br>at Microsoft</p>
        </div>
        <div class="testi-2">
        <img src="assets/img/nichol.jpg" alt="" class="profile-testi">
                <p class="nama">Jefri Nichol</p>
                <p class="lulusan">Lulusan RPL</p>
                <p class="testi-isi">Selama saya bersekolah disini, saya di bekali banyak sekali ilmu<br>untuk mempersiapkan<br>diri saya dalam<br>dunia kerja</p>
                <p class="testi-from">??? Game Developer<br>at Supercell</p>
        </div>
        <div class="testi-3">
        <img src="assets/img/pevita.jpg" alt="" class="profile-testi">
                <p class="nama">Pevita Pearce</p>
                <p class="lulusan">Lulusan BDP</p>
                <p class="testi-isi">Sekolah yang tepat<br>untuk mencari ilmu, bersosialisasi, bersikap, dan akan diberikan bekal untuk mempersiapkan dunia kerja</p>
                <p class="testi-from">??? CEO<br>at iBox Indonesia</p>
        </div>
        <div class="testi-4">
        <img src="assets/img/fiersa.jpeg" alt="" class="profile-testi">
                <p class="nama">Fiersa Besari</p>
                <p class="lulusan">Lulusan MMD</p>
                <p class="testi-isi">Bukan hanya pelajaran kejuruan atau umum yang dipelajari. Namun cara bersikap, bersosialisasi, dan sifat pun diasah agar siap di dunia kerja</p>
                <p class="testi-from">??? Proffesional<br>Photographer</p>
        </div>
    </div>
    <center>
        <p class="about-judul">ABOUT US</p>
    </center>
    <div class="about-us">
        <div class="container2">
            <div class="text-about">
                <p class="p-about">In sodales pulvinar ante, et blandit ex. Fusce sodales, purus ac sagittis pellentesque, ante mauris porttitor eros, commodo venenatis neque est ut tortor. Donec maximus lectus non metus tempor, eu blandit lorem aliquam. Morbi et quam dapibus, mattis lorem non, ornare tellus. Phasellus faucibus scelerisque purus, quis tincidunt mi. Aenean ut urna magna. Ut sed magna porta, tempus ipsum ut, viverra dui. Praesent gravida nec justo sed rutrum. In quis iaculis turpis.<br><br>Nulla ut velit gravida, egestas lectus vel, fermentum turpis. Nullam ut lacus vehicula leo consequat euismod. Curabitur id urna in nibh viverra efficitur nec at tellus. Quisque placerat metus a consectetur imperdiet. Suspendisse ac tortor elementum, viverra sem quis, dictum dui. Curabitur enim urna, volutpat sed pharetra ornare, fringilla</p>
            </div>
            <div class="photo-about">
                <div class="photo-1"></div>
                <div class="photo-2"></div>
            </div>
        </div>
    </div>
</div>
<div class="bawah">
    <p class="contact-judul">CONTACT</p>
    <div class="contact">
        <img src="assets/img/logo-wk.png" alt="" class="logo-contact">
        <p class="contact-us">CONTACT US</p>
        <p class="contact-addres">Jl. Raya Wangun No.21, RT.01/RW.06, Sindangsari,<br>Kec. Bogor Tim., Kota Bogor, Jawa Barat 16146</p>
        <p class="prohumasi">prohumasi@smkwikrama.net</p>
        <p class="gokil-ah">CS1 <b>+6281909242411</b><br>CS2 <b>+6281919242411</b></p>
        <form action="#" class="form-contact">
            <input class="anakan-form" type="text" placeholder="Full Name"> <br>
            <input class="anakan-form" type="text" placeholder="Email Address"> <br>
            <input class="anakan-form" type="text" placeholder="Message"> <br>
            <input class="submit-coi" type="submit" value="SEND">
        </form>
    </div>
</div>
<footer>
        <div class="footer-content">
            <h3>SMK Wikrama Bogor</h3>
            <p>Padamu Negeri, Kami Berjanji. Lulus Wikrama, Siap Membangun Negeri.</p>
            <ul class="socials">
                <li><a target="_blank" href="https://web.facebook.com/smkwikrama/?locale=id_ID&_rdc=1&_rdr"><i class="fa fa-facebook"></i></a></li>
                <li><a target="_blank" href="https://twitter.com/smkwikrama?lang=en"><i class="fa fa-twitter"></i></a></li>
                <li><a target="_blank" href="https://www.google.com/search?q=SMK+Wikrama+Bogor&rlz=1C1CHBD_enID1030ID1030&sxsrf=AJOqlzU-v9bSghbRfiFlTlk5bf1XmmtECg%3A1673771134277&ei=frjDY6rKEKrAz7sP56K1-AU&ved=0ahUKEwiqgZOvk8n8AhUq4HMBHWdRDV8Q4dUDCA8&uact=5&oq=SMK+Wikrama+Bogor&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzILCC4QgAQQxwEQrwEyBQgAEIAEMgUIABCABDIFCAAQgAQyBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB46BAgjECc6CAgAELEDEJECOgUIABCRAjoOCC4QgAQQsQMQxwEQ0QM6CAgAELEDEIMBOggIABCABBCxAzoOCC4QgAQQsQMQgwEQ1AI6BAgAEEM6CgguEMcBENEDEEM6CAguELEDEIAEOgsILhCABBDHARDRAzoOCC4QrwEQxwEQ1AIQgAQ6CggAEIAEEIcCEBQ6DgguEIAEEMcBEK8BENQCOhAILhCABBCHAhDHARCvARAUOgsILhCvARDHARCABDoFCAAQhgM6BwgjELACECc6DQguEK8BEMcBEIAEEA06DQguEIAEEMcBEK8BEA06BwgAEIAEEA06BggAEB4QDToSCC4QgAQQhwIQxwEQrwEQDRAUSgQIQRgASgQIRhgAUABY3yZg7ShoBnABeAGAAd4BiAGHGZIBBjEuMjAuMpgBAKABAcABAQ&sclient=gws-wiz-serp"><i class="fa fa-google-plus"></i></a></li>
                <li><a target="_blank" href="https://www.youtube.com/@multimediawikrama7482"><i class="fa fa-youtube"></i></a></li>
                <li><a target="_blank" href="https://www.linkedin.com/school/smkwikramabogor/"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2023 Nazib Akbar</p>
        </div>
    </footer>
</div>

@endsection