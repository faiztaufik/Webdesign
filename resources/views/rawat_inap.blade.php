@extends('layouts.app')
@section('content')
<section style="margin-bottom: -10px; padding-top: 80px">
    <div style="max-width: 1200px; margin: 0 auto; padding: 20px;">
        <div class="heading-text heading-section text-center" style="margin-bottom: 30px;">
            <h2 style="color: #392c92; text-align: center; font-family: 'Poppins', sans-serif; font-size: 40px;">
                Alur Rawat Inap
            </h2>
            <hr style="border: 1px solid rgb(0, 4, 255); width: 10%; margin: 15px auto 0;">
        </div>

        <ul
            style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center; padding: 0; margin: 0; list-style: none;">
            <li
                style="text-align: center; min-height: 100px; flex: 1 1 calc(16.66% - 20px); max-width: calc(16.66% - 20px); border: 1px solid #ccc; border-radius: 10px; padding: 10px; box-sizing: border-box;">
                <a href="#">
                    <img src="https://rspp.co.id/assets/img/alur/ranap/1.jpg" alt="" style="width: 100%;">
                </a>
                <span
                    style="display: block; margin-top: 10px; font-weight: 380; font-family: 'Poppins', sans-serif;">
                    Pasien mendapat surat rujukan dari poliklinik atau dari Instalasi Gawat Darurat
                </span>
            </li>

            <li
                style="text-align: center; min-height: 100px; flex: 1 1 calc(16.66% - 20px); max-width: calc(16.66% - 20px); border: 1px solid #ccc; border-radius: 10px; padding: 10px; box-sizing: border-box;">
                <a href="#">
                    <img src="https://rspp.co.id/assets/img/alur/ranap/2.jpg" alt="" style="width: 100%;">
                </a>
                <span
                    style="display: block; margin-top: 10px; font-weight: 380; font-family: 'Poppins', sans-serif;">
                    Ambil nomor antrian pada mesin antrian dan melakukan registrasi di bagian pendaftaran
                </span>
            </li>

            <li
                style="text-align: center; min-height: 100px; flex: 1 1 calc(16.66% - 20px); max-width: calc(16.66% - 20px); border: 1px solid #ccc; border-radius: 10px; padding: 10px; box-sizing: border-box;">
                <a href="#">
                    <img src="https://rspp.co.id/assets/img/alur/ranap/3.jpg" alt="" style="width: 100%;">
                </a>
                <span
                    style="display: block; margin-top: 10px; font-weight: 380; font-family: 'Poppins', sans-serif;">
                    Pasien di antar ke kamar oleh Perawat jika telah selesai registrasi dan dokumen lengkap
                </span>
            </li>

            <li
                style="text-align: center; min-height: 100px; flex: 1 1 calc(16.66% - 20px); max-width: calc(16.66% - 20px); border: 1px solid #ccc; border-radius: 10px; padding: 10px; box-sizing: border-box;">
                <a href="#">
                    <img src="https://rspp.co.id/assets/img/alur/ranap/4.jpg" alt="" style="width: 100%;">
                </a>
                <span
                    style="display: block; margin-top: 10px; font-weight: 380; font-family: 'Poppins', sans-serif;">
                    Perawat serta Dokter akan selalu memantau keadaan pasien untuk memberikan pelayanan yang terbaik
                </span>
            </li>

            <li
                style="text-align: center; min-height: 100px; flex: 1 1 calc(16.66% - 20px); max-width: calc(16.66% - 20px); border: 1px solid #ccc; border-radius: 10px; padding: 10px; box-sizing: border-box;">
                <a href="#">
                    <img src="https://rspp.co.id/assets/img/alur/ranap/5.jpg" alt="" style="width: 100%;">
                </a>
                <span
                    style="display: block; margin-top: 10px; font-weight: 380; font-family: 'Poppins', sans-serif;">
                    Jika pasien telah pulang rawat, lakukan penyelesaian administrasi dan pembayaran
                </span>
            </li>

        </ul>
    </div>
