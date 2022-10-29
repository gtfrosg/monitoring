var rectangle = svgContainer.append("rect")
      .attr("x", 160)
      .attr("y", 0)
      .attr('fill', 'white')
      .attr("width", 120)
      .attr("height", 200)
      .attr('stroke', 'black')

    var text = svgContainer.append('text')
      .attr('x', 195)
      .attr('y', 220)
      .text('Mesa 2');

      //pc9
    var circle = svgContainer.append('circle')
      .attr('cx', 200)
      .attr('cy', 40)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa2_equipamento9->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc10
    var circle = svgContainer.append('circle')
      .attr('cx', 200)
      .attr('cy', 80)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa2_equipamento10->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc11
    var circle = svgContainer.append('circle')
      .attr('cx', 200)
      .attr('cy', 120)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa2_equipamento11->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc12
    var circle = svgContainer.append('circle')
      .attr('cx', 200)
      .attr('cy', 160)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa2_equipamento12->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc13
    var circle = svgContainer.append('circle')
      .attr('cx', 240)
      .attr('cy', 40)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa2_equipamento13->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif

      //pc14
    var circle = svgContainer.append('circle')
      .attr('cx', 240)
      .attr('cy', 80)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa2_equipamento14->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc15
    var circle = svgContainer.append('circle')
      .attr('cx', 240)
      .attr('cy', 120)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa2_equipamento15->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif
      
      //pc16
    var circle = svgContainer.append('circle')
      .attr('cx', 240)
      .attr('cy', 160)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa2_equipamento16->username))
            .attr('fill', 'red');
    @else
            .attr('fill', 'green');
    @endif