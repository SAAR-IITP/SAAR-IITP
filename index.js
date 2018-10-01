var min = 2012;
var d = new Date();
max = d.getFullYear();
for (var i = min; i<=max; i++){
  var opt= document.createElement('option');
opt.value = i;
opt.innerHTML = i;
console.log(document.getElementById('passYear'));
document.getElementById('passYear').appendChild(opt);};

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, {});
});
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, {});
  });
 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

