var task = 'start' ;
var startId = -1 ;
var endId   = -1 ;

function clickOnDate(date,id){
  if(task=='end'){
    if(id<startId) return ;
    Get('endDate').innerHTML     = date ;
    Get('endDateInput').value    = date ;
    Get('resetEnd').innerHTML    = 'Reset' ;
    Get('instruction').innerHTML = 'When you finished press the \'Request booking\' button.' ;
    endId = id ;
    var nGood = 0 ;
    var nFair = 0 ;
    var nBad  = 0 ;
    switch(status[startId]){
      case 0: nGood++ ; break ;
      case 1: nBad++  ; break ;
      case 2: nFair++ ; break ;
      case 3: nBad++  ; break ;
    }
    for(var i=startId+1 ; i<endId+1 ; i++){
      if(status[i]==0){
        Get('night_'+i).className = Get('night_'+i).className + ' selectedNight' ;
        nGood++ ;
      }
      if(status[i]==1 || status[i]==3){
        Get('night_'+i).className = Get('night_'+i).className + ' selectedNightClash' ;
        nBad++ ;
      }
      if(status[i]==2){
        Get('night_'+i).className = Get('night_'+i).className + ' selectedNightDoubleRequest' ;
        nFair++ ;
      }
    }
    var clashWord         = (nBad==1)  ? 'clash'          : 'clashes'         ;
    var doubleRequestWord = (nFair==1) ? 'double request' : 'double requests' ;
    Get('bookingStatus').innerHTML = (nGood+nFair+nBad) + ' nights with ' + nBad + ' ' + clashWord + ' and ' + nFair + ' ' + doubleRequestWord ;
    task = 'book' ;
    addButton() ;
  }
  if(task=='start'){
    Get('startDate').innerHTML   = date ;
    Get('startDateInput').value  = date ;
    Get('resetStart').innerHTML  = 'Reset' ;
    Get('instruction').innerHTML = 'Please choose a last night from the calendar below.' ;
    Get('bookingStatus').innerHTML  = 'First night selected'  ;
    Get('night_'+id).className = Get('night_'+id).className + ' selectedNight' ;
    startId = id ;
    task = 'end' ;
  }  
}

function addButton(){
  if(startId>0 && endId>0 && endId>=startId){
    if(Get('inputName').value!=''){
      Get('submitButton').innerHTML = '<input type="submit" value="Request booking" name="requestBooking"/>' ;
    }
  }
}

function removeButton(){
  Get('submitButton').innerHTML = '&nbsp;' ;
}

function resetStart(){
  Get('startDate').innerHTML   = 'None' ;
  Get('endDate').innerHTML     = 'None' ;
  Get('startDateInput').value  = '' ;
  Get('endDateInput').value    = '' ;
  Get('resetStart').innerHTML  = '' ;
  Get('resetEnd').innerHTML    = '' ;
  Get('instruction').innerHTML = 'Please choose a first date from the calendar below.' ;
  Get('bookingStatus').innerHTML = 'No booking'  ;
  if(endId==-1) endId = startId ;
  for(var i=startId ; i<endId+1 ; i++){
    var td = Get('night_'+i) ;
    var className = td.className ;
    var classNameArray = className.split(' ') ;
    className = '' ;
    for(var j=0 ; j<classNameArray.length-1 ; j++) className = className + ' '  + classNameArray[j] ;
    td.className = className ;
  }
  startId = -1 ;
  endId   = -1 ;
  task = 'start' ;
  removeButton()
}

function resetEnd(){
  Get('endDate').innerHTML   = 'None' ;
  Get('resetEnd').innerHTML  = '' ;
  Get('instruction').innerHTML = 'Please choose a last night from the calendar below.' ;
  Get('bookingStatus').innerHTML  = 'First night selected'  ;
  for(var i=startId+1 ; i<endId+1 ; i++){
    var td = Get('night_'+i) ;
    var className = td.className ;
    var classNameArray = className.split(' ') ;
    className = '' ;
    for(var j=0 ; j<classNameArray.length-1 ; j++) className = className + ' '  + classNameArray[j] ;
    td.className = className ;
  }
  endId   = -1 ;
  task = 'end' ;
  removeButton()
}

function Get(id){ return getElementById(id) ; }