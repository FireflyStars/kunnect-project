if(oldDOB ==""){
  $('#dob').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'yyyy-mm-dd',
    icons: {
    rightIcon: '<i class="fa fa-calendar"></i>'
  }});
}else{
  $('#dob').datepicker({
    uiLibrary: 'bootstrap4',
    setDate: new Date(oldDOB),
    format: 'yyyy-mm-dd',
    icons: {
    rightIcon: '<i class="fa fa-calendar"></i>'
  }});
}
$(document).ready(function(){
  $("#country").on("change",function(){
      var country_id = $("#country").val();
      getStatesByCountry(country_id, false)
  }); 
  $("#state").on("change",function(){
    var state_id = $("#state").val(); 
    getCitiesByState(state_id, false);
  });

  if(oldState != ""){
    getStatesByCountry(oldCountry, true);
    getStatesByCountry(oldState, true);
  }

  if(oldGender !=""){
    $("#gender").empty().append('<option value=""></option>');
    if(oldGender){
      $("#gender").append('<option value="1" selected>Male</option>').append('<option value="0">Female</option>');
    }else{
      $("#gender").append('<option value="1">Male</option>').append('<option selected value="0">Female</option>');
    }
  }

  if(oldPlan !="" && oldPlan){
    $("#normal-plan").attr('checked', 'checked');
  }else if(oldPlan !="" && !oldPlan){
    $("#gold-plan").attr('checked', 'checked');
  }else{

  }

  $("#username").on("input", function(){
    $("#username-exist").removeClass('d-block');
    $("#username-spinner").removeClass('d-none');
    username = $(this).val();
    if(username == "") return;
    $.get('/check-username/'+ username, function(response){
      $("#username-spinner").addClass('d-none');
      if (response.exist) {
        $("#username-exist").addClass('d-block');
      }
    });
  })
})

function getStatesByCountry(country_id, flag){
  var url = getStatesUrl+country_id;
  $('#state').empty();
  $('#state').append('<option value="0"> State </option>');   
  $.get(url,function(response){ 
    for (i = 0; i < response.states.length; i++) {
      state = response.states[i];
      if(flag){
        if(oldState == state.id)
          $("#state").append("<option class='text-capitalize' selected value="+state.id+">"+state.name+"</option>");
        else
          $("#state").append("<option class='text-capitalize' value="+state.id+">"+state.name+"</option>");
      }else{
        $("#state").append("<option class='text-capitalize' value="+state.id+">"+state.name+"</option>");
      }
    }  
  });	 
}

function getCitiesByState(state_id, flag){
  var url   = getCitiesUrl+state_id;
  $('#city').empty();
  $('#city').append('<option value="0" class="text-capitalize"> City </option>');              
  $.get(url,function(response){
    for (i = 0; i < response.cities.length; i++) { 
      city = response.cities[i];
      if(flag){
        if(oldCity == city.id)
          $("#city").append("<option selected value="+city.id+">"+city.name+"</option>");
        else
          $("#city").append("<option value="+city.id+">"+city.name+"</option>");
      }else{
        $("#city").append("<option value="+city.id+">"+city.name+"</option>");
      }
    }
  });
}

$("#signup-form").submit(function(e){
  if($('#country').val() == 0){
    $('#country-empty').addClass('d-block');
    e.preventDefault();
  }
  if($('#state').val() == 0){
    $('#state-empty').addClass('d-block');
    e.preventDefault();
  }
  if($('#city').val() == 0){
    $('#city-empty').addClass('d-block');
    e.preventDefault();
  }
})

$("#country").focus(function(){
  if($("#country-empty").hasClass('d-block'))
    $("#country-empty").removeClass('d-block')
})
$("#state").focus(function(){
  if($("#state-empty").hasClass('d-block'))
    $("#state-empty").removeClass('d-block')
})
$("#city").focus(function(){
  if($("#city-empty").hasClass('d-block'))
    $("#city-empty").removeClass('d-block')
})