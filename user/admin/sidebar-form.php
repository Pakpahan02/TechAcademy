
	<!-- ======= Forms Nav ======= -->
	<div class="sidebarform">
	
	<li>
		<a href="forms-registration.php">
			<i class="bi bi-circle"></i><span>Tambah Admin</span>
		</a>
	</li>
	<li>
		<a href="admin-ta.php">
			<i class="bi bi-circle"></i><span>Lihat Admin</span>
		</a>
	</li>
	
	</div>
	<!-- End Forms Nav -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
  		$(".sidebarform a").click(function() {
    	$(".sidebarfrom a").removeClass("active");
    	$(this).addClass("active");
    	localStorage.setItem("activeNav", $(this).index(".sidebarform a"));
  		});

  		if (localStorage.getItem("activeNav")) {
    		$(".sidebarform a").removeClass("active");
    		$(".sidebarform a:eq(" + localStorage.getItem("activeNav") + ")").addClass("active");
  		}
		});
	</script>