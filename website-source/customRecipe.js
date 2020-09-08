function customRecipe() {
    var url = 'customRecipe.php';

    var uName = document.getElementById('name').value;
    var payloadBody = xmlPayload(uName);

    const options = {
        method: "POST",
        body: payloadBody,
        headers: {
            'Content-Type': 'text/xml'
        }
    }
    
    fetch(url, options)
        .then(res => res.text())
        .then(res => document.getElementById("recipe").innerHTML = res)
        .catch(err => document.getElementById("recipe").innerHTML = "Could not get recipe");

}

function xmlPayload(n){
    xml = '<?xml version="1.0" encoding="UTF-8"?>'
    xml += '<name>' + n + '</name>'

    return xml;
}
