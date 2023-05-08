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

    //mesas de cima
    for($i = 0; $i < 4; $i++){
          var rectangle = svgContainer.append("rect")
          .attr("x", 0 + ($i * 160))
          .attr("y", 0)
          .attr('fill', 'white')
          .attr("width", 120)
          .attr("height", 200);

                  //computadores
                  for($x = 0; $x < 2; $x++){
                        for($y = 0; $y < 4; $y++){    
                              //computadores
                              var circle = svgContainer.append('circle')
                              .attr('cx', (30 + ($x * 50) + ($i * 160)))
                              .attr('cy', (25 + ($y * 50)))
                              .attr('r', 13)
                              .attr('stroke', 'black')
                              .attr('fill', 'red');
                        }
                  }
    }

    //mesas de baixo
    for($i = 0; $i < 2; $i++){
          var rectangle = svgContainer.append("rect")
          .attr("x", 320 + (160 * $i))
          .attr("y", 360)
          .attr('fill', 'white')
          .attr("width", 120)
          .attr("height", 200);

                  //computadores
                  for($x = 0; $x < 2; $x++){
                        for($y = 0; $y < 4; $y++){
                              var circle = svgContainer.append('circle')
                              .attr('cx', 355 + ($x * 50) + ($i * 160))
                              .attr('cy', 390 + ($y * 50))
                              .attr('r', 13)
                              .attr('stroke', 'black')
                              .attr('fill', 'red');
                        }
                  }
    }
      
      @include('letras.mesas.mesa1')
      @include('letras.mesas.mesa2')
      @include('letras.mesas.mesa3')
      @include('letras.mesas.mesa4')
      @include('letras.mesas.mesa5')
      @include('letras.mesas.mesa6')
      @include('letras.mesas.monitores')
      
    //Impressora
    var rectangle = svgContainer.append("rect")
      .attr("x", 120)
      .attr("y", 360)
      .attr('fill', 'purple')
      .attr("width", 50)
      .attr("height", 50);

    var text = svgContainer.append('text')
      .attr('x', 200)
      .attr('y', 550)
      .text('Porta');

  </script>


@endsection

