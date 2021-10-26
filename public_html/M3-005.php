<form>
    <input type="email" name="email" required/>
    <input type="text" name="full" pattern="[a-z]{4,60}"/>
    <input type="text" name="ucid" pattern="[a-z]{2,3}[0-9]{1,4}"/>
    <input id="pw" type="password" name="password" minlength="8"/>
    <input type="password" name="confirm" /><button onclick="toggle(event)">Toggle</button>
    <input type="submit" value="Register...Please"/>
</form>
<script>
    function toggle(event){
        event.preventDefault();
        let ele = document.getElementById("pw");
        if(ele.type === "text"){
            ele.type="password";
        }
        else{
            ele.type="text";
        }
    }
</script>