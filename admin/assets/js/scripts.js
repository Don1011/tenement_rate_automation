
function showRegisterPage(){
    var fP = document.getElementById("firstPage");
    var rP = document.getElementById("registerPage");
    fP.className = "container display_none";
    rP.className = "container";
    // alert("working");
}

function fetch_sub_vicinities(id){
    var fsv = new XMLHttpRequest();
    fsv.open("GET", `ajax_processes.php?vicinity_id=${id}`, true);
    fsv.onload = function()
    {
        var selectTag = document.getElementById("subVicinityId");
        selectTag.innerHTML = "<option value=''>-Select Sub-vicinity-</option>";
        selectTag.innerHTML += this.responseText;
    }
    fsv.send();
}