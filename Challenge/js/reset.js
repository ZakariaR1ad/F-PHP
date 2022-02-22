const reset = ()=>{
    for(var i = 0; i<7;i++){
        if(sessionStorage.getItem(i) == "true"){
            sessionStorage.setItem(i) 
        }
        
    }
    alert("reset operation completed!!!")
}