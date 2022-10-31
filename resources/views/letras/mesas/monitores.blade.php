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