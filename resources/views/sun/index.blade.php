@extends('sun.layouts.admin')

@section('content')
<div class="container">
  <center>
     <div class="row">
        <div class="col-lg-6">
          <img src="/sun/img/sun_sun.png" height="180px" class="img-circle"/>
          <div style="font-weight: 600;font-size: 20pt;">
             +{{$weather["temp"]}} &deg;С
          </div>
          <div  style="font-weight: 600;font-size: 20pt;">
             {{$weather["pressure"]}} мм рт.

          </div>

        </div>
        <div class="col-lg-6">
          <div style="font-weight: 600;font-size: 130pt;color:green;">
          {{$indexSafe}}
          </div>
        </div>
     </div>
     <div class="row">
        <div class="col-lg-4">
          <div style="font-weight: 600;font-size: 20pt;">
           UV
          </div>
          <div style="font-weight: 600;font-size: 20pt;color:Gold; background-color:gray;">
           {{$uv}}
          </div>

        </div>
        <div class="col-lg-4">
          <div style="font-weight: 600;font-size: 20pt;">
           ECO
          </div>
          <div style="font-weight: 600;font-size: 20pt; color:SpringGreen;background-color:gray;">
            @if($eco == 1)
              Normal
            @endif
          </div>

        </div>
        <div class="col-lg-4">
          <div style="font-weight: 600;font-size: 20pt;">
           Wind
          </div>
          <div style="font-weight: 600;font-size: 20pt;color:Aqua;background-color:gray;">
           {{$wind["speed"]}} м/с
          </div>
        </div>
     </div>
     <div class="row">
        <div class="col-lg-12">
          <div style="font-weight: 600;font-size: 40pt;">
           {{$position->cityName}}
          </div>
        </div>
     </div>

  
  </center>
</div>
@endsection
