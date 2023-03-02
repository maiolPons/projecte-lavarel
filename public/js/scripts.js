function initMap(){
    const data = "<?php echo $race->map_url; ?>";
    //console.log(data)
    //axios.get("https://maps.googleapis.com/maps/api/geocode/json",{
    //    params:{
    //        address:data,
    //        key: "AIzaSyCV85fgRAcaliCXmgSTV2SiVpaaUdGzqD4"
    //    }
    //}).then(function(response){
    //    var latMap = response.data.results[0].geometry.location.lat;
    //    var lenMap = response.data.results[0].geometry.location.lng;
    //    console.log(latMap)

    //}).catch(function(error){
    //    console.log(error);
    //});
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 12, lng: 12},
        zoom: 8
    });
    //new google.maps.Marker({
    //    position: {12, 12},
    //    map,
    //    title: data,
    //});
}
//modal formulari
$(document).ready(function(){
    $("#btnModalFormCursa").click(function(){
      $("#FormulariAlta").modal("show");
    });
    $("#btnModalFormCursaClose").click(function(){
        $("#FormulariAlta").modal("hide");
    });
});

//
$('#flexCheckDefault').change(function(){
    if ($('#flexCheckDefault').is(':checked') == true){
        $('#selectFormCursa').val('160').prop('disabled', true);
        console.log('checked');
    } else {
        $('#selectFormCursa').val('').prop('disabled', false);
        console.log('unchecked');
    }
});

