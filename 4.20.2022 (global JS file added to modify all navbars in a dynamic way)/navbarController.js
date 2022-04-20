//bulk navbar re-shaping


//changing href of navbar button 'Sign Up' on all pages
function signupPageHref() {
const find=document.querySelector('a[href*="sign"]');
find.setAttribute('href','https://www.urlatlas.org/user-area');
}
setTimeout(signupPageHref,"100");

//changing href of navbar buttons 'User Made Lists' & 'Login' on all pages
function comingsoon4loginandusernamde(){
    const find1=document.querySelector('a[href*="user-made"]');
find1.setAttribute('href','javascript:alert("COMING SOON")');
const find2=document.querySelector('a[href*="login"]');
find2.setAttribute('href','javascript:alert("COMING SOON")');
}

setTimeout(comingsoon4loginandusernamde,"100");
