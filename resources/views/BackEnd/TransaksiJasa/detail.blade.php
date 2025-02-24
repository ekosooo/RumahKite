<!DOCTYPE html>
<html lang="en">

<head>
    <title>RumahKite - Jasa </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">

    <!-- list css -->
    <link rel="stylesheet" type="text/css" href="{{asset('files\assets\pages\list-scroll\list.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('files\bower_components\stroll\css\stroll.css')}}">
    @include('BackEnd.master.style')
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->

<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        {{--        STARTHEADER--}}
        @include('BackEnd/master/header')
        {{--        ENDHEADER--}}
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">

            {{--        STARTSIDEBAR--}}
            @include('BackEnd/master/sidebar')
            {{--        STARTSIDEBAR--}}

            <!-- STARTCONTENT -->
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    @yield('content')
                                    <div class="row">

                                        <div class="col-md-12">
                                            <!-- Product detail page start -->
                                            <div class="card product-detail-page">
                                                <div class="card-block">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-xs-12">
                                                            <div class="port_details_all_img row">
                                                                <div class="col-lg-12 m-b-15">

                                                                </div>
                                                                <div class="col-lg-12 product-right">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-xs-12 product-detail" id="product-detail">
                                                            <div class="row">
                                                                @foreach($detail as $value)
                                                                    <div>
                                                                        <div class="col-lg-12">
                                                                            <span class="txt-muted d-inline-block">Status :  {{$value->service_status}} </span>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <h4 class="pro-desc">Pemesanan Tukang {{$value->skill_name}}</h4>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <span class="text-primary product-price"><i class="icofont icofont-cur-dollar"></i>Rp. 300000</span>
                                                                            <hr>
                                                                            <p>{{$value->service_description}}</p>
                                                                            <hr>
                                                                        </div>
                                                                        @endforeach

                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product detail page end -->

                                            <!-- Nav tabs start-->
                                            <div class="card product-detail-page">
                                                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active f-18 p-b-0" data-toggle="tab" href="#description" role="tab">Detail Pemesanan</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    @foreach($detail as $value)
                                                        @if($value->service_status == 'Menunggu')
                                                            <li class="nav-item m-b-0">
                                                                <a class="nav-link f-18 p-b-0" data-toggle="tab" href="#tindakan" role="tab">Tindakan</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <!-- Nav tabs start-->

                                            <!-- Nav tabs card start-->
                                            <div class="card">
                                                <div class="card-block">
                                                    <!-- Tab panes -->
                                                    <div class="tab-content bg-white">
                                                        <div class="tab-pane active" id="description" role="tabpanel">
                                                            <table class="table">
                                                                <tbody>
                                                                @foreach($detail as $value)
                                                                    <tr>
                                                                        <td class="col-lg-2">Kode Pesanan</td>
                                                                        <td class="col-lg-10">{{$value->service_transaction_id}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="col-lg-2">Nama</td>
                                                                        <td class="col-lg-10">{{$value->user_name}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="col-lg-2">Telepon</td>
                                                                        <td class="col-lg-10">{{$value->user_phone}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="col-lg-2">Tanggal</td>
                                                                        <td class="col-lg-10">{{$value->service_order}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="col-lg-2">Hari</td>
                                                                        <td class="col-lg-10">{{$value->service_day}}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="col-lg-2">Alamat</td>
                                                                        <td class="col-lg-10">{{$value->service_address}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="col-lg-2">Status</td>
                                                                        <td class="col-lg-10">{{$value->service_status}}</td>
                                                                    </tr>
                                                                @endforeach
                                                                @foreach($detailtukang as $value)
                                                                    <tr>
                                                                        <td class="col-lg-2">Tukang</td>
                                                                        <td class="col-lg-10">{{$value->handyman_name}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="col-lg-2">No Telepon Tukang</td>
                                                                        <td class="col-lg-10">{{$value->handyman_phone}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="col-lg-2">Harga / Hari</td>
                                                                        <td class="col-lg-10">{{$value->handyman_price}}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="col-lg-2">Total</td>
                                                                        <td class="col-lg-10">Rp. 300000</td>
                                                                    </tr>
                                                                @endforeach

                                                                @foreach($detail as $value)
                                                                    @if($value->service_status != 'Menunggu')
                                                                        <form action="{{route('update.status.tukang')}}" method="post">
                                                                            {{method_field('PUT')}}
                                                                            {{csrf_field()}}
                                                                            <tr>
                                                                                <td class="col-lg-2">UPDATE STATUS</td>
                                                                                <td class="col-lg-10">
                                                                                    <input type="hidden" name="service_transaction_id" id="service_transaction_id" value="{{$value->service_transaction_id}}">
                                                                                    <select name="status" id="status" class="form-control">
                                                                                        <option value="Menunggu" {{ ($value->service_status == 'Menunggu') ? 'selected' : '' }}>Menunggu</option>
                                                                                        <option value="Survei" {{ ($value->service_status == 'Survei') ? 'selected' : '' }}>Survei</option>
                                                                                        <option value="Selesai" {{ ($value->service_status == 'Selesai') ? 'selected' : '' }}>Selesai</option>
                                                                                        <option value="Ditolak" {{ ($value->service_status == 'Ditolak') ? 'selected' : '' }}>Ditolak</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td></td>
                                                                                <td style="float: right">
                                                                                    <button class="btn btn-sm btn-primary">UPDATE</button>
                                                                                </td>
                                                                            </tr>
                                                                        </form>
                                                                    @endif
                                                                @endforeach

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="tab-pane" id="tindakan" role="tabpanel">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div id="map-canvas" style="width: 100%; height: 380px;"></div>
                                                                </div>

                                                                <div class="col-lg-6">

                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 col-form-label">Nama Tukang</label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control"  name="handyman_name" id="handyman_name">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 col-form-label">Telepon</label>
                                                                        <div class="col-sm-12">
                                                                            <input type="text" class="form-control"  name="handyman_phone" id="handyman_phone">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 col-form-label">Status</label>
                                                                        <div class="col-sm-12">
                                                                            <select name="status" id="status" class="form-control">
                                                                                <option value="Menunggu">Menunggu</option>
                                                                                <option value="Survei">Survei</option>
                                                                                <option value="Selesai">Selesai</option>
                                                                                <option value="Ditolak">Ditolak</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <form action="{{route('verifikasi.tukang'), 'tukang'}}" method="post">
                                                                        {{method_field('PUT')}}
                                                                        {{csrf_field()}}
                                                                        <div class="form-group">
                                                                            @foreach($detail as $value)
                                                                                <input type="hidden" name="service_transaction_id" id="service_transaction_id" value="{{$value->service_transaction_id}}">
                                                                            @endforeach
                                                                            <div class="col-sm-12">
                                                                                <input type="hidden" class="form-control"  name="handyman_id" id="handyman_id">
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group" style="float: right">
                                                                            <div class="col-sm-12">
                                                                                <button type="submit" class="btn btn-sm btn-primary">Verifikasi Tukang</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Nav tabs card end-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ENDCONTENT -->

            </div>
        </div>

    </div>
</div>


<!-- Required Jquery -->
@include('BackEnd.master.script')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
{{--API MAPS--}}
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLVUltI28Rc8tpWWBc0P3qdTWciWRmNn8&callback=initMap">
</script>

<script>
    function initMap() {

                @foreach($detail as $value)
        var posisi = {lat: {{$value->service_lat}},  lng: {{$value->service_long}}};
                @endforeach
        var map = new google.maps.Map(
            document.getElementById('map-canvas'), {
                zoom: 16,
                center: posisi});
        var marker = new google.maps.Marker({position: posisi, map: map});



        var locations = [
                @foreach($tukang as $value)
            [{{ $value->handyman_lat }}, {{ $value->handyman_long }} ],
            @endforeach
        ];

        var info = [
                @foreach($tukang as $value)
            ['{{$value->handyman_id}}','{{$value->handyman_name}}', '{{$value->handyman_phone}}'],
            @endforeach
        ];

        var data = [
                @foreach($tukang as $value)
            ['Nik : {{$value->handyman_name}}<br> Nama : {{$value->handyman_phone}}<br>'],
            @endforeach
        ];

        console.log(data);
        console.log(info);
        console.log(locations);

        var infowindow = new google.maps.InfoWindow();
        var marker, i;
        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][0], locations[i][1], locations[i][2]),
                map: map,
                icon: {
                    url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                }
            });

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(data[i][0]);
                    document.getElementById('handyman_id').value = info[i][0];
                    document.getElementById('handyman_name').value = info[i][1];
                    document.getElementById('handyman_phone').value = info[i][2];
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    }

</script>


</body>

</html>



