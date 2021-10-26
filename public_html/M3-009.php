<form>
    <input name="name"/>
    <input name="ucid" maxlength="6" minlength="4" pattern="[a-z]{2,3}[0-9]{2,3}"/>
    <input name="password" type="password" minlength="8"/>
    <input id="pw" name="config" type="password"/> <button onclick="toggle(event)">Toggle</button>
    <input type="submit" value="Welcome"/>
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