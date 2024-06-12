var color_arr = ['#469990','#000075','#e6194B','#f58231','#ffe119','#3cb44b','#4363d8','#dcbeff','#f032e6','#009bbb'];
var color_arr1 = ['#f4a522','#6092cd','#61b546','#aa4498','#dccc77','#89cdf0'];
var color_arr2 = ['#1f77b4','#ff7f0e','#2ca02c','#d62728','#9467bd','#8c564d']; 
var color_arr3 = ['#c57c3c','#ab62c0','#72a555','#ca5670','#638cc']

var capacityChart;
var utilizationChart;
var provider_id;

let getWidth = getWidthBrowser('#wrapper')
if(getWidth == 'FHD'){
    var idn_latlng = [-2.1516572, 133.6597966, 5];
}else{
    // var idn_latlng = [-3.8516572, 136.6597966, 0];
    var idn_latlng = [-2.1516572, 133.6597966, 0];
    // $(".wrap-tabel-provider").css("width", 320);        
    $(".white-box .box-title").css("font-size", 11);
    $(".analytics-info .list-inline li i").css("font-size", 18);
    $(".analytics-info .list-inline li span.text-info").removeClass("f-s-23");
    $(".analytics-info .list-inline li span.text-info").css("font-size", 15);
    
}

var map = new google.maps.Map(document.getElementById('satmap'), {
    center: new google.maps.LatLng(idn_latlng[0], idn_latlng[1]),
    zoom: idn_latlng[2],
    maxZoom: 10,
    minZoom: 4,
    styles: customtStyles,
    streetViewControl: false,
    mapTypeControl: false,
    overviewMapControl: false,
    zoomControl: true,
    fullscreenControl: true,
    fullscreenControlOptions: {
        position: google.maps.ControlPosition.LEFT_BOTTOM,
    },
    zoomControlOptions: {
        position: google.maps.ControlPosition.LEFT_BOTTOM,
    }
});
var wifidown = {
    path: 'M256 228.719c-22.879 0-41.597 18.529-41.597 41.18 0 22.652 18.718 41.182 41.597 41.182 22.878 0 41.597-18.529 41.597-41.182 0-22.651-18.719-41.18-41.597-41.18zm124.8 41.179c0-67.946-56.163-123.539-124.8-123.539s-124.8 55.593-124.8 123.539c0 45.303 24.961 85.447 62.396 107.072l20.807-36.032c-24.972-14.417-41.604-40.153-41.604-71.04 0-45.295 37.433-82.358 83.201-82.358 45.771 0 83.201 37.063 83.201 82.358 0 30.887-16.633 56.623-41.604 71.04l20.807 36.032c37.433-21.624 62.396-61.769 62.396-107.072zM256 64C141.597 64 48 156.654 48 269.898 48 346.085 89.592 411.968 152 448l20.799-36.032c-49.919-28.824-83.207-81.324-83.207-142.069 0-90.593 74.891-164.718 166.408-164.718 91.517 0 166.406 74.125 166.406 164.718 0 60.745-33.284 114.271-83.205 142.069L360 448c62.406-36.032 104-101.915 104-178.102C464 156.654 370.403 64 256 64z',
    fillColor: '#DC3545',
    fillOpacity: 0.8,
    scale: 0.04,
    strokeColor: '#DC3545',
    strokeWeight: 0.2
};
var wifi = {
    path: 'M256 228.719c-22.879 0-41.597 18.529-41.597 41.18 0 22.652 18.718 41.182 41.597 41.182 22.878 0 41.597-18.529 41.597-41.182 0-22.651-18.719-41.18-41.597-41.18zm124.8 41.179c0-67.946-56.163-123.539-124.8-123.539s-124.8 55.593-124.8 123.539c0 45.303 24.961 85.447 62.396 107.072l20.807-36.032c-24.972-14.417-41.604-40.153-41.604-71.04 0-45.295 37.433-82.358 83.201-82.358 45.771 0 83.201 37.063 83.201 82.358 0 30.887-16.633 56.623-41.604 71.04l20.807 36.032c37.433-21.624 62.396-61.769 62.396-107.072zM256 64C141.597 64 48 156.654 48 269.898 48 346.085 89.592 411.968 152 448l20.799-36.032c-49.919-28.824-83.207-81.324-83.207-142.069 0-90.593 74.891-164.718 166.408-164.718 91.517 0 166.406 74.125 166.406 164.718 0 60.745-33.284 114.271-83.205 142.069L360 448c62.406-36.032 104-101.915 104-178.102C464 156.654 370.403 64 256 64z',
    fillColor: '#4EE674',
    fillOpacity: 0.8,
    scale: 0.04,
    strokeColor: '#4EE674',
    strokeWeight: 0.2
};

