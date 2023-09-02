var sidebar_width = document.getElementById("sidebar").offsetWidth;
var content_width = document.getElementById("content");

// featured-header
// #recommended-header
// #check-this-out-header
// #for-sale-header
// #for-exchange-header
// #for-rent-header
var daily_discover_cards = document.getElementById("daily-discover");
var featured_cards = document.getElementById("featured");
var recommended_cards = document.getElementById("recommended");
var check_this_out_cards = document.getElementById("check_this_out");
var for_sale_cards = document.getElementById("for_sale");
var for_exchange_cards = document.getElementById("for_exchange");
var for_rent_cards = document.getElementById("for_rent");

var daily_discover_btn = document.getElementById("daily-discover-header");
var featured_btn = document.getElementById("featured-header");
var recommended_btn = document.getElementById("recommended-header");
var check_this_btn = document.getElementById("check-this-out-header");
var for_sale_btn = document.getElementById("for-sale-header");
var for_exchange_btn = document.getElementById("for-exchange-header");
var for_rent_btn = document.getElementById("for-rent-header");

window.addEventListener("resize", function () {
    content_width.style.marginLeft = sidebar_width + 10 + "px";
});

window.addEventListener("load", function () {
    content_width.style.marginLeft = sidebar_width + 10 + "px";
});

daily_discover_btn.addEventListener("click", function () {    
    daily_discover_cards.style.display = "none";
    featured_cards.style.display = "none";
    recommended_cards.style.display = "none";
    check_this_out_cards.style.display = "none";
    for_sale_cards.style.display = "none";
    for_exchange_cards.style.display = "none";
    for_rent_cards.style.display = "none";
    document.getElementById("daily-discovery-content").style.display = "table";
});

featured_btn.addEventListener("click", function () {    
    daily_discover_cards.style.display = "none";
    featured_cards.style.display = "none";
    recommended_cards.style.display = "none";
    check_this_out_cards.style.display = "none";
    for_sale_cards.style.display = "none";
    for_exchange_cards.style.display = "none";
    for_rent_cards.style.display = "none";
    document.getElementById("featured-content").style.display = "table";
});

recommended_btn.addEventListener("click", function () {    
    daily_discover_cards.style.display = "none";
    featured_cards.style.display = "none";
    recommended_cards.style.display = "none";
    check_this_out_cards.style.display = "none";
    for_sale_cards.style.display = "none";
    for_exchange_cards.style.display = "none";
    for_rent_cards.style.display = "none";
    document.getElementById("recommended-content").style.display = "table";
});

check_this_btn.addEventListener("click", function () {    
    daily_discover_cards.style.display = "none";
    featured_cards.style.display = "none";
    recommended_cards.style.display = "none";
    check_this_out_cards.style.display = "none";
    for_sale_cards.style.display = "none";
    for_exchange_cards.style.display = "none";
    for_rent_cards.style.display = "none";
    document.getElementById("check-this-content").style.display = "table";
});

for_sale_btn.addEventListener("click", function () {    
    daily_discover_cards.style.display = "none";
    featured_cards.style.display = "none";
    recommended_cards.style.display = "none";
    check_this_out_cards.style.display = "none";
    for_sale_cards.style.display = "none";
    for_exchange_cards.style.display = "none";
    for_rent_cards.style.display = "none";
    document.getElementById("for-sale-content").style.display = "table";
});

for_exchange_btn.addEventListener("click", function () {    
    daily_discover_cards.style.display = "none";
    featured_cards.style.display = "none";
    recommended_cards.style.display = "none";
    check_this_out_cards.style.display = "none";
    for_sale_cards.style.display = "none";
    for_exchange_cards.style.display = "none";
    for_rent_cards.style.display = "none";
    document.getElementById("for-exchange-content").style.display = "table";
});

for_rent_btn.addEventListener("click", function () {    
    daily_discover_cards.style.display = "none";
    featured_cards.style.display = "none";
    recommended_cards.style.display = "none";
    check_this_out_cards.style.display = "none";
    for_sale_cards.style.display = "none";
    for_exchange_cards.style.display = "none";
    for_rent_cards.style.display = "none";
    document.getElementById("for-rent-content").style.display = "table";
});