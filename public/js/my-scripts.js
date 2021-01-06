function actions()
{
    form=document.getElementById('pago');
    form.action='/pago';
    form.submit();
    form.action='https://www.sandbox.paypal.com/cgi-bin/webscr';
}

/*function actions2()
{
    form=document.getElementById('empleado');
    form.action='/empleado';
    form.submit();
    form.action='/pagar';
}*/