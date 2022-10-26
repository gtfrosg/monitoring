//mesa 1
var rectangle = svgContainer.append("rect")
      .attr("x", 150)
      .attr("y", 10)
      .attr('fill', 'white')
      .attr("width", 100)
      .attr("height", 200);

            //computadores da esquerda
            var circle = svgContainer.append('circle')
            .attr('cx', 165)
            .attr('cy', 25)
            .attr('r', 10)
            .attr('stroke' ,'black')
            .attr('fill', 'red')
            /*@if(empty($status)){
            .attr('fill', 'red')
            }
            @else{
            .attr('fill', 'gree')
            }
            @endif*/

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
