<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionary</title>
    <!-- BOOTSTRAP 4.5 CDN -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <!-- BOOTSWATCH LUX -->
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <!-- CUSTOM JS -->
    <script src="static/js/main.js"></script>
    <!-- ALERTIFY 1.13.1 -->
    <link rel="stylesheet" href="static/alertify/css/alertify.css">
    <link rel="stylesheet" href="static/alertify/css/themes/default.min.css">
    <script src="static/alertify/alertify.js"></script>
    <!-- JQuery -->
    <script src="static/js/jQuery.js"></script>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center pt-5">
            <div class="card text-center" style="width: 130vh;">
                <div class="card-body" style="border-top: 5px solid #1a1a1a;">
                    <h4 class="card-title text-monospace">PUNTO DE COMPROBACIÓN</h4>
                    <p id="checkPoint" class="card-text text-justify" style="font-size: medium;"></p>
                    <hr>
                    <table class="table table-borderless table-sm" style="width: 100%; font-size: small;">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" class="text-monospace">Controles de riesgo</th>
                                <th scope="col" class="border-left text-monospace">Nivel de contacto entre trabajadores</th>
                                <th scope="col" class="border-left text-monospace">Riesgo de contagio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="controlesDeRiesgo"
                                                class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="customRadio1">Si (0)</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="controlesDeRiesgo"
                                                class="custom-control-input" value="2">
                                            <label class="custom-control-label" for="customRadio2">Parcial (5)</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="controlesDeRiesgo"
                                                class="custom-control-input" value="3">
                                            <label class="custom-control-label" for="customRadio3">No (10)</label>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-left">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="nivelContacto"
                                                class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="customRadio4">Continua (4)</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio5" name="nivelContacto"
                                                class="custom-control-input" value="2">
                                            <label class="custom-control-label" for="customRadio5">Frecuentemente
                                                (3)</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio6" name="nivelContacto"
                                                class="custom-control-input" value="3">
                                            <label class="custom-control-label" for="customRadio6">Ocacional (2)</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio7" name="nivelContacto"
                                                class="custom-control-input" value="4">
                                            <label class="custom-control-label" for="customRadio7">Esporádica
                                                (1)</label>
                                        </div>
                                    </div>
                                </td>
                                <td class="border-left">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio8" name="riesgoContagio"
                                                class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="customRadio8">Muy alta (>15 y
                                                <=40)</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio9" name="riesgoContagio"
                                                class="custom-control-input" value="2">
                                            <label class="custom-control-label" for="customRadio9">Alta (>10 y <=15)</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio10" name="riesgoContagio"
                                                class="custom-control-input" value="3">
                                            <label class="custom-control-label" for="customRadio10">Media (>5 y <=10)</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio11" name="riesgoContagio"
                                                class="custom-control-input" value="4">
                                            <label class="custom-control-label" for="customRadio11">Baja (>=0 y <=5)</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="row">
                        <div class="col-6 text-left">
                            Pregunta
                            <span class="pl-1"></span>
                            <div id="position" class="badge badge-primary badge-pill pb-1"></div>
                        </div>
                        <div class="col-6 text-right">
                            <button id="btnNext" class="btn btn-outline-primary btn-sm text-right">Siguiente</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- temps -->
    <input type="text" id="totalPoints" value="1" class="d-none"></input>
</body>

</html>