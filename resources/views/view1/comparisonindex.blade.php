<!DOCTYPE html>
<html>

<head>
    <title>Product Comparision using jquery</title>
    <link rel="icon" href="../../images/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/comparisonstyle.css" rel="stylesheet">
    <link href="/css/comparisontext.css" rel="stylesheet">
    <link href="/css/comparisonw3.css" rel="stylesheet">

</head>

<body>
    <div class="w3-container w3-center">
        <a href="https://rajeshpeddalachugari.github.io/Plugins/ProductComparision/"><h4>&larr;back to article</h4></a>
    </div>
    <div class="w3-center">
        <h1>Product Comparision Demo</h1>
    </div>
    <div class="w3-container">
        <div class="w3-row-padding">
            
            <div class="w3-col l3 m6  relPos w3-center ">
                <div class="selectProduct w3-padding" data-title="Nexus5" data-id="Nexus 5" data-size="4.9&quot;" data-weight="130 g" data-processor="2.3 GHz, Quad Core, Qualcomm Snapdragon 800" data-battery="2300 mAH">
                    <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
                    <img src="/images/nexus5.jpg" class="imgFill productImg">
                    <h4>Nexus 5</h4>
                </div>
            </div>

            <div class="w3-col l3 m6 relPos w3-center">
                <div class="selectProduct w3-padding" data-title="Nexus5X" data-id="Nexus 5X" data-size="5.2&quot;" data-weight="136 g" data-processor="1.44 GHz, Quad Core, Qualcomm Snapdragon 808" data-battery="2700 mAH">
                    <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
                    <img src="/images/nexus5x.jpg" class="imgFill productImg">
                    <h4>Nexus 5X</h4>
                </div>
            </div>

            <div class="w3-col l3 m6 relPos  w3-center">
                <div class="selectProduct w3-padding" data-title="Nexus6" data-id="Nexus 6" data-size="6&quot;" data-weight="184 g" data-processor="2.7 GHz, Quad Core, Qualcomm Snapdragon 805" data-battery="3220 mAH">
                    <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
                    <img src="/images/nexus6.jpg" class="imgFill productImg">
                    <h4>Nexus 6</h4>
                </div>
            </div>

            <div class="w3-col l3 m6 relPos  w3-center">
                <div class="selectProduct w3-padding" data-title="Nexus6P" data-id="Nexus 6P" data-size="5.7&quot;" data-weight="178 g" data-processor="1.55 GHz, Octa Core, Qualcomm Snapdragon 810 " data-battery="3450 mAH">
                    <a class="w3-btn-floating w3-light-grey addButtonCircular addToCompare">+</a>
                    <img src="/images/nexus6p.jpg" class="imgFill productImg">
                    <h4>Nexus 6P</h4>
                </div>
            </div>
        </div>
    </div>
    <!--preview panel-->
    <div class="w3-container  w3-center">
        <div class="w3-row w3-card-4 w3-grey w3-round-large w3-border comparePanle w3-margin-top">
            <div class="w3-row">
                <div class="w3-col l9 m8 s6 w3-margin-top">
                    <h4>Added for comparison</h4>
                </div>
                <div class="w3-col l3 m4 s6 w3-margin-top">
                    &nbsp;
                    <button class="w3-btn w3-round-small w3-white w3-border notActive cmprBtn" disabled>Compare</button>
                </div>
            </div>
            <div class=" titleMargin w3-container comparePan">
            </div>
        </div>
    </div>
    <!--end of preview panel-->
    
    <!-- comparision popup-->
    <div id="id01" class="w3-animate-zoom w3-white w3-modal modPos">
        <div class="w3-container">
            <a onclick="document.getElementById('id01').style.display='none'" class="whiteFont w3-padding w3-closebtn closeBtn">&times;</a>
        </div>
        <div class="w3-row contentPop w3-margin-top">
        </div>

    </div>
    <!--end of comparision popup-->

    <!--  warning model  -->
    <div id="WarningModal" class="w3-modal">
        <div class="w3-modal-content warningModal">
            <header class="w3-container w3-teal">
                <h3><span>&#x26a0;</span>Error</h3>
            </header>
            <div class="w3-container">
                <h4>Maximum of Three products are allowed for comparision</h4>

            </div>
            <footer class="w3-container w3-right-align">
                <button id="warningModalClose" onclick="document.getElementById('id01').style.display='none'" class="w3-btn w3-hexagonBlue w3-margin-bottom  ">Ok</button>
            </footer>
        </div>
    </div>
    <!--  end of warning model  -->



    <script src="/js/jquery-1.9.1.min.js"></script>
    <script src="/js/Compare.js"></script>

<script>

    alert("Shithole");

</script>


</body>

</html>