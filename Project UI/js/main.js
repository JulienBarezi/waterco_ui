const inputlist = document.querySelectorAll(".input-container input");

Array.prototype.forEach.call(inputlist, function(inputItem){
	inputItem.addEventListener("focus", function(){
		this.parentElement.classList.add("focused");
	})

	inputItem.addEventListener("blur", function(){
		if (this.value.length == 0) {
			this.parentElement.classList.remove("focused");
		}
	})
})


/* This is for the home page */

// $('#myTab a').on('click', function (e) {
//   e.preventDefault()
//   $(this).tab('show')
// })

// $('#myTab a[href="#staff"]').tab('show')
// $('#myTab a[href="#member"]').tab('show') 
// $('#myTab a[href="#premise"]').tab('show')
// $('#myTab a[href="#bill"]').tab('show')
// $('#myTab a[href="#payment"]').tab('show')
// $('#myTab a[href="#route"]').tab('show')

/* This is for controlling the buttons tabs */

// $('#buttons-tab button').on('click', function (a) {
//   a.preventDefault()
//   $(this).tab('btn-show')
// })

// $('#buttons-tab button[href="#nav-home-tab"]').tab('btn-show')
// $('#buttons-tab button[href="#nav-profile"]').tab('btn-show')
// $('#buttons-tab button[href="#view"]').tab('btn-show') 
// $('#myTab a[href="#premise"]').tab('show')
// $('#myTab a[href="#bill"]').tab('show')
// $('#myTab a[href="#payment"]').tab('show')
// $('#myTab a[href="#route"]').tab('show')

// $('#nested-tab a').on('click', function (e) {
//   e.preventDefault()
//   $(this).tab('in')
// })

// $('#nested-tab a[href="#sub21"]').tab('in')
// $('#nested-tab a[href="#sub22"]').tab('in') 


