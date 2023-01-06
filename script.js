eme.oninput = function()
{
    var email1 = eme.value;
    error_em = eme.value;
    
    let regex1 = /^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i;

            if (!regex1.test(email1)){
                errer_eme. value = 'fdf';
               
            }
            else{
                errer_eme.value = '';
    
                console.log(3);
            }
}

ps1.oninput = function () 
   
    {
    var pass;
    pass = ps1.value;
    if (pass.length>=8 ){
    error_ps.value = '';
    }
   
    if(pass.length<=8 )
    {
        error_ps.value = 'Введите более 8 симовлов';
        console.log(1);
    }

   
   }
