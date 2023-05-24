function calculate() {
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('result').value = this.responseText;
            console.log(this.responseText);
        }
    };
    const param = `val1=${document.getElementById("firstValue").value}&val2=${document.getElementById("secondValue").value}&op=${document.getElementById("ops").value}`;
    xhttp.open("POST", "ajax.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(param);

}