let page =1;
function dropCurtain() {
    document.getElementById("curtain-menu").style.height = '30%';
}

function raiseCurtain() {
    document.getElementById("curtain-menu").style.height = '0';
}

function nextPage(obj) {
    let page_number = Math.floor(obj.scrollTop/window.innerHeight)+1;
    let curr_page = document.querySelector(".curr-page");
    let next_page = document.getElementById("page"+page_number);

    console.log(page_number);

    $(curr_page).removeClass("curr-page");
    $(next_page).addClass("curr-page");
}

$(document).ready(function() {
    let pageIndicator = document.getElementById("page-navigation-indicator");

    $.ajax({
        type: "GET",
        url: './resources/data/pages.json',
        dataType: "json",
        success: function(responseData, status) {

            let pages = "";
            let page_container = document.getElementById("page-container");

            $.each(responseData.pages, function(i, item){
                let indicatorDIV = document.createElement("div");
                let indicatorTextDIV = document.createElement("div");
                $(indicatorDIV).attr("id", "page"+i)
                $(indicatorDIV).addClass("vertical-line");

                if(i === `${page}`) {
                    $(indicatorDIV).addClass('curr-page');
                }

                $(indicatorTextDIV).addClass("vertical-text");
                $(indicatorTextDIV).html(item.displayname);

                $(indicatorDIV).append(indicatorTextDIV);

                $(pageIndicator).append(indicatorDIV)
            });
        }, error: function(msg) {
            alert(`There was an error fetching this json file. (${msg.statusText}) <${msg.status}>`)
        }
    });
})