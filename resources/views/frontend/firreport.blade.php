@extends('frontend.layouts.master')
@section('scripts')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <style>
        #map {
            height: 400px;
        }
    </style>
    <script>
        var map = L.map('map').setView([26.66286822930185, 87.27435207380042], 13);

        var popup = L.popup();
        var lat = 0;
        var lng = 0;
        var layerGroup = L.layerGroup();

        function onMapClick(e) {
            // console.log(e);
            lat = e.latlng.lat;
            lng = e.latlng.lng;
            document.getElementById('lat').value = lat;
            document.getElementById('lng').value = lng;
            if (map.hasLayer(layerGroup)) {
                layerGroup.clearLayers();
                map.removeLayer(layerGroup);
            }
            var marker = L.marker([lat, lng]);
            layerGroup.addLayer(marker);
            map.addLayer(layerGroup);
        }

        map.on('click', onMapClick);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
    </script>
@endsection
@section('main_content')
    <div id="empresa" style="padding: 20px; margin: 1px">
        <div class="container">
            <form method="post" action="{{ route('front.fir.remport.store') }}" enctype="multipart/form-data"
                style="margin-left: -30px; padding-top: 84px; margin-top: 100px">
                @csrf
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>success: </strong>{{ session('success') }}
                    </div>
                @endif
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <strong>Error: </strong>{{ $error }}
                    </div>
                @endforeach
                <div class="text-center"><strong>
                        <p>FORM &ndash; IF1 - (Integrated Form)</p>
                        <p>FIRST INFORMATION REPORT</p>
                        <p>(Under Section 154 Cr.P.C)</p>
                    </strong>
                </div>
                <p>1.&nbsp;District <select class="" name="dist" id="district">
                        <option value="0">-- Select District -- </option>
                        <option value="Bhojpur">Bhojpur</option>
                        <option value="Dhankuta">Dhankuta</option>
                        <option value="Ilam">Ilam</option>
                        <option value="Jhapa">Jhapa</option>
                        <option value="Khotang">Khotang</option>
                        <option value="Morang">Morang</option>
                        <option value="Okhaldhunga">Okhaldhunga</option>
                        <option value="Panchthar">Panchthar</option>
                        <option value="Sankhuwasabha">Sankhuwasabha</option>
                        <option value="Solukhumbu">Solukhumbu</option>
                        <option value="Sunsari">Sunsari</option>
                        <option value="Taplejung">Taplejung</option>
                        <option value="Terhathum">Terhathum</option>
                        <option value="Udayapur">Udayapur</option>
                    </select> &nbsp;Station Address<input type="text" name="ps"> &nbsp;Year
                    <input type="text" name="year">
                    &nbsp;&nbsp; Complaint Date
                    <input type="date" name="date">
                </p>
                {{-- <p>2.&nbsp;(i)&nbsp;*Act <input type="text" name="act[]"> *Sections
                    <input type="text" name="section[]">
                </p>
                <p>(ii)&nbsp;*Act <input type="text" name="act[]"> *Sections
                    <input type="text" name="section[]">
                </p>
                <p>(iii)&nbsp;*Act <input type="text" name="act[]"> *Sections
                    <input type="text" name="section[]">
                </p>
                <p>(iv)&nbsp;* Other Act <input type="text" name="act[]"> *Sections
                    <input type="text" name="section[]">
                </p>
                </p> --}}
                {{-- <p>3.</p>
                <p>(a)&nbsp;* Occurrence of Offence: * <input type="datetime-local" name="occurrence_offense">
                </p>
                <p>(b)&nbsp;Information received at P.S. <input type="datetime-local" name="information_recieved_at_ps">
                </p>
                <p>(c)&nbsp;General Diary Reference: Entry No(s) <input type="number"
                        name="ganeral_diary_reference_entry_no"> Time: <input type="time"
                        name="ganeral_diary_reference_time">
                </p> --}}
                {{-- <p>4.&nbsp;Type of information :&nbsp;<input type="text" name="type_of_information">*Written / Oral</p>
                <p>5.&nbsp;Place of occurrence: (a) Direction and Distance from P.S. <input type="text"
                        name="direction_distance_from_ps"> Beat No.
                    <input type="text" name="beat_no">
                </p>
                <p>(b)&nbsp;* Address
                    <input type="text" name="address" id="">
                </p>
                <p>(c)&nbsp;In case outside limit of this Police Station, then the name of P.S.
                    <input type="text" name="outside_of_limit_ps_name" id="">
                </p> --}}
                {{-- <p>District <input type="text" name="district" id=""></p> --}}
                <p>2.&nbsp;<b>Complainant Information: </b></p>
                <p>(a)&nbsp;Name
                    <input type="text" name="name" id="">
                </p>
                {{-- <p>(b)&nbsp;Father&rsquo;s / Husband&rsquo;s Name
                    <input type="text" name="father_or_husband_name" id="">
                </p> --}}
                <p>(c)
                    <label for="exampleFormControlInput1" class="form-label">Are you over 18 years of age?</label>
                <div class="form-check">
                    <input class="form-check-input" value="yes" type="radio" name="are_you_18" id="eightenornot1">
                    <label class="form-check-label" for="eightenornot1">
                        Yes
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="no" type="radio" name="are_you_18" id="eightenornot2">
                    <label class="form-check-label" for="eightenornotgender2">
                        No
                    </label>
                </div>
                </p>
                {{-- <p>&nbsp; &nbsp; (d) Nationality
                    <input type="text" name="nationality">
                </p> --}}
                {{-- <p>(e)&nbsp;Passport No: ....................... Date of Issue: .................... Place of Issue
                    ....................
                </p> --}}
                {{-- <p>&nbsp; &nbsp; (e)&nbsp;Occupation:
                    <input type="text" name="occupation">
                </p> --}}
                <p>&nbsp; &nbsp; (f)&nbsp;Address:
                    <input type="text" name="person_address">
                </p>
                <p>3.&nbsp; <b>Details of known / suspected / unknown / accused with full particulars </b></p>
                <p> &nbsp; &nbsp;&nbsp;(Attach separate sheet if necessary):</p>
                <input type="file" name="detail_of_known_file"> <br> <br>
                <textarea name="detail_of_suspected" id="" cols="" rows="10" style="width:100%;"></textarea>


                {{-- <p>4.&nbsp;Reasons for delay in reporting by the complainant / Informant
                    <textarea name="reason_for_delay_report" id="" cols="" rows="10" style="width:100%;"></textarea></p>
                     --}}
                <p>4.&nbsp; <b>Particulars of properties stolen / involved (Attach separate sheet if necessary): </b></p>
                <input type="file" name="properties_stole_file"> <br> <br>
                <textarea name="particulars_of_properties_stolen" id="" cols="" rows="10" style="width:100%;"></textarea>

                {{-- <p>5.&nbsp; <b>* Total value of the properties stole / involved: </b>
                </p> --}}
                {{-- <input type="text" name="value_of_properties_stolen"> <br> --}}

                {{-- <p>7.&nbsp;* Inquest Report /U.D. Case No., if any:
                </p> --}}

                {{-- <textarea name="inquest_report" id="" cols="" rows="10" style="width:100%;"></textarea> --}}
                {{-- <p>7.&nbsp;F.I.R. Contents (Attach separate sheets, if required):</p>

                <textarea name="fir_contents" id="" cols="" rows="10" style="width:100%;"></textarea> --}}

                {{-- <p>8.&nbsp;Action taken: Since the above report reveals commission of offence (s) u/s as mentioned at Item
                    No.
                </p>
                <p>9. registered the case and took up the investigation/ direction /<input type="text"
                        name="investigation"> Rank
                    <input type="text" name="rank">
                </p>
                <p>to take up the investigation transferred to P.S. <input type="text" name="transfer_to_ps"> on point
                    of jurisdiction.
                </p>
                <p>F.I.R. read over to the complainant / Informant, admitted to be correctly recorded and copy given to</p>
                <p>the Complainant / Informant free of cost.</p>
                <div>
                    <p style="text-align: right;">Signature of the Officer-in-charge, Police Station</p>
                    <p style="text-align: right;">* Name : <input type="text" name="officer_name"></p>
                    <p style="text-align: right;">*Rank:<input type="text" name="officer_rank">No. <input
                            type="text" name="officer_no"></p>
                </div> --}}
                <p>5.&nbsp; <b>Attach evidance if necessary </b></p>
                <input type="file" name="evidance_file">
                {{-- <p>7. <b> Date &amp; time of despatch to the court: <input type="text" name="officer_date"> </b></p> --}}

                <div class="mb-3">
                    <div id="map"></div>
                    <input type="text" class="d-none" name="lat" id="lat">
                    <input type="text" class="d-none" name="lng" id="lng">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
@endsection