var map;

var customtStyles = [{
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [{
        "lightness": 100
    },
    {
        "visibility": "simplified"
    }
    ]
},
{
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [{
        "visibility": "on"
    },
    {
        "color": "#C6E2FF"
    }
    ]
},
{
    "featureType": "poi",
    "elementType": "geometry.fill",
    "stylers": [{
        "color": "#C5E3BF"
    }]
},
{
    "featureType": "road",
    "elementType": "geometry.fill",
    "stylers": [{
        "color": "#D1D1B8"
    }]
}
];

var prevInfoWindow = false;
var prev_infowindow = false;
var gMarkers = [];
var gPolygons = {};


$(document).ready(function () {
    chart_initiation()

    provider_id = $('#provider_login').val();
    
    // var idn_latlng = [-1.2516572, 121.6597966, 4];
    // var idn_latlng = [1.55164307, 124.85664079];
    if(provider_id == 0){
        get_beam_maps(provider_id);
    }else{
        get_beam_maps(provider_id);
        get_capacity(provider_id)
        get_utilization(provider_id);
        get_terminal(provider_id);
        $('#info-provider-div').css("display", "flex");
        $('#capacity-chart-div').css("display", "flex");
        $('#specific-info-div').css("display","flex")
        $('#utilization-pie-div').css("display", "flex");
        // $('.terminal-pie-div').css("display", "flex");
        $('#satellite_name_div').css("display", "none");
        // $('#satellite_name').css("display", "none");
        $('#tabel-provider-div').css("display", "none");
        $('#internet_satellite_div').css("display","none");
        $('#col-tabel-chart').css("height","100vh");
    }


    // get_beam_table()


    $("#provider-select").change(function () {
        removeMarkers();
        removePolygons();
        removeTabel();
        var provider_id = $(this).val();
        get_beam_maps(provider_id);
        if(provider_id != ''){
            get_capacity(provider_id)
            get_utilization(provider_id);
            get_terminal(provider_id);
            $('#info-provider-div').css("display", "flex");
            $('#capacity-chart-div').css("display", "flex");
            $('#specific-info-div').css("display","flex")
            $('#utilization-pie-div').css("display", "flex");
            // $('.terminal-pie-div').css("display", "flex");
            $('#satellite_name_div').css("display", "none");
            // $('#satellite_name').css("display", "none");
            $('#tabel-provider-div').css("display", "none");
            $('#internet_satellite_div').css("display","none");
            $('#col-tabel-chart').css("height","100vh");
        }else{
            $('#info-provider-div').css("display", "none");
            $('#capacity-chart-div').css("display", "none");
            $('#specific-info-div').css("display","none")
            $('#utilization-pie-div').css("display", "none");
            // $('.terminal-pie-div').css("display", "none");
            // $('#satellite_name').css("display", "flex");
            $('#satellite_name_div').css("display", "flex");
            $('#tabel-provider-div').css("display", "flex");
            $('#internet_satellite_div').css("display","flex");
        }
    });
    

});

