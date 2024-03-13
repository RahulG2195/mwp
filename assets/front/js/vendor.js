
let cat_drop = document.querySelector('.cat_dropdown');
let venue = document.getElementById('venue_sec');
let bridal = document.getElementById('bridal_sec');
let groom = document.getElementById('groom_sec');
let photo = document.getElementById('photo_sec');
let makeup = document.getElementById('makeup_sec');
let mahendi = document.getElementById('mahendi_sec');
let jewellery = document.getElementById('jewellery_sec');
let decorator = document.getElementById('decorator_sec');
let catering = document.getElementById('catering_sec');
let gift = document.getElementById('gift_sec');
let invitation = document.getElementById('invi_sec');

// Function to disable all input fields
function disableInputsInDiv(divId) {
    const div = document.getElementById(divId);
    const selectFields = div.querySelectorAll('select');
    const inputFields = div.getElementsByTagName('input');
    const textFields = div.getElementsByTagName('textarea');

    // selectFields.disabled = true;
    for (let i = 0; i < selectFields.length; i++) {
        selectFields[i].disabled = true;
    }
    for (let i = 0; i < inputFields.length; i++) {
        inputFields[i].disabled = true;
        // selectFields[i].disabled = true;
    }
    for (let i = 0; i < textFields.length; i++) {
        textFields[i].disabled = true;
        // selectFields[i].disabled = true;
    }
}

function enableInputsInDiv(divId) {
    const div = document.getElementById(divId);
    const selectFields = div.querySelectorAll('select');
    const inputFields = div.getElementsByTagName('input');
    const textFields = div.getElementsByTagName('textarea');
    // selectFields.disabled = false;
    for (let i = 0; i < selectFields.length; i++) {
        selectFields[i].disabled = false;
    }
    for (let i = 0; i < inputFields.length; i++) {
        inputFields[i].disabled = false;
        // selectFields[i].disabled = false;
    }
    for (let i = 0; i < textFields.length; i++) {
        textFields[i].disabled = false;
        // selectFields[i].disabled = true;
    }
}

disableInputsInDiv('venue_sec');
disableInputsInDiv('bridal_sec');
disableInputsInDiv('groom_sec');
disableInputsInDiv('photo_sec');
disableInputsInDiv('makeup_sec');
disableInputsInDiv('mahendi_sec');
disableInputsInDiv('jewellery_sec');
disableInputsInDiv('decorator_sec');
disableInputsInDiv('catering_sec');
disableInputsInDiv('gift_sec');
disableInputsInDiv('invi_sec');

cat_drop.addEventListener('change', () =>{
    venue.style.display = 'none';
    bridal.style.display = 'none';
    groom.style.display = 'none';
    photo.style.display = 'none';
    photo.style.display = 'none';
    makeup.style.display = 'none';
    mahendi.style.display = 'none';
    jewellery.style.display = 'none';
    decorator.style.display = 'none';
    catering.style.display = 'none';
    gift.style.display = 'none';
    invitation.style.display = 'none';

    let select_option = cat_drop.value;
    // no == db id

    if(select_option == '1'){
        venue.style.display = 'block';
        enableInputsInDiv('venue_sec');
    }else if(select_option == '2'){
        bridal.style.display = 'block';
        enableInputsInDiv('bridal_sec');
    }else if(select_option == '3'){
        groom.style.display = 'block';
        enableInputsInDiv('groom_sec');
    }else if(select_option == '4'){
        photo.style.display = 'block';
        enableInputsInDiv('photo_sec');
    }else if(select_option == '5'){
        makeup.style.display = 'block';
        enableInputsInDiv('makeup_sec');
    }else if(select_option == '6'){
        mahendi.style.display = 'block';
        enableInputsInDiv('mahendi_sec');
    }else if(select_option == '7'){
        jewellery.style.display = 'block';
        enableInputsInDiv('jewellery_sec');
    }else if(select_option == '8'){
        decorator.style.display = 'block';
        enableInputsInDiv('decorator_sec');
    }else if(select_option == '9'){
        gift.style.display = 'block';
        enableInputsInDiv('gift_sec');
    }else if(select_option == '10'){
        catering.style.display = 'block';
        enableInputsInDiv('catering_sec');
    }else if(select_option == '13'){
        invitation.style.display = 'block';
        enableInputsInDiv('invi_sec');
    }
})


// disable business dropdown 
let hr_checkbox = document.getElementById('tfhr');
let start_time = document.getElementById('start_time');
let end_time = document.getElementById('end_time');
hr_checkbox.addEventListener('change', () => {
    if (hr_checkbox.checked) {
        // If checked, disable the select element
        start_time.disabled = true;
        end_time.disabled = true;
      } else {
        // If unchecked, enable the select element
        start_time.disabled = false;
        end_time.disabled = false;
      }
})

// =================================== add update business hr =======================================================

