<form>
    <input maxlength="8" type="number" min="8" max="8" required name="sid" placeholder="SID"/>
    <input name="name" minlength="2" placeholder="Full Name" />
    <input name="name" type="email" placeholder="bob@njit.edu"/>
    <input id="pw" name="password" type="password" minlength="8" pattern="[0-9]{8,}"/> <button onclick="toggle(event)">Toggle</button>
    <input name="confirm" type="password" minlength="8"/>

</form>
<script>
function toggle(event){
    event.preventDefault();
    let ele = document.getElementById("pw");
    if(ele.type === "text"){
        ele.type = "password";
    }
    else{
        ele.type = "text";
    }
}
</script>
<?php
if (count($_POST) > 0) {
    echo "POST <pre>" . var_export($_POST) . "</pre>";
}

if (count($_GET) > 0) {
    echo "GET <pre>" . var_export($_GET) . "</pre>";
}

if (count($_REQUEST) > 0) {
    echo "REQUEST <pre>" . var_export($_REQUEST) . "</pre>";
}
?>