//mesa do monitor
var rectangle = svgContainer.append("rect")
      .attr("x", 10)
      .attr("y", 300)
      .attr('fill', 'white')
      .attr("width", 100)
      .attr("height", 100);

            //bolinha unica dessa mesa
            var circle = svgContainer.append('circle')
            .attr('cx', 45)
            .attr('cy', 345)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

