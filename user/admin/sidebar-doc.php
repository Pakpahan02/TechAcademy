
	<!-- ======= Documents Nav ======= -->
	<div class="sidebardoc">
	
	<li>
		<a href="documents-word.php">
			<i class="bi bi-circle"></i><span>Microsoft Word</span>
		</a>
	</li>
	<li>
		<a href="documents-excel.php">
			<i class="bi bi-circle"></i><span>Microsoft Excel</span>
		</a>
	</li>
	<li>
		<a href="documents-pp.php">
			<i class="bi bi-circle"></i><span>Microsoft PowerPoint</span>
		</a>
	</li>
	<li>
		<a href="documents-desain-grafis.php">
			<i class="bi bi-circle"></i><span>Desain Grafis</span>
		</a>
	</li>
	<li>
		<a href="documents-jarkom.php">
			<i class="bi bi-circle"></i><span>Jaringan Komputer</span>
		</a>
	</li>
	</div>
    <!-- End Documents Nav -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
  		$(".sidebardoc a").click(function() {
    	$(".sidebardoc a").removeClass("active");
    	$(this).addClass("active");
    	localStorage.setItem("activeNav", $(this).index(".sidebardoc a"));
  		});

  		if (localStorage.getItem("activeNav")) {
    		$(".sidebardoc a").removeClass("active");
    		$(".sidebardoc a:eq(" + localStorage.getItem("activeNav") + ")").addClass("active");
  		}
		});
	</script>