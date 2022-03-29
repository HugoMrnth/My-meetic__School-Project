
function check18(d) {
    let date = new Date(d)
    let diff = Date.now() - date.getTime();
    let age = new Date(diff); 
  
    return Math.abs(age.getUTCFullYear() - 1970);
}