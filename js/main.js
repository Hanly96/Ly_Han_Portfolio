
var branding = document.getElementById("branding");
    website  = document.getElementById("website");
    photo    = document.getElementById("photo");
    videoProject    = document.getElementById("video-project");





function hideShowBranding (){
    if (branding.style.display === "none") {
        branding.style.display =   "block";
    } else {
        branding.style.display = "none";
    }

};

function hideShowWebsite (){
    if (website.style.display === "none") {
        website.style.display = "block";
    } else {
        website.style.display = "none";
    }
};

function hideShowPhoto (){
    if (photo.style.display === "none") {
        photo.style.display =   "block";
    } else {
        photo.style.display = "none";
    }
};

function hideShowVideo (){
    if (videoProject.style.display === "none") {
        videoProject.style.display =   "block";
    } else {
        videoProject.style.display = "none";
    }
};