let selectedData = [{day: 'Monday', startTime: '09:00 AM', endTime: '05:00 PM' },{ day: 'Tuesday', startTime: '09:00 AM', endTime: '05:00 PM' },{day: 'Wednesday', startTime: '09:00 AM', endTime: '05:00 PM' }, {day: 'Thursday', startTime: '09:00 AM', endTime: '05:00 PM' }, {day: 'Friday', startTime: '09:00 AM', endTime: '05:00 PM' },
];

// below fn is use to show default data initally after that it will show on add click 
updateDisplay();

document.getElementById('addButton').addEventListener('click', () => {
    const day = document.getElementById('day').value;
    const starttime = document.getElementById('start_time').value;
    const endtime = document.getElementById('end_time').value;
    let start_time = document.getElementById('start_time');

    // alert(start_time.disabled)
    if (isDaySelected(day)) {
        alert('Day is already selected.');
        return; // Exit the function
    }

    //create a new object to store selected data
    if(start_time.disabled == true){
        var data = {
            day: day,
            time: '24 hours open'
        }
    }else{
        var data = {
            day: day,
            startTime: starttime,
            endTime: endtime
        }
    }
    selectedData.push(data);

    //update the display
    updateDisplay();

     // Clear the dropdowns
    //  document.getElementById('day').selectedIndex = 0;
    //  document.getElementById('start_time').selectedIndex = 0;
    //  document.getElementById('end_time').selectedIndex = 0;
});

function updateDisplay(){
    const displayDiv = document.getElementById('dataDisplay');
    displayDiv.innerHTML = '';

    selectedData.forEach(function(data, index) {
        const dataEntry = document.createElement('div');
        dataEntry.innerHTML = `<div class="day_div">
                                    <strong><p><input class="form-control" id="pwd" name="business_day[]" value="${data.day}"  readonly></p></strong>
                                    <p>
                                    <input class="form-control" id="pwd" name="business_hr[]" value="${(data.startTime == undefined) ? data.time : data.startTime + ' - ' + data.endTime}" readonly>
                                    </p>
                                    <i class="fa fa-minus" onclick="removeData(${index})"></i>
                                </div>`;
        displayDiv.appendChild(dataEntry);
    });
    
}

// day validation 
function isDaySelected(day) {
    return selectedData.some(data => data.day === day);
}

// Function to remove data from the array and update the display
function removeData(index) {
    selectedData.splice(index, 1);
    updateDisplay();
}



// =========================== Social media clone ================================================ //
let socialData = [];
document.getElementById('addSocialButton').addEventListener('click', () => {
    const media_type = document.getElementById('media_type').value;
    const social_link = document.getElementById('social_link').value;
    // let start_time = document.getElementById('media_type');

    // alert(start_time.disabled)
    if (isMediaSelected(media_type)) {
        alert('social is already selected.');
        return; 
    }

    if(media_type == '' || media_type == undefined){
        alert('Please select social Media');
        return; 
    }

    if(typeof social_link === 'undefined' || social_link.trim() === ''){
        
        alert('Please add Link');
        return; 
    }

    var data = {
        media_type: media_type,
        social_link: social_link,
    }
    if (validateWebsiteLink(social_link)) {
        socialData.push(data);  
    }else{
        return alert('Invalid link')

    }
    //update the display
    updateSocialDisplay();

});

function updateSocialDisplay(){
    const social_display = document.getElementById('social_display');
    social_display.innerHTML = '';

    socialData.forEach(function(data, index) {
        const dataEntry = document.createElement('div');
        dataEntry.innerHTML = `<div class="day_div">
                                    <strong><p><input class="form-control" id="pwd" name="social_media[]" value="${data.media_type}" readonly></p></strong>
                                    <p>
                                    <input class="form-control" id="pwd" name="social_link[]" value="${data.social_link}" readonly></p>
                                    </p>
                                    <i class="fa fa-minus" onclick="removeSocialData(${index})"></i>
                                </div>`;
        social_display.appendChild(dataEntry);
    });
    
}

// day validation 
function isMediaSelected(media_type) {
    return socialData.some(data => data.media_type === media_type);
}

function validateWebsiteLink(link) {
    // Regular expression to match a valid URL pattern
    const urlPattern = /^(https?:\/\/)?([a-zA-Z0-9-]+\.)+[a-zA-Z]{2,6}(\/\S*)?$/;

    return urlPattern.test(link);
}
// Function to remove data from the array and update the display
function removeSocialData(index) {
    socialData.splice(index, 1);
    updateSocialDisplay();
}

// ===================================== inputs toggle ==================================== //
/* const prod_toggle = document.getElementById('prod_toggle');
const prod_div = document.getElementById('prod_div');
const paper_toggle = document.getElementById('paper_toggle');
const paper_div = document.getElementById('paper_div');

prod_toggle.addEventListener('change', () => {
if(prod_toggle.checked){
    prod_div.style.display = 'block';
}else{
    prod_div.style.display = 'none';
}
});

paper_toggle.addEventListener('change', () => {
    if(paper_toggle.checked){
        paper_div.style.display = 'block';
    }else{
        paper_div.style.display = 'none';
    }
    }) */

