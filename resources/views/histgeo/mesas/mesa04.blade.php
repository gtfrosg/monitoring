     //mesa04
    var rectangle = svgContainer.append("rect")
      .attr("x", 700)
      .attr("y", 340)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 160);

      var text = svgContainer.append('text')
      .attr('x', 705)
      .attr('y', 360)
      .text('MESA 04')
      .attr ('fill', 'black'); 
      
      //pcs
      //01
    var circle = svgContainer.append('circle')
      .attr('cx', 720)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa4_equipamento1->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //02
    var circle = svgContainer.append('circle')
      .attr('cx', 720)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa4_equipamento2->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //03
    var circle = svgContainer.append('circle')
      .attr('cx', 720)
      .attr('cy', 460)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa4_equipamento3->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //04
    var circle = svgContainer.append('circle')
      .attr('cx', 760)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa4_equipamento4->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //05
    var circle = svgContainer.append('circle')
      .attr('cx', 760)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa4_equipamento5->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //06
    var circle = svgContainer.append('circle')
      .attr('cx', 760)
      .attr('cy', 460)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa4_equipamento6->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //n pcs
    var text = svgContainer.append('text')
      .attr('x', 720)
      .attr('y', 385)
      .text('1')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');      
      
    var text = svgContainer.append('text')
      .attr('x', 720)
      .attr('y', 425)
      .text('2')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  

    var text = svgContainer.append('text')
      .attr('x', 720)
      .attr('y', 465)
      .text('3')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  

    var text = svgContainer.append('text')
      .attr('x', 760)
      .attr('y', 385)
      .text('4')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');      
      
    var text = svgContainer.append('text')
      .attr('x', 760)
      .attr('y', 425)
      .text('5')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  

    var text = svgContainer.append('text')
      .attr('x', 760)
      .attr('y', 465)
      .text('6')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  