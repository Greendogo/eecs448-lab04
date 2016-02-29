function highlight(x, y) {
  var col = document.getElementById("col" + x);
  var row = document.getElementById("row" + y);
  row.style.backgroundColor = '#4CAFF0';
  col.style.backgroundColor = '#4CAFF0';
}

function normbgd(x, y) {
  var col = document.getElementById("col" + x);
  var row = document.getElementById("row" + y);
  row.style.backgroundColor = '#4CAF50';
  col.style.backgroundColor = '#4CAF50';
}
