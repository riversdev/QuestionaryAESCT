$(document).ready(function () {
    let totalPoints = 0;
    let point = 1;

    sendPoint(point);

    let radiosA = ["customRadio1", "customRadio2", "customRadio3"];
    let radiosB = ["customRadio4", "customRadio5", "customRadio6", "customRadio7"];
    let radiosC = ["customRadio8", "customRadio9", "customRadio10", "customRadio11"];

    let checkControlRiesgo = [];
    let checkNivelContacto = [];
    let checkRiesgoContagio = [];

    $("#btnNext").on('click', function () {
        let A = 0;
        let B = 0;
        let C = 0;
        for (let i = 0; i < radiosA.length; i++) {
            let radioA = document.getElementById(radiosA[i]);
            if (radioA.checked) {
                A = 1;
            }
        }
        for (let i = 0; i < radiosB.length; i++) {
            let radioB = document.getElementById(radiosB[i]);
            if (radioB.checked) {
                B = 1;
            }
        }
        for (let i = 0; i < radiosC.length; i++) {
            let radioC = document.getElementById(radiosC[i]);
            if (radioC.checked) {
                C = 1;
            }
        }
        if (A == 0 || B == 0 || C == 0) {
            alertify.alert('ADVERTENCIA !', 'Asegurate de marcar las tres categorías');
        } else {
            if (point > totalPoints) {
                //
            }
            else {
                for (let i = 0; i < radiosA.length; i++) {
                    let radioA = document.getElementById(radiosA[i]);
                    if (radioA.checked) {
                        checkControlRiesgo.push(radioA.getAttribute('value'));
                    }
                }
                for (let i = 0; i < radiosB.length; i++) {
                    let radioB = document.getElementById(radiosB[i]);
                    if (radioB.checked) {
                        checkNivelContacto.push(radioB.getAttribute('value'));
                    }
                }
                for (let i = 0; i < radiosC.length; i++) {
                    let radioC = document.getElementById(radiosC[i]);
                    if (radioC.checked) {
                        checkRiesgoContagio.push(radioC.getAttribute('value'));
                    }
                }

                alertify.success("Guardado");

                if (point == totalPoints) {
                    $.ajax({
                        type: "POST",
                        url: "templates/saveQuestionary.php",
                        data: {
                            checkControlRiesgo,
                            checkNivelContacto,
                            checkRiesgoContagio
                        },
                        error: function (data) {
                            alertify.error("Error peticion ajax");
                        },
                        success: function (data) {
                            $("#checkPoint").empty();
                            $("#checkPoint").append(data);
                            alertify.alert('FINALIZADO !', 'Gracias por su tiempo, el cuestionario ha terminado');
                        }
                    });
                }
                else {
                    sendPoint(point + 1);
                    point++;
                }
            }
        }
    });

    function sendPoint(point) {
        $.ajax({
            type: "POST",
            url: "templates/searchPoints.php",
            data: {
                pointID: point
            },
            error: function (data) {
                alertify.error("Error peticion ajax");
            },
            success: function (data) {
                $("#checkPoint").empty();
                $("#checkPoint").append(data);
                totalPoints = document.getElementById("totalPoints").value;
                document.getElementById("position").innerHTML = point + " /" + totalPoints;
                for (let i = 0; i < radiosA.length; i++) {
                    let radioA = document.getElementById(radiosA[i]);
                    radioA.checked = false;
                }
                for (let i = 0; i < radiosB.length; i++) {
                    let radioB = document.getElementById(radiosB[i]);
                    radioB.checked = false;
                }
                for (let i = 0; i < radiosC.length; i++) {
                    let radioC = document.getElementById(radiosC[i]);
                    radioC.checked = false;
                }
            }
        });
    }
});