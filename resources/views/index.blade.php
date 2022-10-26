@extends('main')

@section('content') 
<script src="//d3js.org/d3.v4.min.js"></script>

<script>
    //make the svg container 
    var svgContainer = d3.select("body").append("svg")
      .attr("width", 1000)
      .attr("height", 1000);

  
  
      //make the rectangle 
    var rectangle = svgContainer.append("rect")
      .attr("x", 0)
      .attr("y", 0)
      .attr('fill', 'gray')
      .attr("width", 1000)
      .attr("height", 460);
  
  
  
    var rectangle = svgContainer.append("rect")
      .attr("x", 0)
      .attr("y", 0)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 140);
   
    var rectangle = svgContainer.append("rect")
      .attr("x", 0)
      .attr("y", 200)
      .attr('fill', 'purple')
      .attr("width", 45)
      .attr("height", 80);
  
    var rectangle = svgContainer.append("rect")
      .attr("x", 0)
      .attr("y", 340)
      .attr('fill', 'white')
      .attr("width", 160)
      .attr("height", 40);
  
    var rectangle = svgContainer.append("rect")
      .attr("x", 260)
      .attr("y", 0)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 200);

    var rectangle = svgContainer.append("rect")
      .attr("x", 260)
      .attr("y", 300)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 160);

    var rectangle = svgContainer.append("rect")
      .attr("x", 580)
      .attr("y", 0)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 200);

    var rectangle = svgContainer.append("rect")
      .attr("x", 760)
      .attr("y", 0)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 200);

    var rectangle = svgContainer.append("rect")
      .attr("x", 460)
      .attr("y", 300)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 160);

    var rectangle = svgContainer.append("rect")
      .attr("x", 660)
      .attr("y", 300)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 160);

    var rectangle = svgContainer.append("rect")
      .attr("x", 840)
      .attr("y", 300)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 160);



    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 40)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');
   

    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 100)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');
   
   
    var circle = svgContainer.append('circle')
      .attr('cx', 280)
      .attr('cy', 40)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 280)
      .attr('cy', 100)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 280)
      .attr('cy', 160)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 320)
      .attr('cy', 40)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 320)
      .attr('cy', 100)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 320)
      .attr('cy', 160)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

      var circle = svgContainer.append('circle')
      .attr('cx', 600)
      .attr('cy', 40)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 600)
      .attr('cy', 100)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 600)
      .attr('cy', 160)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 640)
      .attr('cy', 40)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 640)
      .attr('cy', 100)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 640)
      .attr('cy', 160)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 800)
      .attr('cy', 40)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 800)
      .attr('cy', 100)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 800)
      .attr('cy', 160)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');


    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 360)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 120)
      .attr('cy', 360)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');



    var circle = svgContainer.append('circle')
      .attr('cx', 280)
      .attr('cy', 340)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 280)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 280)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

      var circle = svgContainer.append('circle')
      .attr('cx', 320)
      .attr('cy', 340)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 320)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 320)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 480)
      .attr('cy', 340)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 480)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 480)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 520)
      .attr('cy', 340)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 520)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 520)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 680)
      .attr('cy', 340)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 680)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 680)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 720)
      .attr('cy', 340)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 720)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 720)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 860)
      .attr('cy', 340)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 860)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 860)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 900)
      .attr('cy', 340)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 900)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    var circle = svgContainer.append('circle')
      .attr('cx', 900)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'gray');

    
    // text
    var text = svgContainer.append('text')
      .attr('x', 40)
      .attr('y', 40)
      .text('click a circle');


  </script>

@endsection