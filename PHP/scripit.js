const signUpButton=document.getElementById('signUpButton')
const signInButton=document.getElementById('signInButton')
const signInForm=document.getElementById('signInForm')
const signUpForm=document.getElementById('signUpForm')

signUpButton.addEventListener('click',function(){
  signInForm.style.dispaly="none";
  signUpForm.style.dispaly="block";
})
signInButton.addEventListener('click',function(){
  signInForm.style.dispaly="block";
  signUpForm.style.dispaly="none";
})