@extends('template/temp')

@section('title', 'Sertifikat | buatPlanner')

@section('container')
<section class="page-section bg-white">
    <div class="container px-4 px-lg-5">
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h2 class="text-center mt-0">Isi Templatemu!</h2>
                <hr class="divider" />
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 mt-5 justify-content-center mb-5">
            <div class="col-lg-6 text-center">
                <form>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" type="text" placeholder="Nama Penerima"/>
                        <label>Nama Penerima</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="tujuan" type="text" placeholder="Penghargaan Atas"/>
                        <label>Penghargaan Atas</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="petinggi1" type="text" placeholder="Petinggi 1"/>
                        <label>Petinggi 1</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="statuspetinggi1" type="text" placeholder="Status Petinggi 1"/>
                        <label>Status Petinggi 1</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="petinggi2" type="text" placeholder="Petinggi 2"/>
                        <label>Petinggi 2</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="statuspetinggi2" type="text" placeholder="Status Petinggi 2"/>
                        <label>Status Petinggi 2</label>
                    </div>
                </form>
            </div>

            <!-- <div class="col-lg-6 text-center">
                <canvas class="text-center" id="canvas" height="700px" width="520px" ></canvas><br>
                <div class="d-grid mt-2 ml-5" style="width: 520px;"><a  class="btn btn-primary btn-xl disabled"href="#" id="download-jpg-btn">Download!</a>&nbsp;&nbsp;</div>
                <!-- <div class="d-grid"><button class="btn btn-light btn-xl disabled" id="submitButton" type="submit">Submit</button></div> -->
                <!--<a href="#" id="download-pdf-btn">Downlaod PDF</a>-->
                <!-- <script src="/js/planner.js"></script>
            </div>  -->
            <div class="col-md-6 mb-3">
                <canvas class="text-center" id="canvassertif" height="350px" width="500px" ></canvas><br>
                <div class="text-center"><a  class="btn btn-primary btn-xl" href="#" id="download-btn">Download!</a>&nbsp;&nbsp;</div>
                <!-- <a class="btn btn-primary" href="#" id="download-btn" role="button">Download Sertifikat</a> -->
                <script src="/js/sertifikat.js"></script>
            </div>
        </div>
    </div>
</section>
@endsection