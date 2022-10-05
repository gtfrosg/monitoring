@extends('main')

@section('content') 
<script src="//d3js.org/d3.v4.min.js"></script>

<script>
    //make the svg container 
    var svgContainer = d3.select("body").append("svg")
      .attr("width", 400)
      .attr("height", 400);

     //make the rectangle 
    var rectangle = svgContainer.append("rect")
      .attr("x", 150)
      .attr("y", 50)
      .attr('fill', '#69a3b2')
      .attr("width", 200)
      .attr("height", 200);

    var circle = svgContainer.append('circle')
      .attr('cx', 150)
      .attr('cy', 150)
      .attr('r', 50)
      .attr('stroke', 'black')
      .attr('fill', 'red');

  </script>

@endsection