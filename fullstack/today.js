let course =  {
    discription:"Something something",
    price :4000,
    discount:0,
    isLoggedIn:false,
    getTotalPrice: function(discount)
    {   
     this.getTotalPrice = this.price - this.discount;
           return this.getTotalPrice
    }

}
course.isLoggedIn = true
if(course.isLoggedIn == true)
{
 console.log(course.getTotalPrice)
}
