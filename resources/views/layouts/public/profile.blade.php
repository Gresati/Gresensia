@extends('layouts.public.app')
@section('content')
<section id="event-list" class="event-list">
  <div class="container">

    <div class="row text-center">
      <div class="col-md-6 d-flex align-items-stretch" style="margin: 0 auto;"> <!-- Tambahkan style="margin: 0 auto;" di sini -->
        <div class="card">
          <div class="card-img">
            <img src="{{asset('img/image 6.png')}}" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Gresensia Rosadelima Ati</h5>
            <p class="fst-italic text-center">06 Juli 2003</p>
            <p class="card-text">Seorang mahasiswa Sistem Informasi di Universitas Mercu Buana Yogyakarta yang memiliki keinginan untuk berkarir di bidang Data.</p>
            <p class="card">Soft Skill: <br>-Time Management <br>-Creative Thinking
                <br><br> Hard Skill: <br> -Pentaho <br>-Laravel <br>-Ms.Office     
            </p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Event List Section -->
@endsection
