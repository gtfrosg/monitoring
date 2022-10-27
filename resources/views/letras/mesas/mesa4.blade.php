var rectangle = svgContainer.append("rect")
      .attr("x", 480)
      .attr("y", 0)
      .attr('fill', 'white')
      .attr("width", 120)
      .attr("height", 200)
      .attr('stroke', 'black');

    var text = svgContainer.append('text')
      .attr('x', 515)
      .attr('y', 220)
      .text('Mesa 4');

      //pc25
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 40)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa4_equipamento25->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc26
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 80)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa4_equipamento26->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc27
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 120)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa4_equipamento27->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc28
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 160)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa4_equipamento28->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif