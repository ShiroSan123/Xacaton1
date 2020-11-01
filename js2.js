let b = document.querySelector(".biznes")
	let p = document.querySelector(".plans")
	let m = document.querySelector(".messing")
	let n = document.querySelector(".notification")
	let o = document.querySelector(".options")
	let b1 = document.querySelector(".btn1")
	let b2 = document.querySelector(".btn2")
	let b3 = document.querySelector(".btn3")
	let b4 = document.querySelector(".btn4")
	let b5 = document.querySelector(".btn5")
	b1.onclick = function(){
		b.style.display = "block";
		p.style.display = "none";
		m.style.display = "none";
		n.style.display = "none";
		o.style.display = "none";
	}
	b2.onclick = function(){
		b.style.display = "none";
		p.style.display = "block";
		m.style.display = "none";
		n.style.display = "none";
		o.style.display = "none";
	}
	b3.onclick = function(){
		b.style.display = "none";
		o.style.display = "block";
		m.style.display = "none";
		p.style.display = "none";
		n.style.display = "none";
	}
	b4.onclick = function(){
		b.style.display = "none";
		p.style.display = "none";
		m.style.display = "block";
		n.style.display = "none";
		o.style.display = "none";
	}
	b5.onclick = function(){
		b.style.display = "none";
		p.style.display = "none";
		m.style.display = "none";
		n.style.display = "block";
		o.style.display = "none";
	}

	function myFunction(){
		alert("I am an alert box!"); // this is the message in ""
	}