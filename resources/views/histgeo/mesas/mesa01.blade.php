     //mesa01  
    var rectangle = svgContainer.append("rect")
      .attr("x", 40)
      .attr("y", 380)
      .attr('fill', 'white')
      .attr("width", 160)
      .attr("height", 40);
  
    var text = svgContainer.append('text')
      .attr('x', 85)
      .attr('y', 420)
      .text('MESA 01')
      .attr ('fill', 'black');    

     //pcs
     //01
     var circle = svgContainer.append('circle')
      .attr('cx', 80)
      .attr('cy', 400)
      .attr('r', 10)
      .attr('stroke', 'black')
     @if(empty($mesa1_equipamento1->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif
    
     //02
    var circle = svgContainer.append('circle')
      .attr('cx', 160)
      .attr('cy', 400)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa1_equipamento1->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

     //n pcs
    var text = svgContainer.append('text')
      .attr('x', 80)
      .attr('y', 405)
      .text('1')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');      
      
    var text = svgContainer.append('text')
      .attr('x', 160)
      .attr('y', 405)
      .text('2')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  
