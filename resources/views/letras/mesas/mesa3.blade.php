var rectangle = svgContainer.append("rect")
      .attr("x", 320)
      .attr("y", 0)
      .attr('fill', 'white')
      .attr("width", 120)
      .attr("height", 200)
      .attr('stroke', 'black');
      
    var text = svgContainer.append('text')
      .attr('x', 355)
      .attr('y', 220)
      .text('Mesa 3');

      //pc17
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 40)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa3_equipamento17->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc18
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 80)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa3_equipamento18->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc19
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 120)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa3_equipamento19->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc20
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 160)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa3_equipamento20->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc21
    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 40)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa3_equipamento21->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif

      //pc22
    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 80)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa3_equipamento22->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc23
    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 120)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa3_equipamento23->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc24
    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 160)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa3_equipamento24->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif