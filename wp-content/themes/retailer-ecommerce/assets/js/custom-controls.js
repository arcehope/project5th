(function(api) {

    api.sectionConstructor['retailer-ecommerce-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

})(wp.customize);