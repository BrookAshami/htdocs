function postComment(){
    let request = new XMLHttpRequest();
    request.open("POST", "../phpData/confirmation.php");
    request.onreadystatechange = function(){
        if(this.readyState === 4 && this.status === 200){
            document.getElementById("result").innerHTML = this.responseText;

        }
    };
    let myForm = document.getElementById("myForm");
    let formData = new FormData(myForm);
    request.send(formData);

}

function DOMTest(){
    window.document.
}