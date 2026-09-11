<?php
?>
<!DOCTYPE HTML>
<html>
<head>

    <title>calculator</title>

    <meta charset="utf-8">

    <meta name="keywords" content="calculator, html, php, js, css">

    <meta name="description" content="this is a calculator project">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    * {
    box-sizing: border-box;
}

body {
    margin: 0;
    min-height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;

    font-family: Arial, sans-serif;

    background: linear-gradient(135deg, #141e30, #243b55);
}


fieldset {
    width: 330px;
    padding: 25px;

    border: none;
    border-radius: 25px;

    background: #181824;

    box-shadow:
        0 20px 50px rgba(0, 0, 0, 0.5),
        0 0 30px rgba(120, 80, 255, 0.15);

    text-align: center;
}


#screen {
    width: 100%;
    height: 70px;

    margin-bottom: 20px;
    padding: 10px 15px;

    border: none;
    border-radius: 15px;

    background: #0e0e16;
    color: #ffffff;

    font-size: 30px;
    font-weight: bold;

    text-align: right;

    outline: none;

    box-shadow:
        inset 0 0 10px rgba(0, 0, 0, 0.5);
}


button {
    width: 58px;
    height: 58px;

    margin: 5px;

    border: none;
    border-radius: 15px;

    background: #29293d;
    color: white;

    font-size: 20px;
    font-weight: bold;

    cursor: pointer;

    transition:
        transform 0.15s,
        background 0.2s,
        box-shadow 0.2s;
}


button:hover {
    background: #3a3a55;

    transform: translateY(-3px);

    box-shadow:
        0 7px 15px rgba(0, 0, 0, 0.3);
}


button:active {
    transform: scale(0.92);
}


#plus,
#minus,
#multiply,
#division {
    background: linear-gradient(135deg, #7c3aed, #4f46e5);
}

#plus:hover,
#minus:hover,
#multiply:hover,
#division:hover {
    background: linear-gradient(135deg, #8b5cf6, #6366f1);

    box-shadow:
        0 0 15px rgba(124, 58, 237, 0.6);
}


#calc {
    width: 130px;

    background: linear-gradient(135deg, #06b6d4, #2563eb);

    color: white;
}

#calc:hover {
    background: linear-gradient(135deg, #22d3ee, #3b82f6);

    box-shadow:
        0 0 20px rgba(6, 182, 212, 0.6);
}


Small responsive design 
@media (max-width: 400px) {

    fieldset {
        width: 90%;
        padding: 20px;
    }

    button {
        width: 52px;
        height: 52px;
    }

    #calc {
        width: 115px;
    }
}</style>
</head>
<body id='body'>
    <button id='theme'><img src=''></button>
<fieldset>
    <input type="text" id="screen"><br>
    <button id="one" value="1">1</button>
    <button id="two" value="2">2</button>
    <button id="three" value="3">3</button>
    <button id="plus" value="+">+</button><br>
    <button id="four" value="4">4</button>
    <button id="five" value="5">5</button>
    <button id="six" value="6">6</button>
    <button id="minus" value="-">-</button><br>
    <button id="seven" value="7">7</button>
    <button id="eight" value="8">8</button>
    <button id="nine" value="9">9</button>
    <button id="multiply" value="*">*</button><br>
    <button id="zero" value="0">0</button>
    <button id="division" value="/">/</button>
    <button id="calc">calc</button><button type='reset' id='del'>reset</button>
</fieldset>
<script>
    let one = document.getElementById('one');
    let two = document.getElementById('two');
    let three = document.getElementById('three');
    let four = document.getElementById('four');
    let five = document.getElementById('five');
    let six = document.getElementById('six');
    let seven = document.getElementById('seven');
    let eight = document.getElementById('eight');
    let nine = document.getElementById('nine');
    let zero = document.getElementById('zero');
    let addx = document.getElementById('plus');
    let subtract = document.getElementById('minus');
    let multiply = document.getElementById('multiply');
    let divs = document.getElementById('division');
    let screen = document.getElementById('screen');
    let result = document.getElementById('calc');
    divs.addEventListener('click',divide);
    function divide(){screen.value+=divs.value;}
    addx.addEventListener('click', plus);
    function plus() {
        screen.value += addx.value;}
    result.addEventListener('click', results);
    function results() {
        
        screen.value = eval(screen.value);}
    subtract.addEventListener('click',sub);
    multiply.addEventListener('click',mult);
    function mult(){
        screen.value+=multiply.value;
    }
    function sub(){
        screen.value+=subtract.value;}
    one.addEventListener('click', ones);
    function ones() {
        screen.value += one.value;}
    two.addEventListener('click', twos);
    function twos() {
        screen.value += two.value;}
    three.addEventListener('click', threes);
    function threes() {
        screen.value += three.value;}
    four.addEventListener('click', fours);
    function fours() {
        screen.value += four.value;}
    five.addEventListener('click', fives);
    function fives() {
        screen.value += five.value;}
    six.addEventListener('click', sixs);
    function sixs() {
        screen.value += six.value;}
    seven.addEventListener('click', sevens);
    function sevens() {
        screen.value += seven.value;}
    eight.addEventListener('click', eights);
    function eights() {
        screen.value += eight.value;}
    nine.addEventListener('click', nines);
    function nines() {
        screen.value += nine.value; }
    zero.addEventListener('click', zeros);
    function zeros() {
        screen.value += zero.value;
    }
    let deletez=document.getElementById('del');
    deletez.addEventListener('click',deletes);
    function deletes(){
        screen.value='';
    }
    let bd= document.getElementById('body');

let backgroundc = document.getElementById('theme');

backgroundc.addEventListener('click', change);

function change(){

    if(bd.style.background == 'pink'){
        bd.style.background = 'white';
    }
    else{
        bd.style.background = 'pink';
    }

}




    
</script>
</body>
</html>
