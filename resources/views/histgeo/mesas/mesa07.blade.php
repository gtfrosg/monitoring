      //mesa07
      var rectangle = svgContainer.append("rect")
      .attr("x", 300)
      .attr("y", 40)
      .attr('fill', 'white')
      .attr("width", 80)
      .attr("height", 200);

    var text = svgContainer.append('text')
      .attr('x', 305)
      .attr('y', 235)
      .text('MESA 07')
      .attr ('fill', 'black');

      //pcs
      //01
    var circle = svgContainer.append('circle')
      .attr('cx', 320)
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
      .attr('cx', 320)
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
      .attr('cx', 320)
      .attr('cy', 200)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa5_equipamento1->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

     //04
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 80)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa5_equipamento1->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

     //05
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 140)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa5_equipamento1->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

     //06
    var circle = svgContainer.append('circle')
      .attr('cx', 360)
      .attr('cy', 200)
      .attr('r', 10)
      .attr('stroke', 'black')
      @if(empty($mesa5_equipamento1->username)) 
      .attr('fill', 'green');
     @else
      .attr('fill', 'red');
     @endif

      //n pcs
    var text = svgContainer.append('text')
      .attr('x', 320)
      .attr('y', 85)
      .text('1')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');      
      
    var text = svgContainer.append('text')
      .attr('x', 320)
      .attr('y', 145)
      .text('2')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  

    var text = svgContainer.append('text')
      .attr('x', 320)
      .attr('y', 205)
      .text('3')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  

    var text = svgContainer.append('text')
      .attr('x', 360)
      .attr('y', 85)
      .text('4')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');      
      
    var text = svgContainer.append('text')
      .attr('x', 360)
      .attr('y', 145)
      .text('5')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  

    var text = svgContainer.append('text')
      .attr('x', 360)
      .attr('y', 205)
      .text('6')
      .attr("text-anchor", "middle")
      .attr ('fill', 'white');  