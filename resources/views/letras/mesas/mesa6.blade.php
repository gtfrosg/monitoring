var rectangle = svgContainer.append("rect")
      .attr("x", 480)
      .attr("y", 360)
      .attr('fill', 'white')
      .attr("width", 120)
      .attr("height", 200)
      .attr('stroke', 'black');

    var text = svgContainer.append('text')
      .attr('x', 515)
      .attr('y', 350)
      .text('Mesa 6');

      //pc37
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 400)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa6_equipamento37->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc38
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 440)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa6_equipamento38->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc39
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 480)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa6_equipamento39->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc40
    var circle = svgContainer.append('circle')
      .attr('cx', 560)
      .attr('cy', 520)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa6_equipamento40->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif