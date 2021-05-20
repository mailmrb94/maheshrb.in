<html>
    <head>
		<style>
		html, body {margin: 0; height: 100%; overflow: hidden;}
		div#container > svg {min-height: 200px;}
		</style>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//d3js.org/d3.v4.min.js" charset="utf-8"></script>
<script src="//cdn.jsdelivr.net/npm/d3pie@0.2.1/d3pie/d3pie.min.js"></script>
	
	</head>
    <body>
	
<div id="container"></div>

	
    <script>
        var chart, svg, width, height;
		
		var data = [
		  { label: "SSLC", value: 1 },
		  { label: "PUC", value: 9 },
		  { label: "BE", value: 3 }
		];

	$(function() {
			  chart = new d3pie("#container", {data: {content: data}});
			  svg = d3.select("#container > svg");
			});

			$(window).on('resize', function() {
				width = $(window).width();
				height = $(window).height();
				svg
				  .attr("width", '100%')
				  .attr("height", '100%')
				  .attr('viewBox','0 0 ' + height + ' ' + width)
				  .attr('preserveAspectRatio', 'xMinYMin')
				  .append("g")
				  .attr("transform", "translate(" + height + "," + width + ")");
			});
    </script>
    </body>
    </html> 