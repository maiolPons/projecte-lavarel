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
let dropArea; 
let preview; 
let dragText; 
let button; 
let file; 
addEventListener("load", (event) => {
    try{
        dropArea = document.querySelector(".drag-image");
        preview = document.getElementById("preview");
        console.log(dropArea);
        dragText = dropArea.querySelector("h6");
        button = dropArea.querySelector("button");
        input = dropArea.querySelector("input");
        button.onclick = ()=>{
            input.click(); 
        }
        
        input.addEventListener("change", function(){
        
            file = this.files[0];
            viewfile();
        });
        
        dropArea.addEventListener("dragover", (event)=>{
            event.preventDefault();
            dropArea.classList.add("active");
            dragText.textContent = "Release to Upload File";
        });
        
        
        dropArea.addEventListener("dragleave", ()=>{
            dropArea.classList.remove("active");
            dragText.textContent = "Drag & Drop to Upload File";
        }); 
        
        dropArea.addEventListener("drop", (event)=>{
        event.preventDefault(); 
         
        file = event.dataTransfer.files[0];
        dropArea.classList.remove("active");
        dragText.textContent = "Drag & Drop to Upload File";
        viewfile(); 
      });
    }catch(error){}
});



function viewfile(){
    let fileType = file.type; 
    let validExtensions = ["image/jpeg", "image/jpg", "image/png"];
    if(validExtensions.includes(fileType)){ 
        let fileReader = new FileReader(); 
        fileReader.onload = ()=>{
            let fileURL = fileReader.result; 
            console.log(file)
            let imgTag = `<div class='photosUploadedPreview col-3'><img src="${fileURL}" alt="image"><div>`;
            preview.innerHTML  += imgTag; 
        }
        fileReader.readAsDataURL(file);
    }else{
        dropArea.classList.remove("active");
        dragText.textContent = "Drag & Drop to Upload File";
        alert("This is not an Image File!");
    }
}

