function drawGraph() {
    var canvas = document.getElementById("graph");
    var ctx = canvas.getContext("2d");
    
    drawGuide(ctx);
    drawBars(ctx);
}

function drawGuide(ctx){
    ctx.strokeStyle = "gray";
    
    ctx.beginPath();  
    ctx.moveTo(10,120);  
    ctx.lineTo(295,120);
    ctx.stroke(); 

    ctx.strokeStyle = "black";
    
    ctx.beginPath();  
    ctx.moveTo(10,10);  
    ctx.lineTo(10,140);  
    ctx.lineTo(295,140);
    ctx.stroke();
    
    ctx.beginPath();  
    ctx.moveTo(5,15);  
    ctx.lineTo(10,10);  
    ctx.lineTo(15,15);
    ctx.stroke();
}

function drawBars(ctx){
    ctx.fillStyle = "black";
    
    var startX = 15;
    var startY = 135;
    var width = 30;
    var deltaX = width + 10;
    var height = 110;
    
    ctx.fillRect (startX, startY-height,  width, height);
    
    startX+=deltaX;
    height = 95;
    
    ctx.fillStyle = "crimson";
    ctx.fillRect (startX, startY-height,  width, height);
    
    startX+=deltaX;
    height = 36;
    
    ctx.fillStyle = "limegreen";
    ctx.fillRect (startX, startY-height,  width, height);
    
    startX+=deltaX;
    height = 18;
    
    ctx.fillStyle = "gold";
    ctx.fillRect (startX, startY-height,  width, height);
    
    startX+=deltaX;
    height = 10;
    
    ctx.fillStyle = "darkmagenta";
    ctx.fillRect (startX, startY-height,  width, height);
    
    startX+=deltaX;
    height = 36;
    
    ctx.fillStyle = "orange";
    ctx.fillRect (startX, startY-height,  width, height);
    
    startX+=deltaX;
    height = 5;
    
    ctx.fillStyle = "gray";
    ctx.fillRect (startX, startY-height,  width, height);
}