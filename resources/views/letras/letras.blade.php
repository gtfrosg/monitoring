@extends('main')

@section('content') 
<script src="//d3js.org/d3.v4.min.js"></script>

<script>
    //make the svg container 
    var svgContainer = d3.select("body").append("svg")
      .attr("width", 680)
      .attr("height", 560);

     //chão da sala
    var rectangle = svgContainer.append("rect")
      .attr("x", 0)
      .attr("y", 0)
      .attr('fill', 'grey')
      .attr("width", 680)
      .attr("height", 560)
      .attr('stroke', 'black');
      
      //mesa 1
      @include('letras.mesas.mesa1')
      
      //mesa 2
      @include('letras.mesas.mesa2')
      
      //mesa 3
      @include('letras.mesas.mesa3')
      
      //mesa 4
      @include('letras.mesas.mesa4')
      
      //mesa 5
      @include('letras.mesas.mesa5')
      
      //mesa 6
      @include('letras.mesas.mesa6')

      //monitores
    var rectangle = svgContainer.append("rect")
      .attr("x", 0)
      .attr("y", 360)
      .attr('fill', 'white')
      .attr("width", 120)
      .attr("height", 200)
      .attr('stroke', 'black');

    var text = svgContainer.append('text')
      .attr('x', 35)
      .attr('y', 350)
      .text('Monitores');
      
      //impressora
    var rectangle = svgContainer.append("rect")
      .attr("x", 120)
      .attr("y", 360)
      .attr('fill', 'purple')
      .attr("width", 40)
      .attr("height", 80)
      .attr('stroke', 'black');

    var text = svgContainer.append('text')
      .attr('x', 200)
      .attr('y', 550)
      .text('Porta');
      
    var text = svgContainer.append('text')
      .attr('x', 160)
      .attr('y', 350)
      .text('Impressora');
      
      //pc monitor1
    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 400)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa6_equipamento37->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc monitor2
    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 520)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa6_equipamento37->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif

  

  </script>


@endsection

