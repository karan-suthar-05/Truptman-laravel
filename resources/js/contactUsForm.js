// Contact-us form validation

$(document).ready(function(){
    // form validation on submit event
    $("#contactusForm").on("submit",function(event){
        event.preventDefault();
        $(this).find("input, textarea").each(function(){
            var $this = $(this);
            var nextElement = $(this).next();
            if($this.val() === '' || $.trim($this.val()).length === 0)
            {
                nextElement.removeClass("d-none");   
            }
            else
            {
                if($this.attr("aria-label") === "Email")
                {
                    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
                    if(!emailRegex.test($(this).val())) {
                        nextElement.text("Please enter a valid email address").removeClass("d-none"); 
                    }
                    else
                    {
                        nextElement.addClass("d-none"); 
                    }
                }
                else if($this.attr("aria-label") === "Phone")
                {
                    if($this.val().length !== 10)
                    {
                        nextElement.text("Please enter a valid phone number").removeClass("d-none"); 
                    }
                    else
                    {
                        nextElement.addClass("d-none"); 
                    }
                }
                else
                {
                    $(this).next().addClass("d-none");   
                }
            }
        }); 
    });
    // only numbers in phone number field
    $("#contactusForm input[aria-label=Phone]").on("keydown",function(e)
    {
        if(!(e.key === "Backspace" || (parseInt(e.key) >=0 && parseInt(e.key) <=9 )))
        {
            e.preventDefault();
        }
    });

}); 