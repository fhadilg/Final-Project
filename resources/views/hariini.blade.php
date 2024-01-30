@extends('layout.main')

@section('container')
    <br>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="thumbInfo">
                <h6 class="text-center text-white">PREDIKSI HUJAN DERAS DAERAH KOTOTABANG</p>
            </div>
        </div>
        <br>
        <!-- jam saat ini -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="headCardInfo">
                        <h6 class="text-center text-white">Daerah Kototabang</h6>
                    </div>
                    <div class="card">
                        <div class="bodyCardInfo">
                            <div class="linebreak">
                                <p class="text white fw-bold" id="dateDisplay"><br></p>
                                <p class="text white fw-bold"><span id="hourDisplay"></span>&nbsp;WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="headCard">
                        <h6 class="text-center text-white">Curah Hujan</h6>
                    </div>
                    <div class="card">
                        <div class="bodyCard1">
                            <span id="iconHujan" style="font-size: 85px;"></span>
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
        <!-- satu jam kemudian -->
        <br>
        <div class="col-md-12">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="headCardInfo">
                        <h6 class="text-center text-white">Daerah Kototabang</h6>
                    </div>
                    <div class="card">

                        <div class="bodyCardInfo">
                            <div class="linebreak">
                                <p class="text white fw-bold" id="dateDisplay2"><br></p>
                                <p class="text white fw-bold"><span id="hourDisplay2"></span>&nbsp;WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="headCard">
                        <h6 class="text-center text-white">Curah Hujan</h6>
                    </div>
                    <div class="card">

                        <div class="bodyCard1">
                            <span id="iconHujan2" style="font-size: 85px;"></span>
                            <h6 style="font-size: 20px;" id='hujan2'></h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="headCard">
                        <h6 class="text-center text-white">Akurasi</h6>
                    </div>
                    <div class="card">

                        <div class="bodyCard2">
                            <h6 style="font-size: 45px;" id="persentase2"></h6>

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
                            <h6 style="font-size: 20px;" id="arah2"></h6>

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
                            <h6 style="font-size: 20px;" id="kecepatan2"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- dua jam kemudian -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="headCardInfo">
                        <h6 class="text-center text-white">Daerah Kototabang</h6>
                    </div>
                    <div class="card">

                        <div class="bodyCardInfo">
                            <div class="linebreak">
                                <p class="text white fw-bold" id="dateDisplay3"><br></p>
                                <p class="text white fw-bold"><span id="hourDisplay3"></span>&nbsp;WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="headCard">
                        <h6 class="text-center text-white">Curah Hujan</h6>
                    </div>
                    <div class="card">

                        <div class="bodyCard1">
                            <span id="iconHujan3" style="font-size: 85px;"></span>
                            <h6 style="font-size: 20px;" id='hujan3'></h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="headCard">
                        <h6 class="text-center text-white">Akurasi</h6>
                    </div>
                    <div class="card">

                        <div class="bodyCard2">
                            <h6 style="font-size: 45px;" id="persentase3"></h6>

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
                            <h6 style="font-size: 20px;" id="arah3"></h6>

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
                            <h6 style="font-size: 20px;" id="kecepatan3"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!-- tiga jam kemudian -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="headCardInfo">
                        <h6 class="text-center text-white">Daerah Kototabang</h6>
                    </div>
                    <div class="card">

                        <div class="bodyCardInfo">
                            <div class="linebreak">
                                <p class="text white fw-bold" id="dateDisplay4"><br></p>
                                <p class="text white fw-bold"><span id="hourDisplay4"></span>&nbsp;WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="headCard">
                        <h6 class="text-center text-white">Curah Hujan</h6>
                    </div>
                    <div class="card">

                        <div class="bodyCard1">
                            <span id="iconHujan4" style="font-size: 85px;"></span>
                            <h6 style="font-size: 20px;" id='hujan4'></h6>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2">
                    <div class="headCard">
                        <h6 class="text-center text-white">Akurasi</h6>
                    </div>
                    <div class="card">

                        <div class="bodyCard2">
                            <h6 style="font-size: 45px;" id="persentase4"></h6>

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
                            <h6 style="font-size: 20px;" id="arah4"></h6>

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
                            <h6 style="font-size: 20px;" id="kecepatan4"></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    </div>
@endsection

@push('scripts')
    <script>
        const determineIconText = (hujan) => {
            let hujanFormatted = ""
            let iconName = ""
            switch (hujan) {
                case "N":
                    hujanFormatted = "Cerah"
                    iconName = "fluent:weather-sunny-32-regular"
                    break
                case "R-":
                    hujanFormatted = "Hujan Ringan"
                    iconName = "fluent:weather-snow-20-regular"
                    break
                case "R":
                    hujanFormatted = "Hujan"
                    iconName = "fluent:weather-drizzle-20-regular"
                    break
                case "R+":
                    hujanFormatted = "Hujan Deras"
                    iconName = "bi:cloud-lightning-rain"
                    break
                default:
                    hujanFormatted = "Data Invalid"
                    break
            }

            return {
                iconName,
                hujanFormatted
            }
        }
        window.addEventListener("load", () => {
            let hourIncrement = 1;

            for (let i = 2; i <= 4; i++) {
                const now = new Date();
                const offset = 7 * 60 * 60 * 1000; // Offset in milliseconds for GMT+7 (7 hours)
                const today = new Date(now.getTime() + offset).toISOString();
                const date = today.split("T")[0];
                const hour = today.split("T")[1];
                const formattedHour = (parseInt(hour.split(":")[0]) + hourIncrement).toString() + ":00"
                const dateSplit = date.split("-");
                const formattedDate = `${dateSplit[1]}-${dateSplit[2]}-2019`
                const formattedDate2 = `${dateSplit[2]}-${dateSplit[1]}-2019`

                getPredictByHour(formattedDate, formattedHour, formattedDate2, `arah${i}`, `kecepatan${i}`,
                    `persentase${i}`, `hujan${i}`, `hourDisplay${i}`, `dateDisplay${i}`, `iconHujan${i}`)
                hourIncrement++;
            }
        })

        const getPredictByHour = async (date, formattedHour, formattedDate2, arahDoc, kecepatanDoc, persentaseDoc, hujanDoc,
            hourDisplayDoc, dateDisplayDoc, iconHujanDoc) => {
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
            let {
                hujanFormatted,
                iconName
            } = determineIconText(json.hujan)
            const arah = document.getElementById(arahDoc)
            const kecepatan = document.getElementById(kecepatanDoc)
            const hujan = document.getElementById(hujanDoc)
            const persentase = document.getElementById(persentaseDoc)
            const hourDisplay = document.getElementById(hourDisplayDoc)
            const dateDisplay = document.getElementById(dateDisplayDoc)
            const iconHujan = document.getElementById(iconHujanDoc)

            arah.innerText = json.arah
            kecepatan.innerText = json.kecepatan
            persentase.innerText = json.proba
            hujan.innerText = hujanFormatted
            hourDisplay.innerText = formattedHour
            dateDisplay.innerText = formattedDate2
            iconHujan.innerHTML = `<iconify-icon icon="${iconName}"></iconify-icon>`

        }


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
            let {
                hujanFormatted,
                iconName
            } = determineIconText(json.hujan)
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
@endpush
