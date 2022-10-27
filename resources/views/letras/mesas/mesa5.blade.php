var rectangle = svgContainer.append("rect")
      .attr("x", 320)
      .attr("y", 360)
      .attr('fill', 'white')
      .attr("width", 120)
      .attr("height", 200)
      .attr('stroke', 'black');

    var text = svgContainer.append('text')
      .attr('x', 355)
      .attr('y', 350)
      .text('Mesa 5');

      //pc29
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 400)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa5_equipamento29->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc30
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 440)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa5_equipamento30->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif

      //pc31
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 480)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa5_equipamento31->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc32
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 520)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa5_equipamento32->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif

      //pc33
      var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 400)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa5_equipamento33->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc34
    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 440)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa5_equipamento34->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
    
      //pc35
    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 480)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa5_equipamento35->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif

      //pc36
    var circle = svgContainer.append('circle')
      .attr('cx', 400)
      .attr('cy', 520)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
      @if(empty($mesa5_equipamento36->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif