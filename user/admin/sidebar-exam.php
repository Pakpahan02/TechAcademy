
	<!-- ======= Forms Nav ======= -->
	<div class="sidebarexam">
	
	<li>
		<a href="#">
			<i class="bi bi-circle"></i><span>Test Microsoft Word</span>
		</a>
	</li>
    <li>
		<a href="#">
			<i class="bi bi-circle"></i><span>Test Microsoft Excel</span>
		</a>
	</li>
    <li>
		<a href="#">
			<i class="bi bi-circle"></i><span>Test Microsoft PowerPoint</span>
		</a>
	</li>
    <li>
		<a href="#">
			<i class="bi bi-circle"></i><span>Test Desain Grafis</span>
		</a>
	</li>
    <li>
		<a href="#">
			<i class="bi bi-circle"></i><span>Test Jaringan Komputer</span>
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