(function(root){

    var Router = Backbone.Router.extend({
        routes : {
            '' : 'main'
        },
        collection:ADMIN.M.collections,
        main : function() {
            var app=new ADMIN.V.adminView({collection:new this.collection});
        },
        initialize:function(){//实例化对象后调用可以如果指定
        }
    });
    root.ADMIN.C.AdminRouter=Router;
}(window))