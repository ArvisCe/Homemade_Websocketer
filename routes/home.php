<h2>Websocketer php test</h2>

Database value: 


<script>
function refresh_value(){
    fetch('http://localhost/homemade_websocketer/get/test_table/number', {
    headers: {
        'Accept': 'application/json',
        'id':'1'
    }
    })  
    .then(response => response.text())
    .then(text => console.log(text))
}
var interval = setInterval(refresh_value, 1000);
</script>