function get_beam_maps(provider_id) {
    $("#satellite_name").html('');

    if (provider_id)
        var provider = provider_id;
    else
        var provider = 0;
    $.ajax({
        url: 'executive/get_beam_maps_wo_dtp',
        type: 'POST',
        dataType: 'json',
        async: false,
        data: {
            provider: provider
        },
        success: function (response) {
            
            if (response.status == 'ok') {
                var beam = response.data;
                //sample showing data
                var data_beam = '';
                var beam_list = '';
                number_row = 1;
                var counting = 0;
                if(screen.width < 480){
                    satellite_name_inline = 2;
                }else if(screen.width < 767){ 
                    satellite_name_inline = 3;
                }else{
                    satellite_name_inline = 4;
                }

                total_capacity_satelite = 0;
                total_capacity_internet = 0;
                satelite_name='';
                $.each(response.data, function (i, row) {
                    gPolygons[row.beam_name] = [];
                    // console.log(gPolygons);

                    data_beam += '<tr>\n\
                        <td>' + row.beam_id + '</td>\n\
                        <td>' + row.beam_name + '</td>\n\
                        <td>' + row.uptime + ' %</td>\n\
                        <td>' + row.lc_type == 1 ? row.capacity_total+' MHz' : row.capacity_beam_mbps+' Mbps</td>\n\
                        <td><a href="admin_satellite/satellite_detail/' + row.beam_id + '">Detail</a></td>\n\
                        </tr>';
                    var running_status = row.is_running == true ? '<span class="btn btn-success btn-sm">Up</span>' : '<span class="btn btn-danger btn-sm">Down</span>'; 
                    
                    if(row.provider_id == 6 || row.provider_id == 7){
                        if(response.result_last_time.length != 0){
                            var gcp_code = '<span class="badge badge-success d-block">GCP: '+moment(response.result_last_time[row.beam_id].gcp).format('DD MMM YYYY HH:mm:ss')+'</span>'
                            var ali_code = '<span class="badge badge-info d-block">ALIYUN: '+moment(response.result_last_time[row.beam_id].aliyun).format('DD MMM YYYY HH:mm:ss')+'</span>'
                        }else{
                            var gcp_code = ''
                            var ali_code = ''    
                        }
                    }else{
                        var gcp_code = ''
                        var ali_code = ''
                    }

                    beam_list += `<tr>
                                <td class="text-center">${row.provider_name}</td>
                                <td class="text-center">${row.beam_name}</td>
                                <td class="text-center">${row.uptime} %</td>
                                <td class="text-center">
                                    ${row.lc_type == 1 ? row.capacity_total+' MHz' : row.capacity_beam_mbps+' Mbps'}
                                    ${gcp_code}${ali_code}
                                </td>
                                <td class="text-center">${running_status}</td>
                            </tr>`;

                    let date_show = ''
                    date_show = 'Data on: ' + moment(response.date.start).format('DD MMM YYYY HH:mm') + ' - ' + moment(response.date.finish).format('DD MMM YYYY HH:mm');
                    $('#datatable2').DataTable().clear().destroy();
                    $('#datatable2-list').html(beam_list);
                    $('#date-show-list').html(date_show)
                    $('#datatable2').DataTable({
                        pageLength: 10,
                        searching: false,
                        lengthChange: false,
                        info: false,
                        ordering: false,
                        responsive: true,
                    });
                    var val =
                        "assets/backend_assets/public/kml/" + row
                            .beam_id + ".kml";

                    $.get(val, function (d) {
                        var arr_coor_lat = [];
                        var arr_coor_lng = [];
                        var omod = 0.1;
                        var wmod = 2;
                        // Cek setiap element Placemark terdaftar
                        // parsing kml nya starts here
                        $(d).find("Placemark").each(function () {
                            // Kondisi jika placemark memiliki Polygon Element
                            var is_has_polygon = $(this).find('Polygon').length;
                            if (is_has_polygon) {
                                var each_string = $(this).find('Polygon').find(
                                    'coordinates').text().replace(/\s\s+/g,
                                        " ");
                                var arr_string = [each_string];
                                var arr_string_trim = $.trim(arr_string).split(
                                    " ");

                                // Konversi line string ke array
                                var string_coordinates = $(this).find('Polygon')
                                    .find('coordinates').text().replace(
                                        /\s\s+/g, " ");
                                var coordinates = $.trim(string_coordinates)
                                    .split(" ");
                                var array_coor = [];

                                // Buat Path Array Polygon
                                for (var i = 0; i < coordinates.length; i++) {
                                    var coordinate = coordinates[i].split(",");
                                    var obj_coor = {};
                                    obj_coor["lat"] = parseFloat(coordinate[1]);
                                    obj_coor["lng"] = parseFloat(coordinate[0]);
                                    array_coor.push(obj_coor);
                                }
                                for (var i = 0; i < arr_string_trim
                                    .length; i++) {
                                    var coordinate1 = arr_string_trim[i].split(
                                        ",");
                                    var inner_coor_lat = [];
                                    var inner_coor_lng = [];
                                    inner_coor_lat = parseFloat(coordinate1[1]);
                                    inner_coor_lng = parseFloat(coordinate1[0]);
                                    arr_coor_lat.push(inner_coor_lat);
                                    arr_coor_lng.push(inner_coor_lng);
                                }

                                if (row.is_running == true) {
                                    // Inisialisasi Polygon pada Maps
                                    var areaPath = new google.maps.Polygon({
                                        paths: array_coor,
                                        strokeColor: color_arr[row.provider_id],
                                        strokeOpacity: omod,
                                        strokeWeight: wmod,
                                        fillColor: color_arr[row.provider_id],
                                        fillOpacity: 0.02
                                    });

                                    // omod = omod - 0.05;
                                    // wmod = wmod + 0.6;
                                    // console.log(omod)
                                    // Set to Maps

                                    gPolygons[row.beam_name].push(areaPath);
                                    areaPath.setMap(map);

                                    // Polygon Event
                                    areaPath.addListener('click', function (event) {
                                        if (prev_infowindow) {
                                            prev_infowindow.close()
                                        }
                                        prev_infowindow = infoWindow;
                                        infoWindow.setContent(
                                            infowincontent);
                                        infoWindow.setPosition(event
                                            .latLng);
                                        infoWindow.open(map, areaPath);
                                    });
                                } else {
                                    // Inisialisasi Polygon pada Maps
                                    var areaPath = new google.maps.Polygon({
                                        paths: array_coor,
                                        strokeColor: '#8f0b0b',
                                        strokeOpacity: omod,
                                        strokeWeight: wmod,
                                        fillColor: '#fc5757',
                                        fillOpacity: 0.02
                                    });

                                    // omod = omod - 0.05;
                                    // wmod = wmod + 0.6;
                                    // Set to Maps

                                    gPolygons[row.beam_name].push(areaPath);
                                    areaPath.setMap(map);


                                    // Polygon Event
                                    areaPath.addListener('click', function (event) {
                                        if (prev_infowindow) {
                                            prev_infowindow.close()
                                        }
                                        prev_infowindow = infoWindow;
                                        infoWindow.setContent(
                                            infowincontent);
                                        infoWindow.setPosition(event
                                            .latLng);
                                        infoWindow.open(map, areaPath);
                                    });

                                }
                            }
                        });
                        // parsing kml nya ends here

                        // nambahin infowindow di map
                        var infoWindow = new google.maps.InfoWindow();
                        
                        if(row.beam_id == 141){
                            var metric = 'Mbps'
                        }else{
                            var metric = 'MHz'
                        }

                        var contentString =
                            '<h4 class="font-bold text-muted">' + row.beam_name + '</h4>' +
                            '<table style="padding: 5px 0px !important;" class="table mg-b-0 wd-100p" style="border:1px solid rgba(173, 181, 189, 0.2);border-radius:6px;">' +
                            '<thead class="wd-100p">' +

                            '<tr class="tx-10">' +
                            '<th class="pd-y-5 tx-center" style="padding-bottom:6px;padding-top:6px;color:#2db914;font-size:11px">Satellites Uptime</th>' +
                            '<th class="pd-y-5 tx-center" style="padding-bottom:6px;padding-top:6px;color:#2db914; border-right:1px solid rgba(173, 181, 189, 0.2);font-size:11px">Satellites Capacity</th>' +
                            '</tr>' +
                            '</thead>' +
                            '<tbody class="wd-100p pd-x-10 tx-14"' +
                            '<tr>' +
                            '<td class="valign-middle tx-center" style="font-weight:400;color:#2db914">' + row.uptime + ' %</td>' +
                            '<td class="valign-middle tx-center" style="font-weight:400;color:#2db914;border-right:1px solid rgba(173, 181, 189, 0.2);">' + row.capacity_total + metric + '</td>' +
                            '</tr>' +
                            '</tbody>' +
                            '</table>' +
                            '<table><tr><td width="182"><h5 class="font-bold text-muted">' + row.provider_name + '</h5></td><td>' +
                            '<a class="btn btn-sm btn-info btnsat" href="admin_satellite/satellite_detail/' + row.beam_id + '">Detail</a></td></tr></table>';


                        var arr_coor_lat_max = Math.max(...arr_coor_lat);
                        var arr_coor_lat_min = Math.min(...arr_coor_lat);
                        var arr_coor_lng_max = Math.max(...arr_coor_lng);
                        var arr_coor_lng_min = Math.min(...arr_coor_lng);
                        var lat_med = (arr_coor_lat_min + arr_coor_lat_max) / 2;
                        var lng_med = (arr_coor_lng_min + arr_coor_lng_max) / 2;
                        var myLatLng = {
                            lat: lat_med,
                            lng: lng_med
                        };

                        // if (row.is_running == true) {
                        //     var marker = new google.maps.Marker({
                        //         position: myLatLng,
                        //         map: map,
                        //         icon: {
                        //             url: 'assets/backend_assets/img/map-marker/satellite_up.png',
                        //             size: new google.maps.Size(30, 30),
                        //             scaledSize: new google.maps.Size(30, 30),
                        //             labelOrigin: new google.maps.Point(15, 30), //kanan kiri, atas bawah 
                        //         },
                        //         title: 'Beam #'
                        //     });
                        // } else {
                        //     var marker = new google.maps.Marker({
                        //         position: myLatLng,
                        //         map: map,
                        //         icon: {
                        //             url: 'assets/backend_assets/img/map-marker/satellite_down.png',
                        //             size: new google.maps.Size(30, 30),
                        //             scaledSize: new google.maps.Size(30, 30),
                        //             labelOrigin: new google.maps.Point(15, 30), //kanan kiri, atas bawah 
                        //         },
                        //         title: 'Beam #'
                        //     });
                        // }
                        // if(row.beam_id != '787'){ // milik dtp
                            if (row.is_running == true) {
                                folder_status = 'up';
                                var marker = new google.maps.Marker({
                                    position: myLatLng,
                                    map: map,
                                    icon: {
                                        url: 'assets/backend_assets/img/map-marker/'+folder_status+'/'+ row.provider_name +'.png',
                                        size: new google.maps.Size(30, 30),
                                        scaledSize: new google.maps.Size(30, 30),
                                        labelOrigin: new google.maps.Point(15, 30), //kanan kiri, atas bawah 
                                    },
                                    title: 'Beam #'
                                });
                            } else {
                                folder_status = 'down';
                                var marker = new google.maps.Marker({
                                    position: myLatLng,
                                    map: map,
                                    icon: {
                                        url: 'assets/backend_assets/img/map-marker/'+folder_status+'/'+ row.provider_name +'.png',
                                        size: new google.maps.Size(30, 30),
                                        scaledSize: new google.maps.Size(30, 30),
                                        labelOrigin: new google.maps.Point(15, 30), //kanan kiri, atas bawah 
                                    },
                                    title: 'Beam #'
                                });
                            }
                        // }
                        gMarkers.push(marker)
                        marker.addListener('click', function () {
                            if (prevInfoWindow) {
                                prevInfoWindow.close();
                            }
                            prevInfoWindow = infoWindow;
                            infoWindow.setContent(contentString);
                            infoWindow.open(map, marker);
                        });
                    });

                });
                $.each(response.provider, function (i, row) {
                    var beam_unit = row.lc_type == 1 ? 'MHz' : 'Mbps';
                    var tbl_provider = '<tr class="data-row">' +
                        '<td class="">' + row.provider + '</td>' +
                        '<td class="d-bd-1 nplr">' + row.total_capacity_satellite.toFixed(2) + ' ' + beam_unit +
                        '</td>' +
                        '<td class="d-bd-2 nplr">' + row.internet_capacity.toFixed(2) + ' Mbps' + '</td>' +
                        '</tr>'
                    if(row.lc_type == 1){  
                        $("#tabel-provider-lc1-body").append(tbl_provider);
                    }else{
                        $("#tabel-provider-lc2-body").append(tbl_provider);
                    }
                    // $("#tabel-provider-mobile tr:last").after(tbl_provider);

                    
                    if(provider != 0){//put provider information into 4 panel in right top(only when the filter is chosen)
                        $('#provider_name_detail').text(row.provider);
                        $('#provider_satellite_detail').html(row.satelite_name);
                        $('#satellite_capacity_detail').text(row.total_capacity_satellite.toFixed(2)+ ' ' + beam_unit );//data satellite capacity detail dari get_utilization
                        $('#internet_capacity_detail').text(new Intl.NumberFormat('ID').format(row.internet_capacity.toFixed(2))  + ' Mbps');
                    }else{
                        $('#provider_name_detail').text('');
                        $('#provider_satellite_detail').text('');
                        $('#satellite_capacity_detail').text('');
                        $('#internet_capacity_detail').text('');
                    }

                    var provider_name = row.provider;
                    
                    // console.log(provider_name);
                    if(provider_name){
                        if(provider_name.indexOf("LC2") == -1){
                            // console.log('Counter: ', counting)
                            if(counting % satellite_name_inline == 0){
                                satelite_name += '<div class="row" style="display:flex;flex-direction:row">'
                            }
                            // satellite_name_widget

                            satelite_name += '<div class="col-xl-3 col-md-3 col-sm-6 col-xs-12 satellite_name_box" style="display :flex; flex: 0 0 auto;">'+
                                '<div class="widget widget-white widget-padding-sm bep-widget-ekse legend-normal ww  m-t-20 box-inside-div " style="background-color: #029de0">'+
                                '<div class="p-0" style="display:flex;flex-direction:row-reverse;align-items:left;width:100%">'+
                                    '<div class="widget-title-custom bep-title-ekse" style="display:flex; flex-direction: column;width: 70%">'+
                                        '<span class="satellite-name-title">'+
                                            row.provider+
                                        '</span><span class="satellite-name-value">'+row.satelite_name+'</span>'
                                    +'</div>'+
                                    '<div class="cover-slide-3" style="border:none!important;display:flex; justify-content:center; align-self:center; filter: brightness(11) invert(1) sepia(1) hue-rotate(100deg) saturate(200%);width: 30%"><img src="assets/backend_assets/img/satellite-icon.png" class="satellite_name_logo_img" id="provider_logo"></div>'+
                                '</div>'+
                            '</div></div>';
                            counting += 1;
                            
                            if(counting % satellite_name_inline == 0){
                                satelite_name += '</div>'
                            }
                        }
                    }
                    
                    total_capacity_internet += new Number(parseFloat(row.internet_capacity));

                    number_row++;
                    
                })


                var html = '<table class="table table-bordered">\n\
<tr>\n\
<td>Beam ID</td>\n\
<td>Beam Name</td>\n\
<td>Uptime</td>\n\
<td>Capacity</td>\n\
<td>Detail</td>\n\
</tr>\n\
' + data_beam + '\n\
</table>';
                $("#sample-view").append(html);
                // console.log(beam);

                var sateliteUp = `
                    <li>
                        <div id="sparklinedash"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">`+response.satelite_up+`</span></li>
                `;

                var stUp = $('#SateliteUp').empty();
                stUp.html(sateliteUp);

                var sateliteDown = `
                    <li>
                        <div id="sparklinedash4"></div>
                    </li>
                    <li class="text-right"><i class="ti-arrow-down text-danger"></i> <span class="counter text-danger">`+response.satelite_down+`</span></li>
                `;

                var stDown = $('#SateliteDown').empty();
                stDown.html(sateliteDown);

                    // <li>
                    // <div class="progress">
                    //     <div class="progress-bar progress-bar-info wow animated progress-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:`+response.average_availability_satellite+`%;"> <span class="sr-only">`+response.average_availability_satellite+` % Complete (success)</span></div>
                    // </div>
                    // </li>
                var avgSatelite = `<div class="f-s-23">`+response.average_availability_satellite2+` %</div>
                `;

                $('#AU_Satelite').html(avgSatelite);
                $('#AU_Satelite_mobile').html(avgSatelite);

                    // <li>
                    //     <div class="progress">
                    //         <div class="progress-bar progress-bar-info wow animated progress-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:`+response.average_availability_internet+`%;"> <span class="sr-only">`+response.average_availability_internet+` % Complete (success)</span></div>
                    //     </div>
                    // </li>
                var avgInternet = `<div class="f-s-23">`+response.average_availability_internet2+` %</div>
                `;

                $('#AU_Internet').html(avgInternet);
                $('#AU_Internet_mobile').html(avgInternet);
                $("#satellite_name").append(satelite_name); //append satelite name

                
                $('#Total_mbps_Satellite').html(new Intl.NumberFormat('ID').format(27585.13) + ' <span class="lc-single-kpi-title">(Mbps)</span>');
                $('#Total_mbps_Internet').html(new Intl.NumberFormat('ID').format(total_capacity_internet.toFixed(2))+ ' <span class="lc-single-kpi-title">(Mbps)</span>');

            } else {
                var beam = array();
                alert(response.message);
                // console.log("asd");

            }
        }
    });
}

