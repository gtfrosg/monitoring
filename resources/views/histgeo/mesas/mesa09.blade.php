     //mesa09
    var rectangle = svgContainer.append("rect")
      .attr("x", 800)
      .attr("y", 40)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 200);

    var text = svgContainer.append('text')
      .attr('x', 805)
      .attr('y', 235)
      .text('MESA 09')
      .attr ('fill', 'black');

     //pcs

     //01
    var circle = svgContainer.append('circle')
      .attr('cx', 840)
      .attr('cy', 80)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa5_equipamento1->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

     //02
    var circle = svgContainer.append('circle')
      .attr('cx', 840)
      .attr('cy', 140)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa5_equipamento1->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

     //03
    var circle = svgContainer.append('circle')
      .attr('cx', 840)
      .attr('cy', 200)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa5_equipamento1->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //npcs
    var text = svgContainer.append('text')
      .attr('x', 840)
      .attr('y', 85)
      .text('1')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');      
      
    var text = svgContainer.append('text')
      .attr('x', 840)
      .attr('y', 145)
      .text('2')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  

    var text = svgContainer.append('text')
      .attr('x', 840)
      .attr('y', 205)
      .text('3')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  
