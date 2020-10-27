$('#dob').datepicker({
  uiLibrary: 'bootstrap4',
  format: 'yyyy-mm-dd',
  icons: {
  rightIcon: '<i class="fa fa-calendar"></i>'
}});     
$(document).ready(function(){
  $("#country").on("change",function(){
      var country = $("#country").val();
      $('#state').empty();
      $('#state').append('<option value="0"> State </option>');       
      var url = getStatesUrl+country;
      $.get(url,function(response){ 
        for (i = 0; i < response.states.length; i++) {
          state = response.states[i];
          $("#state").append("<option class='text-capitalize' value="+state.id+">"+state.name+"</option>");
        }  
      });	 
  });  
    $("#state").on("change",function(){
      var state = $("#state").val(); 
      var url   = getCitiesUrl+state;
      $('#city').empty();
      $('#city').append('<option value="0" class="text-capitalize"> City </option>');              
      $.get(url,function(response){
        for (i = 0; i < response.cities.length; i++) { 
          city = response.cities[i];
          $("#city").append("<option value="+city.id+">"+city.name+"</option>");
        }
      });
    });
})