function get_capacity(provider_id){
    if (provider_id)
        var provider = provider_id;
    else
        var provider = 0;
    $.ajax({
        url: 'executive/get_chart_capacity_summary',
        type: 'POST',
        dataType: 'json',
        async: false,
        data: {
            provider: provider
        },
        success: function (response) {
            if (response.status == 'ok') {
                capacityChart.config.data.datasets = [];
                capacityChart.config.data.labels = [];
                
                var labels = response.data.spotbeam;
                var label = ['Contract Capacity','Real Utilization'];
                var data = [response.data.capacity_teori,response.data.capacity_real];
                capacityChart.config.data.labels = labels;
                for (i = 0; i < data.length; i++) {
                    var dataSet = {
                        label: label[i],
                        data: data[i],
                        backgroundColor: color_arr1[i]
                    }
                    capacityChart.config.data.datasets.push(dataSet);
                }
                capacityChart.update();
            }else{
            }
        }
    })
}

function get_utilization(provider_id) {
    if (provider_id)
        var provider = provider_id;
    else
        var provider = 0;
    $.ajax({
        url: 'executive/get_utilization',
        type: 'POST',
        dataType: 'json',
        async: false,
        data: {
            provider: provider
        },
        success: function (response) {
            if (response.status == 'ok') {
                utilizationChart.config.data.datasets = [];
                utilizationChart.config.data.labels  = [];
                $('#utilization-contract').html("");
                $('#utilization-real').html("");
                $('#utilization-contract').append(new Intl.NumberFormat('ID').format(response.data.contract.toFixed(2))+ ` Mbps`)
                $('#utilization-real').append(new Intl.NumberFormat('ID').format(response.data.real.toFixed(2))+ ` Mbps`)

                var percentage = response.data.percentage;
                var sisa = 100-percentage;
                var greyarea = sisa.toFixed(2); 
                var greyareastring = greyarea.replace(",", ".");
               
                let updatesvalue = [[percentage, greyareastring]]
      
                labels =  ['Utilize','Sisa'],
                utilizationChart.config.data.labels = labels;
                 for (i = 0; i < updatesvalue.length; i++) {
                  
                    var dataSet = {
                        data: updatesvalue[i],
                        backgroundColor: color_arr1[i],
                        percentage : percentage,
                        backgroundColor: [
                            "#FF6384",
                            // "#36A2EB",
                            "lightgrey"
                        ],
                        hoverBackgroundColor: [
                            "#FF6384",
                            // "#36A2EB",
                            "lightgrey"
                        ],
                    }
                    utilizationChart.config.data.datasets.push(dataSet);
                }
                utilizationChart.update();
                // $('#gauge-contract-legend').text(new Intl.NumberFormat('ID').format(response.data.contract.toFixed(2)) + ' Mbps');
                // $('#gauge-real-legend').text(new Intl.NumberFormat('ID').format(response.data.real.toFixed(2)) + ' Mbps');   
                // $('#satellite_capacity_detail').text(new Intl.NumberFormat('ID').format(response.data.contract.toFixed(2))+ ' Mbps' );                  
            }else{
            }
        }
    })
}

