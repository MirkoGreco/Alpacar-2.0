@extends('layouts.template')
@section('content')
    <div class="container" style="padding-top:60px">
        <h1 class="text-center my-3">Vendi il tuo Veicolo</h1>

        <div class="form-wrapper">
            <form action="{{ route('posts.store') }}" method="post">
                @csrf
                <div id="form1" class="">
                    <div class="row">
                        <div class="col">
                            <label for="titolo">TITOLO DELL'ANNUNCIO</label>
                            <input type="text" name="titolo" class="form-control" required id="titolo"
                                placeholder="INSERISCI IL TITOLO DELL'ANNUNCIO" />
                            <br>
                        </div>
                        <div class="text-center mb-3">
                            <h4>Stato Veicolo</h4>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="stato" id="inlineRadio1" value="nuovo">
                                <label class="form-check-label" for="inlineRadio1">Nuovo</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="stato" id="inlineRadio2" value="usato">
                                <label class="form-check-label" for="inlineRadio2">Usato</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label" for="regione">
                                    <h4>Regione</h4>
                                </label>
                                <select class="form-select" aria-label="Default select example" name="regione"
                                    id="regione" onchange="mostraprovince()">
                                    <option value="regione">Scegli la regione</option>
                                    @for ($i = 0; $i < count($regioni); $i++)
                                        <option value="{{ $regioni[$i]->regione }}" name="regione">
                                            {{ $regioni[$i]->regione }}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="provincia">
                                    <h4>Provincia</h4>
                                </label>
                                <select class="form-select" aria-label="Default select example" name="provincia"
                                    id="provincia" onchange="mostracomuni()">

                                </select>
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="comune">
                                    <h4>Comune</h4>
                                </label>
                                <select class="form-select" aria-label="Default select example" name="city_id"
                                    id="comune">

                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-check-label" for="marca">
                                    <h4>Marca</h4>
                                </label>
                                <select class="form-select" aria-label="Default select example" name="marca" id="brand"
                                    onchange="showModels()">
                                    <option>Marca</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}" name="marca">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col">
                                <label class="form-check-label" for="marca">
                                    <h4>Modello</h4>
                                </label>
                                <select class="form-select" aria-label="Default select example" name="model_id"
                                    id="model"></select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h4>Prezzo</h4>
                                <input type="text" name="prezzo" class="form-control" />
                            </div>
                            <div class="col">
                                <h4>Chilometraggio</h4>
                                <input type="text" name="chilometraggio" class="form-control" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h4>Immatricolazione</h4>
                                <input type="date" name="immatricolazione" class="form-control" />
                            </div>
                            <div class="col">
                                <h4>Potenza</h4>
                                <input type="text" name="potenza" class="form-control" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h4>Cilindrata</h4>
                                <input type="text" name="cilindrata" class="form-control" />
                            </div>
                            <div class="col">
                                <h4>Colore</h4>
                                <input type="text" name="colore" class="form-control" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h4>Alimentazione</h4>
                                <input type="text" name="alimentazione" class="form-control" />
                            </div>
                            <div class="col">
                                <h4>Carrozzeria</h4>
                                <input type="text" name="carrozzeria" class="form-control" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h4>Descrizione</h4>
                                <input type="textarea" name="descrizione" class="form-control" />
                            </div>
                            <div class="col">
                                <h4>Indirizzo</h4>
                                <input type="text" name="indirizzo" class="form-control" />
                            </div>
                        </div>
                        <br>
                    </div>
                    <input type="submit" name="Continua" id="btn1" class="btn btn-danger" value="Continua" />
            </form>


        </div>







        <script>
            const brandSelect = document.querySelector("#brand")
            brandSelect.addEventListener("change", showModels)
            const regione = document.getElementById('regione').value;

            function showModels() {
                brandId = brandSelect.value;
                fetch(`/api/models/${brandId}`)
                    .then(res => res.json())
                    .then(model => {
                        const modelInput = document.querySelector("#model");
                        modelInput.innerHTML = "";
                        for (let index = 0; index < model.length; index++) {
                            modelInput.innerHTML +=
                                `<option value=${model[index].id} name="model">${model[index].name}</option>`;


                        }
                    });
            }

            function mostraprovince() {
                const regione = document.getElementById('regione').value;
                console.log(regione);
                fetch(`/api/provincia/${regione}`)
                    .then(response => {
                        return response.json();
                    })
                    .then(province => {
                        document.getElementById('provincia').innerHTML = '';
                        for (let i = 0; i < province.length; i++) {
                            document.getElementById('provincia').innerHTML += `
                <option value="${province[i].provincia}" name="provincia">${province[i].provincia}</option>`;
                        }
                    });
            };

            function mostracomuni() {
                const provincia = document.getElementById('provincia').value;
                console.log(provincia);
                fetch(`/api/comune/${provincia}`)
                    .then(response => {
                        return response.json();
                    })
                    .then(comuni => {
                        document.getElementById('comune').innerHTML = '';
                        for (let i = 0; i < comuni.length; i++) {
                            document.getElementById('comune').innerHTML += `
                <option value="${comuni[i].id}" name="comune">${comuni[i].comune}</option>`;
                        }
                    });
            };
        </script>
    @endsection
