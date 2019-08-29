if(document.getElementById("btnSubmit")){
    var btnSubmit = document.getElementById("btnSubmit");
    btnSubmit.addEventListener("click", getDataFromForm);
}

function myScript(data){
    $.ajax({
        type: "post",
        url: "index.php",
        data: data,
        dataType: "text",
        success: function (response) {
            console.log(response)
        }
    });
}

function getDataFromForm(){
    var nameCompany = document.getElementById("nameCompany").value;
    if(nameCompany != ""){
        var data = {
            nameCompany: nameCompany
        };
        myScript(data);
    }else{
        alert("khong de trong");
    }
}