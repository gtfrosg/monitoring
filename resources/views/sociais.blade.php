@extends('main')

@section('content') 
<script src="//d3js.org/d3.v4.min.js"></script>

<script>
    //make the svg container 
    var svgContainer = d3.select("body").append("svg")
      .attr("width", 1500)
      .attr("height", 400);

     //make the rectangle
     //tamanho da sala
     var rectangle = svgContainer.append("rect")
      .attr("x", 10)
      .attr("y", 10)
      .attr('fill', ' #908c8a')
      .attr("width", 1200)
      .attr("height", 400);
     
     //mesa 1
    var rectangle = svgContainer.append("rect")
      .attr("x", 150)
      .attr("y", 10)
      .attr('fill', '#ecb129')
      .attr("width", 100)
      .attr("height", 200);

            //computadores da esquerda
            var circle = svgContainer.append('circle')
            .attr('cx', 165)
            .attr('cy', 25)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 165)
            .attr('cy', 75)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 165)
            .attr('cy', 125)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 165)
            .attr('cy', 175)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            //computadores da direita
            var circle = svgContainer.append('circle')
            .attr('cx', 225)
            .attr('cy', 25)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 225)
            .attr('cy', 75)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 225)
            .attr('cy', 125)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 225)
            .attr('cy', 175)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

      //mesa 2
      var rectangle = svgContainer.append("rect")
      .attr("x", 450)
      .attr("y", 10)
      .attr('fill', '#ecb129')
      .attr("width", 100)
      .attr("height", 200);

            //computadores da esquerda
            var circle = svgContainer.append('circle')
            .attr('cx', 465)
            .attr('cy', 25)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 465)
            .attr('cy', 75)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 465)
            .attr('cy', 125)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 465)
            .attr('cy', 175)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            //computadores da direita
            var circle = svgContainer.append('circle')
            .attr('cx', 525)
            .attr('cy', 25)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 525)
            .attr('cy', 75)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 525)
            .attr('cy', 125)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 525)
            .attr('cy', 175)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

      //mesa 3
      var rectangle = svgContainer.append("rect")
      .attr("x", 750)
      .attr("y", 10)
      .attr('fill', '#ecb129')
      .attr("width", 100)
      .attr("height", 200);

            //computadores da esquerda
            var circle = svgContainer.append('circle')
            .attr('cx', 765)
            .attr('cy', 25)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 765)
            .attr('cy', 75)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 765)
            .attr('cy', 125)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 765)
            .attr('cy', 175)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            //computadores da direita
            var circle = svgContainer.append('circle')
            .attr('cx', 825)
            .attr('cy', 25)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 825)
            .attr('cy', 75)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 825)
            .attr('cy', 125)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 825)
            .attr('cy', 175)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

      //mesa 4
      var rectangle = svgContainer.append("rect")
      .attr("x", 1050)
      .attr("y", 10)
      .attr('fill', '#ecb129')
      .attr("width", 100)
      .attr("height", 200);

            //computadores da esquerda
            var circle = svgContainer.append('circle')
            .attr('cx', 1065)
            .attr('cy', 25)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 1065)
            .attr('cy', 75)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 1065)
            .attr('cy', 125)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 1065)
            .attr('cy', 175)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            //computadores da direita
            var circle = svgContainer.append('circle')
            .attr('cx', 1125)
            .attr('cy', 25)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 1125)
            .attr('cy', 75)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 1125)
            .attr('cy', 125)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 1125)
            .attr('cy', 175)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

      //mesa 5
      var rectangle = svgContainer.append("rect")
      .attr("x", 1050)
      .attr("y", 300)
      .attr('fill', '#ecb129')
      .attr("width", 100)
      .attr("height", 100);

            //bolinhas da esquerda
            var circle = svgContainer.append('circle')
            .attr('cx', 1065)
            .attr('cy', 315)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 1065)
            .attr('cy', 365)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            //bolinhas da direita
            var circle = svgContainer.append('circle')
            .attr('cx', 1125)
            .attr('cy', 315)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 1125)
            .attr('cy', 365)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

      //mesa 6
      var rectangle = svgContainer.append("rect")
      .attr("x", 750)
      .attr("y", 300)
      .attr('fill', '#ecb129')
      .attr("width", 100)
      .attr("height", 100);

            //bolinhas da esquerda
            var circle = svgContainer.append('circle')
            .attr('cx', 765)
            .attr('cy', 315)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 765)
            .attr('cy', 365)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            //bolinhas da direita
            var circle = svgContainer.append('circle')
            .attr('cx', 825)
            .attr('cy', 315)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 825)
            .attr('cy', 365)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

      //mesa 7
      var rectangle = svgContainer.append("rect")
      .attr("x", 450)
      .attr("y", 300)
      .attr('fill', '#ecb129')
      .attr("width", 100)
      .attr("height", 100);

            //bolinhas da esquerda
            var circle = svgContainer.append('circle')
            .attr('cx', 465)
            .attr('cy', 315)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 465)
            .attr('cy', 365)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            //bolinhas da direita
            var circle = svgContainer.append('circle')
            .attr('cx', 525)
            .attr('cy', 315)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 525)
            .attr('cy', 365)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

      //mesa do monitor
      var rectangle = svgContainer.append("rect")
      .attr("x", 10)
      .attr("y", 300)
      .attr('fill', '#ecb129')
      .attr("width", 100)
      .attr("height", 100);

            //bolinha unica dessa mesa
            var circle = svgContainer.append('circle')
            .attr('cx', 45)
            .attr('cy', 345)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

      //porta da sala
      var rectangle = svgContainer.append("rect")
      .attr("x", 150)
      .attr("y", 350)
      .attr('fill', 'green')
      .attr("width", 100)
      .attr("height", 50)

      //impressora da sala
      var rectangle = svgContainer.append("rect")
      .attr("x", 175)
      .attr("y", 220)
      .attr('fill', 'blue')
      .attr("width", 50)
      .attr("height", 50);

  </script>

@endsection