</section>
<section>
    <div class="container" style="width: 100%; padding: 20px;">
        <div class="container" style="width: 100%; padding: 20px;">
            <div class="row" style="display: flex; flex-wrap: wrap;">
                <div class="heading-text heading-section text-center"
                    style="margin-bottom: 30px; width: 100%; text-align: center;">
                    <h2 style="color: #392c92; font-size: 40px; font-family: 'Poppins', sans-serif;">
                        <span class="color-blue">Rawat Inap</span>
                    </h2>
                    <hr style="border: 1px solid rgb(0, 4, 255); width: 10%; margin: 15px auto 0;">
                </div>

                <div class="col-lg-12 facility-card"
                    style="border: 1px solid #ccc; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <div style="display: flex; align-items: center;">
                        <img src="https://rspp.co.id/uploads/img_layanan/kamar.jpg" alt="Kamar"
                            style="width: 300px; height: auto; margin-right: 20px;">
                        <div style="flex: 1;">
                            <h3 style="color: #0b4d8c; margin-top: 0; font-family: 'Poppins', sans-serif;">Rawat
                                Inap</h3>
                            <p style="margin: 0; font-weight: 300; font-family: 'Poppins', sans-serif;">Kami
                                berupaya
                                memberikan yang terbaik dalam pengobatan dan perawatan dengan suasana senyaman
                                mungkin,
                                didukung tenaga-tenaga yang professional pada bidangnya. Prinsip kami adalah
                                memberikan
                                pelayanan prima untuk semua pelanggan.
                            </p>
                        </div>
                    </div>
                    <hr
                        style="border: 1px solid rgba(123, 123, 147, 0.284); width: 100%; margin-top: 20px; margin-bottom: 20px;">
                    <div class="col-lg-12 facility-card">
                        <div class="col-md-10">
                            <h4 style="color:#94cc4d; font-family: 'Poppins', sans-serif;">Kamar Standar</h4>
                            <p>-</p>
                        </div>
                    </div>

                    <div class="col-lg-12 facility-card">
                        <div class="col-md-10">
                            <h4 style="color:#94cc4d; font-family: 'Poppins', sans-serif;">Kamar Superior</h4>
                            <p>-</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 facility-card"
            style="border: 1px solid #ccc; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); display: flex; align-items: center;">
            <img src="https://rspp.co.id/uploads/img_layanan/anak.png" alt="Kesehatan Anak"
                style="width: 300px; height: auto; margin-right: 20px;">
            <div>
                <h3 style="color: #0b4d8c; margin-top: 0; font-family: 'Poppins', sans-serif;">Kesehatan Anak
                </h3>
                <p style="margin: 0; font-weight: 300; font-family: 'Poppins', sans-serif;">Pancaran kasih
                    sayang dan kelembutan nan bersahaja dari para ahli medis dan
                    perawatan kami akan senantiasa membias pada setiap pengangan yang kami berikan
                    pada buah hati Anda. Kami juga dilengkapi dengan On site Ultrasonografi yang di
                    desain khusus untuk anak.
                </p>
            </div>
        </div>

        <div class="col-lg-12 facility-card"
            style="border: 1px solid #ccc; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); display: flex; align-items: center;">
            <img src="https://rspp.co.id/uploads/img_layanan/andrologi.jpg" alt="Andrologi"
                style="width: 300px; height: auto; margin-right: 20px;">
            <div>
                <h3 style="color: #0b4d8c; margin-top: 0; font-family: 'Poppins', sans-serif;">Andrologi</h3>
                <p style="margin: 0; font-weight: 300; font-family: 'Poppins', sans-serif;">Bagian Andrologi
                    kami memberikan layanan khusus untuk pasangan yang mengalami
                    masalah 'infertilitas', disfungsi seksual, kelambatan perkembangan pada alat
                    kemaluan, serta pemberian konseling pra nikah dan andropause. Ahli andrologi
                    kami akan membantu masalah anda dengan perhatian dan empati mendalam.
                </p>
            </div>
        </div>

        <div class="col-lg-12 facility-card"
            style="border: 1px solid #ccc; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); display: flex; align-items: center;">
            <img src="https://rspp.co.id/uploads/img_layanan/btkv.jpg"
                alt="Bedah Jantung, Thorax dan Pembuluh Darah"
                style="width: 300px; height: auto; margin-right: 20px;">
            <div>
                <h3 style="color: #0b4d8c; margin-top: 0; font-family: 'Poppins', sans-serif;">Bedah Jantung,
                    Thorax dan Pembuluh Darah</h3>
                <p style="margin: 0; font-weight: 300; font-family: 'Poppins', sans-serif;">Penatalaksanaan
                    ketidaknormalan pada vascular saat ini sangat berkembang, dengan
                    ditunjang laboratorium vascular non invasive. Sekian banyak Pasien kami telah
                    terbukti sukses menjalani pembedahan vascular dan dalam waktu dekat RSPP akan
                    segera membuka layanan Bedah Bypass Jantung.
                </p>
            </div>
        </div>

        <div class="col-lg-12 facility-card"
            style="border: 1px solid #ccc; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); display: flex; align-items: center;">
            <img src="https://rspp.co.id/uploads/img_layanan/bedah_plastik.jpg" alt="Bedah Plastik"
                style="width: 300px; height: auto; margin-right: 20px;">
            <div>
                <h3 style="color: #0b4d8c; margin-top: 0; font-family: 'Poppins', sans-serif;">Bedah Plastik
                </h3>
                <p style="margin: 0; font-weight: 300; font-family: 'Poppins', sans-serif;">Kami menolong
                    pasien-pasien dari berbagai usia dengan masalah kalainan bawaan
                    lahir, kerusakan anggota tubuh akibat kecelakaan, luka bakar dan bagi siapa saja
                    yang menginginkan penampilan estetis lebih baik. Bedah plastik juga kami lakukan
                    bila diperlukan pengembalian proporsi tubuh yang normal untuk memperbaiki
                    penampilan, rasa percaya diri dan meningkatkan fungsi secara fisiologis.
                </p>
            </div>
        </div>

        <div class="col-lg-12 facility-card"
            style="border: 1px solid #ccc; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); display: flex; align-items: center;">
            <img src="https://rspp.co.id/uploads/img_layanan/bedah_saraf.jpg" alt="Bedah Saraf"
                style="width: 300px; height: auto; margin-right: 20px;">
            <div>
                <h3 style="color: #0b4d8c; margin-top: 0; font-family: 'Poppins', sans-serif;">Bedah Saraf</h3>
                <p style="margin: 0; font-weight: 300; font-family: 'Poppins', sans-serif;">Rumah Sakit kami
                    memiliki pakar-pakar dengan reputasi sangat baik untuk menangani
                    pembedahan pada trauma kepala, tulang belakang, tumor atau kelainan-kelainan pada
                    system persyarafan, dan memiliki perpaduan yang luar biasa antara reputasi para
                    pakar dan perlatan medis yang mutakhir seperti microsurgery, perawatan laser dan
                    neuro endoscopy.
                </p>
            </div>
        </div>

        <div class="col-lg-12 facility-card"
            style="border: 1px solid #ccc; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); display: flex; align-items: center;">
            <img src="https://rspp.co.id/uploads/img_layanan/ortoped.jpeg"
                alt="Bedah Tulang (Orthopaedi & Traumatologi)"
                style="width: 300px; height: auto; margin-right: 20px;">
            <div>
                <h3 style="color: #0b4d8c; margin-top: 0; font-family: 'Poppins', sans-serif;">Bedah Tulang
                    (Orthopaedi & Traumatologi)</h3>
                <p style="margin: 0; font-weight: 300; font-family: 'Poppins', sans-serif;">Mempertahankan,
                    mengembalikan dan memperbaiki fungsi system musculoskeletal /
                    rangka dan pergerakan tubuh. Layanan unggulan di klinik kami adalah 3 O'Clinic
                    (Osteoarthritis, Osteoporosis & Obesitas); Klinik Traumatologi & Pertolongan
                    Emergensi; Minimally Invasive Spinal Surgery; Micro Surgery; Arthroscopic
                    Surgery; Arthroplasty.
                </p>
            </div>
        </div>

    </div>
    </div>
</section>
@endsection