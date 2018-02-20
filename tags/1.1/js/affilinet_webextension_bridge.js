var openInWidgetsPageInBrowserExtension =   function() {
    var event = document.createEvent('Event');
    event.initEvent('affilinet-browser-extension-open-widgets');
    document.dispatchEvent(event);
}