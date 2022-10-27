//mesa 1
    var rectangle = svgContainer.append("rect")
      .attr("x", 0)
      .attr("y", 0)
      .attr('fill', 'white')
      .attr("width", 120)
      .attr("height", 200)
      .attr('stroke', 'black');

    var text = svgContainer.append('text')
      .attr('x', 35)
      .attr('y', 220)
      .text('Mesa 1');

      //pc1
    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 40)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa1_equipamento1->username))
            .attr('fill', 'red')
    @else
            .attr('fill', 'green');
    @endif

      //pc2
    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 80)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa1_equipamento2->username))
            .attr('fill', 'red')
    @else
            .attr('fill', 'green');
    @endif

      //pc3
    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 120)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa1_equipamento3->username))
            .attr('fill', 'red')
    @else
            .attr('fill', 'green');
    @endif
      
      //pc4
    var circle = svgContainer.append('circle')
      .attr('cx', 40)
      .attr('cy', 160)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa1_equipamento4->username))
            .attr('fill', 'red')
    @else
            .attr('fill', 'green');
    @endif

      //pc5
    var circle = svgContainer.append('circle')
      .attr('cx', 80)
      .attr('cy', 40)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa1_equipamento5->username))
            .attr('fill', 'red')
    @else
            .attr('fill', 'green');
    @endif
      
      //pc6
    var circle = svgContainer.append('circle')
      .attr('cx', 80)
      .attr('cy', 80)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa1_equipamento6->username))
            .attr('fill', 'red')
    @else
            .attr('fill', 'green');
    @endif
      
      //pc7
    var circle = svgContainer.append('circle')
      .attr('cx', 80)
      .attr('cy', 120)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa1_equipamento7->username))
            .attr('fill', 'red')
    @else
            .attr('fill', 'green');
    @endif
      
      //pc8
     var circle = svgContainer.append('circle')
      .attr('cx', 80)
      .attr('cy', 160)
      .attr('r', 13)
      .attr('stroke', 'black')
      .attr('fill', 'white')
    @if(empty($mesa1_equipamento8->username))
            .attr('fill', 'red')
    @else
            .attr('fill', 'green');
    @endif


