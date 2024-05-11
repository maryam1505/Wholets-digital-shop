var user_account            = document.getElementById("user_account");
var user_account_options    = document.getElementById("user_account_options");
user_account.addEventListener("mouseover", function(){
    user_account_options.classList.remove("hidden");
});
// user_account.addEventListener("mouseout", function(){
//     if (!isMouseOver(user_account_options)) {
//         user_account_options.classList.add("hidden");
//     } 
// });
user_account_options.addEventListener("mouseout", function() {
    user_account_options.classList.add("hidden");
});