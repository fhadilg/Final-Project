

<?php $__env->startSection('container'); ?>
    <br>
    <div class="container">
        <div class="col-md-12">
            <div class="thumbPeta">
                <div class="d-flex">
                    <ion-icon name="partly-sunny-outline"></ion-icon>
                    <div class="fw-bold">
                        <p> PREDIKSI HUJAN DERAS DAERAH KOTOTABANG</p>
                    </div>
                </div>
                <div id="map">

                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4" style="width:100%">

            <input type="date" id="date" class="form-control" min="2014-01-01" max="2019-12-31" style="width:50%">
            <input class="time-select" type="time" name="appt" id="hour" required
                style="width:15%;margin-left:20px;">
            <button id='predictButton' type="button" class="btn btn-green-1"
                style="width:15%;margin-left:20px;">Cari</button>


        </div>
        <br>
        <div class="d-flex justify-content-center">
            <div class="thumbInfo">
                <h6 class="text-center text-white">PREDIKSI HUJAN DERAS DAERAH KOTOTABANG</h6>
                <h6 id='textTanggal' class="text-center text-white"></h6>
            </div>
        </div>
        <br>
        <div class="col-md-12">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="headCardInfo">
                        <h6 class="text-center text-white">Daerah Kototabang</h6>
                    </div>
                    <div class="card">
                        <div class="bodyCardInfo">
                            <p class="text white fw-bold" id="dateDisplay"><br></p>
                            <p class="text white fw-bold"><span id="hourDisplay"></span>&nbsp;WIB</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="headCard">
                        <h6 class="text-center text-white">Curah Hujan</h6>
                    </div>
                    <div class="card">
                        <div class="bodyCard1">
                            <span style="font-size: 85px;" id="iconHujan"></span>
                            <h6 style="font-size: 20px;" id='hujan'></h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="headCard">
                        <h6 class="text-center text-white">Akurasi</h6>
                    </div>
                    <div class="card">
                        <div class="bodyCard2">
                            <h6 style="font-size: 45px;" id="persentase"></h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="headCard">
                        <h6 class="text-center text-white">Arah Angin</h6>
                    </div>
                    <div class="card">
                        <div class="bodyCard3">
                            <span style="font-size: 85px;">
                                <ion-icon name="compass-outline"></ion-icon>
                            </span>
                            <h6 style="font-size: 20px;" id="arah"></h6>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="headCard">
                        <h6 class="text-center text-white">Kecepatan</h6>
                    </div>
                    <div class="card">
                        <div class="bodyCard4">
                            <span style="font-size: 85px;">
                                <ion-icon name="speedometer-outline"></ion-icon>
                            </span>
                            <h6 style="font-size: 20px;" id="kecepatan"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        var givenLatLng = L.latLng(-0.19682282451841213, 100.32036493025682);

        // Convert degrees to radians
        var givenLatRad = givenLatLng.lat * Math.PI / 180;
        var givenLngRad = givenLatLng.lng * Math.PI / 180;

        // Calculate corner points
        var corner1 = L.latLng((givenLatRad + 0.045 * Math.PI / 180) * 180 / Math.PI, (givenLngRad + 0.045 * Math.PI /
                180) *
            180 /
            Math.PI);
        var corner2 = L.latLng((givenLatRad + 0.045 * Math.PI / 180) * 180 / Math.PI, (givenLngRad - 0.045 * Math.PI /
                180) *
            180 /
            Math.PI);
        var corner3 = L.latLng((givenLatRad - 0.045 * Math.PI / 180) * 180 / Math.PI, (givenLngRad - 0.045 * Math.PI /
                180) *
            180 /
            Math.PI);
        var corner4 = L.latLng((givenLatRad - 0.045 * Math.PI / 180) * 180 / Math.PI, (givenLngRad + 0.045 * Math.PI /
                180) *
            180 /
            Math.PI);

        var map = L.map('map', {
            scrollWheelZoom: false, // Disable scroll wheel zoom
            dragging: false // Disable dragging of the map
        }).setView([-0.19682282451841213, 100.32036493025682], 10);

        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);
        var marker = L.marker([-0.19682282451841213, 100.32036493025682]).addTo(map).bindPopup(
                '<b>Stasiun GAW Kototabang</b><br><img src="<?php echo e(asset('image/GAW.jpeg')); ?>" style="margin-left: auto; margin-right: auto; width:160px; height:65px;">'
            )
            .openPopup();
        // Define the legend control
        var legend = L.control({
            position: 'bottomright'
        });

        // Set up the content and styling of the legend control
        legend.onAdd = function(map) {
            var div = L.DomUtil.create('div', 'legend');
            div.innerHTML +=
                `<small>Keterangan Warna Kotak</small>` +
                '<div class="legend-item"><i class="legend-color" style="background-color: maroon;"></i> Hujan Deras</div>' +
                '<div class="legend-item"><i class="legend-color" style="background-color: yellow;"></i> Hujan</div>' +
                '<div class="legend-item"><i class="legend-color" style="background-color: green;"></i> Hujan Ringan</div>' +
                '<div class="legend-item"><i class="legend-color" style="background-color: blue;"></i> Cerah</div>';

            return div;
        };

        // Add the legend control to the map
        legend.addTo(map);
        // Create a polygon and add it to the map
        const polygon = L.polygon([corner1, corner2, corner3, corner4]).addTo(map);
        map.fitBounds(polygon.getBounds());
    </script>
    <script>
        predictButton.addEventListener("click", () => {
            const hour = document.getElementById("hour").value;
            const date = document.getElementById("date").value;
            const formattedHour = hour.split(":")[0] + ":00"
            console.log("Date On Click BTN")

            const dateSplit = date.split("-");
            const formattedDate = `${dateSplit[1]}-${dateSplit[2]}-${dateSplit[0]}`
            const formattedDate2 = `${dateSplit[2]}-${dateSplit[1]}-${dateSplit[0]}`
            console.log(formattedDate);
            console.log(formattedHour);
            getPredict(formattedDate, formattedHour, formattedDate2)
        })
    </script>
    <script>
        const predictButton = document.getElementById("predictButton");

        window.addEventListener("load", () => {
            const now = new Date();
            const offset = 7 * 60 * 60 * 1000; // Offset in milliseconds for GMT+7 (7 hours)
            const today = new Date(now.getTime() + offset).toISOString();
            const date = today.split("T")[0];
            const hour = today.split("T")[1];
            const formattedHour = (hour.split(":")[0]).toString() + ":00"
            const dateSplit = date.split("-");
            const formattedDate = `${dateSplit[1]}-${dateSplit[2]}-2019`
            const formattedDate2 = `${dateSplit[2]}-${dateSplit[1]}-2019`
            console.log(formattedDate);
            console.log(formattedHour);

            getPredict(formattedDate, formattedHour, formattedDate2)

        })

        const getPredict = async (date, formattedHour, formattedDate2) => {
            const response = await fetch('http://localhost:5000/predict', {
                method: 'POST',
                body: JSON.stringify({
                    hour: formattedHour,
                    date,
                    date: formattedDate2,

                }),
                mode: 'cors',
                headers: {
                    'Access-Control-Allow-Origin': '*',
                    'Content-type': 'application/json; charset=UTF-8',
                }
            })

            const json = await response.json();
            let hujanFormatted = ""
            let iconName = ""
            switch (json.hujan) {
                case "N":
                    hujanFormatted = "Cerah"
                    iconName = "fluent:weather-sunny-32-regular"
                    polygon.setStyle({
                        color: 'blue'
                    })
                    polygon.bindPopup('Cuaca Cerah, untuk radius 5 km')
                    break
                case "R-":
                    hujanFormatted = "Hujan Ringan"
                    iconName = "fluent:weather-snow-20-regular"
                    polygon.setStyle({
                        color: 'green'
                    })
                    polygon.bindPopup('Hujan Ringan, untuk radius 5 km')
                    break
                case "R":
                    hujanFormatted = "Hujan"
                    iconName = "fluent:weather-drizzle-20-regular"
                    polygon.setStyle({
                        color: 'yellow'
                    })
                    polygon.bindPopup('Hujan, untuk radius 5 km')
                    break
                case "R+":
                    hujanFormatted = "Hujan Deras"
                    iconName = "bi:cloud-lightning-rain"
                    polygon.setStyle({
                        color: 'maroon'
                    })
                    polygon.bindPopup('Hujan Deras, untuk radius 5 km')
                    break
                default:
                    hujanFormatted = "Data Invalid"
                    break
            }
            const arah = document.getElementById("arah")
            const kecepatan = document.getElementById("kecepatan")
            const hujan = document.getElementById("hujan")
            const persentase = document.getElementById("persentase")
            const hourDisplay = document.getElementById("hourDisplay")
            const dateDisplay = document.getElementById("dateDisplay")
            const iconHujan = document.getElementById("iconHujan")

            arah.innerText = json.arah
            kecepatan.innerText = json.kecepatan
            persentase.innerText = json.proba
            hujan.innerText = hujanFormatted
            hourDisplay.innerText = formattedHour
            dateDisplay.innerText = formattedDate2
            iconHujan.innerHTML = `<iconify-icon icon="${iconName}"></iconify-icon>`

        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\cd\ta\resources\views/halamanutama.blade.php ENDPATH**/ ?>