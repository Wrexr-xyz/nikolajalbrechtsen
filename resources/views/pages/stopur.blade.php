<x-app-layout>
    <x-slot name="header">
        {{ __('Stop ur') }}
    </x-slot>
   <div class="bg-gray-700 rounded-2xl">
    <div id="container">
        <div id="display" class="text-center py-4 text-4xl sm:text-7xl">
            00:00:00:00
        </div>
        <div id="" class="px-4 pb-4 text-gray-50 space-y-2 sm:space-y-0 sm:space-x-2">
            <button class="w-full sm:w-fit px-12 py-4 bg-green-500 hover:bg-green-600 rounded-2xl" id="startBtn" onclick="start()">Start</button>
            <button class="w-full sm:w-fit px-12 py-4 bg-red-500 hover:bg-red-600 rounded-2xl" id="stopBtn" onclick="stop()">Stop</button>
            <button class="w-full sm:w-fit px-12 py-4 bg-blue-500 hover:bg-blue-600 rounded-2xl" id="resetBtn" onclick="reset()">Nulstil</button>
        </div>
    </div>
   </div>
<script>
    // STOPWATCH PROGRAM

const display = document.getElementById("display");
let timer = null;
let startTime = 0;
let elapsedTime = 0;
let isRunning = false;

function start(){
if(!isRunning){
    startTime = Date.now() - elapsedTime;
    timer = setInterval(update, 10);
    isRunning = true;
}
}

function stop(){
if(isRunning){
    clearInterval(timer);
    elapsedTime = Date.now() - startTime;
    isRunning = false;
}
}

function reset(){
clearInterval(timer);
startTime = 0;
elapsedTime = 0;
isRunning = false;    
display.textContent = "00:00:00:00";
}

function update(){

const currentTime = Date.now();
elapsedTime = currentTime - startTime;

let hours = Math.floor(elapsedTime / (1000 * 60 * 60));
let minutes = Math.floor(elapsedTime / (1000 * 60) % 60);
let seconds = Math.floor(elapsedTime / 1000 % 60);
let milliseconds = Math.floor(elapsedTime % 1000 / 10);

hours = String(hours).padStart(2, "0");
minutes = String(minutes).padStart(2, "0");
seconds = String(seconds).padStart(2, "0");
milliseconds = String(milliseconds).padStart(2, "0");

display.textContent = `${hours}:${minutes}:${seconds}:${milliseconds}`;
}
</script>
</x-app-layout>