function startTime() {
  const today = new Date();
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}

    let colors = ["blue", "red", "green", "orange", "purple", "white", "skyblue"]; // Add more colors as needed
    let colorIndex = 0;

    function changeColor() {
      document.getElementById("h1").style.color = colors[colorIndex];
      colorIndex = (colorIndex + 1) % colors.length;
    }