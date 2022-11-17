
  var d, cont, num, tbl, x = 1;

  window.addEventListener('load', (e) => {
	d = document;
	cont = d.querySelector('main section .wrapper');
	num = document.querySelector('#num');

	d.querySelector('#newtable').addEventListener('click', newtable);
	d.querySelector('#newrow').addEventListener('click', newrow);
	d.querySelector('#newrow').disabled = true;
	d.querySelector('#delrow').addEventListener('click', delrow);
	d.querySelector('#delrow').disabled = true;
	
	cont.innerHTML = '';
  });

  const
	newtable = function(e) {
		tbl = d.createElement('table'); tbl.className = 'lab3__table';
		cont.appendChild(tbl); 
		this.disabled = true;
		d.querySelector('#newrow').disabled = false;
	},
	newrow = function(e) {
		var row = d.createElement('tr'); row.id = 'row'+x;

		var tmp = d.createElement('td'); tmp.innerHTML = x;
		row.appendChild(tmp);
		for(i=1;i<5;i++) {
			tmp = d.createElement('td'); tmp.innerHTML = x+' '+i;
			row.appendChild(tmp);
		}
		tbl.appendChild(row);
		x++;
		d.querySelector('#delrow').disabled = false;
	},
	delrow = function(e) {
		var tmp = false;
		if(parseInt(num.value) > 0) { 
			if(tmp = d.querySelector('#row'+num.value)) {
				tbl.removeChild(tmp);
			} else {}
		} else {}

		num.value = '';

		if(tbl.querySelectorAll('tr').length<1) {
			d.querySelector('#delrow').disabled = true;
		} else {}
	};