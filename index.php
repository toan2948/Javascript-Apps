<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="js/app-showCountryInfo.js"></script> <!--this js file must be aobve other js file, which also show images. Only then it can work-->
    <script src="js/select.js"></script>
    <script src="js/app3.js"></script>
    <script src="js/app-puzzle.js"></script>
    <script src="js/app-alarm.js"></script>


    <script >
        //Only maximum of 3 functions 'window.addEventListener' allowed???????????
        //=> put all functions inside 'window.addEventListener' as below:
        window.addEventListener("load", myInit, true); 
        function myInit(){  
            //load the function of app-showCountryInfo
            setInterval(showCountryInfo,1300);
            //load the function of app-puzzle
            generateFeld();
            // show the current time with the time running 
            setTimeout(setInterval(startTime,300),0);
            generateSelect();
            };   
    
    </script>
    <script>        
    </script>
    <link rel="stylesheet" href="style.css">
    <title>All-Apps</title>
</head>
<body onload="">
    <div class='grid-container'>
        <div class='div-border' id='app-alarm'>
                <h3>App: Alarm Clock with Sound</h3>
                <p>Current time:</p>
                <div id='time'>  
                </div>
                <p>Choose an alarming time:</p>
                <div class='inline-select' id='hour'>
                </div>
                <div class='inline-select' id='minute'>
                </div>
                <input type="button" value="Set Alarm" onclick='setAlarm()'>
                <p id='show-timeDown'></p>
            </div>
        <div class="div-border" id='app-showCountryInfo' id='sub-grid'>
            <h3>App: Show Info of Countries (Class + JSON)</h3>
            <br>
            <div id='sub-grid'>
                <div>
                    <img src="" id="country-flag" alt="no image" width="150" height='90'>
                </div>
                <div style="padding-top: 30px;">
                    <div id="country-name"></div>
                    <div id="coutry-population"></div>
                </div>
            </div>  
            <div id='country-JSON' style="font-size:small"></div>          
        </div>
        <div class='div-border' id='app-puzzle'>
            <h3>App: 15-Puzzle</h3>
            <p>click on buttons around the blank button to move the button '15' to the first row:</p>
        </div>
     
        <div class='div-border' id='app3'>
            <h3>App 3: Umwandler - Converter</h3>
            <input type="number" name="" id="umzuwandeln">
            <select name="" id="umwandler">
                <option value="10">cm to mm</option>
                <option value="0.1">mm to cm</option>
            </select>
            <input type="button" value= 'Convert' onclick='umwandeln()'>
            <p id='umwandeln-result'></p>
        </div>
     
      
     
    </div>
</body>

</html>