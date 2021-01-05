(function($) {

    class Account {
        constructor() {
            this.events();
            
        }
    
        events () {
            $("#send").on("click",  this.createAccountPost);
        }
    
    
    
        //methods
        createAccountPost () {
            alert('You clicked "send"');


            
            var newAccount = {
                'title': 'Testtitel',
                'status': 'publish',

                //POST request on acf fields doesn't work yet
                'fields': {
                    'name': 'Liam',
                    'mail': 'liams mail'
                }
            }

            $.ajax({
                beforeSend: (xhr) => {
                    xhr.setRequestHeader('X-WP-Nonce', insuranceData.nonce);
                },
                url: insuranceData.root_url + '/wp-json/wp/v2/account',
                type: 'POST',
                data: newAccount,
            });
            
        }
        
    }

    new Account()


})(jQuery)




