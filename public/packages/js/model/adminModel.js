(function(){
//分类表中的一行
    var navData=Backbone.Model.extend({
        defaults:{
            category: "",
            contentSet: "",
            type: ""
        }
    });



    var navList=Backbone.Collection.extend({
            model:navData,
            initialize:function(){
                var mode='';
                var self=this;
                var curmodel=new this.model();
                var navList=[
                    {category:'数据表设置',contentSet:{create:'创建分类',updateAndQueryAndDelete:'更新查询删除'},type:'database'}



                ]
                _.each(navList,function(value){
                    mode=curmodel.clone();
                    mode.set(value)
                    self.push(mode);

                })

            }
        });

    //创建三张表数据
    window.ADMIN.M.collections=navList;


})()





