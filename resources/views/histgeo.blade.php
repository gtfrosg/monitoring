@extends('main')

@section('content') 
<script src="//d3js.org/d3.v4.min.js"></script>

<script>
    //make the svg container 
    var svgContainer = d3.select("body").append("svg")
      .attr("width", 1080)
      .attr("height", 1080);

  
  
      //make the rectangle 
    var rectangle = svgContainer.append("rect")
      .attr("x", 40)
      .attr("y", 40)
      .attr('fill', 'gray')
      .attr("width", 1000)
      .attr("height", 460);
  
  
  
    var rectangle = svgContainer.append("rect")
      .attr("x", 40)
      .attr("y", 40)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 140);
   
    var rectangle = svgContainer.append("rect")
      .attr("x", 40)
      .attr("y", 240)
      .attr('fill', 'purple')
      .attr("width", 45)
      .attr("height", 80);
  
    var rectangle = svgContainer.append("rect")
      .attr("x", 40)
      .attr("y", 380)
      .attr('fill', 'white')
      .attr("width", 160)
      .attr("height", 40);
  
    var rectangle = svgContainer.append("rect")
      .attr("x", 300)
      .attr("y", 40)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 200);

    var rectangle = svgContainer.append("rect")
      .attr("x", 300)
      .attr("y", 340)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 160);

    var rectangle = svgContainer.append("rect")
      .attr("x", 620)
      .attr("y", 40)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 200);

    var rectangle = svgContainer.append("rect")
      .attr("x", 800)
      .attr("y", 40)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 200);

    var rectangle = svgContainer.append("rect")
      .attr("x", 500)
      .attr("y", 340)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 160);

    var rectangle = svgContainer.append("rect")
      .attr("x", 700)
      .attr("y", 340)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 160);

    var rectangle = svgContainer.append("rect")
      .attr("x", 880)
      .attr("y", 340)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 160);



    var circle = svgContainer.append('circle')
      .attr('cx', 80)
      .attr('cy', 80)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');
   

    var circle = svgContainer.append('circle')
      .attr('cx', 80)
      .attr('cy', 140)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');
   
   
    var circle = svgContainer.append('circle')
      .attr('cx', 320)
      .attr('cy', 80)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 320)
      .attr('cy', 140)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 320)
      .attr('cy', 200)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 80)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 140)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 200)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

      var circle = svgContainer.append('circle')
      .attr('cx', 640)
      .attr('cy', 80)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 640)
      .attr('cy', 140)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 640)
      .attr('cy', 200)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 680)
      .attr('cy', 80)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 680)
      .attr('cy', 140)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 680)
      .attr('cy', 200)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 840)
      .attr('cy', 80)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 840)
      .attr('cy', 140)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 840)
      .attr('cy', 200)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');


    var circle = svgContainer.append('circle')
      .attr('cx', 80)
      .attr('cy', 400)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 160)
      .attr('cy', 400)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');



    var circle = svgContainer.append('circle')
      .attr('cx', 320)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 320)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 320)
      .attr('cy', 460)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

      var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 460)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 520)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 520)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 520)
      .attr('cy', 460)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 460)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 720)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 720)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 720)
      .attr('cy', 460)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 760)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 760)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 760)
      .attr('cy', 460)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 900)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 900)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 900)
      .attr('cy', 460)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 940)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 940)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');

    var circle = svgContainer.append('circle')
      .attr('cx', 940)
      .attr('cy', 460)
      .attr('r', 10)
      .attr('stroke', 'black')
      .attr('fill', 'white');





 //make the rectangle 
    var rectangle = svgContainer.append("rect")
      .attr("x", 36)
      .attr("y", 36)
      .attr('fill', 'black')
      .attr("width", 4)
      .attr("height", 464);

    var rectangle = svgContainer.append("rect")
      .attr("x", 36)
      .attr("y", 500)
      .attr('fill', 'black')
      .attr("width", 1008)
      .attr("height", 4);

    var rectangle = svgContainer.append("rect")
      .attr("x", 1040)
      .attr("y", 36)
      .attr('fill', 'black')
      .attr("width", 4)
      .attr("height", 464);

    var rectangle = svgContainer.append("rect")
      .attr("x", 36)
      .attr("y", 36)
      .attr('fill', 'black')
      .attr("width", 406)
      .attr("height", 4);

    var rectangle = svgContainer.append("rect")
      .attr("x", 520)
      .attr("y", 36)
      .attr('fill', 'black')
      .attr("width", 520)
      .attr("height", 4);

    var rectangle = svgContainer.append("rect")
      .attr("x", 880)
      .attr("y", 280)
      .attr('fill', 'black')
      .attr("width", 160)
      .attr("height", 4);

    var rectangle = svgContainer.append("rect")
      .attr("x", 880)
      .attr("y", 36)
      .attr('fill', 'black')
      .attr("width", 4)
      .attr("height", 244);




  </script>

@endsection