<!DOCTYPE html> 
<html> 
      
<head>   
    <title>   
        Centerd popup window 
        on the screen 
    </title>  
</head> 
  
<body> 
    <h1>GeeksforGeeks</h1> 
      
    <p> 
        Centerd popup window 
        on the screen 
    </p> 
      
    <script> 
        function createPopupWin(pageURL, pageTitle, 
                    popupWinWidth, popupWinHeight) { 
            var left = (screen.width - popupWinWidth) / 2; 
            var top = (screen.height - popupWinHeight) / 4; 
              
            var myWindow = window.open(pageURL, pageTitle,  
                    'resizable=yes, width=' + popupWinWidth 
                    + ', height=' + popupWinHeight + ', top=' 
                    + top + ', left=' + left); 
        } 
    </script> 
      
    <button onclick = "createPopupWin('afterpop.php', 
            'GeeksforGeeks Website', 200, 200);"> 
        GeeksforGeeks 
    </button> 
</body> 
  
</html> 