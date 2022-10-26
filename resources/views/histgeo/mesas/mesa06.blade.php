      //mesa06
    var rectangle = svgContainer.append("rect")
      .attr("x", 40)
      .attr("y", 40)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 140);

    var text = svgContainer.append('text')
      .attr('x', 45)
      .attr('y', 175)
      .text('MESA 06')
      .attr ('fill', 'black');

    //pcs
    //01
    var circle = svgContainer.append('circle')
      .attr('cx', 80)
      .attr('cy', 80)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa6_equipamento1->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif
   
      //02
    var circle = svgContainer.append('circle')
      .attr('cx', 80)
      .attr('cy', 140)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa6_equipamento2->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //n pcs
    var text = svgContainer.append('text')
      .attr('x', 80)
      .attr('y', 85)
      .text('1')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');      
      
    var text = svgContainer.append('text')
      .attr('x', 80)
      .attr('y', 145)
      .text('2')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white'); 
