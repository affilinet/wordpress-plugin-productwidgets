var openInWidgetsPageInBrowserExtension =   function(widgetId) {
    var event = new CustomEvent('affilinet-browser-extension-open-widgets', { detail : {widgetId : widgetId.toString()}});
    event.detail = {widgetId : widgetId.toString()};
    document.dispatchEvent(event);
}