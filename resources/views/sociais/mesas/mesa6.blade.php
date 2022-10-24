//mesa 6
var rectangle = svgContainer.append("rect")
      .attr("x", 750)
      .attr("y", 300)
      .attr('fill', 'white')
      .attr("width", 100)
      .attr("height", 100);

            //bolinhas da esquerda
            var circle = svgContainer.append('circle')
            .attr('cx', 765)
            .attr('cy', 315)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 765)
            .attr('cy', 365)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            //bolinhas da direita
            var circle = svgContainer.append('circle')
            .attr('cx', 825)
            .attr('cy', 315)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');

            var circle = svgContainer.append('circle')
            .attr('cx', 825)
            .attr('cy', 365)
            .attr('r', 10)
            .attr('stroke', 'black')
            .attr('fill', 'red');
