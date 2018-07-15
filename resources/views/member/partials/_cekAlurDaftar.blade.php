@if(!isset($user->id))
    <div class="alert alert-warning" role="alert">
        <span class="p-black">Anda belum memilih kompetisi!</span>
    </div>
@elseif(!$user->lock)
    <div class="alert alert-warning" role="alert">
        <span class="p-black">Anda belum mengunci data!</span>
    </div>
@elseif($user->berkas_konfirmasi == '')
    <div class="alert alert-warning" role="alert">
        <span class="p-black">Anda belum upload berkas konfirmasi!</span>
    </div>
@elseif(!$user->konfirmasi)
    <div class="alert alert-warning" role="alert">
        <span class="p-black">Anda belum upload berkas konfirmasi!</span>
    </div>
@elseif($user->link_berkas == '')
    <div class="alert alert-warning" role="alert">
        <span class="p-black">Anda belum upload berkas berkas lomba!</span>
    </div>
@endif