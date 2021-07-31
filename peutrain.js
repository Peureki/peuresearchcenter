function train_timer(){
	const api = 'https://script.googleusercontent.com/macros/echo?user_content_key=_NVhwGxAJY214fAp1Vt2GEUnqlktJB9MWL4uyVxuZM7NwYYWP58K4GKtLiLJGEPD0AitvEkAghm5JuMoJfHwCeOBR8zL_Qurm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnJVsVrEG7PJizbnqo8O_JkVYel3N7dPqncADQ3PfaGfmT3pWVgNDoQbPMyIIh63i1OIqWsDnSrEd&lib=Ml_HCQsWUQxcHL3OQniqga27e2chd3gQF';
	const response = await fetch(api);
	const data = await response.json(); 

	console.log(data.spreadsheet[5]);

	var newDate = new Date(2020, 6, 13, 9, 23);

	var days = document.getElementById('days'),
		hours = document.getElementById('hours'),
		minutes = document.getElementById('minutes'),
		seconds = document.getElementById('seconds'),
		d_label = document.getElementById('peu-train-timer1'),
		h_label = document.getElementById('peu-train-timer2'),
		m_label = document.getElementById('peu-train-timer3'),
		s_label = document.getElementById('peu-train-timer4');

	var timer = setInterval(function(){
		var nowDate = new Date();

		var diff = newDate - nowDate;

		if (diff >= 0){
			var s = Math.floor(diff / 1000);
			var m = Math.floor(s / 60);
			var h = Math.floor(m / 60);
			var d = Math.floor(h / 24);

			h %= 24;
			m %= 60; 
			s %= 60;

			h = (h < 10) ? "0" + h : h;
			m = (m < 10) ? "0" + m : m;
			s = (s < 10) ? "0" + s : s; 

			days.innerHTML = d;
			hours.innerHTML = h;
			minutes.innerHTML = m;
			seconds.innerHTML = s;
		} else {
			d_label.style.opacity = .2;
			h_label.style.opacity = .2;
			m_label.style.opacity = .2;
			s_label.style.opacity = .2;
		}
	}, 1000);
}
