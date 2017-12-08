<script type="text/javascript">
	$(document).ready(function () {
		$('#modal_guest').modal({
			keyboard: false,
			show: 'fade',
			backdrop: 'static',
		});
	});
</script>

<script type="text/javascript">
	$(window).on('load', function () {
		$('#lokasi').modal({
			backdrop: 'static',
			keyboard: false
		})
	});
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('gambar');
var modalImg = document.getElementById("denah");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>