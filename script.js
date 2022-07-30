const form = document.getElementsByClassName("row input-container")[0],
statusTxt = form.querySelector(".button-area span");

statusTxt.onclick = (e)=>{
    e.preventDefault(); //Preventing form from submitting
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest(); //creating new xml object
    xhr.open("POST", "message.php", true); /// sending post request to message.php file
    xhr.onload = ()=>{ // once ajax loaded
        if(xhr.readyState == 4 && xhr.status == 200){ // if ajax response status is 200 & ready status is 4 means there is not any error
            let response = xhr.response; // storing ajax response in a response variable
            console.log(response);
        }
    }
    xhr.send();
}