// ===================================== validation ==================================== //
// Get references to the input fields and message elements
var passwordInput = document.getElementById("password");
var confirmPasswordInput = document.getElementById("cpassword");
var passwordMessage = document.getElementById("passwordMessage");
var confirmPasswordMessage = document.getElementById("confirmPasswordMessage");

passwordInput.addEventListener("input", function () {
    // Add your password validation logic here
    var password = passwordInput.value;

    if (password.length < 8) {
        passwordMessage.textContent = "Password must be at least 8 characters long.";
    } else {
        passwordMessage.textContent = ""; // Clear the message if valid
    }
});

// Add an event listener to the confirm password field for input events
confirmPasswordInput.addEventListener("input", function () {
    // Check if the confirm password matches the password
    var confirmPassword = confirmPasswordInput.value;
    var password = passwordInput.value;

    if (confirmPassword !== password) {
        if(confirmPassword.length >= 1){
            confirmPasswordMessage.textContent = "Passwords do not match.";
        }
    } else {
        confirmPasswordMessage.textContent = ""; // Clear the message if valid
    }
});

// =========================== make up techneque ================================================ //
let makeupData = [];
let make_tech = document.getElementById('make_tech');
make_tech.addEventListener('change', () => {
    const make_tech_data = make_tech.value;
    
    var data = {
        make_tech_data: make_tech_data,
    }
    if (isMakeUpSelected(make_tech_data)) {
        return; 
    } else if(make_tech_data == ''){
        // alert('Please select Techneque.');
        return; 
    }
    makeupData.push(data);  

    //update the display
    updateMakeUpDisp();

});

function isMakeUpSelected(make_datas) {
    return makeupData.some(data => data.make_tech_data === make_datas);
}


function updateMakeUpDisp(){
    const tech_data = document.getElementById('tech_data');
    tech_data.innerHTML = '';

    makeupData.forEach(function(data, index) {
        const dataEntry = document.createElement('span');
        dataEntry.innerHTML = `<div class="input-group">
                                    <input type="text" class="form-control" name="make_tech[]" value="${data.make_tech_data}" readonly aria-describedby="basic-addon2">
                                    <span class="input-group-text delete_btn btn-danger" id="basic-addon2" onclick="removeMakeUpData(${index})">x</span>
                                </div>`;
        tech_data.appendChild(dataEntry);
    });
    
}

// Function to remove data from the array and update the display
function removeMakeUpData(index) {
    makeupData.splice(index, 1);
    updateMakeUpDisp();
}

// =========================== mehendi style ================================================ //
let MehendiData = [];
let style_know = document.getElementById('style_know');
style_know.addEventListener('change', () => {
    // alert('dsf');
    const style_know_data = style_know.value;

    var data = {
        style_know_data: style_know_data,
    }
    if (isMediaSelected(style_know_data)) {
        // alert('already selected.');
        return; 
    }
    MehendiData.push(data);  

    //update the display
    updateMehendiDisp();

});

function isMediaSelected(make_data) {
    return MehendiData.some(data => data.style_know_data === make_data);
}


function updateMehendiDisp(){
    const meh_Style = document.getElementById('meh_Style');
    meh_Style.innerHTML = '';

    MehendiData.forEach(function(data, index) {
        const dataEntry = document.createElement('span');
        dataEntry.innerHTML = `<div class="input-group">
                                    <input type="text" class="form-control" name="style_know[]" value="${data.style_know_data}" readonly aria-describedby="basic-addon2">
                                    <span class="input-group-text delete_btn btn-danger" id="basic-addon2" onclick="removeMehendiData(${index})">x</span>
                                </div>`;
        meh_Style.appendChild(dataEntry);
    });
    
}

// Function to remove data from the array and update the display
function removeMehendiData(index) {
    MehendiData.splice(index, 1);
    updateMehendiDisp();
}

// =========================== Gift style ================================================ //
let GiftData = [];
let gift_type = document.getElementById('gift_type');
gift_type.addEventListener('change', () => {
    // alert('dsf');
    const gift_type_data = gift_type.value;

    var data = {
        gift_type_data: gift_type_data,
    }
    if (isGiftSelected(gift_type_data)) {
        // alert('already selected.');
        return; 
    }
    GiftData.push(data);  

    //update the display
    updateGiftDisp();

});

function isGiftSelected(make_data) {
    return GiftData.some(data => data.gift_type_data === make_data);
}


function updateGiftDisp(){
    const meh_Style = document.getElementById('gift_typs');
    meh_Style.innerHTML = '';

    GiftData.forEach(function(data, index) {
        const dataEntry = document.createElement('span');
        dataEntry.innerHTML = `<div class="input-group">
                                    <input type="text" class="form-control" name="gift_type[]" value="${data.gift_type_data}" readonly aria-describedby="basic-addon2">
                                    <span class="input-group-text delete_btn btn-danger" id="basic-addon2" onclick="removeGiftData(${index})">x</span>
                                </div>`;
        meh_Style.appendChild(dataEntry);
    });
    
}

// Function to remove data from the array and update the display
function removeGiftData(index) {
    GiftData.splice(index, 1);
    updateGiftDisp();
}