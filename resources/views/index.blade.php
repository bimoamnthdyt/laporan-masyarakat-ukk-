@extends('layout.main')

@section('google_marker')
<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>
    function initialize() {
        var propertiPeta = {
            center: new google.maps.LatLng(-6.3841183,106.8697838,21),
            zoom: 10,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(-6.3841183,106.8697838,21),
            map: peta
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);

</script>

@endsection

@section('title','LAPOR DONG! - Layanan Pengaduan Online Masyarakat')

@section('content')
<!-- section1 -->
<div class="box-tentang">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 custom-section-tentang">
                <h2>LAPOR DONG!</h2>
                <p>LAPOR DONG dibuat oleh siswa SMK Taruna Bhakti untuk <br> tugas Ukk
                </p>
            </div>
        </div>
    </div>
</div>

<!-- <div class="custom-sizing1">
        <div class="container">
        <h1>Tentang</h1>
        </div>
    </div> -->


@endsection

@section('footer')
<footer class="py-5 custom-footer">
    <div class="container">
        <div class="contact">
            <h4>Hubungi</h4>
        </div>
        <div class="box3">
            <h3>Got a question for us?</h3>
            <p>Questions? Interested for selling product or buying in this unique platform <br> but need to understand
                how we
                work or need to talk?</p>
        </div>

        <div class="box4">

        </div>
    </div>
    <footer>
        <div class="alamat">
            <div class="text-center">
                <h4>LAPOR DONG!</h4>
                <p>Curug, Kec. Cimanggis, Kota Depok <br> Jawa Barat 16453</p>
            </div>
            <div id="googleMap" style="width:100%; height:450px;"></div>
        </div>
    </footer>
    @endsection
