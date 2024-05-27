function choosePane(x){
    //document.getElementById("newYear").
    //alert(x);
    switch(x){
        case "newYear":
            document.getElementById("aboutlanka").style.display = "none";
            document.getElementById("newYear").style.display = "block";
            document.getElementById("vesak").style.display = "none";
            document.getElementById("poson").style.display = "none";
            document.getElementById("perehera").style.display = "none";
            break;
        case "vesak":
            document.getElementById("aboutlanka").style.display = "none";
            document.getElementById("newYear").style.display = "none";
            document.getElementById("vesak").style.display = "block";
            document.getElementById("poson").style.display = "none";
            document.getElementById("perehera").style.display = "none";
            break;
        case "poson":
            document.getElementById("aboutlanka").style.display = "none";
            document.getElementById("newYear").style.display = "none";
            document.getElementById("vesak").style.display = "none";
            document.getElementById("poson").style.display = "block";
            document.getElementById("perehera").style.display = "none";
            break;
        case "perehera":
            document.getElementById("aboutlanka").style.display = "none";
            document.getElementById("newYear").style.display = "none";
            document.getElementById("vesak").style.display = "none";
            document.getElementById("poson").style.display = "none";
            document.getElementById("perehera").style.display = "block";
            break;    
    }
   
}

document.getElementById("click-newYear").onclick = function() {
    choosePane("newYear");
};
document.getElementById("click-vesak").onclick = function() {
    choosePane("vesak");
};
document.getElementById("click-poson").onclick = function() {
    choosePane("poson");
};
document.getElementById("click-perehera").onclick = function() {
    choosePane("perehera");
};
document.getElementById("close-btn4").onclick = function() {
    document.getElementById("aboutlanka").style.display = "block";
    document.getElementById("newYear").style.display = "none";
    document.getElementById("vesak").style.display = "none";
    document.getElementById("poson").style.display = "none";
    document.getElementById("perehera").style.display = "none";
}
document.getElementById("close-btn3").onclick = function() {
    document.getElementById("aboutlanka").style.display = "block";
    document.getElementById("newYear").style.display = "none";
    document.getElementById("vesak").style.display = "none";
    document.getElementById("poson").style.display = "none";
    document.getElementById("perehera").style.display = "none";
}
document.getElementById("close-btn2").onclick = function() {
    document.getElementById("aboutlanka").style.display = "block";
    document.getElementById("newYear").style.display = "none";
    document.getElementById("vesak").style.display = "none";
    document.getElementById("poson").style.display = "none";
    document.getElementById("perehera").style.display = "none";
}
document.getElementById("close-btn1").onclick = function() {
    document.getElementById("aboutlanka").style.display = "block";
    document.getElementById("newYear").style.display = "none";
    document.getElementById("vesak").style.display = "none";
    document.getElementById("poson").style.display = "none";
    document.getElementById("perehera").style.display = "none";
}