const form = document.getElementById('entrada');



console.log(form)

function setCookie(name, value, hoursToExpire) {
    let now = new Date();
    let time = now.getTime();
    time += hoursToExpire * 60 * 60 * 1000;
    now.setTime(time);
    document.cookie = `${name}=${value}; expires=${now.toUTCString()}; path=/`;
};

form.addEventListener('submit', function geoposition(event){
    event.preventDefault();

    if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(
            position=> {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;

                // Crear una cookie que dure 24 horas para almacenar la geolocalización
                setCookie(nombreUsuario, `${latitude},${longitude}`, 24);
                console.log("Geolocalización almacenada en la cookie.");
                setTimeout(()=>{
                    form.submit();
                },5000)

            },
            function (error) {
                console.error("Error al obtener la geolocalización:", error);
            }
        );
    } else {
        console.error("La geolocalización no está disponible en este navegador.");
    }


})
