
  var d, cont, btn_crt, btn_read, btn_upd, btn_del, href;

  window.addEventListener('load', (e) => {
	d = document;
	cont = d.querySelector('.container');

	btn_crt = d.querySelector('.btn_crt');
	btn_read = d.querySelector('.btn_read');
	btn_upd = d.querySelector('.btn_upd');
	btn_del = d.querySelector('.btn_del');

	btn_crt.onclick = crt;
	btn_read.onclick = read;
	btn_upd.onclick = upd;
	btn_del.onclick = del;

	btn_upd.style.display = 'none';
	btn_del.style.display = 'none';

	read();
  });

  const
	crt = function() {
		href = this.href || 'list.php';

		fetch(href)  
		.then(function(re) {  
			return re.text();
		}).then(parse).catch(function(err) { console.error(err); });

	return false;
	},

	read = function() {
		href = this.href || 'list.php';

		fetch(href)  
		.then(function(re) {  
			return re.text();
		}).then(parse).catch(function(err) { console.error(err); });

	return false;
	},

	upd = function() {
		href = this.href || 'list.php';

		fetch(href)  
		.then(function(re) {  
			return re.text();
		}).then(parse).catch(function(err) { console.error(err); });

	return false;
	},

	del = function() {
		href = this.href || 'list.php';

		fetch(href)  
		.then(function(re) {  
			return re.text();
		}).then(parse).catch(function(err) { console.error(err); });

	return false;
	},

	submit = function() {
		var formData = new FormData(this);

		var request = new Request(this.action, { method: 'POST', body: new URLSearchParams(formData), headers: new Headers({ 'Content-Type': 'application/x-www-form-urlencoded' }) });
		console.log(request);

		fetch(request)  
		.then(function(re) {  
			return re.text();
		}).then(parse).catch(function(err) { console.error(err); });

	return false;	
	},

	parse = function(html) {
		cont.innerHTML = html;

		if(href.indexOf('?id=')>0) {
			let id = href.substr( href.indexOf('?id=') + 4 );

			btn_upd.href = btn_upd.href.substr(0, btn_upd.href.indexOf('?id=')) + '?id=' + id;
			btn_del.href = btn_del.href.substr(0, btn_del.href.indexOf('?id=')) + '?id=' + id;

			btn_upd.style.display = 'inline-block';
			btn_del.style.display = 'inline-block';
		} else {

			btn_upd.style.display = 'none';
			btn_del.style.display = 'none';
		}

		cont.querySelectorAll('a').forEach((o) => { o.onclick = read; });

		cont.querySelectorAll('form').forEach((o) => {
			o.onsubmit = submit;
		});

	};