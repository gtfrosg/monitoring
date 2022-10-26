     //mesa05
    var rectangle = svgContainer.append("rect")
      .attr("x", 880)
      .attr("y", 340)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 160);

    var text = svgContainer.append('text')
      .attr('x', 885)
      .attr('y', 360)
      .text('MESA 05')
      .attr ('fill', 'black');  

      //pcs
      //01
    var circle = svgContainer.append('circle')
      .attr('cx', 900)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa5_equipamento1->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //02
    var circle = svgContainer.append('circle')
      .attr('cx', 900)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa5_equipamento2->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //03
    var circle = svgContainer.append('circle')
      .attr('cx', 900)
      .attr('cy', 460)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa5_equipamento3->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //04
    var circle = svgContainer.append('circle')
      .attr('cx', 940)
      .attr('cy', 380)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa5_equipamento4->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //05
    var circle = svgContainer.append('circle')
      .attr('cx', 940)
      .attr('cy', 420)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa5_equipamento5->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //06
    var circle = svgContainer.append('circle')
      .attr('cx', 940)
      .attr('cy', 460)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa5_equipamento6->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //n pcs
    var text = svgContainer.append('text')
      .attr('x', 900)
      .attr('y', 385)
      .text('1')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');      
      
    var text = svgContainer.append('text')
      .attr('x', 900)
      .attr('y', 425)
      .text('2')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  

    var text = svgContainer.append('text')
      .attr('x', 900)
      .attr('y', 465)
      .text('3')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  

    var text = svgContainer.append('text')
      .attr('x', 940)
      .attr('y', 385)
      .text('4')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');      
      
    var text = svgContainer.append('text')
      .attr('x', 940)
      .attr('y', 425)
      .text('5')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  

    var text = svgContainer.append('text')
      .attr('x', 940)
      .attr('y', 465)
      .text('6')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  