function get_terminal(provider_id){
    if (provider_id)
        var provider = provider_id;
    else
        var provider = 0;
    $.ajax({
        url: 'executive/get_terminal',
        type: 'POST',
        dataType: 'json',
        async: false,
        data: {
            provider: provider
        },
        success: function (response) {
            if (response.status == 'ok') {
                if(response.data.ai != 0 && response.data.bb != 0){
                    if(response.data.lc_type == 1){
                        $('#lc1_div').css("display", "flex");
                        $('#lc2_div').css("display", "none");
                        $('#lc_empty_div').css("display", "none");
                        terminalChart.config.data.datasets = [];
                        terminalChart.config.data.labels = [];
                        
                        var labels = ['AI','BB'];
                        var data =[[response.data.ai,response.data.bb]] ;
                        terminalChart.config.data.labels = labels;
                        for (i = 0; i < data.length; i++) {
                            var dataSet = {
                                data: data[i],
                                backgroundColor: [color_arr2[0],color_arr2[1]]
                            }
                            terminalChart.config.data.datasets.push(dataSet);
                        }
                        terminalChart.update();
                        $('#terminal-ai').html("");
                        $('#terminal-bb').html("");    
                        $('#terminal-total').html("");

                        $('#terminal-ai').append(response.data.ai);
                        $('#terminal-bb').append(response.data.bb);    
                        $('#terminal-total').append(response.data.total);
                        
                    }else if(response.data.lc_type == 2){

                        $('#lc2_div').css("display", "flex");
                        $('#lc1_div').css("display", "none");
                        $('#lc_empty_div').css("display", "none");
                        $('#total_site_terminal_lc2_value').text(new Intl.NumberFormat('ID').format(response.data.total.toFixed(2)) + ' Sites');
                    }else{
                        $('#lc2_div').css("display", "none");
                        $('#lc1_div').css("display", "none");
                        $('#lc_empty_div').css("display", "flex");
                    }
                }else{
                    $('#lc1_div').css("display", "none");
                    $('#lc2_div').css("display", "none");
                    $('#lc_empty_div').css("display", "flex");
                }
            }else{
            }
        }
    })
}


