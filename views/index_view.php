<!DOCTYPE html>
<div id="script" style="width:1280px; margin: auto;">
    
    <script type="text/javascript"> // Using d3.js library
    
    // Size of diagram
    var width = 960,
        height = 500;
    
    var val = '<?php echo $_SESSION["number"] ?>';
    
    // Generate random points
    var points = d3.range(val).map(function(d) {
      return [Math.random() * width, Math.random() * height];
    });
    
    // Set up the layout for the Voronoi diagram
    var cells = d3.geom.voronoi()
        .clipExtent([[0, 0], [width, height]]);
    
    // Redraw the diagram if the mouse is moving
    var svg = d3.select("body").append("svg")
        .attr("width", width)
        .attr("height", height)
        .on("mousemove", function() {
            points[0] = d3.mouse(this);
            redraw();
        });
    
    // Group all paths in SVG g element
    var path = svg.append("g").selectAll("path");
    
    svg.selectAll("circle")
        .data(points.slice(1))
        // create a new point as the mouse mouves
        .enter().append("circle")
        .attr("transform", function(d) { return "translate(" + d + ")"; })
        .attr("r", 1.75);
    
    redraw();
    
    function redraw() {
        path = path
            .data(cells(points), polygon);
        
        path.exit().remove();
        
        path.enter().append("path")
        
            // randomly choose 1 of 9 colors
            .attr("class", function(d, i) { return "q" + (i % 9) + "-9"; })
            .attr("d", polygon);
    
      path.order();
    }
    
    function polygon(d) {
        return "M" + d.join("L") + "Z";
    }
    
    
    </script>
</div>


<div class="middle">
    <div class="container">
        <h2>Customize your Voronoi!</h2>
        
        <form action="index.php" id="redraw" method="post">
            <fieldset>
                <div class="form-group">
                    <p>Number of points on Voronoi diagram:<p/>
                    <input class="form-control" id="number" name="number" placeholder="Number" type="number"
                        value="<?= $_SESSION["number"]?>"/>
                </div>
                <div class="form-group">
                    <button class="btn btn-default" type="submit">
                        <span aria-hidden="true" class="glyphicon glyphicon-refresh"></span>
                        Redraw!
                    </button>
                </div>
            </fieldset>
        </form>
        
        <h2>Color your Voronoi!</h2>
        <p style="padding-bottom: 15px">Not sure which image to choose? Here are some recommendations.<p/>
        
        <div class="row">
            
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="colorextractor.php?imagename=./img/001.jpg"><img id="001" src="/img/001.jpg" onclick ="~/colorextractor.php"></a>
                </div>
                <div class="thumbnail">
                    <a href="colorextractor.php?imagename=./img/002.jpg"><img id="002" src="/img/002.jpg" onclick ="~/colorextractor.php"></a>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="colorextractor.php?imagename=./img/003.jpg"><img id="003" src="/img/003.jpg" onclick ="~/colorextractor.php"></a>
                </div>
                <div class="thumbnail">
                    <a href="colorextractor.php?imagename=./img/004.jpg"><img id="004" src="/img/004.jpg" onclick ="~/colorextractor.php"></a>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="thumbnail">
                    <a href="colorextractor.php?imagename=./img/005.jpg"><img id="005" src="/img/005.jpg" onclick ="~/colorextractor.php"></a>
                </div>
                <div class="thumbnail">
                    <a href="colorextractor.php?imagename=./img/006.jpg"><img id="006" src="/img/006.jpg" onclick ="~/colorextractor.php"></a>
                </div>
            </div>
            
        </div>
        
    </div>

    <div class="upload">
        <h2>Or, <br>upload <a href="upload.php">your own photo</a>!</h2>
    </div>
    
</div>

    
<div class="learn-more">
    <div class="container">
        <div class="row">
            
            <div class="col-md-3">
            	<h3>Account management</h3>
            	<p>With PHPMyAdmin</p>
            	<p><a href="https://c9.io/blog/phpmyadmin/">See how accounts are managed</a></p>
            </div>
            
            <div class="col-md-3">
                <h3>Color detection</h3>
                <p>With ThePHPLeague</p>
                <p><a href="https://github.com/thephpleague/color-extractor">Learn more about color detection</a></p>
            </div>
            
            <div class="col-md-3">
                <h3>Data manipulation</h3>
                <p>With D3.js library</p>
                <p><a href="http://d3js.org/">Learn more about data-driven documents</a></p>
            </div>
            
            <div class="col-md-3">
                <h3>Final project</h3>
                <p>Dedicated to CS50 (oh hai!)</p>
                <p><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">What is CS50?</a></p>
            </div>
            
        </div>
    </div>
</div>