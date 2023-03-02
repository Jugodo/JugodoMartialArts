<script>
grecaptcha.ready(function() {
    grecaptcha.execute('ENTER HERE', {action: 'homepage'}).then(function(token) {
		console.log(token);
       document.getElementById("g-token").value = token;
    });
});
</script>