function removeMarkers() {
    var numMarkers = gMarkers.length;

    for (var i = 0; i < numMarkers; i++) {
        gMarkers[i].setMap(null);
    }
    gMarkers = [];
}

function removePolygons() {
    $.each(gPolygons, function (_, row) {
        var numPoly = row.length;
        for (var i = 0; i < numPoly; i++) {
            row[i].setMap(null);
        }
    });
    gPolygons = {};
}

function removeTabel() {
    $(".data-row").remove()
}

function chart_initiation(){
    /*Creating the bar chart*/
    var ctx = document.getElementById("capacity-chart").getContext('2d');
    capacityChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [],
        datasets: [{
          label: '# of Votes',
          data: [],
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
        }]
      },
      options: {
        cutoutPercentage: 60,
        // title: {
        //     display: true,
        //     text: 'Capacity Chart'
        // },
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        },
        maintainAspectRatio: false,
      }
    });
   
    // chart terminal
    var ctx2 = document.getElementById("pie-chart").getContext('2d');
    terminalChart = new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['ai', 'bb'],
            datasets: [{
            label: '# of Votes',
            data: [10,5],
            backgroundColor: 'rgba(255, 99, 132, 0.2)',
            }]
        },
        options:{
            maintainAspectRatio: false,
            // title: {
            //     display: true,
            //     text: 'Terminal Chart'
            // }
        }
    });


    // chart utilization
         
    const percentage_value = {
        id: 'percentage_value',
        beforeDraw: function(chart) {
            var width = chart.chart.width,
                height = chart.chart.height,
                ctx = chart.chart.ctx;
                
                var total = data.datasets[0].percentage;
            ctx.restore();
            var fontSize = (height / 114).toFixed(2);
            ctx.font = fontSize + "em sans-serif";
            ctx.textBaseline = "middle";
            
        
            var text = total + "%",
            textX = Math.round((width - ctx.measureText(text).width) / 2),
            textY = height / 2;
        
            ctx.fillText(text, textX, textY);
            ctx.save();
        }
      };
      
      ctx3 = document.getElementById('chart-utilization');

        utilizationChart = new Chart(ctx3, {
        type: 'doughnut',
        data: data = {
            labels: [
                "Red",
                "Yellow"
            ],
            datasets: [
                {
                data: [74, 26],
                backgroundColor: [
                    "#FF6384",
                    // "#36A2EB",
                    "lightgrey"
                ],
                hoverBackgroundColor: [
                    "#FF6384",
                    // "#36A2EB",
                    "lightgrey"
                ],
                percentage : 74,
                }]
            },
        plugins: [percentage_value],
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            // title: {
            //     display: true,
            //     text: 'Utilization Chart',
               
            // }
        }
      });
}

