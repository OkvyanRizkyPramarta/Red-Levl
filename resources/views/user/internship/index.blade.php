@extends('layouts.user.master')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Internship</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0">Home</h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Internship</h6>
        </div>
    </div>
    <!-- Page Header Start -->

    <!-- About Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-lg-12" style="color:white;">
                
                    <h1 class="display-4 text-primary text-uppercase mb-4 text-center">SOP Internship</h1>
                    <div class="col-lg-10" style="color:white;margin-left:80px;text-align:justify;">
                        <p class="m-0">
                            Internship Standard Operating Procedure
                        </p>
                        <ul style="margin-top:20px;">
                            <p class="m-0">
                                1. Purpose of the Guide
                            </p>
                            <p class="m-3">
                                Panduan ini berisi definisi prakerin, konsep prakerin, 
                                tujuan rakerin, peran, peraturan, konsekuensi, agenda dan syarat 
                                seorang peserta prakerin dinyatakan telah lulus prakerin. 
                                Pedoman ini wajib dipahami oleh peserta prakerin maupun yang 
                                berencana mendaftar prakerin, agar bisa beradaptasi dengan baik, 
                                menghindari kesalahpahaman dan mendapatkan hasil prakerin yang 
                                maksimal.
                            </p>
                        </ul>
                        <ul style="margin-top:20px;">
                            <p class="m-0">
                                2. Definition of Internship
                            </p>
                            <p class="m-3">
                                Menurut Undang-Undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan, 
                                Pemagangan adalah bagian dari sistem pelatihan kerja yang 
                                diselenggarakan secara terpadu antara pelatihan di lembaga 
                                pelatihan dengan bekerja secara langsung di bawah bimbingan dan 
                                pengawasan instruktur atau pekerja/buruh yang lebih berpengalaman, 
                                dalam proses produksi barang dan/atau jasa di perusahaan, dalam 
                                rangka menguasai keterampilan atau keahlian tertentu.
                                Prakerin (Praktik Kerja Industri) adalah kegiatan pendidikan, 
                                pelatihan dan pembelajaran yang dilaksanakan di dunia usaha atau 
                                dunia industri yang relevan dengan kompetensi (kemampuan) siswa 
                                sesuai bidangnya.
                                Dalam sistem ini, prakerin dilakukan dengan konsep pendidikan, 
                                yang mana terdapat proses pengubahan sikap dan perilaku peserta 
                                sebagai usaha mendewasakan peserta prakerin dalam hal dunia 
                                pekerjaan, yang mana disebut dengan istilah PROFESIONAL.
                            </p>
                        </ul>
                        <ul style="margin-top:20px;">
                            <p class="m-0">
                                3. GOAL
                            </p>
                            <p class="m-3">
                            “Membantu Peserta menjadi Talent Profesional”Definisi Membantu
                            Red Levl hanya berperan untuk membantu dengan memberi arahan, 
                            bimbingan, mentor, dan lain sebagainya. Namun, kunci keberhasilan 
                            untuk mencapai level profesional TERGANTUNG PADA INDIVIDU 
                            MASING-MASING.
                            </p>
                        </ul>
                        <p class="m-0">
                            Target dari sistem prakerin Red Levl Mediatama adalah:
                        </p>
                        <ul style="margin-top:20px;">
                            <p class="m-0">
                                Definisi Profesional 
                            </p>
                            <ul style="margin-top:20px;">
                                <p class="m-3">1. Cerdas</p>
                                <p class="m-3">Meliputi namun tidak terbatas: </p>
                                <p class="m-3">    ✅ Inisiatif </p>
                                <p class="m-3">    ✅ Kreatif </p>
                                <p class="m-3">    ✅ Mampu menganalisa masalah dengan tepat </p>
                                <p class="m-3">    ✅ Open mind </p>
                                <p class="m-3">    ✅ Peka terhadap masalah </p>
                                <p class="m-3">    ✅ Perencanaan yang baik </p>
                                <p class="m-3">    ✅ Problem Solving yang baik </p>
                            </ul>
                        </ul>
                        <ul style="margin-top:20px;">
                            <ul style="margin-top:20px;">
                                <p class="m-3"> 2. Jujur </p>
                                <p class="m-3">Meliputi namun tidak terbatas:</p>
                                <p class="m-3">    ✅ Detail</p>
                                <p class="m-3">    ✅ Fokus pada kebenaran dan kenyataan</p>
                                <p class="m-3">    ✅ Kesesuaian antara ucapan, catatan dan perbuatan</p>
                                <p class="m-3">    ✅ Tegas</p>
                                <p class="m-3">    ✅ Menghindari asumsi</p>
                                <p class="m-3">    ✅ Transparan</p>
                            </ul>
                        </ul>
                        <ul style="margin-top:20px;">
                            <ul style="margin-top:20px;">
                                <p class="m-3"> 3. Komunikatif </p>
                                <p class="m-3"> Meliputi namun tidak terbatas: </p>
                                <p class="m-3"> ✅ Berpikir dan bersikap positif </p>
                                <p class="m-3"> ✅ Mampu berkomunikasi dengan client </p>
                                <p class="m-3"> ✅ Mampu membuat dokumentasi yang baik </p>
                                <p class="m-3"> ✅ Pendengar yang baik </p>
                                <p class="m-3"> ✅ Penuh keyakinan namun tidak over acting </p>
                                <p class="m-3"> ✅ Respect </p>
                                <p class="m-3"> ✅ Teamwork yang baik </p>
                            </ul>
                        </ul>
                        <ul style="margin-top:20px;">
                            <ul style="margin-top:20px;">
                                <p class="m-3"> 4. Kredibel </p>
                                <p class="m-3"> Meliputi namun tidak terbatas: </p>
                                <p class="m-3">    ✅ Bekerja keras, cerdas dan tuntas </p>
                                <p class="m-3">    ✅ Bersikap efektif dan efisien </p>
                                <p class="m-3">    ✅ Disiplin </p>
                                <p class="m-3">    ✅ Fokus pada goal </p>
                                <p class="m-3">    ✅ Kebersihan </p>
                                <p class="m-3">    ✅ Pantang menyerah </p>
                                <p class="m-3">    ✅ Tanggung jawab </p>
                                <p class="m-3">    ✅ Tidak mengabaikan kualitas </p>
                            </ul>
                        </ul>
                        <ul style="margin-top:20px;">
                            <p class="m-0">
                                4. Role
                            </p>
                            <p class="m-3">
                                Peran utama anggota prakerin adalah sebagai Tim Support yang akan 
                                membantu tim inti maupun perusahaan, baik secara teknis maupun 
                                non-teknis. Namun apabila anggota prakerin memiliki potensi untuk 
                                menjadi tim inti, maka mempunyai kemungkinan akan dimasukkan ke 
                                dalam tim inti. 
                                <p class="m-3"> 
                                    Tim Support → Bertanggung jawab kepada Tim Inti dan Owner 
                                </p> 
                                <p class="m-3"> 
                                    Tim Inti → Bertanggung jawab langsung kepada Client dan Owner
                                </p> 
                            </p>
                        </ul>
                        <ul style="margin-top:20px;">
                            <p class="m-0">
                                5. Rules
                            </p>
                            <p class="m-3">
                                Menurut Undang-Undang Nomor 13 Tahun 2003 tentang Ketenagakerjaan, 
                                Pemagangan adalah bagian dari sistem pelatihan kerja yang 
                                diselenggarakan secara terpadu antara pelatihan di lembaga 
                                pelatihan dengan bekerja secara langsung di bawah bimbingan dan 
                                pengawasan instruktur atau pekerja/buruh yang lebih berpengalaman, 
                                dalam proses produksi barang dan/atau jasa di perusahaan, dalam 
                                rangka menguasai keterampilan atau keahlian tertentu.
                                Prakerin (Praktik Kerja Industri) adalah kegiatan pendidikan, 
                                pelatihan dan pembelajaran yang dilaksanakan di dunia usaha atau 
                                dunia industri yang relevan dengan kompetensi (kemampuan) siswa 
                                sesuai bidangnya.
                                Dalam sistem ini, prakerin dilakukan dengan konsep pendidikan, 
                                yang mana terdapat proses pengubahan sikap dan perilaku peserta 
                                sebagai usaha mendewasakan peserta prakerin dalam hal dunia 
                                pekerjaan, yang mana disebut dengan istilah PROFESIONAL.
                            </p>
                            <p class="m-3"> Daily Activity Report: </p>
                            <ul style="margin-top:20px;">
                                <li><p class="m-3"> Laporan pencapaian kemarin serta hambatan </p></li>  
                                <li><p class="m-3"> Laporan target hari ini </p></li> 
                                <li><p class="m-3"> Inspeksi dari anggota lain (pertanyaan, saran, informasi, dll.) </p></li> 
                                <li><p class="m-3"> Adaptasi target hari ini, jika diperlukan penyesuaian setelah diinspeksi </p></li>   
                            </ul>
                            <p class="m-3"> Perizinan: </p>
                            <ul style="margin-top:20px;">
                                <li><p class="m-3"> Izin tidak masuk kantor bukan berarti melalaikan tugas yang sebelumnya telah diberikan. </p></li>  
                                <li><p class="m-3"> Izin harus mengetahui anggota tim dan pembimbing. </p></li> 
                                <li><p class="m-3"> Izin selambat-lambatnya diajukan H-1 pada jam kerja dan hari kerja dengan persetujuan anggota tim (berlaku kelipatan). Lebih dari itu pembimbing berhak menolak pengajuan izin. </p></li> 
                                <li><p class="m-3"> Izin pada hari H (mendadak) hanya berlaku untuk kondisi special seperti orang tua sakit parah, meninggal, kendaraan mogok di perjalanan, kecelakaan, musibah, dan semacamnya. </p></li>   
                            </ul>
                            <p class="m-3"> Konsekuensi dalam Prakerin </p>
                            <ul style="margin-top:20px;">
                                <li><p class="m-3"> Tugas wajib diselesaikan di awal (weekday). Jika tidak selesai, maka peserta prakerin diwajibkan masuk di weekend untuk menyelesaikan tugasnya. </p></li>  
                                <li><p class="m-3"> Jika 2 minggu sebelum tanggal berakhir prakerin masih belum menuntaskan DoD (Syarat Kelulusan Prakerin), maka durasi prakerin akan diperpanjang selama 2 minggu, berlaku kelipatan hingga DoD telah tuntas. </p></li> 
                                <li><p class="m-3"> Jika dalam masa Training, peserta prakerin tidak menunjukkan perkembangan yang baik, tim Prakerin atau mentor akan inspeksi terkait hambatan atau potensi bidang lain. Jika ternyata memang ada potensi bidang lain yang lebih baik, maka peserta prakerin akan dipindahkan ke posisi yang lain. </p></li> 
                                <li><p class="m-3"> Pelanggaran yang bersifat menengah akan diberikan SP 2 dan peserta dikembalikan sementara ke sekolah/kampus untuk dilakukan pembinaan (1 minggu). </p></li>   
                                <li><p class="m-3"> Jika peserta prakerin melakukan kesalahan teknis, selama masih ada niat baik dan tanggung jawab, maka masih bisa ditoleransi. Namun jika peserta prakerin melanggar dan atau terlibat dalam pelanggaran norma hukum, perilaku, sopan santun atau adab dalam belajar, maka peserta prakerin akan diberhentikan dari prakerin (dikeluarkan).</p></li>
                            </ul>
                            <p class="m-3"> Adab dalam belajar: </p>
                            <ul style="margin-top:20px;">
                                <li><p class="m-3"> Bersungguh-sungguh dalam belajar </p></li>  
                                <li><p class="m-3"> Bertanggung jawab terhadap tugas yang diberikan</p></li> 
                                <li><p class="m-3"> Disiplin</p></li> 
                                <li><p class="m-3"> Jujur</p></li>   
                                <li><p class="m-3"> Mau berbagi ilmu</p></li>
                                <li><p class="m-3"> Memiliki niat atau tujuan yang baik</p></li>
                                <li><p class="m-3"> Memiliki persiapan yang terbaik</p></li>
                                <li><p class="m-3"> Mencatat setiap ilmu yang didapatkan</p></li>
                                <li><p class="m-3"> Sabar</p></li>
                            </ul>
                            <p class="m-3"> Syarat dan Ketentuan Prakerin:   </p>
                            <ul style="margin-top:20px;">
                            <p class="m-3"> 1. Soft Skills  </p>
                                <ul style="margin-top:20px;">
                                    <li><p class="m-3"> Analytic skills</p></li>  
                                    <li><p class="m-3"> Attitude</p></li> 
                                    <li><p class="m-3"> Collaboration</p></li> 
                                    <li><p class="m-3"> Communication</p></li>   
                                    <li><p class="m-3"> Creativity</p></li>
                                    <li><p class="m-3"> Decision Making</p></li>
                                    <li><p class="m-3"> Emotional Intelligence</p></li>
                                    <li><p class="m-3"> Empathy</p></li>
                                    <li><p class="m-3"> Flexibility</p></li>
                                    <li><p class="m-3"> Initiative</p></li>
                                    <li><p class="m-3"> Leadership</p></li>
                                    <li><p class="m-3"> Self-Awareness</p></li>
                                    <li><p class="m-3"> Teamwork</p></li>
                                    <li><p class="m-3"> Work Ethic</p></li>
                                </ul>
                            </ul>
                            <ul style="margin-top:20px;">
                            <p class="m-3"> 2. Hard Skills</p>
                                <ul style="margin-top:20px;">
                                    <li><p class="m-3"> An industry-specific certification</p></li>  
                                    <li><p class="m-3"> Bookkeeping</p></li> 
                                    <li><p class="m-3"> Coding ability</p></li> 
                                    <li><p class="m-3"> Computer skills</p></li>   
                                    <li><p class="m-3"> Data mining</p></li>
                                    <li><p class="m-3"> Foreign language skills</p></li>
                                    <li><p class="m-3"> SEO marketing</p></li>
                                    <li><p class="m-3"> Typing speed</p></li>
                                </ul>
                            </ul>
                            <ul style="margin-top:20px;">
                            <p class="m-3"> 3. Support Device</p>
                                <ul style="margin-top:20px;">
                                    <li><p class="m-3"> Mobile Phone</p></li>   
                                    <li><p class="m-3"> Personal Computer/Laptop</p></li>
                                </ul>
                            </ul>
                            <ul style="margin-top:20px;">
                            <p class="m-3"> Tahapan Pemberhentian Prakerin:</p>
                                <li>
                                    <p class="m-3"> 
                                        Apabila telah melanggar peraturan di atas, maka akan 
                                        mendapatkan teguran terlebih dahulu. Apabila masih 
                                        mengulangi kesalahan yang sama setelah mendapat teguran, 
                                        maka akan mendapatkan surat peringatan 1 dan 2 .
                                    </p>
                                </li>   
                                <li>
                                    <p class="m-3"> 
                                        Apabila telah mendapat surat peringatan yang terakhir, 
                                        maka akan ada pemberhentian hubungan prakerin dan 
                                        anggota prakerin akan dikembalikan ke sekolah atau 
                                        kampusnya, jika prakerin wajib dari sekolah/kampus.
                                    </p>
                                </li>
                            </ul>      
                        </ul>
                        <ul style="margin-top:20px;">
                            <p class="m-0">
                                6. Definition of Done (DoD) Prakerin
                            </p>
                            <p class="m-3">
                                Ada beberapa syarat seorang prakerin dapat dikatakan "SELESAI" 
                                atau lulus prakerin di Red Levl Mediatama: 
                            </p>
                            <p class="m-3"> a. Menyelesaikan minimal 1 (satu) Project </p>
                            <p class="m-3"> b. Selalu mengisi Daily Journal </p>
                            <p class="m-3"> c. Menyiapkan Sertifikat Prakerin (hubungi admin) </p>
                            <p class="m-3"> d. Membuat Slide presentasi journey recap </p>
                            <p class="m-3"> e. Menyelesaikan Laporan kampus/sekolah </p>
                            <p class="m-3"> f. Menyiapkan form Nilai untuk kampus/sekolah untuk diberikan pada mentor </p>
                            <p class="m-3"> g. Mengisi dan menandatangani form pernyataan (hubungi admin) </p>
                            </p>
                        </ul>
                        <ul style="margin-top:20px;">
                            <p class="m-0">
                                7. Congratulations
                            </p>
                            <p class="m-3">
                                Selamat, Anda telah selesai mempelajari sistem prakerin di Red levl Mediatama!
                            </p>
                        </ul>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- About Info Start -->
    <div class="container-fluid py-5">
        <div class="container pb-3">
            <div class="row justify-content-md-center">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fas fa-3x fa-phone-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <a href="{{ route('login') }}" style="text-decoration:none" target="_blank" rel="noopener noreferrer">
                                <h5 class="text-uppercase">&nbsp; &nbsp; Join Internship</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Info End -->

    @endsection