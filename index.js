let exampleFormControlTextarea1 = document.querySelector('#exampleFormControlTextarea1');
let upper = document.querySelector('#upper');
let Lower = document.querySelector('#Lower');
let Clear = document.querySelector('#Clear');
let Copy = document.querySelector('#Copy');
let Space = document.querySelector('#Space');
let Sentance = document.querySelector('#Sentance');
let Capitalize = document.querySelector('#Capitalize');
let pa = document.querySelector('#pa');
let p = document.querySelector('p');
const colors = ["primary", "danger", "success", "info", "warning"];



// const textInput = document.getElementById('text-input');
// const wordCount = document.getElementById('word-count');
// const readTime = document.getElementById('read-time');
// // const preview = document.getElementById('preview');

// textInput.addEventListener('input', () => {
//   const text = textInput.value.trim();
//   const words = text.split(/\s+/).length;
//   const characters = text.length;
//   const readingTime = Math.ceil(words / 200); // assuming 200 words per minute

//   wordCount.innerText = `${words} Words, and ${characters} Characters`;
//   readTime.innerText = `${readingTime} Minutes to read`;
//   preview.innerText = text.substring(0, 100) + '...'; // preview first 100 characters
// });




document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll(".container2").forEach(div => {
        div.addEventListener("click", () => {
            // Generate random color index
            const randomIndex = Math.floor(Math.random() * colors.length);
            // Change body background color
            document.body.classList.remove(...colors.map(color => `bg-${color}`));
            document.body.classList.add(`bg-${colors[randomIndex]}`);
        });
    });
});

upper.addEventListener('click',function(){
    exampleFormControlTextarea1.value= exampleFormControlTextarea1.value.toUpperCase(); 
})
Lower.addEventListener('click',function(){
    exampleFormControlTextarea1.value= exampleFormControlTextarea1.value.toLowerCase(); 
})
Clear.addEventListener('click',function(){
    exampleFormControlTextarea1.value= ''; 
})
Copy.addEventListener('click',function(){
    exampleFormControlTextarea1.select();
    document.execCommand("copy");
})
Space.addEventListener('click',function(){
    let word = exampleFormControlTextarea1.value;
    pa.innerHTML = word;
})
Sentance.addEventListener('click',function(){
    text = exampleFormControlTextarea1.value;
    SentanceCaseText= text.toLowerCase()
    .replace(/^(.|)/gm,match => match.toUpperCase());
    exampleFormControlTextarea1.value = SentanceCaseText;   
});
Capitalize.addEventListener('click',function(){
    text = exampleFormControlTextarea1.value;
    exampleFormControlTextarea1.value = text.charAt(0).toUpperCase() + text.slice(1).toLowerCase();
});

var storeitem = localStorage.getItem("storeitem");
save.addEventListener('click',function(){
    var item = exampleFormControlTextarea1.value;
    document.getElementById('sa').innerHTML = item + "saved"
})
function get(){
    localStorage.getItem("storeitem");
    document.getElementById("open").innerHTML = storeitem + "opened"
}