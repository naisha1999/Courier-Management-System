$(document).ready(function(){
  $.ajax({
    url: "http://localhost/carr/data.php",
    method: "GET",
    success: function(data) {
      console.log(data);
      var username = [];
      var salary = [];
		var m = data[0].salary;
		var temp;
		document.write(m);
		for(var i in data)
		{
			if(m>data[i].salary)
		{
			m=data[i].salary;
			temp=data[i].salary;
			data[i].salary=data[i+1].salary;
			data[i+1].salary=temp;
			temp=data[i].username;
			data[i].username=data[i+1].username;
			data[i+1].username=temp;
		}
		}
      for(var i in data) {
		
        username.push(" " + data[i].username);
	
        salary.push(data[i].salary);
      }

      var chartdata = {
        labels: username,
        datasets : [
          {
            label: 'Employee Salary',
            backgroundColor: 'black',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: salary
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'bar',
        data: chartdata
      });
    },
    error: function(data) {
      console.log(data);
    }
  });
});