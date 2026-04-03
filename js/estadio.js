/* Modal */

function goModal() {

    var modal = $("#myModal");
    var info = $("#infocap")

    modal.modal("show");
    modal.addClass("in");


}

function outModal() {
    
    var modal = $("#myModal");

    modal.modal("hide");
    
}

window.onload = function() {

    document.getElementById("mboton").onclick = goModal;
    document.getElementById("bclose").onclick = outModal;
    document.getElementsByClassName("indicea").onclick = outModal;
    document.body.onclick= function(e){
        e=window.event? event.srcElement: e.target;
        if(e.className && e.className.indexOf('indicea')!=-1)outModal();
    };
    

}