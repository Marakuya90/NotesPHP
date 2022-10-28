document.forms["registerForm"].addEventListener("submit", check);
document.getElementById("login").addEventListener("invalid", error);
document.getElementById("password").addEventListener("invalid", error);

function check(event){
    const password = document.getElementById("password").value;
    const confirm = document.getElementById("confirm").value;
    if(password != confirm){
        event.preventDefault();
        document.getElementById("password").classlist.add("error");
        document.getElementById("confirm").classlist.add("error");
    }
}

function error(event){
    event.preventDefault();
    this.classlist.add("error");
}