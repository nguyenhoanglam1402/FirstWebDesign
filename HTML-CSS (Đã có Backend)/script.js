


function isCheck() {
    var userTextbox = document.getElementById("exampleInputEmail1");
    var passwordTextBox = document.getElementById("exampleInputPassword1");
    let checkBox = document.getElementById("exampleCheck1").checked;
    
    if (checkBox == false) {
        <div class="alert alert-danger" role="alert">
            You didn't agree with out laws ! Let's check it out !
        </div>
    }
}