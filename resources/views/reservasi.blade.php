@extends('layouts.app')
@section('content')
<div class="container" style="max-width: 800px; background-color: #f9f9f9; border-radius: 12px; padding: 40px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); margin-top: 80px; margin-bottom: 80px">
    <h2 class="text-center" style="color: #392c92; font-family: 'Poppins', sans-serif; font-size: 36px; margin-bottom: 20px;">
        Form Reservasi
    </h2>
    <form id="reservationForm">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" placeholder="Masukkan nama lengkap" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Masukkan email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="tel" class="form-control" id="phone" placeholder="Masukkan nomor telepon" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Tanggal Reservasi</label>
            <input type="date" class="form-control" id="date" required>
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Waktu Reservasi</label>
            <input type="time" class="form-control" id="time" required>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#successModal" style="width: 100%; padding: 10px; font-size: 16px;">Kirim Reservasi</button>
    </form>
</div>

<div class="modal" tabindex="-1" role="dialog" id="successModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Reservasi Berhasil</h5>         
        </div>
        <div class="modal-body">
          <p>Terima kasih atas reservasi Anda. Kami akan menghubungi Anda segera untuk konfirmasi lebih lanjut.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary close" data-bs-dismiss="modal" aria-label="Close">tutup</button>          
        </div>
      </div>
    </div>
  </div>
@endsection