function get_beam_table()
{
    $.ajax({
        url: 'admin/get_beam_table_dashboard',
        type: 'POST',
        dataType: 'json',
        success: function (response) {
            if(response.status == 'ok'){
                let html = ''
                let date_show = ''
                $.each(response.data, function (i, row) {
                    let remain_ai = 100 - row.capacity.capacity_util_ai
                    let remain_bb = 100 - row.capacity.capacity_util_bb

                    html += `
                        <tr>
                            <td class="text-center" width="10%">${row.metadata.provider.provider_name}</td>
                            <td class="text-center" width="10%">${row.metadata.spotbeam.beam_name}</td>
                            <td class="text-center" width="10%">${row.capacity.capacity_ai} Mbps</td>
                            <td class="text-center" width="10%">${row.capacity.capacity_bb} Mbps</td>
                            <td class="text-center" width="10%">${row.capacity.traffic_ai} Mbps</td>
                            <td class="text-center" width="10%">${row.capacity.traffic_bb} Mbps</td>
                            <td class="text-center" width="10%">${remain_ai.toFixed(2)}%</td>
                            <td class="text-center" width="10%">${remain_bb.toFixed(2)}%</td>
                        </tr>
                    `
                })

                date_show = 'Data on: ' + moment(response.date.start).format('DD MMM YYYY HH:mm') + ' - ' + moment(response.date.finish).format('DD MMM YYYY HH:mm')

                $('#datatable3').DataTable().clear().destroy();
                $('#datatable3-list').html(html);
                $('#datatable4').DataTable().clear().destroy();
                $('#datatable4-list').html(html);
                $('#date-show').html(date_show);
                $('#datatable3').DataTable({
                    pageLength: 10,
                    searching: false,
                    lengthChange: false,
                    info: false,
                    ordering: false,
                });
                $('#datatable4').DataTable({
                    pageLength: 10,
                    searching: false,
                    lengthChange: false,
                    info: false,
                    ordering: false,
                    responsive: true,
                });
                $('div#datatable3-container').removeClass('hidden')
            }else{
                let html = ''
                html += `
                <tr>
                    <td colspan="8" class="text-center">No Data Available!</td>
                </tr>
                `

                $('div#datatable3-container').addClass('hidden')

                $('#datatable3').DataTable().clear().destroy();
                $('#datatable3-list').html(html);
                $('#datatable3').DataTable({
                    pageLength: 10,
                    searching: false,
                    lengthChange: false,
                    info: false,
                    ordering: false,
                    responsive: true,
                });
            }
        }   
    })
}