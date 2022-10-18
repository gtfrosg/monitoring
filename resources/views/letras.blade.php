@extends('main')

@section('content') 
<script src="//d3js.org/d3.v4.min.js"></script>

<script>
    //make the svg container 
    var svgContainer = d3.select("body").append("svg")
      .attr("width", 680)
      .attr("height", 560);

     //make the rectangle 
    var rectangle = svgContainer.append("rect")
      .attr("x", 0)
      .attr("y", 0)
      .attr('fill', 'lightblue')
      .attr("width", 680)
      .attr("height", 560);
      
    var rectangle = svgContainer.append("rect")
      .attr("x", 0)
      .attr("y", 0)
      .attr('fill', 'lightpink')
      .attr("width", 120)
      .attr("height", 200);
      
    var rectangle = svgContainer.append("rect")
      .attr("x", 160)
      .attr("y", 0)
      .attr('fill', 'lightpink')
      .attr("width", 120)
      .attr("height", 200);
      
    var rectangle = svgContainer.append("rect")
      .attr("x", 320)
      .attr("y", 0)
      .attr('fill', 'lightpink')
      .attr("width", 120)
      .attr("height", 200);
      
    var rectangle = svgContainer.append("rect")
      .attr("x", 480)
      .attr("y", 0)
      .attr('fill', 'lightpink')
      .attr("width", 120)
      .attr("height", 200);
      
    var rectangle = svgContainer.append("rect")
      .attr("x", 0)
      .attr("y", 360)
      .attr('fill', 'lightpink')
      .attr("width", 120)
      .attr("height", 200);
    
    var rectangle = svgContainer.append("rect")
      .attr("x", 320)
      .attr("y", 360)
      .attr('fill', 'lightpink')
      .attr("width", 120)
      .attr("height", 200);
      
    var rectangle = svgContainer.append("rect")
      .attr("x", 480)
      .attr("y", 360)
      .attr('fill', 'lightpink')
      .attr("width", 120)
      .attr("height", 200);
      
    var rectangle = svgContainer.append("rect")
      .attr("x", 120)
      .attr("y", 360)
      .attr('fill', 'purple')
      .attr("width", 40)
      .attr("height", 80);
      
     //make the circle
    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 40)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 80)
      .attr('cy', 40)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 80)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 120)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 160)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 80)
      .attr('cy', 80)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 80)
      .attr('cy', 120)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
     var circle = svgContainer.append('circle')
      .attr('cx', 80)
      .attr('cy', 160)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 400)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 520)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 40)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 400)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 440)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');

    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 480)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 520)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 400)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 440)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
    
    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 480)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');

    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 520)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 400)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 440)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 480)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 520)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 40)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
     
    var circle = svgContainer.append('circle')
      .attr('cx', 200)
      .attr('cy', 40)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 200)
      .attr('cy', 80)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 200)
      .attr('cy', 120)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 200)
      .attr('cy', 160)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 240)
      .attr('cy', 40)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');

    var circle = svgContainer.append('circle')
      .attr('cx', 240)
      .attr('cy', 80)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 240)
      .attr('cy', 120)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 240)
      .attr('cy', 160)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 40)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 80)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 120)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 160)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 40)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');

    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 80)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 120)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 160)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 40)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 80)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 120)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');
      
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 160)
      .attr('r', 15)
      .attr('stroke', 'lightgreen')
      .attr('fill', 'green');

  </script>

@endsection