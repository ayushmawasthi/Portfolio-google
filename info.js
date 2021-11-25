fetch('/city.php')
.then(jsonData => jsonData.json())
.then(data => printIt(data))

let printIt = (data) => {
//console.log(data);
//console.info(typeof data)
document.getElementById("city").innerHTML=data;
}
fetch('http://127.0.0.1:5000/country.php')
.then(jsonData => jsonData.json())
.then(data => printIt2(data))

let printIt2 = (data) => {
//console.log(data);
//console.info(typeof data)
document.getElementById("coun").innerHTML=data;
}

fetch('http://127.0.0.1:5000/pin.php')
.then(jsonData => jsonData.json())
.then(data => printIt3(data))

let printIt3 = (data) => {
//console.log(data);
//console.info(typeof data)
document.getElementById("pin").innerHTML=data;
}

fetch('http://127.0.0.1:5000/isp.php')
.then(jsonData => jsonData.json())
.then(data => printIt4(data))

let printIt4 = (data) => {
//console.log(data);
//console.info(typeof data)
document.getElementById("isp").innerHTML=data;
}

fetch('http://127.0.0.1:5000/ipadd.php')
.then(jsonData => jsonData.json())
.then(data => printIt5(data))

let printIt5 = (data) => {
//console.log(data);
//console.info(typeof data)
document.getElementById("ipadd").innerHTML=data;
}