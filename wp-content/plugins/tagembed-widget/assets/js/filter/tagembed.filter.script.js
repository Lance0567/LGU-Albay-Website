/*--Start--Manage Widget Display  Preview According Widget*/
window.addEventListener ? window.addEventListener("load", __tagembed__changeFilterIfrmSrc, false) : window.attachEvent && window.attachEvent("onload", __tagembed__changeFilterIfrmSrc);
function __tagembed__changeFilterIfrmSrc() {
    let widgetData = document.querySelector("#__tagembed__widgets");
    if (widgetData) {
        let __tagembed__widgetId = widgetData.selectedOptions[0].value.split('#')[0];
        document.querySelector("#__tagembed__widget_filter_section_id").innerHTML = `<iframe src="${__tagembed__plugin_server_url}Moderation/index/${__tagembed__widgetId}" title="Tagembed" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
    }
}
/*--End--Manage Widget Display  Preview According Widget*/
