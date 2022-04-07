@extends('layouts.template')
@section('content')
    <div class="container" style="padding-top:60px">
        <h1 class="text-center my-3">Aggiungi dettagli al tuo Annuncio</h1>
        <div id="form2" class="">

            <form action="{{ route('details.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="post_id" value="{{ $id }}"></input>
                    <div class="col">
                        <h4>Proprietari</h4>
                        <input type="text" name="proprietari" class="form-control" />
                    </div>
                    <div class="col">
                        <label class="form-check-label" for="cambio">
                            <h4>Cambio</h4>
                        </label>
                        <select class="form-select" aria-label="Default select example" name="cambio" id="cambio">
                            <option value="manuale" name="cambio">Manuale</option>
                            <option value="automatico" name="cambio">Automatico</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h4>Vernice</h4>
                        <input type="text" name="vernice" class="form-control" />
                    </div>
                    <div class="col">
                        <label class="form-check-label" for="rivestimenti">
                            <h4>Rivestimenti</h4>
                        </label>
                        <select class="form-select" aria-label="Default select example" name="rivestimenti"
                            id="rivestimenti">
                            <option value="pelle" name="rivestimenti">Pelle</option>
                            <option value="tessuto" name="rivestimenti">Tessuto</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h4>Posti</h4>
                        <input type="text" name="posti" class="form-control" />
                    </div>
                    <div class="col">
                        <h4>Porte</h4>
                        <input type="text" name="porte" class="form-control" />
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h4>Consumi</h4>
                        <input type="text" name="consumi" class="form-control" />
                    </div>
                    <div class="col">
                        <h4>Emissioni</h4>
                        <input type="text" name="emissioni" class="form-control" />
                    </div>
                </div>

                <hr class="my-5">
                <h2 class="text-center my-3">Equipaggiamento</h2>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h4>Comodità</h4>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="alzacristalli" id="alzacristalli">
                                <label class="form-check-label" for="alzacristalli">
                                    Alzacristalli elettrici
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="clima" id="clima" Default>
                                <label class="form-check-label" for="clima">
                                    Climatizzatore
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="autoclima" id="autoclima" Default>
                                <label class="form-check-label" for="autoclima">
                                    Controllo automatico clima
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="specchietti" id="specchietti"
                                    Default>
                                <label class="form-check-label" for="specchietti">
                                    Specchietti laterali elettrici
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="volantepelle" id="volantepelle"
                                    Default>
                                <label class="form-check-label" for="volantepelle">
                                    Volante in pelle
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="volantemulti" id="volantemulti"
                                    Default>
                                <label class="form-check-label" for="volantemulti">
                                    Volante multifunzione
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="cbordo" id="cbordo" Default>
                                <label class="form-check-label" for="cbordo">
                                    Computer di bordo
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="lega" id="lega" Default>
                                <label class="form-check-label" for="lega">
                                    Cerchi in lega
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="luci" id="luci" Default>
                                <label class="form-check-label" for="luci">
                                    Luce d'ambiente
                                </label>
                            </div>
                        </div>

                        <div class="col">
                            <h4>Sicurezza</h4>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="ruota" id="ruota" Default>
                                <label class="form-check-label" for="ruota">
                                    Ruota di scorta
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="abs" id="abs" Default>
                                <label class="form-check-label" for="abs">
                                    ABS
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="antifurto" id="antifurto" Default>
                                <label class="form-check-label" for="antifurto">
                                    Antifurto
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="airbagc" id="airbagc" Default>
                                <label class="form-check-label" for="airbagc">
                                    Airbag conducente
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="airbagp" id="airbagp" Default>
                                <label class="form-check-label" for="airbagp">
                                    Airbag passeggero
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="airbagl" id="airbagl" Default>
                                <label class="form-check-label" for="airbagl">
                                    Airbag laterali
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="immobilizzatore" id="immobilizzatore"
                                    Default>
                                <label class="form-check-label" for="immobilizzatore">
                                    Immobilizzatore elettronico
                                </label>
                            </div>

                        </div>

                        <div class="col">
                            <h4>Tecnologia</h4>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="chiusurac" id="chiusurac" Default>
                                <label class="form-check-label" for="chiusurac">
                                    Chiusura centralizzata
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="trazione" id="trazione" Default>
                                <label class="form-check-label" for="trazione">
                                    Controllo automatico trazione
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="fendinebbia" id="fendinebbia"
                                    Default>
                                <label class="form-check-label" for="fendinebbia">
                                    Fendinebbia
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="frenata" id="frenata" Default>
                                <label class="form-check-label" for="frenata">
                                    Frenata d'emergenza assistita
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="servosterzo" id="servosterzo"
                                    Default>
                                <label class="form-check-label" for="servosterzo">
                                    Servosterzo
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="pressione" id="pressione" Default>
                                <label class="form-check-label" for="pressione">
                                    Sistema di controllo pressione pneumatici
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="esp" id="esp" Default>
                                <label class="form-check-label" for="esp">
                                    ESP
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="corsia" id="corsia" Default>
                                <label class="form-check-label" for="corsia">
                                    Mantenimento di corsia
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="autonoma" id="autonoma" Default>
                                <label class="form-check-label" for="autonoma">
                                    Guida autonoma
                                </label>
                            </div>

                        </div>

                    </div>
                </div>

                <br>

                <button class="btn btn-secondary d-none" id="back">Indietro</button>
                <input type="submit" name="Invia" class="btn btn-danger" value="Invia" />
                <hr class="my-5">
            </form>
        </div>
    </div>
